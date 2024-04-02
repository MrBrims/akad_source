<section class="section diagram">
	<div class="container">
		<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'diagram_title'))) : ?>
			<h2 class="title diagram__title">
				<?php echo carbon_get_post_meta(get_the_ID(), 'diagram_title'); ?>
			</h2>
		<?php endif ?>
		<ul class="diagram__list">
			<?php foreach ((carbon_get_post_meta(get_the_ID(), 'diagram_list')) as $key) : ?>
				<li class="diagram__list-item">
					<?php echo $key['diagram_list_text']; ?>
				</li>
			<?php endforeach; ?>
		</ul>
		<img class="diagram__img" src="<?php echo carbon_get_post_meta(get_the_ID(), 'diagram_img'); ?>" alt="<?php Helpers::imageAlt(carbon_get_post_meta(get_the_ID(), 'diagram_img')); ?>">
		<h2 class="diagram__subtitle">
			<?php echo carbon_get_post_meta(get_the_ID(), 'diagram_subtitle'); ?>
		</h2>
		<div class="diagram__items">
			<?php foreach ((carbon_get_post_meta(get_the_ID(), 'diagram_items')) as $key) : ?>
				<div class="diagram__item">
					<div class="diagram__item-box">
						<img class="diagram__item-icon" src="<?php echo $key['diagram_items_img']; ?>" alt="<?php Helpers::imageAlt($key['diagram_items_img']); ?>">
					</div>
					<div class="diagram__item-text">
						<?php echo $key['diagram_items_text']; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>