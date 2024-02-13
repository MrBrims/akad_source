<?php

/** Template Name: Homepage */
?>

<?php get_header(); ?>

<main class="main home-main">
    <?php
    get_template_part('parts/sections/hero');
    get_template_part('parts/sections/statistic');
    ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <?php
                get_template_part('parts/sections/coaching');
                get_template_part('parts/sections/guarant');
                get_template_part('parts/sections/relax');
                get_template_part('parts/sections/price');
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
    get_template_part('parts/sections/after-form');
    get_template_part('parts/sections/reviews');
    get_template_part('parts/sections/after-reviews');
    get_template_part('parts/sections/main-faq');
    get_template_part('parts/sections/contact');
    ?>
</main>

<?php get_footer(); ?>