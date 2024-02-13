<footer class="footer">
	<div class="container">
		<div class="footer__top">
			<img class="footer__logo" src="<?php echo carbon_get_theme_option('footer_logo'); ?>" alt="footer logo">
			<div class="footer__contact">
				<a class="footer__mail" href="mailto:<?php echo carbon_get_theme_option('global_email'); ?>">
					<?php echo carbon_get_theme_option('global_email'); ?>
				</a>
				<div class="footer__soc">
					<?php foreach ((carbon_get_theme_option('footer_soc')) as $key) : ?>
						<a class="footer__soc-link" href="<?php echo $key['footer_link_soc']; ?>">
							<img class="footer__soc-icon" src="<?php echo $key['footer_icon_soc']; ?>" alt="social">
						</a>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="footer__schedule">
				<h4 class="footer__title">
					<?php echo carbon_get_theme_option('footer_title_schedule'); ?>
				</h4>
				<div class="footer__schedule-time">
					<?php echo carbon_get_theme_option('global_time'); ?>
				</div>
				<div class="footer__schedule-text">
					<?php echo carbon_get_theme_option('footer_schedule_text'); ?>
				</div>
			</div>
			<div class="footer__pay">
				<h4 class="footer__title">
					<?php echo carbon_get_theme_option('footer_title_pay'); ?>
				</h4>
				<div class="footer__pay-items">
					<?php foreach ((carbon_get_theme_option('footer_pay')) as $key) : ?>
						<div class="footer__pay-item">
							<img class="footer__pay-img" src="<?php echo $key['footer_pay_icons']; ?>" alt="pay">
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="footer__middle">
			<h4 class="footer__title">
				<?php echo carbon_get_theme_option('footer_title_menu'); ?>
			</h4>
			<?php
			wp_nav_menu([
				'theme_location' => 'footer-menu',
				'container' => 'nav',
				'container_class' => 'footer-nav',
				'container_id' => 'footer-nav',
				'menu_class' => 'footer-menu footer__menu',
				'menu_id' => 'footer-menu',
				'add_li_class'  => 'footer-menu__items footer__menu-items',
			]);
			?>
		</div>
		<div class="footer__bottom">
			<h4 class="footer__title">
				<?php echo carbon_get_theme_option('footer_title_rev'); ?>
			</h4>
			<div class="footer__reviews">
				<?php foreach ((carbon_get_theme_option('footer_rev')) as $key) : ?>
					<div class="footer__reviews-item">
						<img class="footer__reviews-img" src="<?php echo $key['footer_rev_icons']; ?>" alt="reviews">
					</div>
				<?php endforeach; ?>
			</div>
			<p class="footer__text">
				<?php echo carbon_get_theme_option('footer_text'); ?>
			</p>
			<p class="footer__address">
				<?php
				if (is_page_template('parts/page-uber-kont.php')) {
					echo "Mexpi Limited 18 Granville Avenue Oadby, Leicester LE2 5FL United Kingdom";
				} else {
					echo carbon_get_theme_option('global__adress');
				}
				?>
			</p>
		</div>
	</div>
</footer>

<?php
get_template_part('parts/blocks/popup-form');
get_template_part('parts/blocks/popup-thank');
get_template_part('parts/blocks/buttons');
?>

<?php wp_footer(); ?>
</div>
</body>

</html>