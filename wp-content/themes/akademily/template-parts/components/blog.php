<div class="container blog-block js-fixes-block-end mb-5">
    <div class="row pb-5">
        <div class="col-12">
            <div class="global-title">So bewerten uns unsere Kunden</div>
        </div>
    </div>
    <div class="row">
        <?php
        $items = get_posts([
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 4,
        ]);
        if ($items) {
            foreach ($items as $item) {
                ?>
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <a href="<?= get_the_permalink($item->ID); ?>" class="blog-block__item">
                        <div class="blog-block__item-image">
                            <img src="<?= get_the_post_thumbnail_url($item->ID, 'large'); ?>"
                                 alt="<?= $item->post_title; ?>"
                            />
                        </div>
                        <div class="blog-block__item-info d-flex justify-content-between pt-3 pb-3">
                            <div><?= get_the_category($item->ID)[0]->name; ?></div>
                            <div><?= get_the_date('d.m.Y', $item); ?></div>
                        </div>
                        <div class="blog-block__item-title">
                            <?= $item->post_title; ?>
                        </div>
                    </a>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>