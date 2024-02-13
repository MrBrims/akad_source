<?php

/** Template Name: Lektorat */

get_header(); 

?>

<main class="main">
    <?php get_template_part('parts/sections/hero'); ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <?php get_template_part('parts/sections/relax'); ?>
                <div class="rich-text section">
                    <?php the_content(); ?>
                </div>
                <?php
                get_template_part('parts/sections/diagram');
                get_template_part('parts/sections/text-two');
                get_template_part('parts/sections/text');
                get_template_part('parts/sections/guarant');
                get_template_part('parts/sections/price-list');
                get_template_part('parts/sections/how-work');


                ?>
            </div>
            <aside class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/team'); ?>
                </div>
            </aside>
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