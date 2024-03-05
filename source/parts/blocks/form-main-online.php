<form class="form-main form">
	<div class="form-main__items form__items">
		<div class="form-main__item form__item-middle">
			<div class="form-main__item-box">
				<span class="form__text">
					<span class="form__required-field">*</span> Arbeitstyp
				</span>
				<input class="form-litle__input input" name="type" type="text" value="Online-Klausur" required readonly>
			</div>
			<span class="form__text">
				<span class="form__required-field">*</span> Fachrichtung <span class="form__tippy" data-tippy-content="Wählen Sie bitte die Fachrichtung Ihrer Arbeit aus. Wenn keine Fachrichtung passend ist, wählen Sie „Andere Fachrichtung” Je mehrere Informationen Sie eingeben, desto besser."></span>
			</span>
			<?php echo get_template_part('parts/blocks/fach-select') ?>
		</div>
		<div class="form-main__item form__item-middle">
			<span class="form__text">
				Thema<span class="form__tippy" data-tippy-content="Das ist das Thema. Es ist sehr wichtig, Ihr Thema jetzt richtig zu schreiben."></span>
			</span>
			<textarea class="form-main__input form-main__terxtarea form-main__theme input" name="theme" placeholder="Thema..."></textarea>
		</div>
		<div class="form-main__item form__item-little">
			<span class="form__text">
				Format
			</span>
			<?php echo get_template_part('parts/blocks/format-select') ?>
		</div>
		<div class="form-main__item form__item-little">
			<span class="form__text">
				Qualität <span class="form__tippy" data-tippy-content="Ist Ihnen der wissenschaftliche Grad des Autors wichtig, der Ihre Arbeit schreiben wird?"></span>
			</span>
			<?php echo get_template_part('parts/blocks/qualitat-select') ?>
		</div>
		<div class="form-main__item form__item-little">
			<span class="form__text">
				Startzeit
			</span>
			<label class="form__time-custom">
				<input class="form-main__input input" type="time" name="startzeit" />
			</label>
		</div>
		<div class="form-main__item form__item-little">
			<span class="form__text">
				<span class="form__required-field">*</span> Prüfungsdauer (mind. 30 Min.)
			</span>
			<div class="form-counter">
				<div data-id="decrement" class="counter-btn">-</div>
				<input class="count-input input" name="number" type="number" value="30" max="1000" min="0" step="30" />
				<div data-id="increment" class="counter-btn">+</div>
			</div>
		</div>
		<div class="form-main__item form__item-little">
			<span class="form__text">
				<span class="form__required-field">*</span> Datum
			</span>
			<label class="form__date-custom">
				<input class="form-main__input date-input input" name="deadline" type="text" placeholder="<?php echo date("d.m.Y"); ?>" onfocus="(this.value='<?php echo date('d.m.Y'); ?>')" readonly required>
			</label>
		</div>
		<div class="form-main__item form__item-little">
			<span class="form__text">
				Promocode
			</span>
			<input class="form-main__input input" name="promocode" type="text" placeholder="Promocode">
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
			<input class="form-main__input phone-input input" name="phone" type="tel" required>
			<label class="form-litle__check-inner">
				<input class="custom-checkbox" type="checkbox" name="Kontakt nur über WhatsApp" data-gtm-form-interact-field-id="0">
				<span class="style-checkbox"></span>
				<span class="form-litle__check-text">Kontakt nur über WhatsApp</span>
			</label>
		</div>
		<div class="form-main__item form__item-middle">
			<span class="form__text">File <span class="form__tippy" data-tippy-content="ZIP, DOCX oder PDF (&lt;50mb)"></span></span>
			<label class="form__file-custom form-main__input input">
				<input name="file" type="file">
				<span>Probeklausuren hochladen, falls vorhanden</span>
			</label>
		</div>
	</div>
	<input class="form-main__btn btn" type="submit" value="DAS FORMULAR abschicken">
	<p class="form-main__protect-title">
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