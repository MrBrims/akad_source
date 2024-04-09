<form class="form-main form">
	<div class="form-main__items form__items">
		<div class="form-main__item form__item-middle">
			<div class="form-main__item-box">
				<span class="form__text">
					<span class="form__required-field">*</span> Arbeitstyp <span class="form__tippy" data-tippy-content="Wenn Sie Ihren Arbeitstyp nicht in der Liste gefunden haben, wählen Sie 'Sonstige Arbeit' aus."></span>
				</span>
				<?php echo get_template_part('parts/blocks/type-select') ?>
			</div>
			<span class="form__text">
				<span class="form__required-field">*</span> Fachrichtung <span class="form__tippy" data-tippy-content="Wählen Sie bitte die Fachrichtung Ihrer Arbeit aus. Wenn keine Fachrichtung passend ist, wählen Sie „Andere Fachrichtung” Je mehrere Informationen Sie eingeben, desto besser."></span>
			</span>
			<?php echo get_template_part('parts/blocks/fach-select') ?>
		</div>
		<div class="form-main__item form__item-middle">
			<span class="form__text">
				<span class="form__required-field">*</span> Thema der Arbeit <span class="form__tippy" data-tippy-content="Das ist das Thema Ihrer Arbeit. Es ist sehr wichtig, Ihr Thema jetzt richtig zu schreiben."></span>
			</span>
			<textarea class="form-main__input form-main__terxtarea form-main__theme input" name="theme" placeholder="Thema der Arbeit..." required></textarea>
		</div>
		<div class="form-main__item form__item-middle">
			<span class="form__text">
				Name
			</span>
			<input class="form-main__input input" name="name" type="text" placeholder="Name">
		</div>
		<div class="form-main__item form__item-middle">
			<span class="form__text">
				<span class="form__required-field">*</span> E-mail <span class="form__tippy " data-tippy-content="Bitte geben Sie Ihre echte E-Mail-Adresse an, damit wir die höchste Qualität Ihrer Arbeit sicherstellen können."></span>
			</span>
			<input class="form-main__input input" name="email" type="email" placeholder="E-mail..." required>
		</div>
		<div class="form-main__item form__item-middle">
			<span class="form__text">
				<span class="form__required-field">*</span> Phone <span class="form__tippy" data-tippy-content="Erfahrungsgemäß lassen sich viele Fragen am besten telefonisch klären. Falls Sie einen Rückruf wünschen, geben Sie bitte hier Ihre Telefonummer an"></span>
			</span>
			<label class="form-litle__label-tel">
				<input class="form-main__input phone-input input" name="phone" type="tel" required placeholder="WhatsApp">
			</label>
		</div>
		<div class="form-main__item form__item-middle form-main__check-inner">
			<label class="form-litle__check-inner form-main__check">
				<input class="custom-checkbox" type="checkbox" name="Kontakt nur über WhatsApp" data-gtm-form-interact-field-id="0">
				<span class="style-checkbox"></span>
				<span class="form-litle__check-text">Kontakt nur über WhatsApp</span>
			</label>
		</div>
		<div class="form-main__item form__item-full">
			<span class="form__text">Dateien anhängen <svg width="8" height="8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#a)">
						<path d="M4 6 0 2h2l2 2 2-2h2L4 6Z" fill="#002e5d" />
					</g>
					<defs>
						<clipPath id="a">
							<path fill="#002e5d" d="M0 0h8v8H0z" />
						</clipPath>
					</defs>
				</svg><span class="form__tippy" data-tippy-content="ZIP, DOCX oder PDF (&lt;50mb)"></span></span>
			<label class="form__file-custom-big form-main__input">
				<input name="file" type="file">
				<span class="form__file-place">ZIP, DOCX oder PDF (<50mb) </span>
			</label>
		</div>
		<div class="form-main__item form__item-middle">
			<span class="form__text">
				Promocode
			</span>
			<input class="form-main__input input" name="promocode" type="text" placeholder="Promocode">
		</div>
		<div class="form-main__item form__item-middle">
			<input class="form-main__btn-coach btn" type="submit" value="DAS FORMULAR abschicken">
		</div>
	</div>

	<p class="form-main__protect-title form-main__coaching-protect">
		IHRE DATEN WERDEN NICHT AN DRITTE WEITERGEGEBEN
	</p>
	<p class="form-main__text-protect">
		Die Hinweise aus der <span>Datenschutzerklärung</span> und den <span>AGB</span> habe ich gelesen und akzeptiere diese.
	</p>
	<p class="form-main__protect-footer">
		Ihre Anfrage ist unverbindlich. Ihre Daten werden streng vertraulich behandelt und nicht an Dritte weitergegeben.
	</p>
	<input type="hidden" name="form_type" value="big-form">
	<input type="hidden" name="coaching_condition" value="<?php echo Helpers::coach_cond(); ?>">
	<input type="hidden" name="page_link" value="<?php echo get_permalink(); ?>">
	<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
	<input type="hidden" name="page" value="<?php echo $post->post_title; ?>" />
</form>