<?php

/** Template Name: Подбор тем */
get_header();
while (have_posts()) {
	the_post();
?>
	<div class="seo-banner" style="background-image: url('<?= carbon_get_post_meta(get_the_ID(), 'de_fon'); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-xxl-8 col-xl-8  col-12">
					<div class="seo-banner__wrap">
						<div class="seo-banner__title podbor">
							<h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
						</div>
						<div class="seo-banner__subtitle podbor_sub">
							<?= carbon_get_post_meta(get_the_ID(), 'de_subtitle'); ?>
						</div>
						<a class="btn btn-primary btn-lg" href="#" data-bs-toggle="modal" data-bs-target="#Modal">UNVERBINDLICH ANFRAGEN</a>
						<br /><br />
					</div>

				</div>
				<div class="col-xxl-4 col-xl-4 col-12"><?php get_template_part('template-parts/components/small-form2');  ?></div>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row">
			<div id="article" class="col-xxl-9 col-xl-12 col-12 page-wrapper pt-5 position">
				<?php
				the_content();

				/** Sections top */
				get_template_part('template-parts/components/sectionsTop');
				?>
			</div>
			<div class="col-xxl-3 col-xl-12 col-12 page-wrapper pt-5 position">
				<?php get_template_part('template-parts/components/managerSlider'); ?>
			</div>

		</div>
	</div>

	<div class="container pt-5">
		<div class="row">
			<div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper position">

				<h3>Hochqualifizierte wissenschaftliche Betreuer</h3><br>
				<div class="col-xxl-12 col-xl-12 col-12 mobil_mark" style="display:flex;">
					<div class="col-xxl-3 col-xl-3 col-12 mark mark1 otstup_left">Hochqualifizierte und unterstützende Betreuer<span class="photo" data-title="Unsere Betreuer verfügen über akademische Abschlüsse: ab Bachelor- und s.w. und haben auch Erfahrung in der Lehre in ihrem professionellen Bereich "> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span></div>
					<!-- <div class="col-xxl-3 col-xl-3 col-12 mark mark7">Möglichkeiten, <br>uns zu erreichen<span class="photo" data-title="Sie können uns per Website, E-mail, Telefon, WhatsApp/Skype kontaktieren"> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div> -->
					<div class="col-xxl-3 col-xl-3 col-12 mark mark7">Möglichkeiten, <br>uns zu erreichen<span class="photo" data-title="Sie können uns per Website, E-mail, Telefon, WhatsApp kontaktieren"> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
					<div class="col-xxl-3 col-xl-3 col-12 mark mark3"><br>7 Tage pro Woche <span class="photo" data-title="Sie können uns 7 Tage pro Woche von 8:00 bis 23:00 Uhr erreichen."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span></div>
					<div class="col-xxl-3 col-xl-3 col-12 mark mark4"><br>Lernprozess<span class="photo" data-title="Im Coaching erhalten Sie nicht nur Ratschläge und Hilfe beim Schreiben Ihrer Arbeit, sondern werden auch weitergebildet."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
					<br>
				</div>
			</div>
		</div>
	</div>
	<div class="first_list_podbor">
		<div class="container">
			<div class="row">
				<div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper position">
					<h3>Hochqualifizierte wissenschaftliche Betreuer</h3><br>
					<div class="podbor_main">
						<div class="podbor_title text-center">Thema der Facharbeit</div>
						<div class="podbor_main_in">
							<div class="col-xxl-12 col-xl-12 col-12 mobil_mark otstup" style="display:flex;">
								<div class="col-xxl-2 col-xl-2 col-12 podbor_title_in">Titel: </div>
								<div class="col-xxl-10 col-xl-10 col-12 podbor_text1">Entwicklung der anfänglichen Sprachkompetenzen und frühen Sozialisierungsfähigkeiten der Kleinkinder durch altersangepasste Spielformen und -arten</div>
							</div>
							<div class="col-xxl-12 col-xl-12 col-12 mobil_mark" style="display:flex;">
								<div class="col-xxl-2 col-xl-2 col-12 podbor_title_in">Untertitel: </div>
								<div class="col-xxl-10 col-xl-10 col-12 podbor_text2">Die Komponenten sowie günstige Voraussetzungen der Spielaktion mit Kleinkindern werden be-schrieben und im Rahmen eines Lernumfelds für sprachliche Förderung und frühe Sozialisie-rungsfähigkeiten ausgewertet </div>
							</div>
						</div>
					</div>
					<div class="podbor_questions">
						<div class="podbor_title text-center">Begründung weshalb das Thema gewählt wurde:</div>
						<div class="col-xxl-12 col-xl-12 col-12 podbor_questions_ask">1. Mein <span>„Warum“</span>, die Ausgangsliste – Impulsfragen:</div>
						<div class="col-xxl-12 col-xl-12 col-12 podbor_questions_answer">
							<ul>
								<li>Erstmals habe ich den persönlichen Bezug zum Thema, denn ich arbeite als Betreuerin und die ganze Sphäre des Umgangs mit den Kleinkindern ist mir nicht vom Hörensagen vertraut. Nichtsdestoweniger möchte ich meinen persönlichen Zugang, beispielweise, im Spielen mit meiner Gruppe, so organisieren, damit ich weniger empirisch und mehr be-wusst handeln kann, bestimmte effektive Arbeitsmodelle einsetzen, um die Kinder sprachlich zu fördern und sie zu einer spontanen Interaktion angemessen zu motivieren. </li>
								<li>Ich bin auf das Thema aus meiner alltäglichen Erfahrung gekommen, denn das Spiel entwickelt die Kinder merklich und ihre Reaktionen sind jedes Mal verschieden. Außerdem reagieren die Kinder jedes nach seiner eigenen Art, wenn sie im Spiel mitei-nander kommunizieren. </li>
								<li>Das Problem, dass ich aus meiner Erfahrung erkannt habe, kann etwa wie folgt formuliert werden: Die altersangepassten spielgestützten Praktiken können die Sprach- und Sozialfähigkeiten der Kleinkinder wirksam fördern, wenn die Betreuerin entspre-chende Kompetenzen dafür hat – was wäre dafür erforderlich? </li>
							</ul>
						</div>
						<div class="col-xxl-12 col-xl-12 col-12 podbor_questions_ask">2. Mein <span>„Warum“</span>, die Ausgangsliste – Impulsfragen:</div>
						<div class="col-xxl-12 col-xl-12 col-12 podbor_questions_answer">
							<ul>
								<li>Erstmals habe ich den persönlichen Bezug zum Thema, denn ich arbeite als Betreuerin und die ganze Sphäre des Umgangs mit den Kleinkindern ist mir nicht vom Hörensagen vertraut. Nichtsdestoweniger möchte ich meinen persönlichen Zugang, beispielweise, im Spielen mit meiner Gruppe, so organisieren, damit ich weniger empirisch und mehr be-wusst handeln kann, bestimmte effektive Arbeitsmodelle einsetzen, um die Kinder sprachlich zu fördern und sie zu einer spontanen Interaktion angemessen zu motivieren. </li>
								<li>Ich bin auf das Thema aus meiner alltäglichen Erfahrung gekommen, denn das Spiel entwickelt die Kinder merklich und ihre Reaktionen sind jedes Mal verschieden. Außerdem reagieren die Kinder jedes nach seiner eigenen Art, wenn sie im Spiel mitei-nander kommunizieren. </li>
								<li>Das Problem, dass ich aus meiner Erfahrung erkannt habe, kann etwa wie folgt formuliert werden: Die altersangepassten spielgestützten Praktiken können die Sprach- und Sozialfähigkeiten der Kleinkinder wirksam fördern, wenn die Betreuerin entspre-chende Kompetenzen dafür hat – was wäre dafür erforderlich? </li>
							</ul>
						</div>
						<div class="col-xxl-12 col-xl-12 col-12 podbor_questions_ask">3. Mein <span>„Warum“</span>, die Ausgangsliste – Impulsfragen:</div>
						<div class="col-xxl-12 col-xl-12 col-12 podbor_questions_answer">
							<ul>
								<li>Erstmals habe ich den persönlichen Bezug zum Thema, denn ich arbeite als Betreuerin und die ganze Sphäre des Umgangs mit den Kleinkindern ist mir nicht vom Hörensagen vertraut. Nichtsdestoweniger möchte ich meinen persönlichen Zugang, beispielweise, im Spielen mit meiner Gruppe, so organisieren, damit ich weniger empirisch und mehr be-wusst handeln kann, bestimmte effektive Arbeitsmodelle einsetzen, um die Kinder sprachlich zu fördern und sie zu einer spontanen Interaktion angemessen zu motivieren. </li>
								<li>Ich bin auf das Thema aus meiner alltäglichen Erfahrung gekommen, denn das Spiel entwickelt die Kinder merklich und ihre Reaktionen sind jedes Mal verschieden. Außerdem reagieren die Kinder jedes nach seiner eigenen Art, wenn sie im Spiel mitei-nander kommunizieren. </li>
								<li>Das Problem, dass ich aus meiner Erfahrung erkannt habe, kann etwa wie folgt formuliert werden: Die altersangepassten spielgestützten Praktiken können die Sprach- und Sozialfähigkeiten der Kleinkinder wirksam fördern, wenn die Betreuerin entspre-chende Kompetenzen dafür hat – was wäre dafür erforderlich? </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="seo-form pt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-xxl-12 col-xl-12 col-12">
					<div class="seo-form__wrap">
						<div class="seo-form__title text-center mb-3" style="padding-top: 20px;">
							Lassen Sie sich einen unverbindlichen Kostenvoranschlag erstellen
						</div>
						<p class="text-center">Garantierte Antwortzeit innerhalb <span style="color:#FF4E4D;">von 15 Minuten!</span></p>
						<form method="post">
							<div class="seo-form__message js-message alert d-none pt-3 pb-3"></div>
							<div class="row">
								<div class="col-lg-6 col-12 mb-3">
									<?php get_template_part('template-parts/components/form/select-type') ?>
								</div>
								<div class="col-lg-6 col-12 mb-3">
									<label>
										<span style="color:#FF4E4D;font-weight:bold;">* </span>Vorname / Nickname
										<input type="text" name="name" class="form-control" placeholder="Geben Sie Ihren Namen ein" required />
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-12 mb-3">
									<?php get_template_part('template-parts/components/form/select-discipline') ?>
								</div>
								<div class="col-lg-6 col-12 mb-3">
									<label>
										<span style="color:#FF4E4D;font-weight:bold;">* </span>Phone
										<input type="text" id="phone" name="phone" class="form-control" placeholder="Phone..." />
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-12 mb-3">
									<label>
										<span style="color:#FF4E4D;font-weight:bold;">* </span>Abgabetermin
										<input type="date" name="date" class="form-control calendar" placeholder="Abgabetermin..." />
									</label>
								</div>
								<div class="col-lg-6 col-12 mb-3">
									<label>
										<span style="color:#FF4E4D;font-weight:bold;">* </span>E-Mail
										<input type="text" name="email" class="form-control" placeholder="E-Mail..." required />
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-12 mb-3">
									<label>
										<span style="color:#FF4E4D;font-weight:bold;">* </span>Thema der Arbeit...
										<textarea name="theme" class="form-control" placeholder="Thema der Arbeit..."></textarea>
									</label>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-12">
									<?php echo General::get_utm(); ?>
									<input type="hidden" name="fc_campaign" id="fc_campaign">
									<input type="hidden" name="fc_channel" id="fc_channel">
									<input type="hidden" name="fc_content" id="fc_content">
									<input type="hidden" name="fc_landing" id="fc_landing">
									<input type="hidden" name="fc_medium" id="fc_medium">
									<input type="hidden" name="fc_referrer" id="fc_referrer">
									<input type="hidden" name="fc_source" id="fc_source">
									<input type="hidden" name="fc_term" id="fc_term">
									<input type="hidden" name="lc_campaign" id="lc_campaign">
									<input type="hidden" name="lc_channel" id="lc_channel">
									<input type="hidden" name="lc_content" id="lc_content">
									<input type="hidden" name="landing" id="lc_landing">
									<input type="hidden" name="lc_medium" id="lc_medium">
									<input type="hidden" name="lc_referrer" id="lc_referrer">
									<input type="hidden" name="lc_source" id="lc_source">
									<input type="hidden" name="lc_term" id="lc_term">
									<input type="hidden" name="OS" id="OS">
									<input type="hidden" name="GA_Client_ID" id="GA_Client_ID">
									<input type="hidden" name="gclid" id="gclid">
									<input type="hidden" name="all_traffic_sources" id="all_traffic_sources">
									<input type="hidden" name="browser" id="browser">
									<input type="hidden" name="city" id="city">
									<input type="hidden" name="country" id="country">
									<input type="hidden" name="device" id="device">
									<input type="hidden" name="page_visits" id="page_visits">
									<input type="hidden" name="pages_visited_list" id="pages_visited_list">
									<input type="hidden" name="region" id="region">
									<input type="hidden" name="time_zone" id="time_zone">
									<input type="hidden" name="time_passed" id="time_passed">
									<input type="hidden" name="latitude" id="latitude">
									<input type="hidden" name="longitude" id="longitude">
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
									<input type="hidden" name="page" value="<?= $post->post_title; ?>" />
									<button class="btn btn-primary">DAS FORMULAR ABSCHICKEN</button>
								</div>
								<p class="text-center sheet"><img src="/wp-content/themes/akademily/assets/images/sheet.png" width="24" hspace="10">Ihre Daten werden nicht an Dritte weitergegeben</p>
								<p class="mt-3 small"><input class="form-checkbox__green" value="Agree" id="main-form-agree" name="agree" type="checkbox">Die Hinweise aus der <a href="https://akademily.de/datenschutz/"><span style="color:#FF4E4D;">Datenschutzerklärung</span></a> und den <a href="https://akademily.de/agb/"><span style="color:#FF4E4D;">AGB</span></a> habe ich gelesen und akzeptiere diese</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>





	<div class="first_second">
		<div class="container pt-5">
			<?php
			/** Reviews */
			get_template_part('template-parts/components/reviews');
			?>
		</div>
	</div>

	<div class="container pt-5">
		<div class="row">
			<div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper position">
				<!-- <h3>Unsere Lektoren & Coaches</h3>
				<div class="sl_text3"> <?= carbon_get_post_meta(get_the_ID(), 'de_home_title_four'); ?></div>
				<?php echo do_shortcode('[metaslider id="14837"]'); ?><br>
				<div class="text-center mt-4"><a class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#Modal">PREISVORSCHLAG</a></div>
				<br><br> -->


				<br>
				<?php

				/** FAQ */
				get_template_part('template-parts/components/faq');

				/** Author */
				get_template_part('template-parts/components/page-author');


				?>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper pt-5">
				<?php
				/** Sections bottom */
				get_template_part('template-parts/components/sectionsBottom');
				?>
			</div>
		</div>
	</div>

	<?php get_template_part('template-parts/components/blog'); ?>


<?php
}
get_footer(); ?>
<script src="/wp-content/themes/akademily/assets/js/intlTelInput.js"></script>
<script>
	var input = document.querySelector("#phone");
	window.intlTelInput(input, {
		// allowDropdown: false,
		// autoHideDialCode: false,
		// autoPlaceholder: "off",
		// dropdownContainer: document.body,
		// excludeCountries: ["us"],
		// formatOnDisplay: false,
		// geoIpLookup: function(callback) {
		//   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
		//     var countryCode = (resp && resp.country) ? resp.country : "";
		//     callback(countryCode);
		//   });
		// },
		// hiddenInput: "full_number",
		// initialCountry: "auto",
		//localizedCountries: { 'de': 'Deutschland' },
		// nationalMode: false,
		// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
		// placeholderNumberType: "MOBILE",
		preferredCountries: ['de', 'us', 'gb'],
		// separateDialCode: true,
		utilsScript: "/wp-content/themes/akademily/assets/js/utils.js",
	});
</script>
<style>
	.feedback2 {
		background-color: rgba(255, 255, 255, 0.7) !important;
	}

	h3.ea-header {
		padding-bottom: 0;
		padding-top: 0;
	}

	h2 {
		color: #102752;
		font-size: 32px !important;
		text-transform: uppercase;
		padding-top: 40px;
		padding-bottom: 15px;
	}

	h3 {
		color: #102752;
		font-weight: bold;
		font-size: 29px !important;
		padding-bottom: 20px;
		padding-top: 35px;
	}

	h4 {
		color: #102752;
		font-weight: bold;
		font-size: 29px !important;
		padding-bottom: 20px;
		padding-top: 35px;
	}

	.banner_podbor h4 {

		padding-bottom: 2px;
		padding-top: 5px;
	}

	.banner_podbor img {
		padding-top: 20px;
	}

	.banner_podbor {
		padding-bottom: 5px;
	}

	h3::before {
		content: "";
		position: absolute;
		width: 115px;
		height: 3px;
		background: #dd1c1a;
		left: 0px;
		bottom: 0px;
	}

	h3.ea-header::before {
		content: "";
		position: absolute;
		width: 0;
		height: 0;
		background: transparent;
		left: 12px;
		margin-top: 38px;
	}

	.head_drop_down1 {
		margin-left: 55%;
	}

	.head_drop_down2 {
		margin-left: 165px;
	}
</style>