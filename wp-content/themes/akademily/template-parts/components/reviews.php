<?php
$id = (is_front_page()) ? DE_HOMEPAGE : get_the_ID();
$reviews = carbon_get_post_meta($id, 'de_reviews');
if (!empty($reviews)) {
    $ids = [];
    foreach ($reviews as $review) {
        $ids[] = $review['id'];
    }

    $posts = get_posts([
        'post_type' => 'reviews',
        'include' => implode(',', $ids),
    ]);
    ?>
    <div class="row pb-5 reviews">
        <div class="col-12 mb-5">
            <div class="global-title">So bewerten uns unsere Kunden</div>
        </div>
        <div class="col-12">
            <div id="reviews-swiper" class="swiper h-100">
                <div class="swiper-wrapper h-100">
                    <?php foreach ($posts as $p) { ?>
                        <div class="swiper-slide h-100">
                            <div class="reviews-item h-100">
                                <div class="reviews-item-name d-flex mb-4">
                                    <div class="reviews-item-name-img me-3 d-flex align-items-center justify-content-center">
                                        <img src="<?= DE_URI; ?>/assets/images/home/reviews-avatar.svg"
                                             alt="<?= $p->post_title; ?>"
                                        >
                                    </div>
                                    <div class="reviews-item-name-text pt-2 pb-2">
                                        <div class="reviews-item-name-text-nickname">
                                            <?= $p->post_title; ?>
                                        </div>
                                        <div class="reviews-item-name-text-category">
                                            Bewertung <?= carbon_get_post_meta($p->ID, 'de_estimation') ?> von 5
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-item-text">
                                    <?= $p->post_content; ?>
                                </div>
                                <div class="reviews-item-date"><?= get_the_date('d.m.Y', $p->ID); ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}