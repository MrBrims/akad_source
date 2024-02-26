<form action="" class="form form-litle">
	<div class="form-litle__items">
		<div class="form-litle__item">
			<span class="form__text">
				<span class="form__required-field">*</span> Fachrichtung <span class="form__tippy" data-tippy-content="Wählen Sie bitte die Fachrichtung Ihrer Arbeit aus. Wenn keine Fachrichtung passend ist, wählen Sie „Andere Fachrichtung” Je mehrere Informationen Sie eingeben, desto besser."></span>
			</span>
			<?php echo get_template_part('parts/blocks/fach-select') ?>
		</div>
		<div class="form-litle__item">
			<span class="form__text">
				<span class="form__required-field">*</span> Arbeitstyp <span class="form__tippy" data-tippy-content="Wenn Sie Ihren Arbeitstyp nicht in der Liste gefunden haben, wählen Sie 'Sonstige Arbeit' aus."></span>
			</span>
			<?php echo get_template_part('parts/blocks/type-select') ?>
		</div>
		<div class="form-litle__item form-litle__item-full">
			<span class="form__text">
				<span class="form__required-field">*</span> Thema der Arbeit <span class="form__tippy" data-tippy-content="Das ist das Thema Ihrer Arbeit. Es ist sehr wichtig, Ihr Thema jetzt richtig zu schreiben."></span>
			</span>
			<input class="form-litle__input input" name="theme" type="text" placeholder="Thema der Arbeit..." required>
		</div>
		<div class="form-litle__item">
			<span class="form__text">
				<span class="form__required-field">*</span> Seitenanzahl
			</span>
			<div class="form-counter">
				<div data-id="decrement" class="counter-btn">-</div>
				<input class="count-input input" name="number" type="number" value="30" max="1000" min="0" step="1" />
				<div data-id="increment" class="counter-btn">+</div>
			</div>
		</div>
		<div class="form-litle__item">
			<span class="form__text">
				<span class="form__required-field">*</span> Liefertermin
			</span>
			<label class="form__date-custom">
				<input class="form-litle__input date-input input" name="deadline" type="text" placeholder="<?php echo date("d.m.Y"); ?>" onfocus="(this.value='<?php echo date('d.m.Y'); ?>')" readonly required>
			</label>
		</div>
		<div class="form-litle__item">
			<span class="form__text">
				<span class="form__required-field">*</span> E-mail <span class="form__tippy " data-tippy-content="Bitte geben Sie Ihre echte E-Mail-Adresse an, damit wir die höchste Qualität Ihrer Arbeit sicherstellen können."></span>
			</span>
			<input class="form-litle__input input" name="email" type="mail" placeholder="E-mail..." required>
		</div>
		<div class="form-litle__item">
			<span class="form__text">
				<span class="form__required-field">*</span> Phone <span class="form__tippy" data-tippy-content="Erfahrungsgemäß lassen sich viele Fragen am besten telefonisch klären. Falls Sie einen Rückruf wünschen, geben Sie bitte hier Ihre Telefonummer an"></span>
			</span>
			<input class="form-litle__input phone-input input" name="phone" type="tel" required>
		</div>
		<div class="form-litle__item">
			<span class="form__text">File <span class="form__tippy" data-tippy-content="ZIP, DOCX oder PDF (&lt;50mb)"></span></span>
			<label class="form__file-custom form-litle__input input">
				<input name="file" type="file">
				<span>File</span>
			</label>
		</div>
	</div>
	<input class="form__btn btn" type="submit" value="UNVERBINDLICH ANFRAGEN">
	<a class="form-litle__guarant" href="https://akademily.de/unsere-garantien/">
		Unsere Garantien
	</a>

	<input type="hidden" name="form_type" value="hero-form">
		<input type="hidden" name="coaching_condition" value="<?php echo Helpers::coach_cond(); ?>">
	<input type="hidden" name="page_link" value="<?php echo get_permalink();?>"> 
	<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
	<input type="hidden" name="page" value="<?php echo $post->post_title; ?>" />
</form>