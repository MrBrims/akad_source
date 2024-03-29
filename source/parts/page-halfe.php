<?php

/** Template Name: Halfe & Coaching */

get_header();

?>

<main class="main">
    <?php get_template_part('parts/sections/hero'); ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <div class="rich-text section">
                    <?php the_content(); ?>
                </div>
                <?php
                get_template_part('parts/sections/price-list');
                get_template_part('parts/sections/guarant');
                get_template_part('parts/sections/text');
                get_template_part('parts/sections/how-work');
                ?>
            </div>
            <div class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/team'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_template_part('parts/sections/message');
    get_template_part('parts/sections/reviews');
    get_template_part('parts/sections/blog-slider');
    get_template_part('parts/sections/main-faq');
    get_template_part('parts/sections/contact');
    get_template_part('parts/shema/microdata');
    ?>
</main>

<?php get_footer(); ?>