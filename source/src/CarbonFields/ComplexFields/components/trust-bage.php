<?php

use Carbon_Fields\Field;

function get_ak_complex_trust()
{
	return array(
		Field::make('text', 'ak_complex_trust_title', __('Заголовок')),
		Field::make('image', 'ak_complex_trust_img', __('Иконка'))
			->set_type('image')
			->set_value_type('url')
			->set_width(20),
		Field::make('text', 'ak_complex_trust_text', __('Текст под заголовком'))
			->set_width(40),
		Field::make('text', 'ak_complex_trust_btn', __('Текст на кнопке'))
			->set_width(40),
	);
}
