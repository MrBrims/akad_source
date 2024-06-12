<?php

use Carbon_Fields\Field;

function get_ak_complex_review()
{
	return array(
		Field::make('select', 'unic_review_type', __('Выберите какие отзывы отображать:'))
			->add_options(array(
				'default' => __('Общие'),
				'coach' => __('Коачинг'),
				'lektor' => __('Лекторат'),
			))
	);
}
