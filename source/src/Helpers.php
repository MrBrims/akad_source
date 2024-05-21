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
			$site = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
			return $site;
		}
	}

	public static function urlPathFromCookie (): string
	{
		if (isset($_COOKIE['lc_page'])) {
			$url = parse_url($_COOKIE['lc_page']);
			$domain = $url['host'];
			$path = isset($url['path']) ? $url['path'] : '';
			return $domain . $path;
		} else {
			return $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		}
	}
}

new Helpers();
