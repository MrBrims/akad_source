<?php

/** Template Name: ÜBER UNS - Wie wir vorgehen */

get_header();

?>

<main class="main">
    <div class="our-approach">
        <?php
        get_template_part('parts/sections/hero-small');
        get_template_part('parts/sections/cooperation');
        get_template_part('parts/sections/how-work');
        get_template_part('parts/complex_blocks/estimate');
        get_template_part('parts/sections/reviews');
        get_template_part('parts/sections/main-faq');
        get_template_part('parts/sections/message');
        ?>
    </div>
</main>

<?php get_footer(); ?>