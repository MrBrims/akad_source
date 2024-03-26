<div class="footer__three">
	<div class="footer__three-left">
		<h4 class="footer__title">
			Fachbereiche
		</h4>
		<?php echo apply_filters('the_content', carbon_get_theme_option('footer_fach_links')); ?>
	</div>
	<div class="footer__three-right">
		<div class="footer__three-lekt">
			<h4 class="footer__title">
				Lektorat & Korrekturlesen
			</h4>
			<?php echo apply_filters('the_content', carbon_get_theme_option('footer_lekt_links')); ?>
		</div>
		<!-- <div class="footer__three-and">
			<h4 class="footer__title">
				Andere Dienste
			</h4>
			<?php echo apply_filters('the_content', carbon_get_theme_option('footer_and_links')); ?>
		</div> -->
	</div>
</div>