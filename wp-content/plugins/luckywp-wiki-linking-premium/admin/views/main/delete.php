<?php
/**
 * @var $item \luckywp\wikiLinkingPremium\plugin\entities\Item
 */

use luckywp\wikiLinkingPremium\admin\helpers\AdminHtml;
use luckywp\wikiLinkingPremium\core\Core;
use luckywp\wikiLinkingPremium\core\helpers\Html;

?>
<div class="lwpwlModalBox lwpwlModalDeleteItem">
    <div class="lwpwlModalBox_close lwpwlModal-close" title="<?= esc_attr__('Cancel', 'luckywp-wiki-linking') ?>"></div>
    <div class="lwpwlModalBox_title"><?= esc_html__('Confirmation', 'luckywp-wiki-linking') ?></div>
    <div class="lwpwlModalBox_body">
        <?php
        printf(
            esc_html__('Are you sure you want to delete the keyword phrase %s?', 'luckywp-wiki-linking'),
            '<b>' . $item->anchor . '</b>'
        );
        ?>
    </div>
    <div class="lwpwlModalBox_footer">
        <div class="lwpwlModalBox_footer_buttons">
            <?= AdminHtml::button(esc_html__('Cancel', 'luckywp-wiki-linking'), [
                'class' => 'lwpwlModal-close lwpwlFloatLeft'
            ]) ?>
            <form
                action="<?= admin_url('admin-ajax.php?_ajax_nonce=' . wp_create_nonce(Core::$plugin->prefix . 'adminMain') . '&action=lwpwl_delete_item&id=' . $item->id) ?>"
                data-ajax-form="1"
            >
                <?= Html::hiddenInput('do', 1) ?>
                <?= AdminHtml::button(esc_html__('Delete', 'luckywp-wiki-linking'), [
                    'class' => 'lwpwlDangerButton',
                    'submit' => true,
                ]) ?>
            </form>
        </div>
    </div>
</div>