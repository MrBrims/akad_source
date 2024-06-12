<?php if (!empty(carbon_get_theme_option('main_team_dev_card'))) { ?>
	<section class="section team">
		<div class="container">
			<?php if (!empty(carbon_get_theme_option('main_team_dev_title'))) : ?>
				<h2 class="title">
					<?php echo carbon_get_theme_option('main_team_dev_title'); ?>
				</h2>
			<?php endif ?>
			<div class="team__items">
				<?php foreach ((carbon_get_theme_option('main_team_dev_card')) as $key) : ?>
					<div class="team__item alt">
						<div class="team__item-top">
							<div class="team__item-inner">
								<div class="team__photo-box">
									<img class="team__photo" src="<?php echo $key['main_team_dev_photo']; ?>" alt="<?php Helpers::imageAlt($key['main_team_dev_photo']); ?>">
								</div>
								<div class="team__content">
									<h3 class="team__item-name">
										<?php echo $key['main_team_dev_name']; ?>
									</h3>
									<span class="team__item-position">
										<?php echo $key['main_team_dev_position']; ?>
									</span>
									<div class="team__box">
										<span class="team__time">
											<?php echo $key['main_team_dev_time']; ?>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php } ?>