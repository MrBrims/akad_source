<section class="section connect">
	<div class="container">
		<?php if (!is_page_template('parts/page-uber-kont.php')) { ?>
			<h2 class="estimate__title title">
				Unsere Kontakte
			</h2>
		<?php } ?>
		<div class="connect__items">
			<div class="connect__item">
				<div class="connect__item-inner">
					<div class="connect__item-img">
						<img src="<?php echo get_template_directory_uri(); ?>/resources/images/contact/phone.svg" alt="img">
					</div>
					<p class="connect__item-title">
						Telefon:
					</p>
					<div class="connect__item-box">
						<a class="connect__item-phone connect__item-link" href="tel:+<?php echo preg_replace("/[^,.0-9]/", '', carbon_get_theme_option('global_phone')); ?>">
							<?php echo carbon_get_theme_option('global_phone'); ?>
						</a>
					</div>
				</div>
				<a class="connect__item-btn popup-link" href="#popup-form">
					Einen Anruf bestellen
				</a>
			</div>
			<div class="connect__item">
				<div class="connect__item-inner">
					<div class="connect__item-img">
						<img src="<?php echo get_template_directory_uri(); ?>/resources/images/contact/mail.svg" alt="img">
					</div>
					<p class="connect__item-title">
						E-Mail:
					</p>
					<div class="connect__item-box">
						<a class="connect__item-mail connect__item-link" href="mailto:<?php echo carbon_get_theme_option('global_email'); ?>">
							<?php echo carbon_get_theme_option('global_email'); ?>
						</a>
					</div>
				</div>
				<a class="connect__item-btn popup-link" href="#popup-form">
					Abschicken
				</a>
			</div>
			<div class="connect__item">
				<div class="connect__item-inner">
					<div class="connect__item-img">
						<img src="<?php echo get_template_directory_uri(); ?>/resources/images/contact/ans.svg" alt="img">
					</div>
					<p class="connect__item-title">
						Anschrift:
					</p>
					<div class="connect__item-box">
						<span class="connect__item-address">
							<?php echo carbon_get_theme_option('global__adress'); ?>
						</span>
					</div>
				</div>
				<div class="connect__item-text">
					<strong>
						Das Akademily Team ist online.
					</strong>
					<span>
						Wie können wir Ihnen helfen?
					</span>
				</div>
			</div>
			<div class="connect__item">
				<div class="connect__item-inner">
					<div class="connect__item-img">
						<img src="<?php echo get_template_directory_uri(); ?>/resources/images/contact/whats.svg" alt="img">
					</div>
					<p class="connect__item-title">
						E-Mail:
					</p>
					<div class="connect__item-box">
						<span class="connect__item-time">
							<?php echo carbon_get_theme_option('global_time'); ?>
						</span>
					</div>
				</div>
				<a class="connect__whats-btn js-wapp" target="_blank" href="https://wa.me/<?php echo preg_replace('/[^,.0-9]/', '', Helpers::num_whats()); ?>">
					WhatsApp Chat
				</a>
			</div>
		</div>
	</div>
</section>