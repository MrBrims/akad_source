<div class="footer__two">
	<div class="footer__two-inner">
		<h4 class="footer__title">
			Über uns
		</h4>
		<?php echo apply_filters('the_content', carbon_get_theme_option('footer_uber_links')); ?>
	</div>
	<div class="footer__two-inner">
		<h4 class="footer__title">
			Blog
		</h4>
		<?php echo apply_filters('the_content', carbon_get_theme_option('footer_blog_links')); ?>
	</div>
	<div class="footer__two-inner">
		<?php echo apply_filters('the_content', carbon_get_theme_option('footer_other_links')); ?>
	</div>
	<div class="footer__two-inner">
		<h4 class="footer__title">
			Wir arbeiten in
		</h4>
		<?php echo apply_filters('the_content', carbon_get_theme_option('footer_arbeit_links')); ?>
	</div>
	<div class="footer__two-inner">
		<div class="footer__reviews">
			<h4 class="footer__title">
				<?php echo carbon_get_theme_option('footer_title_rev'); ?>
			</h4>
			<div class="footer__reviews-items">
				<?php foreach ((carbon_get_theme_option('footer_rev')) as $key) : ?>
					<a href="<?php echo $key['footer_rev_link']; ?>">
						<div class="footer__reviews-item">
							<img class="footer__reviews-img" src="<?php echo $key['footer_rev_icons']; ?>" alt="reviews">
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="footer__plagiat">
			<h4 class="footer__title">
				PLAGIATSSOFTWARE
			</h4>
			<div class="footer__plagiat-items">
				<?php foreach ((carbon_get_theme_option('footer_icons_plag')) as $key) : ?>
					<div class="footer__plagiat-item">
						<img class="footer__plagiat-img" src="<?php echo $key['footer_icon_plag']; ?>" alt="plagiat">
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>