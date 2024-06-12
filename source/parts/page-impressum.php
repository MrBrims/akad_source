<?php

/** Template Name: Impressum */

get_header(); 

?>

<main class="main">
    <?php
    get_template_part('parts/sections/hero-small');
    get_template_part('parts/sections/goals');
    get_template_part('parts/sections/connect');
    get_template_part('parts/sections/map-contact');
    get_template_part('parts/sections/edulab');
    ?>
    <div class="container"><?php the_content() ?></div>
    <?php
    get_template_part('parts/sections/team-mp');
    get_template_part('parts/sections/blitz');
    get_template_part('parts/sections/web-widgets');
    get_template_part('parts/complex_blocks/estimate');
    get_template_part('parts/sections/reviews');
	get_template_part('parts/sections/message');
    ?>
</main>

<?php get_footer(); ?>