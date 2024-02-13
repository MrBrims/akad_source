<?php

namespace luckywp\wikiLinkingPremium\core\db;

use luckywp\wikiLinkingPremium\core\base\BaseObject;
use luckywp\wikiLinkingPremium\core\Core;
use wpdb;

class Db extends BaseObject
{

    /**
     * @var wpdb
     */
    public $wpdb;

    public $prefix;

    public function init()
    {
        global $wpdb;
        $this->wpdb = $wpdb;

        if ($this->prefix === null) {
            $this->prefix = $wpdb->prefix . Core::$plugin->prefix;
        }
    }
}
