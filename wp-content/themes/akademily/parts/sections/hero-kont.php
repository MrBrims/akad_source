<section class="hero hero-kont">
	<div class="container">
		<h1 class="hero__title">
			<?php echo carbon_get_post_meta(get_the_ID(), 'hero_title_left'); ?>
		</h1>
	</div>
</section>
<div class="container">
	<?php if (!is_front_page() && function_exists('yoast_breadcrumb')) { ?>
		<div class="single-breadcrumb">
			<?php yoast_breadcrumb('<div class="single-breadcrumb__list">', '</div>'); ?>
		</div>
	<?php } ?>
</div>