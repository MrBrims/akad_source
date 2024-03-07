<?php

use Carbon_Fields\Field;

function get_ak_complex_work()
{
	return array(
		Field::make('complex', 'unic_accordeon_work', __('Как мы работаем'))
			->set_layout('tabbed-vertical')
			->setup_labels(['unic_singular_name' => 'пункт'])
			->add_fields([
				Field::make('text', 'unic_accordeon_work_title', __('Заголовок аккордеона')),
				Field::make('textarea', 'unic_accordeon_work_text', __('Текст аккордеона'))
					->set_rows(3),
				Field::make('checkbox', 'unic_accordeon_work_btn_show', __('Показать кнопку?'))
					->set_width(30),
				Field::make('text', 'unic_accordeon_work_btn', __('Текст на кнопке'))
					->set_width(40),
				Field::make('image', 'unic_accordeon_work_image', __('Изображение слева'))
					->set_width(30)
					->set_type('image')
					->set_value_type('url'),
			])
			->set_header_template('
				<% if (unic_accordeon_work_title) { %>
					<%- unic_accordeon_work_title %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				'),
	);
}
