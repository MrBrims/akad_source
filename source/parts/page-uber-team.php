<?php

/** Template Name: ÜBER UNS - Unser Team */

get_header();

?>

<main class="main">
    <?php
    get_template_part('parts/sections/hero-small');
    get_template_part('parts/sections/team-mp');
    get_template_part('parts/sections/team-mo');
    get_template_part('parts/sections/team-ma');
    get_template_part('parts/sections/team-dev');
    get_template_part('parts/sections/team-fin');
	get_template_part('parts/sections/message');
    get_template_part('parts/complex_blocks/estimate');
    get_template_part('parts/sections/reviews');
    get_template_part('parts/sections/how-work');
    get_template_part('parts/sections/main-faq');
	get_template_part('parts/sections/message');
    ?>
</main>

<?php get_footer(); ?>