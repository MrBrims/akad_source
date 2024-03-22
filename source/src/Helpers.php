<?php

class Helpers
{
	public static function imageAlt($image_url)
	{
		$image_id = attachment_url_to_postid($image_url);
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
		echo $image_alt;
	}


	public static function coach_cond(): string
	{
		if (get_page_template_slug() == "parts/page-halfe.php") {
			$templateSlug = "Coaching";
		} else {
			$templateSlug = "";
		}
		return $templateSlug;
	}

	public static function num_whats(): string
	{
		$day = date('N');
		$whatsArr = [
			'1' => '49(157)765-367-49',
			'2' => '49(157)765-367-49',
			'3' => '49(304)669-04-28',
			'4' => '49(304)669-03-61',
			'5' => '49(304)669-03-61',
			'6' => '49(304)669-03-61',
			'7' => '49(304)669-04-28',
		];
		return $whatsArr[$day];
	}
}

new Helpers();
