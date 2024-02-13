<?php

/** Template Name: Main Faq */

get_header();

?>

<main class="main">
	<?php
	get_template_part('parts/sections/hero-faq');
	get_template_part('parts/sections/main-faq');
	get_template_part('parts/sections/message');
	get_template_part('parts/sections/contact');
	?>
</main>

<?php get_footer(); ?>