<?php

namespace luckywp\wikiLinkingPremium\admin\wp;

use luckywp\wikiLinkingPremium\core\base\BaseObject;
use luckywp\wikiLinkingPremium\core\Core;
use WP_Post;

class Post extends BaseObject
{

    public function init()
    {
        add_action('save_post', [$this, 'onSavePost'], 999, 2);
        add_action('delete_post', [$this, 'onDeletePost']);
        add_action('transition_post_status', [$this, 'onTransitionStatus'], 999, 3);
    }

    /**
     * @param int $postId
     * @param WP_Post $post
     */
    public function onSavePost($postId, $post)
    {
        if ($post->post_status === 'publish' && Core::$plugin->settings->getValue('general', 'bind_on_published_post_save')) {
            Core::$plugin->bindPostToItems($post);
        }
    }

    /**
     * @param int $postId
     */
    public function onDeletePost($postId)
    {
        Core::$plugin->items->deleteByPostId($postId);
        Core::$plugin->posts->deleteByPostId($postId);
    }

    /**
     * @param string $newStatus
     * @param string $oldStatus
     * @param WP_Post $post
     */
    public function onTransitionStatus($newStatus, $oldStatus, $post)
    {
        if ($newStatus != 'publish') {
            Core::$plugin->posts->deleteByPostId($post->ID);
        }
    }
}
