<section class="section reviews-load">
	<div class="container">
		<h2 class="title reviews-load__title">
			Bewertungen auf unserer Website
		</h2>
		<div class="reviews-load__items">
			<?php foreach ((carbon_get_theme_option('site_reviews')) as $key) : ?>
				<div class="reviews-load__item">
					<h4 class="reviews-load__item-name">
						<?php echo $key['site_reviews_name']; ?>
					</h4>
					<div class="reviews-load__item-num">
						<?php echo $key['site_reviews_score']; ?>
					</div>
					<div class="reviews-load__item-text">
						<?php echo apply_filters('the_content', $key['site_reviews_text']); ?>
					</div>
					<div class="reviews-load__item-date">
						<?php echo $key['site_reviews_date']; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="reviews-load__btn btn">
			Load More
		</div>
	</div>
</section>