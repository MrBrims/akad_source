<?php

namespace luckywp\wikiLinkingPremium\admin\widgets\postGeneralMetabox;

use luckywp\wikiLinkingPremium\admin\widgets\processBinding\ProcessBinding;
use luckywp\wikiLinkingPremium\core\base\Widget;
use luckywp\wikiLinkingPremium\core\Core;
use luckywp\wikiLinkingPremium\plugin\repositories\ItemFilter;
use WP_Post;

class PostGeneralMetabox extends Widget
{

    /**
     * @var WP_Post
     */
    public $post;

    /**
     * @var bool
     */
    public $onlyBody = false;

    public function run()
    {
        $filter = new ItemFilter();
        $filter->postId = $this->post->ID;
        $items = Core::$plugin->items->find($filter);

        $html = '';
        if (!$this->onlyBody) {
            $html .= '<div class="lwpwlmbPostGeneral" data-post-id="' . $this->post->ID . '">';
        }
        $html .= $this->render('box', [
            'post' => $this->post,
            'items' => $items,
        ], false);
        if (!$this->onlyBody) {
            $html .= '</div>';
            $html .= ProcessBinding::widget();
        }
        return $html;
    }
}
