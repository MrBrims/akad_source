<?php

use Carbon_Fields\Field;

function get_ak_complex_global_select()
{
	return array(
		Field::make('text', 'ak_complex_global_select_name', __('Название вкладки'))
			->set_help_text('Можно не заполнять, служит для удобства навигации по вкладкам'),
		Field::make('select', 'ak_complex_global_select', 'Выбор глобального блока')
			->add_options(array(
				'parts/sections/guarant' => 'Гарантии',
				'parts/sections/how-work' => 'Как работаем',
				'parts/sections/reviews' => 'Отзывы',
				'parts/complex_blocks/estimate' => 'Оценки',
				'parts/complex_blocks/complex-toc' => 'Содержание',
			))
	);
}
