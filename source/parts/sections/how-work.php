<section class="how-work section">
	<div class="container">
	<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_title_after'))) : ?>
		<h2 class="how-work__title title">
			<?php echo carbon_get_post_meta(get_the_ID(), 'how-work_title_after'); ?>
		</h2>
	<?php endif ?>
	<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_text_after'))) : ?>
		<div class="how-work__content rich-text">
			<?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'how-work_text_after')); ?>
		</div>
	<?php endif ?>
	<div class="how-work__inner">
		<?php get_template_part('parts/blocks/accordion-work'); ?>
	</div>
	<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_title_before'))) : ?>
		<h2 class="how-work__title title">
			<?php echo carbon_get_post_meta(get_the_ID(), 'how-work_title_before'); ?>
		</h2>
	<?php endif ?>
	<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_text_before'))) : ?>
		<div class="how-work__content rich-text">
			<?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'how-work_text_before')); ?>
		</div>
	<?php endif ?>
	</div>
</section>