<?php

namespace luckywp\wikiLinkingPremium\admin\controllers;

use luckywp\wikiLinkingPremium\admin\forms\main\CreateForm;
use luckywp\wikiLinkingPremium\admin\forms\main\SearchForm;
use luckywp\wikiLinkingPremium\admin\forms\main\UpdateForm;
use luckywp\wikiLinkingPremium\core\admin\Controller;
use luckywp\wikiLinkingPremium\core\admin\helpers\AdminUrl;
use luckywp\wikiLinkingPremium\core\Core;
use luckywp\wikiLinkingPremium\core\data\PaginationData;
use luckywp\wikiLinkingPremium\core\helpers\Json;
use luckywp\wikiLinkingPremium\plugin\repositories\ItemFilter;
use luckywp\wikiLinkingPremium\plugin\repositories\ItemRepository;
use WP_Post;

class MainController extends Controller
{

    /**
     * @var ItemRepository
     */
    protected $items;

    public function init()
    {
        $this->items = Core::$plugin->items;
        parent::init();
        add_action('plugins_loaded', [$this, 'initAjax']);
    }

    public function initAjax()
    {
        if (current_user_can('lwpwl_full')) {
            add_action('wp_ajax_lwpwl_items_card_html', [$this, 'ajaxItemsCardHtml']);
            add_action('wp_ajax_lwpwl_bind_item_to_posts', [$this, 'ajaxBindItemToPosts']);
            add_action('wp_ajax_lwpwl_select_post_search', [$this, 'ajaxSelectPostSearch']);
            add_action('wp_ajax_lwpwl_delete_item', [$this, 'ajaxDelete']);
        }
    }

    public function actionIndex()
    {
        $filter = new ItemFilter();
        $model = new SearchForm();
        if ($model->load(Core::$plugin->request->get(), '') && $model->validate()) {
            $model->toFilter($filter);
        }

        $pagination = new PaginationData();
        $pagination->count = $this->items->count($filter);
        $pagination->perPage = 15;
        $pagination->page = (int)Core::$plugin->request->get('p', 1);
        $pagination->sanitizePage();
        $filter->perPage = $pagination->perPage;
        $filter->page = $pagination->page;

        $cardItemId = Core::$plugin->request->get('itemId');
        $cardItem = $cardItemId ? $this->items->get($cardItemId) : null;

        $hasItems = $this->items->exists();

        $this->render('index', [
            'pagination' => $pagination,
            'model' => $model,
            'hasItems' => $hasItems,
            'items' => $this->items->find($filter),
            'cardItem' => $cardItem,
        ]);
    }


    /**
     * ---------------------------------------------------------------------------
     *  Добавление ключевой фразы
     * ---------------------------------------------------------------------------
     */

    private $_createForm;

    private function getCreateForm()
    {
        if ($this->_createForm === null) {
            $this->_createForm = new CreateForm();
        }
        return $this->_createForm;
    }

    public function handleCreate()
    {
        $model = $this->getCreateForm();
        if ($model->load(Core::$plugin->request->post()) &&
            $model->validate() &&
            wp_verify_nonce(Core::$plugin->request->get('nonce'), Core::$plugin->prefix . 'createItem')
        ) {
            $item = Core::$plugin->items->create($model->makeDto());
            wp_redirect(AdminUrl::to('main', null, ['itemId' => $item->id]));
        }
    }

    public function actionCreate()
    {
        $this->render('create', [
            'model' => $this->getCreateForm(),
        ]);
    }


    /**
     * ---------------------------------------------------------------------------
     *  Редактирование ключевой фразы
     * ---------------------------------------------------------------------------
     */

    private $_updateForm;

    private function getUpdateForm()
    {
        if ($this->_updateForm === null) {
            $item = $this->items->get((int)Core::$plugin->request->get('id'));
            if ($item === null) {
                $this->notAllowed();
            }
            $this->_updateForm = new UpdateForm($item);
        }
        return $this->_updateForm;
    }

    public function handleUpdate()
    {
        $model = $this->getUpdateForm();
        if ($model->load(Core::$plugin->request->post()) &&
            $model->validate() &&
            wp_verify_nonce(Core::$plugin->request->get('nonce'), Core::$plugin->prefix . 'updateItem')
        ) {
            $item = $model->item;
            $model->toItem($item);
            Core::$plugin->items->save($item);
            wp_redirect(AdminUrl::to('main', null, ['itemId' => $item->id]));
        }
    }

    public function actionUpdate()
    {
        $model = $this->getUpdateForm();
        $this->render('update', [
            'item' => $model->item,
            'model' => $model,
        ]);
    }


    /**
     * ---------------------------------------------------------------------------
     *  Удаление ключевой фразы
     * ---------------------------------------------------------------------------
     */

    public function ajaxDelete()
    {
        $item = $this->items->get((int)Core::$plugin->request->get('id'));
        if (!$item) {
            $this->notAllowed();
        }

        if (Core::$plugin->request->post('do')) {
            $this->items->delete($item);
            $this->render('delete_success', ['item' => $item]);
            wp_die();
        }

        $this->render('delete', ['item' => $item]);
        wp_die();
    }


    /**
     * ---------------------------------------------------------------------------
     *  Карточка ключевой фразы
     * ---------------------------------------------------------------------------
     */

    public function ajaxItemsCardHtml()
    {
        check_ajax_referer(Core::$plugin->prefix . 'adminMain');

        $item = $this->items->get((int)Core::$plugin->request->post('id'));
        if ($item === null) {
            $this->notAllowed();
        }

        $this->render('_card', ['item' => $item]);
        wp_die();
    }


    /**
     * ---------------------------------------------------------------------------
     *  Связка ключевой фразы с постами
     * ---------------------------------------------------------------------------
     */

    public function ajaxBindItemToPosts()
    {
        check_ajax_referer(Core::$plugin->prefix . 'adminMain');

        $item = $this->items->get((int)Core::$plugin->request->get('id'));
        if ($item === null) {
            $this->notAllowed();
        }

        $count = Core::$plugin->bindItemToPosts($item);

        echo Json::encode([
            'html' => $this->render('bind_item_to_posts_success', ['count' => $count], false),
            'count' => $count,
        ]);
        wp_die();
    }


    /**
     * ---------------------------------------------------------------------------
     *  Поиск постов при выборе
     * ---------------------------------------------------------------------------
     */

    public function ajaxSelectPostSearch()
    {
        check_ajax_referer(Core::$plugin->prefix . 'adminMain');
        $data = [];
        $s = trim((string)Core::$plugin->request->post('s'));
        $args = [
            'posts_per_page' => 20,
            'post_type' => Core::$plugin->getPostTypeNames(),
            'order' => 'DESC',
            'orderby' => 'modified',
        ];
        if ($s != '') {
            $args['s'] = $s;
        }
        $posts = get_posts($args);
        foreach ($posts as $post) {
            /** @var WP_Post $post */
            $data[] = [$post->ID, $post->post_title];
        }
        echo Json::encode($data);
        wp_die();
    }
}
