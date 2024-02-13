<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'rich_text_two'))) : ?>
	<section class="text rich-text relax section">
		<div class="container">
			<div class="relax__content">
				<?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'rich_text_two')); ?>
			</div>
		</div>
	</section>
<?php endif ?>