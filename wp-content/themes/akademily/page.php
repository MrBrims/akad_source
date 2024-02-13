<?php

while (have_posts()) {
    the_post();

    get_header();

?>

    <main class="main">
        <section class="hero hero-single">
            <div class="container">
                <?php if (!is_front_page() && function_exists('yoast_breadcrumb')) { ?>
                    <div class="single-breadcrumb">
                        <?php yoast_breadcrumb('<div class="single-breadcrumb__list">', '</div>'); ?>
                    </div>
                <?php } ?>
                <h1 class="hero-single__title">
                    <?php the_title(); ?>
                </h1>
            </div>
        </section>
        <div class="container">
            <div class="inner">
                <div class="content">
                    <div class="meta-single">
                        <div class="meta-single__item meta-single__date">
                            Veröffentlicht: <?php the_date('d.m.Y') ?>
                        </div>
                        <div class="meta-single__item meta-single__modif">
                            Erneut: <?php the_modified_date('d.m.Y') ?>
                        </div>
                        <div class="meta-single__item meta-single__author">
                            Autor, Doctor:
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                <?php echo get_the_author_meta('display_name', get_the_author_meta('ID')); ?>
                            </a>
                        </div>
                    </div>
                    <div class="rich-text section">
                        <?php
                        the_content();
                        get_template_part('parts/blocks/page-author');
                        ?>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="team-vidget">
                        <?php get_template_part('parts/blocks/form-sidebar'); ?>
                    </div>
                </aside>
            </div>
        </div>
        <?php get_template_part('parts/sections/contact'); ?>
    </main>

<?php
}
get_footer();

?>