<?php

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/PHPMailer.php';

class Feedback
{
	private $ch;
	private $channel;
	private $title;
	private $subject;
	private $message;
	private $fc_source;
	private $score;
	public function __construct ()
	{
		add_filter('determine_current_user', [$this, 'jsonBasicAuthHandler'], 20);
		add_filter('rest_authentication_errors', [$this, 'jsonBasicAuthError']);

		add_action('wp_ajax_sendForm', [$this, 'mailer']);
		add_action('wp_ajax_nopriv_sendForm', [$this, 'mailer']);

		add_action('wp_ajax_sendWapp', [$this, 'sendWapp']);
		add_action('wp_ajax_nopriv_sendWapp', [$this, 'sendWapp']);

		add_action('save_post', [$this, 'sendBitrix24'], 10, 3);
	}

	public function mailer ()
	{
		if (empty ($_POST)) {
			wp_send_json_error(
				[
					'message' => __('<p class="warning">Empty form!</p>')
				]
			);
		} else {
			if (!empty ($_POST['recaptcha_response'])) {
				$url = RECAPTCHA_URL;
				$key = RECAPTCHA_KEY;
				$recaptcha = $_POST['recaptcha_response'];

				$recaptcha = file_get_contents($url . '?secret=' . $key . '&response=' . $recaptcha);
				$recaptcha = json_decode($recaptcha);

				if ($recaptcha->score < 0.1) {
					wp_send_json_error(
						[
							'message' => __('<p class="warning">You are robot \0-0/!</p>')
						]
					);
				}
			}

			$this->ch = json_decode(stripslashes($_COOKIE['fc_utm']))->utm_channel;
			$this->channel = $this->getChannel($this->ch);
			$this->subject = $this->getSubject($this->channel);
			$this->title = $this->getTitle($this->ch);
			$this->message = '';
			$this->message .= $this->messageFromForm();
			$this->message .= $this->messageFromCookie();
			$this->message .= $this->messageFromGeo();
			$this->message .= $this->messageFromUtm();
			$this->message .= $this->messageFromRating();

			$id = wp_insert_post(
				[
					'post_type' => 'requests',
					'post_status' => 'publish',
					'post_title' => $this->subject,
					'post_content' => $this->message,
				]
			);
			if ($id) {
				$this->sendToTG($id);
				$this->sendFileToTG($id);
				$this->sendToClient($id);

				wp_send_json_success(
					[
						'id' => $id,
						'message' => __('Thank you!')
					]
				);
			}
		}
		return true;
	}

	public function sendBitrix24 ($postId, $post, $update)
	{
		if (wp_is_post_revision($postId) || $update) {
			return false;
		}

		if ($post->post_type !== 'requests') {
			return false;
		}

		$content = wpautop($post->post_content);
		$contFormated = str_replace('<p>', '', $content);
		$contFormated = str_replace('</p>', '[BR]', $contFormated);
		$contFormated = str_replace('<br>', '[BR]', $contFormated);

		// Email
		$email = '';
		preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $content, $emailMatches);
		$emailMatches = reset($emailMatches);
		if (!empty ($emailMatches)) {
			$email = $emailMatches[0];
		}

		// Name
		$name = '';
		preg_match_all('/(Vorname.*\n|Name.*\n|Nickname.*\n)/', $content, $nameMatches);
		$nameMatches = reset($nameMatches);
		if (!empty ($nameMatches)) {
			$name = explode(':', $nameMatches[0]);
			$name = strip_tags(trim(end($name)));
		}

		// Phone
		$phone = '';
		preg_match_all('/(phone.*\n|whatsapp.*\n|telefonnummer.*\n)/i', $content, $phoneMatches);
		$phoneMatches = reset($phoneMatches);
		if (!empty ($phoneMatches)) {
			$phone = explode(':', $phoneMatches[0]);
			$phone = trim(end($phone));
			$phone = preg_replace("/[^,.0-9]/", '', $phone);
		}

		// Message
		$message = '';
		preg_match_all('/(message.*\n)/i', $post->post_content, $messageMatches);
		$messageMatches = reset($messageMatches);
		if (!empty ($messageMatches)) {
			$message = explode(':', $messageMatches[0]);
			$message = strip_tags(trim(end($message)));
		}

		// UTM_SOURCE
		$utmSource = '';
		preg_match_all('/(Utm_source.*\n)/i', $content, $utmSourceMatches);
		$utmSourceMatches = reset($utmSourceMatches);
		if (!empty ($utmSourceMatches)) {
			$utmSource = explode(':', $utmSourceMatches[0]);
			$utmSource = strip_tags(trim(end($utmSource)));
		}

		// UTM_MEDIUM
		$utmMedium = '';
		preg_match_all('/(utm_medium.*\n)/i', $content, $utmMediumMatches);
		$utmMediumMatches = reset($utmMediumMatches);
		if (!empty ($utmMediumMatches)) {
			$utmMedium = explode(':', $utmMediumMatches[0]);
			$utmMedium = strip_tags(trim(end($utmMedium)));
		}

		// UTM_CAMPAIGN
		$utmCampaign = '';
		preg_match_all('/(utm_campaign.*\n)/i', $content, $utmCampaignMatches);
		$utmCampaignMatches = reset($utmCampaignMatches);
		if (!empty ($utmCampaignMatches)) {
			$utmCampaign = explode(':', $utmCampaignMatches[0]);
			$utmCampaign = strip_tags(trim(end($utmCampaign)));
		}

		// UTM_CONTENT
		$utmContent = '';
		preg_match_all('/(utm_content.*\n)/i', $content, $utmContentMatches);
		$utmContentMatches = reset($utmContentMatches);
		if (!empty ($utmContentMatches)) {
			$utmContent = explode(':', $utmContentMatches[0]);
			$utmContent = strip_tags(trim(end($utmContent)));
		}

		// UTM_TERM
		$utmTerm = '';
		preg_match_all('/.*utm_term\s?\:\s?([^\n]+)/i', $content, $utmTermMatches, PREG_SET_ORDER);
		$utmTermMatches = reset($utmTermMatches);
		if (!empty ($utmTermMatches)) {
			$utmTerm = strip_tags(trim($utmTermMatches[1]));
		}

		// workType
		$workType = '';
		preg_match_all('/type\s?:\s?(.*)\n|arbeit\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty ($tempVar[1])) {
			$workType = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$workType = strip_tags(trim($tempVar[2]));
		}

		// workSpec
		$workSpec = '';
		preg_match_all('/specialization\s?:\s?(.*)\n|discipline\s?:\s?(.*)\n|fachbereich\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty ($tempVar[1])) {
			$workSpec = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$workSpec = strip_tags(trim($tempVar[2]));
		}

		// workTheme
		$workTheme = '';
		preg_match_all('/theme\s?:\s?(.*)\n|thema\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty ($tempVar[1])) {
			$workTheme = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$workTheme = strip_tags(trim($tempVar[2]));
		}

		// deadline
		$deadline = '';
		preg_match_all('/deadline\s?:\s?(.*)\n|abgabetermin\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty ($tempVar[1])) {
			$deadline = strip_tags(trim($tempVar[1]));
		} elseif ($tempVar[2]) {
			$deadline = strip_tags(trim($tempVar[2]));
		}

		// pageNum
		$pageNum = '';
		preg_match_all('/seitenanzahl\s?:\s?(.*)\n|number\s?:\s?(.*)\n/i', $content, $tempVar, PREG_SET_ORDER);
		$tempVar = reset($tempVar);
		if (!empty ($tempVar[1])) {
			$pageNum = strip_tags(trim($tempVar[1]));
		} elseif (!empty ($tempVar[2])) {
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

		$url = BITRIX_API;
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

	public function sendMail ($to, $name = '', $subj = 'Notification', $msg = 'Form sent')
	{
		$mail = new PHPMailer(true);
		try {
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
			$mail->isSMTP();
			$mail->Host = 'mail.akademily.de';
			$mail->SMTPAuth = true;
			$mail->Username = MAIL_BOT_ADDRESS;
			$mail->Password = MAIL_BOT_PASSWORD;
			$mail->SMTPSecure = 'ssl';
			$mail->CharSet = "utf-8";
			$mail->Port = 465;

			$mail->setFrom(MAIL_BOT_ADDRESS, 'Akademily');
			$mail->addAddress($to, $name);

			$mail->isHTML(true);
			$mail->Subject = $subj;
			$mail->Body = $msg;

			$mail->send();
		} catch (Exception $e) {
			wp_send_json_error(['message' => $e->getMessage()]);
		}
		return true;
	}

	public function sendToClient ($id)
	{
		$sbjToClient = 'Vielen Dank, dass Sie Akademily.de gewählt haben!';
		$msgToClient = '<p><strong>Hallo,</strong></p>
		<p><strong>Vielen Dank,</strong> dass Sie Akademily.de gewählt haben!</p>
		<p>Wir haben Ihre Anfrage erhalten und sind derzeit auf der Suche nach einem passenden Autor. Ein persönlicher Berater wird Sie in Kürze auf dem von Ihnen angegebenen Weg kontaktieren.</p>
		<p style="text-align: center;"><strong>Ihre Anfragenummer: ' . $id . '</strong></p>
		<p style="text-align: center;"><strong>Wenn Sie keine E-Mail erhalten haben, überprüfen Sie bitte Ihren Spam- und Werbeordner und markieren Sie unsere E-Mail als „Kein Spam“.</strong></p>
		<br>
		<p style="text-decoration: underline;"><strong>Eine kurze Schritt-für-Schritt-Anleitung, wie die Zusammenarbeit ablaufen wird:</strong></p>
		<ol>
			<li aria-level="1">Der Kundenberater klärt die Richtigkeit der Daten in Ihrer Anfrage sowie Ihre Wünsche für den Arbeitsablauf. Alle von Ihnen hinterlassenen Daten werden nicht an Dritte weitergegeben, und die gesamte Kommunikation ist vertraulich und verschlüsselt. Die Autoren erhalten lediglich die Aufgabenstellung.</li>
			<li aria-level="1">Der Berater informiert Sie über die verfügbaren Autoren, die für Ihre Anfrage zur Verfügung stehen, insbesondere über den akademischen Grad der Autoren, ihre Bewertungen, die Kosten des Auftrags sowie den Ablauf des Schreibprozesses. Außerdem beantwortet er Ihre Fragen.</li>
			<li aria-level="1">Wenn Ihnen unser Angebot zusagt, sendet Ihnen der Berater eine Rechnung zur Zahlung zu. Dieses Dokument stellt einen Vertrag zwischen Ihnen als Kunden und dem Auftragnehmer dar. Darin sind die wesentlichen Bedingungen des Auftrags sowie die Rechte und Pflichten aller Beteiligten festgehalten.</li>
			<li aria-level="1">Nach Erhalt der Zahlung/Vorauszahlung startet der Autor mit der Bearbeitung Ihres Auftrags.</li>
			<li aria-level="1">Zum angegebenen Termin, wenn möglich sogar früher, erhalten Sie die fertige Arbeit zusammen mit einem Bericht über die Einzigartigkeit (PlagScan).</li>
		</ol>
		<br>
		<p style="text-decoration: underline;"><strong>Was müssen Sie über den Auftragsablauf wissen?</strong></p>
		<ul>
			<li aria-level="1">Sobald Sie Ihre Bestellung bezahlt haben, wird Ihnen automatisch ein zweiter Kundenbetreuer zugewiesen. Dieser organisiert bei Bedarf den Kontakt mit dem Autor, überwacht den gesamten Arbeitsprozess und steht Ihnen jederzeit zur Verfügung, um Fragen zum Fortschritt der Arbeit zu beantworten.</li>
			<li aria-level="1">Sie können Teile des bereits geschriebenen Textes erhalten, um sich von der Qualität der Arbeit zu überzeugen. Ihr Seelenfrieden und Vertrauen sind uns wichtig.</li>
			<li aria-level="1">Wenn die Arbeit Anpassungen erfordert, ist das in Ordnung. Die Autoren nehmen die Anpassungen entsprechend Ihren Anmerkungen vor.</li>
			<li aria-level="1">Jeder abgeschlossene Auftrag durchläuft eine Qualitätskontrolle, wird von einem professionellen Korrekturleser lektoriert und auf Einzigartigkeit geprüft. Sie erhalten einen kostenlosen Einzigartigkeitsbericht zusammen mit der fertigen Arbeit.</li>
			<li aria-level="1">Nach dem Liefertermin garantieren wir Ihnen kostenlose Anpassungen. Wenn Sie etwas korrigieren möchten, tun wir dies für Sie kostenlos.</li>
		</ul>
		<br>
		<p><strong>Wenn Ihr Auftrag dringend ist, kontaktieren Sie uns bitte auf einem der folgenden Wege.</strong></p>
		<br>
		<hr>
		<p>Email: <a href="mailto:info@akademily.de">info@akademily.de</a></p>
		<p>Festnetz: <a href="tel:+493046690110">+49(304)669-01-10</a></p>
		<p style="text-align: center;"><em>Mit freundlichen Grüßen,<em></p>
		<p style="text-align: center;"><em>Ihr Team von Akademily!<em></p>';

		$res = $this->sendMail($_POST['email'], $_POST['name'], $sbjToClient, $msgToClient);
		return $res;
	}

	public function jsonBasicAuthHandler ($user)
	{
		global $wp_json_basic_auth_error;

		$wp_json_basic_auth_error = null;

		if (!empty ($user)) {
			return $user;
		}

		if (!isset ($_SERVER['PHP_AUTH_USER'])) {
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

	public function jsonBasicAuthError ($error)
	{
		if (!empty ($error)) {
			return $error;
		}

		global $wp_json_basic_auth_error;

		return $wp_json_basic_auth_error;
	}

	private function sendToTG ($id)
	{
		$text = "<b>{$this->title}</b>\r\n\n";
		$text .= "{$this->subject}\r\n\n";
		$text .= "<b>🥸 :</b> " . $_POST['name'] . "\r\n";
		$text .= "<b>📨 :</b> " . $_POST['email'] . "\r\n";
		$text .= "<b>📞 :</b> " . $_POST['phone'] . "\r\n";
		$text .= "<b>📌 :</b> " . $_POST['type'] . "\r\n";
		$text .= "<b>📎 :</b> " . $_POST['specialization'] . "\r\n";
		$text .= "<b>✍️ :</b> " . $_POST['theme'] . "\r\n";
		$text .= "<b>🗒 :</b> " . $_POST['number'] . "\r\n";
		$text .= "<b>🔥 :</b> " . $_POST['deadline'] . "\r\n";
		if ($this->fc_source !== null) {
			$text .= "<b>👣 :</b> " . $this->fc_source . "\r\n";
		}
		$text .= "<b>🗃 :</b> " . $id . "\r\n\n";
		$text .= "{$this->score} \r\n";
		$text .= "<a href='https://akademily.de/wp-admin/post.php?post=" . $id . "&action=edit'><b>Клац</b></a>";

		$data = [
			'parse_mode' => 'html',
			'chat_id' => TG_CHAT_ID,
			'text' => $text
		];
		file_get_contents("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($data));
		return true;
	}

	public function sendFileToTG ($id)
	{
		// Проверка на наличие файла
		if ($_FILES['file']['name'] !== '') {
			$uploaddir = '../../loads/' . $id . '/';
			// Проверка на существование директории
			if (!file_exists($uploaddir)) {
				mkdir($uploaddir, 0777, true);
			}
			// Загрузка
			$uploadfile = $uploaddir . basename($_FILES['file']['name']);
			if (is_uploaded_file($_FILES['file']['tmp_name']) && move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
				$data = [
					'chat_id' => TG_CHAT_ID,
					'caption' => "🗃 : " . $id,
					'document' => new \CURLFile($uploadfile)
				];
				// Отправка
				$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendDocument");
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$fileResult = curl_exec($ch);
				curl_close($ch);
			}
		}
	}

	public function sendWapp ()
	{
		$channel = json_decode(stripslashes($_COOKIE['fc_utm']))->utm_channel;
		$clientGeo = json_decode(stripslashes($_COOKIE['geo']));
		date_default_timezone_set('Europe/Minsk');
		$clickTime = new DateTime();

		$text = "<b>Akademily.de WhatsApp клик 🥸</b>\r\n\n";
		$text .= "<b>👣 : {$channel}</b>\r\n";
		$text .= "<b>📱 : {$clientGeo->ip}</b>\r\n\n";
		$text .= "<b>🌐 : {$clientGeo->country_name}</b>\r\n";
		$text .= "<b>🏠 : {$clientGeo->region}</b>\r\n";
		$text .= "<b>⌚️ : {$clickTime->format('Y-m-d H:i:s')}</b>";

		$data = [
			'parse_mode' => 'html',
			'chat_id' => TG_CHANNEL_INFO_ID,
			'text' => $text
		];
		$res = file_get_contents("https://api.telegram.org/bot" . TG_BOT_TOKEN . "/sendMessage?" . http_build_query($data));
		return $res;
	}

	public function getChannel ($ch)
	{
		if ($ch == 'cpc') {
			return 'K';
		} elseif ($ch == 'direct') {
			return 'D';
		} elseif ($ch == 'media') {
			return 'M';
		} else {
			return 'O';
		}
	}

	public function getTitle ($ch)
	{
		if ($ch == 'cpc') {
			return 'Новая заявка! 💰';
		} elseif ($ch == 'direct') {
			return 'Новая заявка! 💫';
		} elseif ($ch == 'media') {
			return 'Новая заявка! 🤩';
		} else {
			return 'Новая заявка! 🤑';
		}
	}

	public function getSubject ($ch)
	{
		return sprintf(
			'%s | %s | %s',
			$ch,
			Helpers::urlPathFromRef(),
			$this->formNameFromID()
		);
	}

	public function messageFromForm ()
	{
		$mess = '';
		foreach ($_POST as $key => $value) {
			if (in_array($key, ['form-id', 'action', 'recaptchaResponse'])) {
				continue;
			}

			$string = (is_array($value)) ? implode(', ', $value) : $value; //Преобразование
			$mess .= sprintf('<p>%s : %s<br></p>', ucfirst($key), $string); //Вывод
		}
		return $mess;
	}

	public function messageFromCookie ()
	{
		$mess = '';
		if (isset ($_COOKIE['refer'])) {
			$mess .= sprintf('<p>%s : %s<br></p>', 'Refer', stripslashes($_COOKIE['refer'])); //Вывод
		}
		if (isset ($_COOKIE['is_mobile'])) {
			$mess .= sprintf('<p>%s : %s<br></p>', 'Is_Mobile', stripslashes($_COOKIE['is_mobile'])); //Вывод
		}
		if (isset ($_COOKIE['browser'])) {
			$mess .= sprintf('<p>%s : %s<br></p>', 'Browser', stripslashes($_COOKIE['browser'])); //Вывод
		}
		if (isset ($_COOKIE['os'])) {
			$mess .= sprintf('<p>%s : %s</p>', 'OS', stripslashes($_COOKIE['os'])); //Вывод
		}
		if (isset ($_COOKIE['cookieCook'])) {
			$mess .= sprintf('<p>%s : %s</p>', 'Cookie_Cook', stripslashes($_COOKIE['cookieCook'])); //Вывод
		}
		if (isset ($_COOKIE['time_passed'])) {
			$mess .= sprintf('<p>%s : %s</p>', 'Time_Passed', stripslashes($_COOKIE['time_passed'])); //Вывод
		}
		if (isset ($_COOKIE['fc_page'])) {
			$mess .= sprintf('<p>%s : %s</p>', 'Fc_Page', stripslashes($_COOKIE['fc_page'])); //Вывод
		}
		if (isset ($_COOKIE['lc_page'])) {
			$mess .= sprintf('<p>%s : %s</p>', 'Lc_Page', stripslashes($_COOKIE['lc_page'])); //Вывод
		}
		if (isset ($_COOKIE['user_agent'])) {
			$mess .= sprintf('<p>%s : %s</p>', 'User_Agent', stripslashes($_COOKIE['user_agent'])); //Вывод
		}
		return $mess;
	}

	public function messageFromGeo ()
	{
		$mess = '';
		if (isset ($_COOKIE['geo'])) {
			$decCookie = json_decode(stripslashes($_COOKIE['geo'])); //Декодируем JSON из кук
			foreach ($decCookie as $key => $value) {
				$string = (is_array($value)) ? implode(', ', $value) : $value; //Преобразование
				$mess .= sprintf('<p>%s : %s</p>', ucfirst($key), $string); //Вывод
			}
		}
		return $mess;
	}

	public function messageFromUtm ()
	{
		$mess = '';
		if (isset ($_COOKIE['fc_utm'])) {
			$decCookie = json_decode(stripslashes($_COOKIE['fc_utm'])); //Декодируем JSON из кук
			foreach ($decCookie as $key => $value) {
				$string = (is_array($value)) ? implode(', ', $value) : $value; //Преобразование
				$mess .= sprintf('<p>%s : %s</p>', ucfirst($key), $string); //Вывод

				if ($key == 'utm_source') {
					$this->fc_source = $value;
				}
			}
		}
		return $mess;
	}

	public function messageFromRating ()
	{
		$this->score = 'Рейтинг неизвестен';
		if (!empty ($_POST['recaptchaResponse'])) {
			$recaptcha = $_POST['recaptchaResponse'];
			$recaptcha = file_get_contents(RECAPTCHA_URL . '?secret=' . RECAPTCHA_KEY . '&response=' . $recaptcha);
			$recaptcha = json_decode($recaptcha);

			if ($recaptcha !== null && isset ($recaptcha->score)) {
				$this->score = 'Рейтинг: ' . $recaptcha->score;
				if ($recaptcha->score < 0.5) {
					$this->score = 'Возможно спам, рейтинг: ' . $recaptcha->score;
				}
			} else {
				$this->score = 'Рейтинг неизвестен';
			}
		}
		return sprintf('<p>%s</p>', $this->score); //Дописываем рейтинг
	}

	public static function formNameFromID (): string
	{
		$formArr = array(
			'calculator' => 'Заявка с калькулятора',
			'hero-form' => 'Форма в шапке',
			'blitz-form' => 'Блиц форма',
			'big-form' => 'Большая форма',
			'middle-form' => 'Средняя форма',
			'sidebar-form' => 'Форма в сайдбаре'
		);

		if (!empty ($_POST['form_type']) && array_key_exists($_POST['form_type'], $formArr)) {
			return $formArr[$_POST['form_type']];
		} else {
			return 'Форма без ID';
		}
	}
}

new Feedback();
