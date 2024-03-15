<?php

/** Template Name: ÜBER UNS - Bewertungen */

get_header();

?>

<main class="main">
    <?php
    get_template_part('parts/sections/hero-small');
    echo '<div class="rich-text section bewertunger">';
    the_content();
    echo '</div>';
    get_template_part('parts/sections/interview');
    get_template_part('parts/complex_blocks/estimate');
    get_template_part('parts/sections/reviews');
    get_template_part('parts/sections/message');
    ?>
</main>

<?php get_footer(); ?>