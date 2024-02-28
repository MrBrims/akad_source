<?php

use Carbon_Fields\Field;

function get_ak_complex_global_select()
{
	return array(
		Field::make('select', 'ak_complex_global_select', 'Выбор глобального блока')
			->add_options(array(
				'parts/sections/guarant' => 'Гарантии',
				'parts/sections/how-work' => 'Как работаем',
				'parts/sections/reviews' => 'Отзывы',
			))
	);
}
