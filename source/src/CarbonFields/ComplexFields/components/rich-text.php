<?php

use Carbon_Fields\Field;

function get_ak_complex_rich()
{
	return array(
		Field::make('rich_text', 'ak_complex_rich_text', __('Текст или заголовок'))
	);
}
