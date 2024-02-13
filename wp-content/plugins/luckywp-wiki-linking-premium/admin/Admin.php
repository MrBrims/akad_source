<?php

namespace luckywp\wikiLinkingPremium\admin;

use luckywp\wikiLinkingPremium\admin\controllers\DbMigrateController;
use luckywp\wikiLinkingPremium\admin\controllers\MainController;
use luckywp\wikiLinkingPremium\admin\controllers\MbPostGeneralController;
use luckywp\wikiLinkingPremium\admin\controllers\SettingsController;
use luckywp\wikiLinkingPremium\admin\widgets\noticeDbMigrate\NoticeDbMigrate;
use luckywp\wikiLinkingPremium\admin\widgets\postGeneralMetabox\PostGeneralMetabox;
use luckywp\wikiLinkingPremium\admin\wp\Post;
use luckywp\wikiLinkingPremium\core\admin\helpers\AdminUrl;
use luckywp\wikiLinkingPremium\core\base\BaseObject;
use luckywp\wikiLinkingPremium\core\Core;
use luckywp\wikiLinkingPremium\core\helpers\Html;

/**
 * @property string $assetsUrl
 */
class Admin extends BaseObject
{

    /**
     * @var Post
     */
    public $wpPost;

    public function init()
    {
        if (is_admin()) {
            add_action('admin_menu', [$this, 'menu']);

            // Ссылки в списке плагинов
            add_filter('plugin_action_links_' . Core::$plugin->basename, function ($links) {
                $links[] = Html::a(esc_html__('Settings', 'luckywp-wiki-linking'), AdminUrl::to('settings'));
                return $links;
            });

            if (Core::$plugin->active) {
                if (!wp_doing_ajax()) {
                    add_action('admin_enqueue_scripts', [$this, 'assets']);
                }
                $this->wpPost = Core::createObject(Post::className());
                add_action('add_meta_boxes', [$this, 'addMetaBoxes']);
                MainController::getInstance();
                MbPostGeneralController::getInstance();
            } else {
                if (!AdminUrl::isPage('dbMigrate')) {
                    add_action('admin_notices', function () {
                        echo NoticeDbMigrate::widget();
                    });
                }
                DbMigrateController::getInstance();
            }
        }
    }

    public function addMetaBoxes()
    {
        if (current_user_can('lwpwl_full')) {
            add_meta_box(
                Core::$plugin->prefix . '_postGeneral',
                esc_html__('Wiki Linking', 'luckywp-wiki-linking'),
                function ($post) {
                    echo PostGeneralMetabox::widget([
                        'post' => $post,
                    ]);
                },
                Core::$plugin->getPostTypeNames(),
                'normal',
                'high'
            );
        }
    }

    public function getAssetsUrl()
    {
        return Core::$plugin->url . '/admin/assets';
    }

    public static function menu()
    {
        if (Core::$plugin->active) {
            add_menu_page(
                esc_html__('Wiki Linking', 'luckywp-wiki-linking'),
                esc_html__('Wiki Linking', 'luckywp-wiki-linking'),
                'lwpwl_full',
                Core::$plugin->prefix . 'main',
                [MainController::className(), 'router'],
                'dashicons-randomize',
                81
            );
            add_submenu_page(
                Core::$plugin->prefix . 'main',
                esc_html__('Wiki Linking Settings', 'luckywp-wiki-linking'),
                esc_html__('Settings', 'luckywp-wiki-linking'),
                'manage_options',
                Core::$plugin->prefix . 'settings',
                [SettingsController::className(), 'router']
            );
        } else {
            add_submenu_page(
                'index.php?lwp',
                'LuckyWP Wiki Linking — ' . esc_html__('Updating Database', 'luckywp-wiki-linking'),
                esc_html__('Updating Database', 'luckywp-wiki-linking'),
                'manage_options',
                Core::$plugin->prefix . 'dbMigrate',
                [DbMigrateController::className(), 'router']
            );
        }
    }

    public function assets($hook)
    {
        if ($hook == 'toplevel_page_' . Core::$plugin->prefix . 'main' ||
            $hook == 'post.php'
        ) {
            wp_enqueue_style(Core::$plugin->prefix . 'adminMain', $this->assetsUrl . '/main.min.css', [], Core::$plugin->version);
            wp_enqueue_script(Core::$plugin->prefix . 'adminMain', $this->assetsUrl . '/main.min.js', ['jquery'], Core::$plugin->version);
            wp_localize_script(Core::$plugin->prefix . 'adminMain', 'lwpwlMain', [
                'ajaxUrl' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce(Core::$plugin->prefix . 'adminMain'),
            ]);
            wp_localize_script(Core::$plugin->prefix . 'adminMain', 'lwpwlFormSubmitControl', [
                'i18nLockLabel' => esc_html__('Sending…', 'luckywp-wiki-linking'),
            ]);
        }
    }
}
