<?php
return [
    'textDomain' => 'luckywp-wiki-linking',
    'bootstrap' => [
        'activation',
        [\luckywp\wikiLinkingPremium\plugin\Plugin::className(), 'checkDb'],
        'admin',
        'front',
    ],
    'pluginsLoadedBootstrap' => [
        'settings',
    ],
    'components' => [
        'activation' => \luckywp\wikiLinkingPremium\plugin\Activation::className(),
        'settings' => [
            'class' => \luckywp\wikiLinkingPremium\plugin\Settings::className(),
            'initGroupsConfigFile' => __DIR__ . '/settings.php',
        ],
        'options' => \luckywp\wikiLinkingPremium\core\wp\Options::className(),
        'db' => \luckywp\wikiLinkingPremium\plugin\Db::className(),
        'admin' => \luckywp\wikiLinkingPremium\admin\Admin::className(),
        'front' => \luckywp\wikiLinkingPremium\front\Front::className(),
        'request' => \luckywp\wikiLinkingPremium\core\base\Request::className(),
        'view' => \luckywp\wikiLinkingPremium\core\base\View::className(),
        'items' => \luckywp\wikiLinkingPremium\plugin\repositories\ItemRepository::className(),
        'posts' => \luckywp\wikiLinkingPremium\plugin\repositories\PostRepository::className(),
    ],
];
