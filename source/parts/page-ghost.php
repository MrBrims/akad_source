<?php

/** Template Name: GHOSTWRITING */

get_header();

?>

<main class="main">
    <?php get_template_part('parts/sections/hero'); ?>
    <div class="container">
        <div class="content">
            <div class="rich-text section">
                <?php the_content(); ?>
            </div>
            <?php
            get_template_part('parts/sections/bakalavr');
            get_template_part('parts/sections/text');
            get_template_part('parts/sections/qualification');
            get_template_part('parts/sections/text-two');
            get_template_part('parts/sections/guarant');
            get_template_part('parts/sections/relax');
            get_template_part('parts/sections/how-work');
            ?>
        </div>
    </div>
    <?php
    get_template_part('parts/sections/price');
    get_template_part('parts/sections/text-three');
    get_template_part('parts/sections/after-form');
    get_template_part('parts/sections/main-faq');
    get_template_part('parts/sections/reviews');
    get_template_part('parts/sections/contact');
    get_template_part('parts/sections/message');
    get_template_part('parts/shema/microdata');
    ?>
</main>

<?php get_footer(); ?>