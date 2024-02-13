<?php

/** Template Name: ÜBER UNS - Bewertungen */

get_header(); 

?>

<main class="main">
    <?php get_template_part('parts/sections/hero'); ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <?php
                get_template_part('parts/sections/reviews');
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
		get_template_part('parts/sections/message');
    get_template_part('parts/sections/main-faq');
    get_template_part('parts/sections/contact');
    ?>
</main>

<?php get_footer(); ?>