<?php

class Shortcodes
{
	public function __construct()
	{
		add_action('init', [$this, 'mceButtons']);
		add_shortcode('bage', [$this, 'trustBage']);
	}

	public function mceButtons()
	{
		add_filter('mce_external_plugins', [$this, 'mceAddButtons']);
		add_filter('mce_buttons', [$this, 'mceRegisterButtons']);

		add_shortcode('modal-button', [$this, 'generateButtonForModalWindow']);
	}

	public function mceAddButtons($pluginArray)
	{
		$pluginArray['mcButtons'] = DE_URI . '/resources/js/admin.js';
		return $pluginArray;
	}

	public function mceRegisterButtons($buttons)
	{
		array_push($buttons, 'modal-button');
		return $buttons;
	}

	public static function generateButtonForModalWindow($atts): string
	{
		$name = !empty($atts['name']) ? $atts['name'] : 'ANFRAGEN';
		return '
            <a class="btn team__btn popup-link single-popup" href="#popup-form">' . $name . '</a>
        ';
	}

	public static function trustBage(): string
	{
		return '
        <div class="banner-content">
            <div class="banner-content__img"><img src="https://akademily.de/wp-content/themes/akademily/resources/images/icons/help-com.svg" alt="" width="100%"></div>
            <div class="banner-content__text">
            <div class="banner-content__title">Brauchen Sie Hilfe?</div>
            <p>Vertrauen Sie Ihre Arbeit echten Profis an!</p>
            </div>
            <div class="banner-content__btn"><a class="btn popup-link" href="#popup-form">
                PREISVORSCHLAG
            </a></div>
        </div>
        ';
	}
}

new Shortcodes();
