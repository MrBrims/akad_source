<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Подключение полей
require 'components/rich-text.php';
require 'components/rich-text-accent.php';
require 'components/global-select.php';
require 'components/table-price.php';
require 'components/unic-work.php';
require 'components/unic-guarant.php';
require 'components/unic-diagram.php';
require 'components/trust-bage.php';
require 'components/price-lektorat.php';
require 'components/form-calc.php';

class ComplexFields
{
	public function __construct()
	{
		add_action('carbon_fields_register_fields', [$this, 'ComplexPage']);
	}

	public function ComplexPage()
	{
		Container::make('post_meta', 'Настройки страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'pages/halfe-page.php', 'pages/lektorat-page.php')
			->add_tab(__('Главный экран'), CommonMeta::heroMeta())
			->add_tab(__('Блоки'), [
				Field::make('complex', 'ak_complex_fields_page', __('Блоки страницы'))
					->set_layout('tabbed-vertical')
					->setup_labels(['singular_name' => 'блок'])
					->add_fields('template_rich', 'Текстовый блок', get_ak_complex_rich())
					->set_header_template('
					<% if (ak_complex_rich_text_name) { %>
						<%- ak_complex_rich_text_name %>
						<% } else { %>
						<%- "Текстовый блок" %>
					<% } %>
					')
					->add_fields('template_rich_accent', 'Текстовый блок c выделением', get_ak_complex_rich_accent())
					->set_header_template('
					<% if (ak_complex_rich_accent_name) { %>
						<%- ak_complex_rich_accent_name %>
						<% } else { %>
						<%- "Текстовый блок с выделением" %>
					<% } %>
					')
					->add_fields('template_global_select', 'Глобальное поле', get_ak_complex_global_select())
					->set_header_template('
					<% if (ak_complex_global_select_name) { %>
						<%- ak_complex_global_select_name %>
						<% } else { %>
						<%- "Глобальное поле" %>
					<% } %>
					')
					->add_fields('template_price', 'Прайс Коачинг', get_ak_complex_table_price())
					->add_fields('template_price_lekt', 'Прайс Лекторат', get_ak_complex_price_lektorat())
					->add_fields('template_unic_work', 'Как работаем', get_ak_complex_work())
					->add_fields('template_unic_guarant', 'Гарантии', get_ak_complex_guarant())
					->add_fields('template_unic_diagram', 'Диаграмма', get_ak_complex_diagram())
					->set_header_template('
					<% if (unic_diagram_title) { %>
					<%- unic_diagram_title %>
			  	<% } else { %>
					<%- "Name" %>
					<% } %>
					')
					->add_fields('template_trust', 'Блок с кнопкой', get_ak_complex_trust())
					->add_fields('template_form_calc', 'Форма калькулятор', get_ak_complex_form_calc())
			])
			->add_tab(__('FAQ'), CommonMeta::localFaq())
			->add_tab(__('Большая форма'), CommonMeta::bigFom())
			->add_tab(__('Звездочки в сниппете'), CommonMeta::microdataStar());
	}
}

new ComplexFields();
