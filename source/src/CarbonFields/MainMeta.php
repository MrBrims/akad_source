<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class MainMeta
{
	public function __construct()
	{
		add_action('carbon_fields_register_fields', [$this, 'mainMeta']);
	}

	public function mainMeta()
	{
		Container::make('theme_options', 'Глобальные поля')
			->add_tab(__('Глобальные контакты'), CommonMeta::globalContact())
			->add_tab(__('Общая информация'), CommonMeta::globalInfo())
			->add_tab(__('Рейтинг'), CommonMeta::globalRating())
			->add_tab(__('Менеджеры'), CommonMeta::globalTeam())
			// ->add_tab(__('Табы прайса'), CommonMeta::globalPriceTab())
			->add_tab(__('Гарантии'), CommonMeta::globalGuarantMeta())
			// ->add_tab(__('FAQ'), CommonMeta::globalFaq())
			->add_tab(__('FAQ'), CommonMeta::globalMainFaq())
			->add_tab(__('Как мы работаем'), CommonMeta::globalHowWork())
			->add_tab(__('Контакт WhatsApp'), CommonMeta::globalContactWhatsapp())
			->add_tab(__('Отзывы'), CommonMeta::globalReviews())
			->add_tab(__('Квалификации'), CommonMeta::qualGlobalMeta())
			->add_tab(__('Список бакалавр'), CommonMeta::bakalavrGlobalMeta())
			->add_tab(__('Команда'), CommonMeta::teamGlobalMeta())
			->add_tab(__('Подбавл'), CommonMeta::globalFooter())
			->add_tab(__('Скрипты'), CommonMeta::globalScripts())
			->add_tab(__('API'), CommonMeta::globalApiKey());
	}
}

new MainMeta();
