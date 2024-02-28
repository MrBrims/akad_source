<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Подключение полей
require 'components/rich-text.php';
require 'components/global-select.php';
require 'components/table-price.php';

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
			->where('post_template', '=', 'parts/page-halfe.php')
			->add_tab(__('Главный экран'), CommonMeta::heroMeta())
			->add_tab(__('Блоки'), [
				Field::make('complex', 'ak_complex_fields_page', __('Блоки страницы'))
					->set_layout('tabbed-vertical')
					->setup_labels(['singular_name' => 'блок'])
					->add_fields('template_rich', 'Текстовый блок', get_ak_complex_rich())
					->add_fields('template_global_select', 'Глобальное поле', get_ak_complex_global_select())
					->add_fields('template_price', 'Прайс', get_ak_complex_table_price())
			])
			->add_tab(__('FAQ'), CommonMeta::localFaq())
			// ->add_tab(__('Таблица прайса'), CommonMeta::priceList())
			->add_tab(__('Звездочки в сниппете'), CommonMeta::microdataStar());
	}
}

new ComplexFields();
