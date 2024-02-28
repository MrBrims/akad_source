<?php

use Carbon_Fields\Field;

function get_ak_complex_table_price()
{
	return array(
		Field::make('text', 'get_ak_complex_table_price_title', __('Заголовок в шапке таблицы')),
		Field::make('complex', 'get_ak_complex_table_price', __('Строка в таблице'))
			->set_layout('tabbed-vertical')
			->setup_labels(['singular_name' => 'Строку'])
			->add_fields([
				Field::make('text', 'get_ak_complex_table_price_td', __('Текст в строке'))
			])
			->set_header_template('
				<% if (get_ak_complex_table_price_td) { %>
					<%- get_ak_complex_table_price_td %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				'),
		Field::make('text', 'get_ak_complex_table_price_num', __('Цена'))
	);
}
