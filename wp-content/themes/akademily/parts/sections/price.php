<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'local_price_title')) || !empty(carbon_get_post_meta(get_the_ID(), 'price_tab_main'))) : ?>
	<section class="price">
		<div class="container">
			<h2 class="price__title title">
				<?php
				if (is_page_template('parts/page-fach.php')) {
					echo carbon_get_post_meta(get_the_ID(), 'local_price_title');
				} elseif (is_page_template('parts/page-ghost.php')) {
					echo carbon_get_post_meta(get_the_ID(), 'hero_title_left'), ' ', carbon_get_post_meta(get_the_ID(), 'hero_title_right'), ' ',  carbon_get_post_meta(get_the_ID(), 'price_main_title');
				} else {
					echo carbon_get_post_meta(get_the_ID(), 'price_main_title');
				}
				?>
			</h2>
			<?php
			if (is_page_template('parts/page-fach.php')) {
				get_template_part('parts/blocks/local-price');
			} else {
				get_template_part('parts/blocks/tab-price');
			}
			?>
		</div>
	</section>
<?php endif ?>