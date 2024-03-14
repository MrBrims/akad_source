<?php

use Carbon_Fields\Field;

function get_ak_complex_diagram()
{
	return array(
		Field::make('text', 'unic_diagram_title', __('Заголовок')),
		Field::make('complex', 'unic_diagram_list', __('Список'))
			->set_layout('tabbed-vertical')
			->setup_labels(['singular_name' => 'итем'])
			->add_fields([
				Field::make('text', 'unic_diagram_list_text', __('Текст')),
			])
			->set_header_template('
				<% if (unic_diagram_list_text) { %>
					<%- unic_diagram_list_text %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				'),
		Field::make('image', 'unic_diagram_img', __('Изображение'))
			->set_type('image')
			->set_value_type('url'),
		Field::make('text', 'unic_diagram_subtitle', __('Подзаголовок')),
		Field::make('complex', 'unic_diagram_items', __('Карточки'))
			->set_layout('tabbed-vertical')
			->setup_labels(['singular_name' => 'карточку'])
			->add_fields([
				Field::make('image', 'unic_diagram_items_img', __('Изображение'))
					->set_width(50)
					->set_type('image')
					->set_value_type('url'),
				Field::make('text', 'unic_diagram_items_text', __('Текст'))
					->set_width(50),
			])
			->set_header_template('
				<% if (unic_diagram_items_text) { %>
					<%- unic_diagram_items_text %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				'),
	);
}
