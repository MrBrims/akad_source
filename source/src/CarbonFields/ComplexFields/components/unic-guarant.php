<?php

use Carbon_Fields\Field;

function get_ak_complex_guarant()
{
	return array(
		Field::make('complex', 'unic_guarant_card', __('Карточки'))
			->set_layout('tabbed-vertical')
			->setup_labels(['singular_name' => 'карточку'])
			->add_fields([
				Field::make('text', 'unic_guarant_card_title', __('Заголовок')),
				Field::make('text', 'unic_guarant_card_subtitle', __('Подзаголовок')),
				Field::make('textarea', 'unic_guarant_card_text', __('Текст'))
					->set_rows(3),
				Field::make('image', 'unic_guarant_card_img', __('Иконка'))
					->set_type('image')
					->set_value_type('url'),
			])
			->set_header_template('
				<% if (unic_guarant_card_title) { %>
					<%- unic_guarant_card_title %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				'),
	);
}
