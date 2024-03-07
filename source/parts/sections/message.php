<section class="message section">
	<div class="container">
		<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'message_title'))) : ?>
			<h2 class="message__title title">
				<?php echo carbon_get_post_meta(get_the_ID(), 'message_title'); ?>
			</h2>
		<?php endif ?>
		<p class="message__subtitle">
			<?php echo carbon_get_post_meta(get_the_ID(), 'message_subtitle'); ?>
		</p>
	</div>
	<div class="message__container">
		<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'ak_bigform_title'))) : ?>
			<h3 class="title message__title">
				<?php echo carbon_get_post_meta(get_the_ID(), 'ak_bigform_title'); ?>
			</h3>
		<?php endif ?>
		<?php get_template_part(carbon_get_post_meta(get_the_ID(), 'ak_complex_global_select')); ?>
	</div>
</section>