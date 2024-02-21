<div class="footer__middle">
	<div class="footer__middle-inner">
		<h4 class="footer__title">
			<?php echo carbon_get_theme_option('footer_title_menu'); ?>
		</h4>
		<?php echo apply_filters('the_content', carbon_get_theme_option('footer_hilfe_links')); ?>
	</div>
	<div class="footer__middle-inner">
		<h4 class="footer__title">
			GHOSTWRITING
		</h4>
		<?php echo apply_filters('the_content', carbon_get_theme_option('footer_ghost_links')); ?>
	</div>
</div>