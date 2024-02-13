<section class="section cooperation">
	<div class="container">
		<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'cooperation_title'))) : ?>
			<h2 class="title cooperation__title">
				<?php echo carbon_get_post_meta(get_the_ID(), 'cooperation_title'); ?>
			</h2>
		<?php endif ?>
		<div class="cooperation__items">
			<?php foreach ((carbon_get_post_meta(get_the_ID(), 'cooperation_card')) as $key) : ?>
				<div class="cooperation__item">
					<div class="cooperation__item-head">
						<img class="cooperation__item-icon" src="<?php echo $key['cooperation_card_icon']; ?>" alt="icon">
						<h4 class="cooperation__item-title">
							<?php echo $key['cooperation_card_title']; ?>
						</h4>
					</div>
					<div class="cooperation__text">
						<?php echo $key['cooperation_card_text']; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>