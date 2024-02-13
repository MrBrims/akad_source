<?php

/** Template Name: New Price */

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
				get_template_part('parts/sections/price-kosten');
				get_template_part('parts/sections/text');
				get_template_part('parts/sections/price-boni');
				get_template_part('parts/sections/text-two');
				get_template_part('parts/sections/price-ghost');
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
	get_template_part('parts/sections/price-lektorat');
	get_template_part('parts/sections/price-coach');
	get_template_part('parts/sections/message');
	get_template_part('parts/sections/main-faq');
	get_template_part('parts/sections/contact');
	?>
</main>

<?php get_footer(); ?>