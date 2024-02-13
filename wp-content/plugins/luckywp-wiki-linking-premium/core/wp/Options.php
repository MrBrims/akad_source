<?php

namespace luckywp\wikiLinkingPremium\core\wp;

use luckywp\wikiLinkingPremium\core\base\BaseObject;
use luckywp\wikiLinkingPremium\core\Core;

class Options extends BaseObject
{

    public function get($option, $default = false)
    {
        return get_option(Core::$plugin->prefix . $option, $default);
    }

    public function set($option, $value, $autoload = null)
    {
        return update_option(Core::$plugin->prefix . $option, $value, $autoload);
    }

    public function delete($option)
    {
        delete_option(Core::$plugin->prefix . $option);
    }
}
