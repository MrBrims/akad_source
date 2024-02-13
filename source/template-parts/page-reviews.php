<?php
/** Template Name: Все отзывы */
get_header();
while (have_posts()) {
    the_post();
    ?>
    <div class="container">
        <div class="row">
            <div id="article" class="col-lg-9 col-12 page-wrapper">
                <div class="global-title mb-5">
                    <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
                </div>
                <?php
                get_template_part('template-parts/components/page-meta');
                echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'de_desc'));
                ?>
                <div class="row mb-5">
                    <?php
                    $reviews = get_posts([
                        'post_type' => 'reviews',
                        'numberposts' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ]);
                    foreach ($reviews as $review) {
                        ?>
                        <div class="col-lg-4 col-md-6 col-12 mb-4">
                            <div class="reviews-item h-100">
                                <div class="reviews-item-name d-flex mb-4">
                                    <div class="reviews-item-name-img me-3 d-flex align-items-center justify-content-center">
                                        <img src="<?= DE_URI; ?>/assets/images/home/reviews-avatar.svg" alt="Avatar"/>
                                    </div>
                                    <div class="reviews-item-name-text pt-2 pb-2">
                                        <div class="reviews-item-name-text-nickname">
                                            <?= $review->post_title; ?>
                                        </div>
                                        <div class="reviews-item-name-text-category">
                                            Bewertung <?= carbon_get_post_meta($review->ID, 'de_estimation') ?> von 5
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-item-text"><?= $review->post_content; ?></div>
                                <div class="reviews-item-date"><?= get_the_date('d.m.Y', $review->ID); ?></div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php
}
get_footer();