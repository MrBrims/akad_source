<?php

use Carbon_Fields\Field;

function get_ak_complex_form_calc()
{
	return array(
		Field::make('text', 'ak_complex_form_calc_title', __('Заголовок формы')),
		Field::make('text', 'ak_complex_form_calc_help', __('Услуги'))
			->set_width(30),
		Field::make('text', 'ak_complex_form_calc_help_text', __('Текст подсказки'))
			->set_width(70),
		Field::make('text', 'ak_complex_form_calc_serv_one', __('Название первой услуги')),
		Field::make('rich_text', 'ak_complex_form_calc_listone', __('Текст первой услуги')),
		Field::make('text', 'ak_complex_form_calc_serv_two', __('Название второй услуги')),
		Field::make('rich_text', 'ak_complex_form_calc_listtwo', __('Текст первой услуги')),
		Field::make('text', 'ak_complex_form_calc_conditionone', __('Название первого условия'))
			->set_width(45),
		Field::make('text', 'ak_complex_form_calc_sep', __('Разделитель'))
			->set_width(10),
		Field::make('text', 'ak_complex_form_calc_conditiontwo', __('Название второго условия'))
			->set_width(45),
		Field::make('text', 'ak_complex_form_calc_currency', __('Валюта'))
			->set_width(40),
		Field::make('text', 'ak_complex_form_calc_btn', __('Текст на кнопке'))
			->set_width(60),
		Field::make('rich_text', 'ak_complex_form_calc_right_text', __('Текст после цены')),
	);
}
