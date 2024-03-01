<section class="section team">
	<div class="container">
		<?php if (!empty(carbon_get_theme_option('main_team_title'))) : ?>
			<h2 class="title">
				<?php echo carbon_get_theme_option('main_team_title'); ?>
			</h2>
		<?php endif ?>
		<div class="team__items">
			<?php foreach ((carbon_get_theme_option('main_team_card')) as $key) : ?>
				<div class="team__item">
					<div class="team__item-top">
						<div class="team__item-inner">
							<div class="team__photo-box">
								<img class="team__photo" src="<?php echo $key['main_team_card_photo']; ?>" alt="photo">
							</div>
							<div class="team__content">
								<h3 class="team__item-name">
									<?php echo $key['main_team_card_name']; ?>
								</h3>
								<span class="team__item-position">
									<?php echo $key['main_team_card_position']; ?>
								</span>
								<div class="team__box">
									<span class="team__year-text">
										Jahre im Unternehmen:
									</span>
									<span class="team__year-num">
										<?php echo $key['main_team_card_year']; ?>
									</span>
								</div>
								<div class="team__box">
									<span class="team__order-text">
										Bearbeitete Aufträge:
									</span>
									<span class="team__order-num">
										<?php echo $key['main_team_card_order']; ?>
									</span>
								</div>
								<div class="team__box">
									<span class="team__client-text">
										Regelmäßige Kunden:
									</span>
									<span class="team__client-num">
										<?php echo $key['main_team_card_client']; ?>
									</span>
								</div>
								<div class="team__rating">
									<?php
									$rating = floatval($key['main_team_card_rating']) * 2;
									$ratingAll = $key['main_team_card_rating_all'];
									$stars = intdiv($rating, 2);

									for ($i = 0; $i < $stars; $i++) {
										echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z" fill="rgba(255,189,0,1)"></path></svg>';
									}

									if ($rating % 2 != 0) {
										echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path d="M12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502V15.968ZM12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z" fill="rgba(255,189,0,1)"></path></svg>';
									}

									echo '
                                    <div class="team__rating-box">
                                        <span class="team__rating-num">', $rating / 2, ' / 5 </span>
                                        <span class="team__rating-all">(' . $ratingAll . ')</span>
                                    </div>';

									?>
								</div>
							</div>
						</div>
						<div class="team__descr show-less">
							<?php echo apply_filters('the_content', $key['main_team_card_descr']); ?>
						</div>
						<span class="team__time">
							<?php echo $key['main_team_card_time']; ?>
						</span>
					</div>
					<div class="team__item-bottom">
						<a class="team__main-whatsapp js-wapp" href="https://wa.me/<?php echo preg_replace('/[^,.0-9]/', '', $key['main_team_card_whatsapp']); ?>">
							WhatsApp
						</a>
						<a class="team__main-email" href="mailto:<?php echo $key['main_team_card_mail']; ?>">
							E-Mail
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>