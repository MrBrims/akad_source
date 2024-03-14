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
			<input class="form-litle__input input" name="email" type="email" placeholder="E-mail..." required>
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
	<h4 class="form-coach__guarant-title">
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
			<span>Datenschutz</span>
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
			<span>Top-Service</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_1476_16389)">
					<path d="M11.5872 6.63754C11.8622 6.32258 11.9997 5.95011 11.9997 5.52006C11.9997 5.13008 11.8571 4.79263 11.5726 4.50748C11.2876 4.22235 10.9502 4.07987 10.5602 4.07987H8.48281C8.50278 4.00989 8.52279 3.94989 8.54276 3.8999C8.56254 3.84991 8.59033 3.79485 8.62519 3.73486C8.66008 3.67483 8.68516 3.62981 8.70011 3.59986C8.79008 3.42995 8.85896 3.28986 8.90651 3.17995C8.95397 3.06983 9.00123 2.91989 9.04888 2.72989C9.09646 2.53999 9.1201 2.34991 9.1201 2.15991C9.1201 2.03996 9.11865 1.94237 9.11629 1.86743C9.11395 1.79243 9.10121 1.67989 9.07891 1.52987C9.05626 1.37993 9.02621 1.25492 8.98881 1.15496C8.95124 1.05498 8.89119 0.942394 8.80884 0.817486C8.7263 0.692341 8.62635 0.591232 8.50874 0.513686C8.39116 0.436193 8.24122 0.371203 8.05873 0.318744C7.87605 0.266233 7.66992 0.23999 7.43978 0.23999C7.3098 0.23999 7.1974 0.287511 7.1023 0.382525C7.00232 0.482505 6.91719 0.607492 6.84726 0.757435C6.77723 0.907457 6.72845 1.03746 6.70092 1.1475C6.67341 1.25749 6.64213 1.41003 6.60727 1.60497C6.56211 1.81507 6.52851 1.96622 6.50587 2.05872C6.48341 2.15121 6.43954 2.27244 6.3746 2.42241C6.30954 2.57248 6.23212 2.6924 6.1421 2.78245C5.97713 2.94742 5.72466 3.24744 5.38458 3.6824C5.13952 4.00235 4.88705 4.30484 4.62706 4.58986C4.36703 4.87493 4.17705 5.0224 4.05708 5.03241C3.93217 5.04239 3.82466 5.09364 3.73463 5.18619C3.64461 5.27868 3.59961 5.38746 3.59961 5.51242V10.3199C3.59961 10.4499 3.64708 10.5611 3.74209 10.6536C3.83705 10.7462 3.94956 10.7949 4.07957 10.7999C4.25455 10.8049 4.64955 10.9148 5.26458 11.13C5.64953 11.2598 5.95073 11.3587 6.16823 11.4261C6.38569 11.4935 6.68965 11.5661 7.07935 11.6437C7.46941 11.7212 7.82935 11.76 8.15926 11.76H8.2868H8.85683H9.12677C9.79192 11.75 10.2842 11.555 10.6043 11.175C10.8942 10.83 11.0167 10.3775 10.9718 9.8175C11.1668 9.63251 11.3019 9.39762 11.3768 9.11255C11.4617 8.80772 11.4617 8.51519 11.3768 8.23524C11.6067 7.93024 11.7143 7.58774 11.6992 7.20774C11.6998 7.04758 11.6624 6.85762 11.5872 6.63754Z" fill="#325D9C" />
					<path d="M2.64002 5.04004H0.48009C0.350007 5.04004 0.237497 5.08756 0.142509 5.18257C0.0475204 5.27754 0 5.39005 0 5.52005V10.3202C0 10.45 0.0475204 10.5626 0.142535 10.6577C0.237602 10.7526 0.350112 10.8001 0.480117 10.8001H2.64002C2.77 10.8001 2.88246 10.7526 2.9775 10.6577C3.07249 10.5626 3.11998 10.4501 3.11998 10.3202V5.52005C3.11998 5.39005 3.07246 5.27756 2.9775 5.18257C2.88249 5.08753 2.77003 5.04004 2.64002 5.04004ZM1.77749 9.7013C1.6825 9.79379 1.57001 9.84002 1.44001 9.84002C1.30499 9.84002 1.19122 9.79379 1.09878 9.7013C1.00628 9.60881 0.960049 9.49509 0.960049 9.36006C0.960049 9.23009 1.00626 9.11755 1.09878 9.02259C1.19124 8.92757 1.30499 8.88 1.44001 8.88C1.57001 8.88 1.6825 8.92757 1.77749 9.02259C1.8725 9.11752 1.92002 9.23006 1.92002 9.36006C1.92002 9.49509 1.8726 9.60878 1.77749 9.7013Z" fill="#325D9C" />
				</g>
				<defs>
					<clipPath id="clip0_1476_16389">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<span>TOP-Qualität</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#a)" fill="#325D9C">
					<path d="M6.6 0h-6C.24 0 0 .24 0 .6v10.8c0 .36.24.6.6.6h7.8c.36 0 .6-.24.6-.6v-9L6.6 0ZM1.8 1.8H6c.36 0 .6.24.6.6S6.36 3 6 3H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6Zm5.4 8.4H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6h5.4c.36 0 .6.24.6.6s-.3.6-.6.6Zm0-2.4H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6h5.4c.36 0 .6.24.6.6s-.3.6-.6.6Zm0-2.4H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6h5.4c.36 0 .6.24.6.6s-.3.6-.6.6Zm3 4.2.9 2.4.9-2.4h-1.8ZM11.7 0h-1.2c-.18 0-.3.12-.3.3v8.1H12V.3c0-.18-.12-.3-.3-.3Z" />
				</g>
				<defs>
					<clipPath id="a">
						<path fill="#fff" d="M0 0h12v12H0z" />
					</clipPath>
				</defs>
			</svg>
			<span>Schriftlicher Vertrag</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg width="12" height="12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#a)" fill="#325D9C">
					<path d="M6.6 0h-6C.24 0 0 .24 0 .6v10.8c0 .36.24.6.6.6h7.8c.36 0 .6-.24.6-.6v-9L6.6 0ZM1.8 1.8H6c.36 0 .6.24.6.6S6.36 3 6 3H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6Zm5.4 8.4H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6h5.4c.36 0 .6.24.6.6s-.3.6-.6.6Zm0-2.4H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6h5.4c.36 0 .6.24.6.6s-.3.6-.6.6Zm0-2.4H1.8c-.36 0-.6-.24-.6-.6s.24-.6.6-.6h5.4c.36 0 .6.24.6.6s-.3.6-.6.6Zm3 4.2.9 2.4.9-2.4h-1.8ZM11.7 0h-1.2c-.18 0-.3.12-.3.3v8.1H12V.3c0-.18-.12-.3-.3-.3Z" />
				</g>
				<defs>
					<clipPath id="a">
						<path fill="#fff" d="M0 0h12v12H0z" />
					</clipPath>
				</defs>
			</svg>
			<span>Kostenfreie Korrekturen</span>
		</div>
		<div class="form-coach__guarant-item">
			<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_1476_16357)">
					<path d="M8.4 3.6C9.54 3.6 10.56 4.02 11.4 4.68V1.8C11.4 1.5 11.1 1.2 10.8 1.2H10.2V0.6C10.2 0.24 9.96 0 9.6 0C9.24 0 9 0.24 9 0.6V1.2H3V0.6C3 0.24 2.76 0 2.4 0C2.04 0 1.8 0.24 1.8 0.6V1.2H0.6C0.3 1.2 0 1.44 0 1.8V10.2C0 10.56 0.3 10.8 0.6 10.8H4.26C3.84 10.08 3.6 9.24 3.6 8.4C3.6 5.76 5.76 3.6 8.4 3.6Z" fill="#325D9C" />
					<path d="M8.3998 4.79999C6.4198 4.79999 4.7998 6.41999 4.7998 8.39999C4.7998 10.38 6.4198 12 8.3998 12C10.3798 12 11.9998 10.38 11.9998 8.39999C11.9998 6.41999 10.3798 4.79999 8.3998 4.79999ZM9.5998 8.99999H8.3998C8.0398 8.99999 7.7998 8.75999 7.7998 8.39999V6.59999C7.7998 6.23999 8.0398 5.99999 8.3998 5.99999C8.7598 5.99999 8.9998 6.23999 8.9998 6.59999V7.79999H9.5998C9.95981 7.79999 10.1998 8.03999 10.1998 8.39999C10.1998 8.75999 9.95981 8.99999 9.5998 8.99999Z" fill="#325D9C" />
				</g>
				<defs>
					<clipPath id="clip0_1476_16357">
						<rect width="12" height="12" fill="white" />
					</clipPath>
				</defs>
			</svg>
			<span>Termingerechte Lieferung</span>
		</div>
	</div>

	<div class="form-coach__guarant-pay">
		<?php foreach ((carbon_get_theme_option('footer_pay')) as $key) : ?>
			<div>
				<img class="form-coach__guarant-img" src="<?php echo $key['footer_pay_icons']; ?>" alt="pay">
			</div>
		<?php endforeach; ?>
	</div>

	<input type="hidden" name="form_type" value="hero-form">
	<input type="hidden" name="coaching_condition" value="<?php echo Helpers::coach_cond(); ?>">
	<input type="hidden" name="page_link" value="<?php echo get_permalink(); ?>">
	<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
	<input type="hidden" name="page" value="<?php echo $post->post_title; ?>" />
</form>