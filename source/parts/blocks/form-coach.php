<form action="" class="form form-litle form-coach">
	<div class="form-litle__items">
		<div class="form-litle__item form-litle__item-full">
			<span class="form__text">
				<span class="form__required-field">*</span> Arbeitstyp <span class="form__tippy" data-tippy-content="Wenn Sie Ihren Arbeitstyp nicht in der Liste gefunden haben, wählen Sie 'Sonstige Arbeit' aus."></span>
			</span>
			<?php echo get_template_part('parts/blocks/type-select') ?>
		</div>
		<div class="form-litle__item">
			<span class="form__text">
				<span class="form__required-field">*</span> E-mail <span class="form__tippy " data-tippy-content="Bitte geben Sie Ihre echte E-Mail-Adresse an, damit wir die höchste Qualität Ihrer Arbeit sicherstellen können."></span>
			</span>
			<input class="form-litle__input input" name="email" type="mail" placeholder="E-mail..." required>
		</div>
		<div class="form-litle__item">
			<span class="form__text">
				Phone <span class="form__tippy" data-tippy-content="Erfahrungsgemäß lassen sich viele Fragen am besten telefonisch klären. Falls Sie einen Rückruf wünschen, geben Sie bitte hier Ihre Telefonummer an"></span>
			</span>
			<input class="form-litle__input phone-input input" name="phone" type="tel">
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
	<h4 class="form-coach__guarant">
		Unsere Garantien
	</h4>
	<div class="form-coach__guarant-items">
		<div class="form-coach__guarant-item">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
				<g clip-path="url(#clip0_1057_8267)">
					<path d="M11.3408 3.11965C11.3408 2.99965 11.2808 2.93965 11.1608 2.87965L6.06077 0.0596484C6.06077 -0.000351562 5.94077 -0.000351562 5.82077 0.0596484L0.780766 2.93965C0.720766 2.93965 0.660766 3.05965 0.660766 3.11965C0.540766 4.13965 0.180766 10.0196 5.88077 11.9396H6.06077C11.8208 10.0196 11.4608 4.13965 11.3408 3.11965ZM8.76077 5.27965L5.82077 8.21965C5.58077 8.45965 5.22077 8.45965 4.98077 8.21965L3.84077 7.07965C3.60077 6.83965 3.60077 6.47965 3.84077 6.23965C4.08077 5.99965 4.44077 5.99965 4.68077 6.23965L5.40077 6.89965L7.92077 4.37965C8.16077 4.13965 8.52077 4.13965 8.76077 4.37965C9.00077 4.61965 9.00077 5.03965 8.76077 5.27965Z" fill="#325D9C" />
				</g>
				<defs>
					<clipPath id="clip0_1057_8267">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<span data-tippy-content="<h4>Vertraulichkeit über alles</h4> Wir legen großen Wert auf Privatsphäre und verbreiten keine Informationen von unseren Kunden. Deshalb können Sie sicher sein, dass Ihre persönlichen Daten wie etwa Name, E-Mail oder Telefonnummer an keine Dritten weitergeleitet werden, wenn Sie unser Kunde sind. ">Datenschutz</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
				<g clip-path="url(#clip0_1057_8278)">
					<path d="M10.1992 10.8H8.99922V10.2C8.99922 9.84 8.75922 9.6 8.39922 9.6H7.19922V8.22C8.93922 7.68 10.1992 6.12 10.1992 4.2C10.1992 1.86 8.33922 0 5.99922 0C3.65922 0 1.79922 1.86 1.79922 4.2C1.79922 6.12 3.05922 7.68 4.79922 8.22V9.6H3.59922C3.23922 9.6 2.99922 9.84 2.99922 10.2V10.8H1.79922C1.43922 10.8 1.19922 11.04 1.19922 11.4V12H10.7992V11.4C10.7992 11.04 10.5592 10.8 10.1992 10.8ZM4.19922 6C4.19922 5.64 4.43922 5.4 4.79922 5.4H5.39922V3.84L5.21922 4.02C4.97922 4.26 4.61922 4.26 4.37922 4.02C4.13922 3.78 4.13922 3.42 4.37922 3.18L5.57922 1.98C5.75922 1.8 5.99922 1.74 6.23922 1.86C6.47922 1.92 6.59922 2.16 6.59922 2.4V5.4H7.19922C7.55922 5.4 7.79922 5.64 7.79922 6C7.79922 6.36 7.55922 6.6 7.19922 6.6H4.79922C4.43922 6.6 4.19922 6.36 4.19922 6Z" fill="#325D9C" />
				</g>
				<defs>
					<clipPath id="clip0_1057_8278">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<span data-tippy-content="<h4>Bei uns sind nur erstklassige Autoren mit jahrelangen Arbeitserfahrungen tätig </h4> Unsere hochqualifizierten Fachleute überprüfen jede erstellte Arbeit, bevor sie dem Auftraggeber übergeben wird. Dadurch wird garantiert, dass unsere Kunden nur fehlerfreie und im akademischen Stil geschriebene Arbeiten erhalten ">Top Qualität</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
				<path d="M10.7325 8.78375C10.7325 7.71964 9.8644 6.85156 8.80031 6.85156C8.06823 6.85156 7.44017 7.26361 7.11216 7.86765H4.88792C4.55991 7.26361 3.93185 6.85156 3.19977 6.85156C2.13568 6.85156 1.26758 7.71964 1.26758 8.78375C1.26758 9.85185 2.13568 10.7199 3.19977 10.7199C4.26386 10.7199 5.13196 9.85185 5.13196 8.78375C5.13196 8.74373 5.12395 8.70775 5.11995 8.66773H6.88013C6.87612 8.70775 6.86811 8.74373 6.86811 8.78375C6.86811 9.85185 7.73621 10.7199 8.80031 10.7199C9.8644 10.7199 10.7325 9.85185 10.7325 8.78375Z" fill="#325D9C" />
				<path d="M11.7086 5.87107C11.0805 5.69505 10.4444 5.54704 9.80838 5.42703L9.19231 2.32273C9.16831 2.20673 9.0963 2.10672 8.99629 2.05071C8.89228 1.9947 8.76827 1.98671 8.66027 2.02671C6.94409 2.67477 5.05592 2.67477 3.33974 2.02671C3.23175 1.98271 3.10774 1.9947 3.00773 2.05071C2.90372 2.10672 2.83172 2.20673 2.80771 2.32273L2.19164 5.42703C1.55559 5.54704 0.919521 5.69505 0.287453 5.87107C0.0754449 5.93509 -0.0445626 6.1551 0.0154312 6.36711C0.0754449 6.57914 0.295462 6.69915 0.507494 6.64314C4.09983 5.61506 7.90019 5.61506 11.4925 6.64314C11.5285 6.65115 11.5645 6.65916 11.6005 6.65916C11.7766 6.65916 11.9366 6.54313 11.9846 6.36711C12.0446 6.1551 11.9246 5.93509 11.7086 5.87107Z" fill="#325D9C" />
			</svg>
			<span data-tippy-content="Wir schätzen unsere Kunden und unseren guten Ruf. Deshalb verpflichten wir uns, Ihnen die fertige Arbeit genau zum vereinbarten Termin oder etwas früher zu übergeben. Sollte dies nicht der Fall sein, garantieren wir Ihnen die ganze Geldsumme zurückzuzahlen.">Termingerechte Lieferung</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
				<g clip-path="url(#clip0_1057_8263)">
					<path d="M11 0H6.84364C6.56869 0 6.1844 0.159286 5.99013 0.353406L0.291817 6.05169C-0.0972722 6.44034 -0.0972722 7.07755 0.291817 7.46573L4.53468 11.7084C4.92289 12.0971 5.55947 12.0971 5.94827 11.708L11.6466 6.01059C11.8407 5.8165 12 5.4316 12 5.15724V1.00004C12 0.450143 11.5498 0 11 0ZM8.99984 4.00002C8.44754 4.00002 7.9998 3.55181 7.9998 2.99998C7.9998 2.44724 8.44754 1.99994 8.99984 1.99994C9.55214 1.99994 10 2.44724 10 2.99998C10.0001 3.55181 9.55214 4.00002 8.99984 4.00002Z" fill="#325D9C" />
				</g>
				<defs>
					<clipPath id="clip0_1057_8263">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<span data-tippy-content="<h4>Anpassung an Ihr Budget</h4> Unter unseren Autoren gibt es Bachelors, Magister und Doktoren in verschiedenen Wissensbereichen, darum können Sie bei uns einen Autor gemäß Ihrem Budget finden. ">Transparente Preise</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
				<g clip-path="url(#clip0_1067_4548)">
					<path d="M7.49977 8.04004L5.99977 10.86L4.49977 8.04004C2.75977 8.58004 1.49977 10.14 1.25977 12H10.7998C10.4998 10.14 9.23977 8.58004 7.49977 8.04004Z" fill="#325D9C" />
					<path d="M2.99922 4.14C2.99922 5.82 4.31922 7.14 5.99922 7.14C7.67922 7.14 8.99922 5.82 8.99922 4.14L10.7992 3L5.99922 0L1.19922 3L2.99922 4.14Z" fill="#325D9C" />
				</g>
				<defs>
					<clipPath id="clip0_1067_4548">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<span data-tippy-content="<h4>Ihr Text entspricht genau Ihren Hinweisen und Vorlagen</h4> Gemäß einer der von uns erbrachten Dienstleistungen gewährleisten wir unseren Kunden unbegrenzte kostenfreie Revisionen im Laufe der Erstellung ihrer Arbeiten und 2 Wochen nach der Übergabe. Für Bachelor-, Master-, Diplom- und Doktorarbeiten gilt diese Regel unbefristet.">Unbegrenzte kostenfreie Korrekturen</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
				<g clip-path="url(#clip0_1057_8290)">
					<path d="M10.1992 0H1.79922C1.43922 0 1.19922 0.24 1.19922 0.6V11.4C1.19922 11.76 1.43922 12 1.79922 12H10.1992C10.5592 12 10.7992 11.76 10.7992 11.4V0.6C10.7992 0.24 10.5592 0 10.1992 0ZM4.19922 1.2C5.21922 1.2 5.99922 1.98 5.99922 3C5.99922 3.3 5.93922 3.54 5.81922 3.78L7.01922 4.98C7.25922 5.22 7.25922 5.64 7.01922 5.82C6.65922 6.12 6.29922 5.94 6.17922 5.82L4.97922 4.62C4.73922 4.74 4.49922 4.8 4.19922 4.8C3.17922 4.8 2.39922 4.02 2.39922 3C2.39922 1.98 3.17922 1.2 4.19922 1.2ZM6.59922 10.8H2.99922C2.63922 10.8 2.39922 10.56 2.39922 10.2C2.39922 9.84 2.63922 9.6 2.99922 9.6H6.59922C6.95922 9.6 7.19922 9.84 7.19922 10.2C7.19922 10.56 6.95922 10.8 6.59922 10.8ZM8.99922 8.4H2.99922C2.63922 8.4 2.39922 8.16 2.39922 7.8C2.39922 7.44 2.63922 7.2 2.99922 7.2H8.99922C9.35922 7.2 9.59922 7.44 9.59922 7.8C9.59922 8.16 9.35922 8.4 8.99922 8.4Z" fill="#325D9C" />
				</g>
				<defs>
					<clipPath id="clip0_1057_8290">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<span data-tippy-content="<h4> Nur einzigartige Arbeiten für unsere Kunden</h4> Jede bestellte Arbeit wird von unseren Autoren individuell, mit Rücksicht auf Wünsche und Vorlagen des Auftraggebers geschrieben. Eine unserer Hauptanforderungen an Autoren – kein Plagiat. Alle fertigen Arbeiten werden mithilfe spezieller Programme auf Plagiat geprüft, deshalb können Sie sicher sein: Ihre Arbeit ist einzigartig und keiner auf der Welt hat ein zweites Exemplar."> Plagiatfreie Arbeiten</span>
		</div>
	</div>
	<div class="form-coach__guarant-pay">
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-1.svg" alt="visa pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-2.svg" alt="mastercard pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-3.webp" alt="giro pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-4.webp" alt="stripe pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-5.webp" alt="google pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-6.webp" alt="apple pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-7.webp" alt="klarna pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-8.webp" alt="wise pay icon">
		</div>
		<div>
			<img class="form-coach__guarant-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/form-coach/form-coach-pay-9.webp" alt="paypal pay icon">
		</div>
	</div>

	<input type="hidden" name="form_type" value="hero-form">
	<input type="hidden" name="coaching_condition" value="<?php echo Helpers::coach_cond(); ?>">
	<input type="hidden" name="page_link" value="<?php echo get_permalink();?>">
	<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
	<input type="hidden" name="page" value="<?php echo $post->post_title; ?>" />
</form>