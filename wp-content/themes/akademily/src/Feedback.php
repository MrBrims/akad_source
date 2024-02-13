<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once ABSPATH . 'wp-includes/PHPMailer/Exception.php';
require_once ABSPATH . 'wp-includes/PHPMailer/PHPMailer.php';
require_once ABSPATH . 'wp-includes/PHPMailer/SMTP.php';

class Feedback
{
	public function __construct()
	{
		add_filter('determine_current_user', [$this, 'jsonBasicAuthHandler'], 20);
		add_filter('rest_authentication_errors', [$this, 'jsonBasicAuthError']);

		add_action('wp_ajax_sendForm', [$this, 'mailer']);
		add_action('wp_ajax_nopriv_sendForm', [$this, 'mailer']);

		add_action('save_post', [$this, 'sendBitrix24'], 10, 3);
	}

	public function sendMail(string $to, string $subject, string $message)
	{
		$mail = new PHPMailer();

		$mail->SMTPDebug = false;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'gwrites.akademily@gmail.com';
		$mail->Password = 'xzxbfgomldqwlstk';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;

		$mail->setFrom('noreply@akademily.de', 'Akademily');
		$mail->addAddress($to);

		$mail->isHTML(true);
		$mail->Subject = $subject;
		$mail->Body = $message;

		$mail->send();
	}

	public function sendBitrix24($postId, $post, $update)
	{
		if (wp_is_post_revision($postId) || $update) {
			return;
		}

		if ($post->post_type !== 'requests') {
			return;
		}

		$content = wpautop($post->post_content);
		$contFormated = str_replace('<p>', '', $content);
		$contFormated = str_replace('</p>', '[BR]', $contFormated);
		$contFormated = str_replace('<br>', '[BR]', $contFormated);

		// Email
		$email = '';
		preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $content, $emailMatches);
		$emailMatches = reset($emailMatches);
		if (!empty($emailMatches)) {
			$email = $emailMatches[0];
		}

		// Name
		$name = '';
		preg_match_all('/(vorname.*\n|name.*\n|nickname.*\n)/i', $content, $nameMatches);
		$nameMatches = reset($nameMatches);
		if (!empty($nameMatches)) {
			$name = explode(':', $nameMatches[0]);
			$name = strip_tags(trim(end($name)));
		}

		// Phone
		$phone = '';
		preg_match_all('/(phone.*\n|whatsapp.*\n|telefonnummer.*\n)/i', $content, $phoneMatches);
		$phoneMatches = reset($phoneMatches);
		if (!empty($phoneMatches)) {
			$phone = explode(':', $phoneMatches[0]);
			$phone = trim(end($phone));
			$phone = preg_replace("/[^,.0-9]/", '', $phone);
		}

		// Message
		$message = '';
		preg_match_all('/(message.*\n)/i', $post->post_content, $messageMatches);
		$messageMatches = reset($messageMatches);
		if (!empty($messageMatches)) {
			$message = explode(':', $messageMatches[0]);
			$message = strip_tags(trim(end($message)));
		}

		// UTM_SOURCE
		$utmSource = '';
		preg_match_all('/(Utm_source.*\n)/i', $content, $utmSourceMatches);
		$utmSourceMatches = reset($utmSourceMatches);
		if (!empty($utmSourceMatches)) {
			$utmSource = explode(':', $utmSourceMatches[0]);
			$utmSource = strip_tags(trim(end($utmSource)));
		}

		// UTM_MEDIUM
		$utmMedium = '';
		preg_match_all('/(utm_medium.*\n)/i', $content, $utmMediumMatches);
		$utmMediumMatches = reset($utmMediumMatches);
		if (!empty($utmMediumMatches)) {
			$utmMedium = explode(':', $utmMediumMatches[0]);
			$utmMedium = strip_tags(trim(end($utmMedium)));
		}

		// UTM_CAMPAIGN
		$utmCampaign = '';
		preg_match_all('/(utm_campaign.*\n)/i', $content, $utmCampaignMatches);
		$utmCampaignMatches = reset($utmCampaignMatches);
		if (!empty($utmCampaignMatches)) {
			$utmCampaign = explode(':', $utmCampaignMatches[0]);
			$utmCampaign = strip_tags(trim(end($utmCampaign)));
		}

		// UTM_CONTENT
		$utmContent = '';
		preg_match_all('/(utm_content.*\n)/i', $content, $utmContentMatches);
		$utmContentMatches = reset($utmContentMatches);
		if (!empty($utmContentMatches)) {
			$utmContent = explode(':', $utmContentMatches[0]);
			$utmContent = strip_tags(trim(end($utmContent)));
		}

		// UTM_TERM
		$utmTerm = '';
		preg_match_all('/.*utm_term\s?\:\s?([^\n]+)/i', $content, $utmTermMatches, PREG_SET_ORDER);
		$utmTermMatches = reset($utmTermMatches);
		if (!empty($utmTermMatches)) {
			$utmTerm = strip_tags(trim($utmTermMatches[1]));
		}

		// workType
		$workType = '';
		preg_match_all('/type\s?:\s?(.*)\n|arbeit\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty($tempVar[1])) {
			$workType = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$workType = strip_tags(trim($tempVar[2]));
		}

		// workSpec
		$workSpec = '';
		preg_match_all('/specialization\s?:\s?(.*)\n|discipline\s?:\s?(.*)\n|fachbereich\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty($tempVar[1])) {
			$workSpec = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$workSpec = strip_tags(trim($tempVar[2]));
		}

		// workTheme
		$workTheme = '';
		preg_match_all('/theme\s?:\s?(.*)\n|thema\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty($tempVar[1])) {
			$workTheme = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$workTheme = strip_tags(trim($tempVar[2]));
		}

		// deadline
		$deadline = '';
		preg_match_all('/deadline\s?:\s?(.*)\n|abgabetermin\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty($tempVar[1])) {
			$deadline = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$deadline = strip_tags(trim($tempVar[2]));
		}

		// pageNum
		$pageNum = '';
		preg_match_all('/seitenanzahl\s?:\s?(.*)\n|number\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty($tempVar[1])) {
			$pageNum = strip_tags(trim($tempVar[1]));
		} elseif (!empty($tempVar[2])) {
			$pageNum = strip_tags(trim($tempVar[2]));
		}

		$queryParams = [
			'FIELDS[TITLE]' => sprintf('Заявка с сайта #%s', $post->ID),
			'FIELDS[NAME]' => $name,
			'FIELDS[LAST_NAME]' => '',
			'FIELDS[EMAIL][0][VALUE]' => $email,
			'FIELDS[EMAIL][0][VALUE_TYPE]' => 'WORK',
			'FIELDS[PHONE][0][VALUE]' => $phone,
			'FIELDS[PHONE][0][VALUE_TYPE]' => 'WORK',
			'FIELDS[SOURCE_ID]' => 'WEB',
			'FIELDS[SOURCE_DESCRIPTION]' => $post->post_title,
			'FIELDS[UTM_SOURCE]' => $utmSource,
			'FIELDS[UTM_MEDIUM]' => $utmMedium,
			'FIELDS[UTM_CAMPAIGN]' => $utmCampaign,
			'FIELDS[UTM_CONTENT]' => $utmContent,
			'FIELDS[UTM_TERM]' => $utmTerm,
			'FIELDS[COMMENTS]' => $contFormated,
			'FIELDS[UF_CRM_1672151965]' => $workType,
			'FIELDS[UF_CRM_1672152040]' => $workSpec,
			'FIELDS[UF_CRM_1672151668]' => $workTheme,
			'FIELDS[UF_CRM_1672151599]' => $deadline,
			'FIELDS[UF_CRM_1672214552]' => $pageNum,
		];

		$url = 'https://ug-gwc.bitrix24.by/rest/220/ks0a1e9n7l5plmq0/crm.lead.add.json?';
		$queryData = http_build_query($queryParams);
		$max_attempts = 3; // Максимальное количество попыток отправки данных
		$attempts = 0; // Счетчик попыток

		do {
			$curl = curl_init();
			curl_setopt_array($curl, [
				CURLOPT_SSL_VERIFYPEER => 0,
				CURLOPT_POST => 1,
				CURLOPT_HEADER => 0,
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $url,
				CURLOPT_POSTFIELDS => $queryData,
			]);
			$response = curl_exec($curl);
			$status_code = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
			curl_close($curl);
			$attempts++;
		} while ($status_code != 200 && $attempts < $max_attempts);
	}

	public function jsonBasicAuthHandler($user)
	{
		global $wp_json_basic_auth_error;

		$wp_json_basic_auth_error = null;

		if (!empty($user)) {
			return $user;
		}

		if (!isset($_SERVER['PHP_AUTH_USER'])) {
			return $user;
		}

		$username = $_SERVER['PHP_AUTH_USER'];
		$password = $_SERVER['PHP_AUTH_PW'];

		remove_filter('determine_current_user', 'json_basic_auth_handler', 20);

		$user = wp_authenticate($username, $password);

		add_filter('determine_current_user', 'json_basic_auth_handler', 20);

		if (is_wp_error($user)) {
			$wp_json_basic_auth_error = $user;
			return null;
		}

		$wp_json_basic_auth_error = true;

		return $user->ID;
	}

	public function jsonBasicAuthError($error)
	{
		if (!empty($error)) {
			return $error;
		}

		global $wp_json_basic_auth_error;

		return $wp_json_basic_auth_error;
	}

	public function mailer()
	{
		// выдераем айпишник клиента
		// $ipban = '';
		// if (isset($_COOKIE['getParam'])) {
		// 	$ipban = json_decode(stripslashes($_COOKIE['geo'])); //Декодируем JSON из кук
		// 	foreach ($ipban as $key => $value) {
		// 		if($key = 'ip') {
		// 			$ipban = $value;
		// 		}
		// 	}
		// }
		// стандартная проверка на ошибку
		if (empty($_POST)) {
			wp_send_json_error(
				[
					'message' => __('<p class="warning">Ошибка!</p>')
				]
			);
		}
		// Бан по айпи
		// else if (str_contains('185.209.196.251, ', $ipban)) {
		// }
		// бан по конкретному адресу
		// else if (str_contains($_POST['email'], 'testing')) {
		// }
		else {
			if (!empty($_POST['recaptcha_response'])) {
				$url = 'https://www.google.com/recaptcha/api/siteverify';
				$key = '6Ldsn-wcAAAAAKpei8NkquOnvNy4kt-wdbUD3--w';
				$recaptcha = $_POST['recaptcha_response'];

				$recaptcha = file_get_contents($url . '?secret=' . $key . '&response=' . $recaptcha);
				$recaptcha = json_decode($recaptcha);

				if ($recaptcha->score < 0.1) {
					wp_send_json_error(
						[
							'message' => __('<p class="warning">Вы робот \0-0/!</p>')
						]
					);
				}
			}

			$to = 'info@akademily.de';
			$subject = 'Form from the website';
			$headers = [
				'From: Akademily <noreply@akademily.de>',
				'content-type: text/html',
			];

			$message = '';
			foreach ($_POST as $key => $value) {
				if (in_array($key, ['action', 'recaptcha_response', 'form_type'])) {
					continue;
				}
				$message .= sprintf('<p>%s : %s </p>', ucfirst($key), $value);
			}
			// Добавляем в message все параметры из куки
			// if (isset($_COOKIE['getParam'])) {
			// 	$decCookie = json_decode(stripslashes($_COOKIE['getParam'])); //Декодируем JSON из кук
			// 	foreach ($decCookie as $key => $value) {
			// 		$string = (is_array($value)) ? implode(', ', $value) : $value; //Преобразование
			// 		$message .= sprintf('<p>%s : %s</p>', ucfirst($key), $string); //Вывод
			// 	}
			// }
			// $message .= sprintf('<p>%s : %s</p>', 'Last', $_SERVER["HTTP_REFERER"]);
			// if (isset($_COOKIE['session'])) {
			// 	$decCookie = json_decode(stripslashes($_COOKIE['session'])); //Декодируем JSON из кук
			// 	foreach ($decCookie as $key => $value) {
			// 		$string = (is_array($value)) ? implode(', ', $value) : $value; //Преобразование
			// 		$message .= sprintf('<p>%s : %s</p>', ucfirst($key), $string); //Вывод
			// 	}
			// }
			// if (isset($_COOKIE['geo'])) {
			// 	$decCookie = json_decode(stripslashes($_COOKIE['geo'])); //Декодируем JSON из кук
			// 	foreach ($decCookie as $key => $value) {
			// 		$string = (is_array($value)) ? implode(', ', $value) : $value; //Преобразование
			// 		$message .= sprintf('<p>%s : %s</p>', ucfirst($key), $string); //Вывод
			// 	}
			// }


			// wp_mail($to, $subject, $message, $headers);
			// $this->sendMail($to, $subject, $message);

			$beforeTitle = 'обратный звонок';
			if (!empty($_POST['form_type']) && $_POST['form_type'] === 'calculator') {
				$beforeTitle = 'заявка с калькулятора';

				// Sending for user
				if (!empty($_POST['mail'])) {
					// wp_mail($_POST['mail'], 'Form from Akademily.de', $message, $headers);
					$this->sendMail($_POST['mail'], 'Form from Akademily.de', $message);
				}
			}

			/**
			 * Возможные варианты форм
			 *
			 * - почта (только e-mail)
			 * - полная форма
			 * - обратный звонок
			 */
			$insertId = wp_insert_post(
				[
					'post_type' => 'requests',
					'post_status' => 'publish',
					'post_title' => 'S / Akademily.de / ' . $_POST['page'] . ' - ' . $beforeTitle,
					'post_content' => $message,
				]
			);
			if ($insertId) {
				$this->sendFeedbackToTelegram($insertId, $_POST['page']);
				// $this->sendFeedbackToBase($_POST);
			}

			wp_send_json_success(
				[
					'message' => __('<p class="success">Письмо отправлено!</p>')
				]
			);
		}
	}

	public function sendFeedbackToTelegram($postId, $page)
	{
		if (!$postId) {
			return;
		}

		// Значение utm_source
		if (isset($_COOKIE['utm_source'])) {
			$utm_source = json_decode($_COOKIE['utm_source'], true);
		}

		$beforeTitle = '';
		if (!empty($_POST['form_type']) && $_POST['form_type'] === 'hero-form') {
			$beforeTitle = 'Форма в шапке';
		} elseif (!empty($_POST['form_type']) && $_POST['form_type'] === 'big-form') {
			$beforeTitle = 'Большая форма';
		} elseif (!empty($_POST['form_type']) && $_POST['form_type'] === 'middle-form') {
			$beforeTitle = 'Средняя форма';
		} elseif (!empty($_POST['form_type']) && $_POST['form_type'] === 'sidebar-form') {
			$beforeTitle = 'Форма в сайтбаре';
		}

		$token = '6514367409:AAEBTkzQ4pGN1HuVsvxLZjIICfJQOFqDleU';

		$data = [
			'parse_mode' => 'html',
			'chat_id' => '-1001199768955',
			'text' => "<b>Новая заявка! 🤩</b> \r\n\n"
				. $_POST['page_link'] . " " . $_POST['coaching_condition'] . " \r\n"
				. $beforeTitle . " \r\n\n"
				. "<b>🥸 :</b>" . $_POST['name'] . "\r\n"
				. "<b>📨 :</b> " . $_POST['email'] . "\r\n"
				. "<b>📌 :</b> " . $_POST['type'] . "\r\n"
				. "<b>📎 :</b> " . $_POST['specialization'] . "\r\n"
				. "<b>✍️ :</b> " . $_POST['theme'] . "\r\n"
				. "<b>🗒 :</b> " . $_POST['number'] . "\r\n"
				. "<b>🔥 :</b> " . $_POST['deadline'] . "\r\n"
				. "<b>👣 :</b> " . $utm_source . "\r\n"
				. "<b>🗃 :</b> " . $postId . "\r\n"
				. "<b>Время</b>: " . date('d-m-Y H:i:s') . "\r\n\n"
				. "<a href='https://akademily.de/wp-admin/post.php?post=" . $postId . "&action=edit'><b>Перейти к заявке</b></a>"
		];

		file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?" . http_build_query($data));
	}

	public function sendFeedbackToBase($post)
	{
		$token = 'Token f7f86a18848e457288aaeaac60299e4d';
		$url = 'https://zaochnik.com/rest/v2/client_order/';
		$data = [
			'email' => $post['email'],
			'phone' => preg_replace("/[^+0-9]/", '', $post['phone']),
			'fio' => $post['name'],
			'worktype' => 13,
			'subjecttext' => 'Не указан',
			'description' => 'Запросить у клиента',
			'pages' => 0,
			'deadline' => date('Y-m-d'),
			'token' => $token,
			'comment' => 'S / Akademily.de',
		];

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Project:' . $token]);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
		$response = curl_exec($curl);
		$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		curl_close($curl);

		if ($status === 201) {
			$result = json_decode($response, true);

			$order = curl_init();
			curl_setopt($order, CURLOPT_URL, 'https://zaochnik.com/rest/client/orders/');
			curl_setopt($order, CURLOPT_RETURNTRANSFER, true);
			curl_setopt(
				$order,
				CURLOPT_HTTPHEADER,
				[
					'Content-Type: application/json',
					'Token:' . $result['token'],
					'Project: ' . $token
				]
			);
			curl_exec($order);
			curl_close($order);
		}
	}
}

new Feedback();
