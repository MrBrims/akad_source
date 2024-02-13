<?php

namespace luckywp\wikiLinkingPremium\plugin;

use luckywp\wikiLinkingPremium\core\base\BaseObject;
use luckywp\wikiLinkingPremium\core\Core;

class Activation extends BaseObject
{

    public function init()
    {
        register_activation_hook(Core::$plugin->fileName, [$this, 'activate']);
    }

    public function activate()
    {
        Core::$plugin->db->migrate();
        Core::$plugin->settings->addItemsPerPostFields();
        Core::$plugin->settings->install();
        Plugin::setAccess();
    }
}
