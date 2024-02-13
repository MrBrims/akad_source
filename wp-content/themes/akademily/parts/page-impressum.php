<?php

/** Template Name: Impressum */

get_header(); 

?>

<main class="main">
    <?php get_template_part('parts/sections/hero-kont'); ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <?php
                get_template_part('parts/sections/edulab');
                get_template_part('parts/sections/main-faq');
                ?>
            </div>
            <aside class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/form-sidebar'); ?>
                </div>
            </aside>
        </div>
    </div>
    <?php 
    get_template_part('parts/sections/contact'); 
    ?>
</main>

<?php get_footer(); ?>