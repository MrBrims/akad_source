<?php

/** Template Name: Импрессум */

get_header();
while (have_posts()) {
    the_post();
    ?>
    <div class="seo-banner" style="background-image: url('<?= carbon_get_post_meta(get_the_ID(), 'de_fon'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="seo-banner__wrap">
                        <div class="seo-banner__title">
                            <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
                        </div>
                        <div class="seo-banner__subtitle">
                            <?= carbon_get_post_meta(get_the_ID(), 'de_subtitle'); ?>
                        </div>
                        <a class="btn btn-primary btn-lg" href="#" data-bs-toggle="modal" data-bs-target="#Modal">Jetzt anfragen</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="escort">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg mb-4">
                    <a href="/masterarbeit/" class="escort-list">
                        <div class="escort-list-img mb-3">
                            <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Masterarbeit"/>
                        </div>
                        <div class="escort-list-name">Masterarbeit</div>
                    </a>
                </div>
                <div class="col-12 col-lg mb-4">
                    <a href="/bachelorarbeit/" class="escort-list">
                        <div class="escort-list-img mb-3">
                            <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Bachelorarbeit"/>
                        </div>
                        <div class="escort-list-name">Bachelorarbeit</div>
                    </a>
                </div>
                <div class="col-12 col-lg mb-4">
                    <a href="/diplomarbeit/" class="escort-list">
                        <div class="escort-list-img mb-3">
                            <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Diplomarbeit"/>
                        </div>
                        <div class="escort-list-name">Diplomarbeit</div>
                    </a>
                </div>
                <div class="col-12 col-lg mb-4">
                    <a href="/hausarbeit/" class="escort-list">
                        <div class="escort-list-img mb-3">
                            <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Hausarbeit"/>
                        </div>
                        <div class="escort-list-name">Hausarbeit</div>
                    </a>
                </div>
                <div class="col-12 col-lg mb-4">
                    <a href="/doktorarbeit/" class="escort-list">
                        <div class="escort-list-img mb-3">
                            <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Doktorarbeit"/>
                        </div>
                        <div class="escort-list-name">Doktorarbeit</div>
                    </a>
                </div>
                <div class="col-12 col-lg mb-4">
                    <a href="/losung-der-aufgaben/" class="escort-list">
                        <div class="escort-list-img mb-3">
                            <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Lösung der Aufgaben"/>
                        </div>
                        <div class="escort-list-name">Lösung der Aufgaben</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
		  		<div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5">
                <div class="global-title mb-5">
                    <h1><?= get_the_title(); ?></h1>
                </div>
                <?php
					 the_content();
                /** Sections bottom */
                get_template_part('template-parts/components/sectionsBottom');

                /** Author */
               //  get_template_part('template-parts/components/page-author');

                /** FAQ */
                get_template_part('template-parts/components/faq');
					 
                ?>

            </div>
				<?php get_sidebar(); ?>
        </div>

    </div>

    <?php get_template_part('template-parts/components/blog'); ?>

    <div class="background-light">
        <div class="container pt-5">
            <?php
            /** Reviews */
            get_template_part('template-parts/components/reviews');
            ?>
        </div>
    </div>
    <?php
}
get_footer();