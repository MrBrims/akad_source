<section class="coaching">
	<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'coaching_title'))) : ?>
		<h2 class="title coaching__title">
			<?php echo carbon_get_post_meta(get_the_ID(), 'coaching_title'); ?>
		</h2>
	<?php endif ?>
	<div class="coaching__content">
		<?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'coaching_text')); ?>
	</div>
</section>