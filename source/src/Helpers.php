<?php

class Helpers
{
	public static function imageAlt ($image_url)
	{
		$image_id = attachment_url_to_postid($image_url);
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
		echo $image_alt;
	}

	public static function coach_cond (): string
	{
		if (get_page_template_slug() == "parts/page-halfe.php") {
			$templateSlug = "Coaching";
		} else {
			$templateSlug = "";
		}
		return $templateSlug;
	}

	public static function num_whats (): string
	{
		$day = date('N');
		$whatsArr = [
			'1' => '49(1577)653-67-49',
			'2' => '49(304)669-04-28',
			'3' => '49(304)669-04-28',
			'4' => '49(304)669-04-28',
			'5' => '49(304)669-01-88',
			'6' => '49(304)669-01-88',
			'7' => '49(1577)653-67-49',
		];
		return $whatsArr[$day];
	}

	public static function urlPathFromRef (): string
	{
		$str = wp_get_referer();
		if ($str) {
			preg_match_all('/https?:\/\/(?:www\.)?([-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b)*(\/[\/\d\w\.-]*)*(?:[\?])*(.+)*/i', $str, $matches, PREG_SET_ORDER, 0);
			$site = $matches[0][1] . $matches[0][2];
			return $site;
		} else {
			return $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		}
	}

	public static function urlPath (): string
	{
		$str = '';
		if (isset($_COOKIE['lc_page'])) {
			$str = $_COOKIE['lc_page'];
		} elseif (wp_get_referer()) {
			$str = wp_get_referer();
		} else {
			$str = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		}
		$url = parse_url($str);
		$domain = $url['host'];
		$path = isset($url['path']) ? $url['path'] : '';
		return $domain . $path;
	}

	public static function geo ()
	{
		function getOS ($user_agent)
		{
			if (strpos($user_agent, "Windows") !== false)
				$os = "Windows";
			elseif (strpos($user_agent, "Linux") !== false)
				$os = "Linux";
			elseif (strpos($user_agent, "X11") !== false)
				$os = "Linux";
			elseif (strpos($user_agent, "iPhone") !== false)
				$os = "iPhone";
			elseif (strpos($user_agent, "OpenBSD") !== false)
				$os = "OpenBSD";
			elseif (strpos($user_agent, "SunOS") !== false)
				$os = "SunOS";
			elseif (strpos($user_agent, "Safari") !== false)
				$os = "Safari";
			elseif (strpos($user_agent, "Macintosh") !== false)
				$os = "Macintosh";
			elseif (strpos($user_agent, "Mac_PowerPC") !== false)
				$os = "Macintosh";
			elseif (strpos($user_agent, "QNX") !== false)
				$os = "QNX";
			elseif (strpos($user_agent, "BeOS") !== false)
				$os = "BeOS";
			elseif (strpos($user_agent, "OS/2") !== false)
				$os = "OS/2";
			elseif (strpos($user_agent, "QNX") !== false)
				$os = "QNX";
			else
				$os = "Undefined or Search Bot";
			return $os;
		}
		function getBrowser ($user_agent)
		{
			if (strpos($user_agent, "Firefox") !== false)
				$browser = "Firefox";
			elseif (strpos($user_agent, "Opera") !== false)
				$browser = "Opera";
			elseif (strpos($user_agent, "Chrome") !== false)
				$browser = "Chrome";
			elseif (strpos($user_agent, "MSIE") !== false)
				$browser = "Internet Explorer";
			elseif (strpos($user_agent, "Safari") !== false)
				$browser = "Safari";
			else
				$browser = "Undefined";
			return $browser;
		}

		// реферальная ссылка
		if (!isset($_COOKIE['refer'])) {
			if (isset($_SERVER["HTTP_REFERER"]) && !strpos($_SERVER["HTTP_REFERER"], $_SERVER['HTTP_HOST'])) {
				setcookie('refer', $_SERVER["HTTP_REFERER"], time() + 60 * 60 * 24 * 7, '/');
			} else {
				setcookie('refer', 'none', time() + 60 * 60 * 24 * 7, '/');
			}
		}
		//  куки
		$utm = $_GET;

		// Страница
		$excludedStrings = [
			'wp-json',
			'admin-ajax',
		];
		$isExcluded = false;
		foreach ($excludedStrings as $excludedString) {
			if (strpos($_SERVER['REQUEST_URI'], $excludedString) !== false) {
				$isExcluded = true;
				break;
			}
		}
		if (!$isExcluded) {
			if (!isset($_COOKIE['fc_page'])) {
				setcookie('fc_page', (((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']), time() + 60 * 60 * 24 * 3, '/');
			}
			setcookie('lc_page', (((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']), time() + 60 * 60 * 24, '/');
		}

		// органика - директ - реклама
		// if (isset($utm['utm_source']) && ($utm["utm_source"] === "instagram" || $utm["utm_source"] === "facebook")) {
		// $utm['utm_channel'] = "media";
		if (isset($utm['utm_source']) || isset($_SERVER["REQUEST_URI"]) && strpos($_SERVER["REQUEST_URI"], 'utm_source') !== false) {
			$utm['utm_channel'] = 'cpc';
		} elseif (!isset($_SERVER["HTTP_REFERER"]) || isset($_COOKIE['refer']) && (stripslashes($_COOKIE['refer']) === 'none')) {
			$utm['utm_channel'] = 'direct';
		} else {
			$utm['utm_channel'] = 'organic';
		}

		// запись утм
		if (!isset($_COOKIE['fc_utm'])) {
			setcookie('fc_utm', json_encode($utm), time() + 60 * 60 * 24 * 3, '/');
		}
		setcookie('lc_utm', json_encode($utm), time() + 60 * 60 * 24, '/');
		//OS
		if (!isset($_COOKIE['os'])) {
			setcookie('os', getOS($_SERVER['HTTP_USER_AGENT']), time() + 60 * 60 * 24, '/');
		}
		//Browser
		if (!isset($_COOKIE['browser'])) {
			setcookie('browser', getBrowser($_SERVER['HTTP_USER_AGENT']), time() + 60 * 60 * 24, '/');
		}
		// mobile
		if (!isset($_COOKIE['is_mobile'])) {
			setcookie('is_mobile', (wp_is_mobile() ? 'yes' : 'no'), time() + 60 * 60 * 24, '/');
		}
		if (!isset($_COOKIE['user_agent'])) {
			$user_agent = $_SERVER["HTTP_USER_AGENT"];
			setcookie('user_agent', $user_agent, time() + 60 * 60 * 24, '/');
		}
	}
}

new Helpers();
