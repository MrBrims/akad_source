<?php

use Carbon_Fields\Field;

function get_ak_complex_table_coach()
{
	return array(
		Field::make('rich_text', 'ak_complex_table_coaching_title', __('Текст и заголовок')),
		Field::make('complex', 'ak_complex_table_coaching_row', __('Строка'))
			->set_layout('tabbed-vertical')
			->setup_labels(['singular_name' => 'Строку'])
			->add_fields([
				Field::make('complex', 'ak_complex_table_coaching_col', __('Ячейка'))
					->set_help_text('Внимание! Количество ячеек в каждой строке должно быть одинаково!!!')
					->set_layout('tabbed-horizontal')
					->setup_labels(['singular_name' => ''])
					->add_fields([
						Field::make('text', 'table_coaching_col_title', __('Заголовок ячейки')),
						Field::make('textarea', 'table_coaching_col_text', __('Текст ячейки')),
					])
			]),
		Field::make('rich_text', 'table_coaching_rich', __('Текст после таблицы')),
	);
}
