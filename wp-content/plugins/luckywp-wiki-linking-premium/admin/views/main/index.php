<?php
/**
 * @var $this \luckywp\wikiLinkingPremium\core\base\View
 * @var $pagination \luckywp\wikiLinkingPremium\core\data\PaginationData
 * @var $model \luckywp\wikiLinkingPremium\admin\forms\main\SearchForm
 * @var $hasItems bool
 * @var $items \luckywp\wikiLinkingPremium\plugin\entities\Item[]
 * @var $cardItem \luckywp\wikiLinkingPremium\plugin\entities\Item
 */

use luckywp\wikiLinkingPremium\admin\helpers\AdminHtml;
use luckywp\wikiLinkingPremium\admin\widgets\processBinding\ProcessBinding;
use luckywp\wikiLinkingPremium\core\admin\helpers\AdminUrl;
use luckywp\wikiLinkingPremium\core\admin\widgets\paginator\Paginator;
use luckywp\wikiLinkingPremium\core\Core;
use luckywp\wikiLinkingPremium\core\helpers\Html;

?>
<div class="wrap">
    <h1 class="wp-heading-inline"><?= esc_html__('Wiki Linking', 'luckywp-wiki-linking') ?></h1>
    <?php if ($hasItems) { ?>
        <a href="<?= AdminUrl::to('main', 'create') ?>" class="page-title-action"><?= esc_html__('Add Keyword Phrase', 'luckywp-wiki-linking') ?></a>
    <?php } ?>
    <hr class="wp-header-end">
    <div class="lwpwlClearfix lwpwlMtBase lwpwlItems" data-i18n-row-deleted="<?= esc_attr__('Keyword phrase removed', 'luckywp-wiki-linking') ?>">
        <div class="lwpwlItems_left">
            <?php
            if ($hasItems) {
                ?>
                <form method="get">
                    <input type="hidden" name="page" value="<?= Core::$plugin->prefix ?>main">
                    <table class="lwpwlGridView">
                        <thead>
                            <tr>
                                <th><?= esc_html__('Keyword phrase', 'luckywp-wiki-linking') ?></th>
                                <th>
                                    <?= esc_html__('Links', 'luckywp-wiki-linking') ?>
                                    <span class="dashicons dashicons-editor-help" title="<?= esc_attr__('Search by post ID, post name and custom link', 'luckywp-wiki-linking') ?>"></span>
                                </th>
                                <th class="lwpwlTextCenter">
                                    <?= esc_html__('Posts', 'luckywp-wiki-linking') ?>
                                    <span class="dashicons dashicons-editor-help" title="<?= esc_attr__('Number of posts with displayed link', 'luckywp-wiki-linking') ?>"></span>
                                </th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>
                                    <?= AdminHtml::textInput('anchor', $model->anchor, ['style' => 'width:100%']) ?>
                                </td>
                                <td>
                                    <?= AdminHtml::textInput('url', $model->url, ['style' => 'width:100%']) ?>
                                    <?= AdminHtml::button('d', ['submit' => true, 'class' => 'lwpwlHide']) ?>
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($items) { ?>
                                <?php foreach ($items as $item) { ?>
                                    <tr class="lwpwlItems_row<?= $cardItem && $cardItem->id == $item->id ? ' lwpwlItems_row-selected' : '' ?>" data-id="<?= $item->id ?>">
                                        <td class="lwpwlItems_row_loadCard">
                                            <?= $item->anchor ?>
                                        </td>
                                        <td class="lwpwlItems_row_loadCard lwpwlItems_row_url">
                                            <?php
                                            if ($item->isPost) {
                                                echo '<span class="lwpwlItems_row_url_postIco"></span> ';
                                            }
                                            echo Html::a(
                                                $item->isCustom ? $item->url : $item->post->post_title,
                                                $item->generateUrl()
                                            );
                                            ?>
                                        </td>
                                        <td class="lwpwlItems_row_loadCard lwpwlItems_row_count">
                                            <?= count($item->linkedPosts) ?>
                                        </td>
                                        <td class="lwpwlItems_row_actions">
                                            <a
                                                href="<?= AdminUrl::to('main', 'update', ['id' => $item->id]) ?>"
                                                class="dashicons dashicons-edit lwpwlGridView_actionIco"
                                                title="<?= esc_attr__('Edit', 'luckywp-wiki-linking') ?>"
                                            ></a>
                                            <span
                                                class="dashicons dashicons-no lwpwlGridView_actionIco lwpwlGridView_actionIco-danger lwpwlItems_deleteItemFromList"
                                                title="<?= esc_attr__('Delete', 'luckywp-wiki-linking') ?>"
                                            ></span>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr class="lpilItems_noRows">
                                    <td colspan="99"><?= esc_html__('Nothing found.', 'luckywp-wiki-linking') ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
                <?= Paginator::widget([
                    'data' => $pagination,
                    'containerClass' => 'lwpwlMtBase',
                ]) ?>
                <?php
            } else {
                echo $this->render('_begin');
            }
            ?>
        </div>
        <div class="lwpwlItems_right">


            <?php // Карточка ?>
            <div class="lwpwlItems_cardWrap">
                <div class="lwpwlItems_cardContainer">
                    <?php if ($cardItem) { ?>
                        <?= $this->render('_card', ['item' => $cardItem]) ?>
                    <?php } ?>
                </div>
                <div class="lwpwlItems_noCard<?= $hasItems && !$cardItem ? '' : ' lwpwlHide' ?>">
                    <?= esc_html__('For getting more information on keyword phrase, select it from the list.', 'luckywp-wiki-linking') ?>
                </div>
            </div>
            <?php // Карточка - Конец ?>


        </div>
    </div>
</div>
<?= ProcessBinding::widget() ?>
