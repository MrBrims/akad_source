<?php

use luckywp\wikiLinkingPremium\core\Core;

?>
<div class="wrap">
    <h1><?= esc_html__('Wiki Linking Settings', 'luckywp-wiki-linking') ?></h1>
    <?php Core::$plugin->settings->showPage() ?>
</div>