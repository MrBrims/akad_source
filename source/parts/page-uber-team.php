<?php

/** Template Name: ÜBER UNS - Unser Team */

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
                get_template_part('parts/sections/team');
                get_template_part('parts/sections/how-work');
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
    get_template_part('parts/sections/statistic');
    get_template_part('parts/sections/contact');
    ?>
</main>

<?php get_footer(); ?>