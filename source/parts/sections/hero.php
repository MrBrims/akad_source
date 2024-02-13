<section class="hero">
	<div class="container">
		<h1 class="hero__title">
			<?php echo carbon_get_post_meta(get_the_ID(), 'hero_title_left'); ?><span><?php echo carbon_get_post_meta(get_the_ID(), 'hero_title_right') ?></span>
		</h1>
		<div class="hero__items">
			<div class="hero__item">
				<p class="hero__text">
					<?php echo carbon_get_post_meta(get_the_ID(), 'hero_text'); ?>
				</p>
				<!-- <a class="hero__btn btn popup-link" href="#popup-form">
					PREIS KALKULIEREN
				</a> -->
				<?php get_template_part('parts/blocks/rating'); ?>
			</div>
			<div class="hero__item">
				<div class="hero__form-box">
					<p class="hero__form-title">
						Anruf bestellen
					</p>
					<?php
					if (get_the_ID() == 73 || get_page_template_slug() == "parts/page-halfe.php") {
						get_template_part('parts/blocks/form-coach');
					} else {
						get_template_part('parts/blocks/form-litle');
					}
					?>
				</div>
				<img class="hero__decore-img" src="<?php echo carbon_get_post_meta(get_the_ID(), 'hero_img'); ?>">
			</div>
		</div>
</section>
<div class="container">
	<?php if (!is_front_page() && function_exists('yoast_breadcrumb')) { ?>
		<div class="single-breadcrumb">
			<?php yoast_breadcrumb('<div class="single-breadcrumb__list">', '</div>'); ?>
		</div>
	<?php } ?>
</div>