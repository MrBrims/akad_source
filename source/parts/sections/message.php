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
		<?php
		if (get_the_ID() == 22452) {
			echo '<h3 class="title message__title">Erhalten Sie ein unverbindliches Angebot für Ihre Online-Klausur</h3>';
			get_template_part('parts/blocks/form-main-online');
		} else {
			get_template_part('parts/blocks/form-main');
		}
		?>
	</div>
</section>