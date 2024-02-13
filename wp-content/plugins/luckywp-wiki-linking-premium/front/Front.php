<?php

namespace luckywp\wikiLinkingPremium\front;

use luckywp\wikiLinkingPremium\core\base\BaseObject;
use luckywp\wikiLinkingPremium\core\Core;
use luckywp\wikiLinkingPremium\plugin\repositories\ItemFilter;

class Front extends BaseObject
{

    public function init()
    {
        if (Core::$plugin->active && !is_admin()) {
            add_filter('the_content', [$this, 'addLinksToContent'], 2);
        }
    }

    /**
     * @param string $content
     * @return string
     */
    public function addLinksToContent($content)
    {
        global $post;
        if (is_singular()) {
            $filter = new ItemFilter();
            $filter->linkedPostId = $post->ID;
            $items = Core::$plugin->items->find($filter);
            foreach ($items as $item) {
                if (!Core::$plugin->addLink2Text($item->anchor, $item->generateUrl(), $content)) {
                    Core::$plugin->posts->delete($post->ID, $item->id);
                }
            }
        }
        return $content;
    }
}
