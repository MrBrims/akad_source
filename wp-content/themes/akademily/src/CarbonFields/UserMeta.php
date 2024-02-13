<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class UserMeta
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', [$this, 'addFields']);
    }

    public function addFields()
    {
        Container::make('user_meta', 'carbon_fields_container_user_meta', 'Настройки пользователя')
            ->add_fields([
                Field::make('image', 'de_avatar', __('Фотография пользователя'))
                    ->set_value_type('url')
                    ->set_type('image'),
                Field::make('textarea', 'de_user_short', __('Краткое описание пользователя')),
            ]);
    }
}

new UserMeta();