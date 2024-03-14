<?php

use Carbon_Fields\Field;

function get_ak_complex_price_lektorat()
{
	return array(
		Field::make('text', 'complex_price_lektkor_title', __('Заголовок')),
		Field::make('rich_text', 'complex_price_lekt_list', __('Список Lektorat')),
		Field::make('rich_text', 'complex_price_kor_list', __('Список Korrektorat')),
		Field::make('complex', 'complex_price_lektkor_table', __('Таблица'))
			->set_layout('tabbed-vertical')
			->setup_labels(['singular_name' => 'Строку'])
			->add_fields([
				Field::make('text', 'complex_price_lektkor_disc', __('Дисциплина'))
					->set_width(30),
				Field::make('text', 'complex_price_lektkor_disc_list', __('Список в скобках'))
					->set_width(70),
				Field::make('text', 'complex_price_lekt_pref', __('Префикс цены Lektorat'))
					->set_width(25),
				Field::make('text', 'complex_price_lekt_price', __('Цена Lektorat'))
					->set_width(25),
				Field::make('text', 'complex_price_lekt_pro', __('За что Lektorat'))
					->set_width(25),
				Field::make('text', 'complex_price_lekt_btn', __('Текст на кнопке Lektorat'))
					->set_width(25),
				Field::make('text', 'complex_price_kor_pref', __('Префикс цены Korrektorat'))
					->set_width(25),
				Field::make('text', 'complex_price_kor_price', __('Цена Korrektorat'))
					->set_width(25),
				Field::make('text', 'complex_price_kor_pro', __('За что Korrektorat'))
					->set_width(25),
				Field::make('text', 'complex_price_kor_btn', __('Текст на кнопке Korrektorat'))
					->set_width(25),
			])
			->set_header_template('
				<% if (complex_price_lektkor_disc) { %>
					<%- complex_price_lektkor_disc %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				'),
	);
}
