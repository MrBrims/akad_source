<?php

class CustomPostType
{
    public function __construct()
    {
        add_action('init', [$this, 'reviewsPostType']);
        add_action('init', [$this, 'feedbackPostType']);
    }

    public function reviewsPostType()
    {
        register_post_type('reviews', [
            'labels' => [
                'name' => 'Отзывы',
                'singular_name' => 'Отзывы',
                'add_new' => 'Добавить отзыв',
                'add_new_item' => 'Добавление отзыва',
                'edit_item' => 'Редактирование отзыва',
                'new_item' => 'Новый отзыв',
                'view_item' => 'Смотреть отзыв',
                'search_items' => 'Искать отзыв',
                'not_found' => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'menu_name' => 'Отзывы',
            ],
            'public' => false,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-admin-comments',
            'hierarchical' => true,
            'supports' => ['title', 'editor'],
            'taxonomies' => ['type_works'],
            'has_archive' => false,
            'rewrite' => true,
            'query_var' => true,
        ]);
    }

    public function feedbackPostType()
    {
        register_post_type('requests', [
            'labels' => [
                'name' => 'Заявки',
                'singular_name' => 'Заявки',
                'menu_name' => 'Заявки',
            ],
            'public' => false,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_in_menu' => true,
            'menu_icon' => 'dashicons-feedback',
            'rewrite' => false,
        ]);
    }
}

new CustomPostType();
