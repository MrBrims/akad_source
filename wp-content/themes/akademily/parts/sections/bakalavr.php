<section class="section bakalavr">
	<div class="container">
		<?php if (!empty(carbon_get_theme_option('bakalavr_title'))) : ?>
			<h2 class="title bakalavr__title">
				<?php echo carbon_get_theme_option('bakalavr_title'); ?>
			</h2>
		<?php endif ?>
		<div class="bakalavr__list">
			<?php if (!empty(carbon_get_theme_option('bakalavr_list'))) : ?>
				<?php echo apply_filters('the_content', carbon_get_theme_option('bakalavr_list')); ?>
			<?php endif ?>
		</div>
	</div>
</section>