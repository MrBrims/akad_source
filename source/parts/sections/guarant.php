<section class="section guarant">
	<?php if (!empty(carbon_get_theme_option('guarant_title'))) : ?>
		<h2 class="title guarant__title">
			<?php echo carbon_get_theme_option('guarant_title'); ?>
		</h2>
	<?php endif ?>
	<p class="guarant__subtitle">
		<?php echo carbon_get_theme_option('guarant_subtitle'); ?>
	</p>
	<?php foreach ((carbon_get_theme_option('guarant_card')) as $key) : ?>
		<div class="guarant__item">
			<p class="guarant__item-title">
				<?php echo $key['guarant_card_title']; ?>
			</p>
			<p class="guarant__item-subtitle">
				<?php echo $key['guarant_card_subtitle']; ?>
			</p>
			<p class="guarant__item-text">
				<?php echo $key['guarant_card_text']; ?>
			</p>
			<img class="guarant__item-img" src="<?php echo $key['guarant_card_img']; ?>" alt="<?php Helpers::imageAlt($key['guarant_card_img']); ?>">
		</div>
	<?php endforeach; ?>
</section>