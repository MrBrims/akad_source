<div class="row mb-4 page-meta">
    <div class="col-lg-3 col-4">
        <div class="page-meta-title">Autor, Doctor</div>
        <div class="page-meta-desc">
            <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?= get_the_author_meta('display_name', get_the_author_meta('ID')); ?>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-4">
        <div class="page-meta-title">Veröffentlicht</div>
        <div class="page-meta-desc"><?= get_the_date('d.m.Y'); ?></div>
    </div>
    <div class="col-lg-3 col-4">
        <div class="page-meta-title">Erneut</div>
        <div class="page-meta-desc"><?= get_the_modified_date('d.m.Y');; ?></div>
    </div>
</div>