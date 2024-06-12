<?php

use Carbon_Fields\Field;

function get_ak_complex_rich_accent()
{
	return array(
		Field::make('text', 'ak_complex_rich_accent_name', __('Название вкладки'))
			->set_help_text('Можно не заполнять, служит для удобства навигации по вкладкам'),
		Field::make('rich_text', 'ak_complex_rich_accent', __('Текст и заголовок')),
	);
}
