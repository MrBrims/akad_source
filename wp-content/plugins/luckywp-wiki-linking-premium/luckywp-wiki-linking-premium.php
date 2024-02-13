<?php
/*
Plugin Name: LuckyWP Wiki Linking Premium
Plugin URI: https://theluckywp.com/product/wiki-linking/
Description: The plugin allows to easily organize a linking in the wiki style on the website.
Version: 1.0.2
Author: LuckyWP
Author URI: https://theluckywp.com/
Text Domain: luckywp-wiki-linking
Domain Path: /languages

Plugin LuckyWP Wiki Linking is comprised of two parts:

1) The PHP code and integrated HTML are licensed under the General Public License.
See license-gpl.txt in plugin directory.

2) All other parts, but not limited to the CSS code, images, and design are licensed under LuckyWP License.
See license-luckywp.txt in plugin directory.
*/

if (class_exists('lwpwlAutoloader')) {
    add_action('admin_notices', function () {
        ?>
        <div class="notice notice-error">
            <p>
                <?php
                printf(
                    esc_html__('%1$s and %2$s plugins cannot work at the same time. Deactivate one of them.', 'luckywp-wiki-linking'),
                    '<b>LuckyWP Wiki Linking</b>',
                    '<b>LuckyWP Wiki Linking Premium</b>'
                );
                ?>
            </p>
        </div>
        <?php
    });
    return;
}

require 'lwpwlPremiumAutoloader.php';
$lwpwlPremiumAutoloader = new lwpwlPremiumAutoloader();
$lwpwlPremiumAutoloader->register();
$lwpwlPremiumAutoloader->addNamespace('luckywp\wikiLinkingPremium', __DIR__);

$config = require(__DIR__ . '/config/plugin.php');
(new \luckywp\wikiLinkingPremium\plugin\Plugin($config))->run('1.0.2', __FILE__, 'lwpwl_');