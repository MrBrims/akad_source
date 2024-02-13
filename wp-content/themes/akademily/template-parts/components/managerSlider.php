<div id="manager-slider" class="manager-slider swiper">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php
		$items = carbon_get_theme_option('cf_slider_manager');
		foreach ($items as $key => $item) {
		?>
		<div class="swiper-slide">
			<div class="manager_title">Unsere Kundenbetreuer</div>
			<div class="manager_image"><img src="<?php echo $item['cf_slider_manager_photo'] ?>" alt=""></div>
			<div class="manager_flex">
				<div class="team-item-name text-center mb-1"><?php echo $item['cf_slider_manager_name'] ?></div>
				<div class="team-item-position text-center" bis_skin_checked="1"><?php echo $item['cf_slider_manager_spec'] ?></div>
			</div>
			<div class="manager_work"><?php echo $item['cf_slider_manager_time'] ?></div>
			<div class="manager_flex">
				<a href="https://wa.me/<?php echo $item['cf_slider_manager_whats'] ?>"><div class="manager_whats"></div></a>
				<a href="mailto:<?php echo $item['cf_slider_manager_email'] ?>"><div class="manager_mail"></div></a>
				<a href="tel:<?php echo $item['cf_slider_manager_phone'] ?>"><div class="manager_phone"></div></a>
			</div>
			<a class="btn btn-primary btn-lg" href="#" data-bs-toggle="modal" data-bs-target="#Modal">JETZT ANFRAGEN</a>
		</div>
		<?php } ?>
</div>
<!-- If we need pagination -->
<div class="swiper-pagination"></div>

<!-- If we need navigation buttons -->
<!-- <div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div> -->

<!-- If we need scrollbar -->
<!-- <div class="swiper-scrollbar"></div> -->
</div>