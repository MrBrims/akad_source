<section class="section form-calc">
	<div class="container">
		<div class="form-calc__inner">
			<div class="form-calc__left">
				<h3 class="form-calc__title">
					<?php echo $key['ak_complex_form_calc_title'] ?>
				</h3>
				<div class="form-calc__help">
					<span class="form-calc__help-name">
						<?php echo $key['ak_complex_form_calc_help'] ?>
					</span>
					<span class="form__tippy" data-tippy-content="<?php echo $key['ak_complex_form_calc_help_text'] ?>"></span>
				</div>
				<div class="form-calc__items">
					<div class="form-calc__item">
						<label class="form-calc__label-left">
							<input class="custom-checkbox lektorat-calc" type="radio" name="lektorat-calc" checked>
							<span class="style-checkbox"></span>
							<span class="form-calc__label-name"><?php echo $key['ak_complex_form_calc_serv_one'] ?></span>
						</label>
						<div class="form-calc__item-content">
							<?php echo apply_filters('the_content', $key['ak_complex_form_calc_listone']); ?>
						</div>
					</div>
					<div class="form-calc__item">
						<label class="form-calc__label-left">
							<input class="custom-checkbox korrekt-calc" type="radio" name="lektorat-calc">
							<span class="style-checkbox"></span>
							<span class="form-calc__label-name"><?php echo $key['ak_complex_form_calc_serv_two'] ?></span>
						</label>
						<div class="form-calc__item-content">
							<?php echo apply_filters('the_content', $key['ak_complex_form_calc_listtwo']); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="form-calc__right">
				<div class="form-calc__right-head">
					<label class="form-calc__label-right">
						<input class="custom-checkbox form-calc__worten" type="radio" name="lektorat-calc-right" checked>
						<span class="style-checkbox"></span>
						<span class="form-calc__label-name"><?php echo $key['ak_complex_form_calc_conditionone'] ?></span>
					</label>
					<span><?php echo $key['ak_complex_form_calc_sep'] ?></span>
					<label class="form-calc__label-right">
						<input class="custom-checkbox form-calc__seiten" type="radio" name="lektorat-calc-right">
						<span class="style-checkbox"></span>
						<span class="form-calc__label-name"><?php echo $key['ak_complex_form_calc_conditiontwo'] ?></span>
					</label>
				</div>
				<input class="form-calc__number" type="number" value="0">
				<div class="form-calc__price">
					<span class="form-calc__num">0</span>
					<span class="form-calc__currency"><?php echo $key['ak_complex_form_calc_currency'] ?></span>
				</div>
				<a class="form-calc__btn btn popup-link" href="#popup-form">
					<?php echo $key['ak_complex_form_calc_btn'] ?>
				</a>
				<div class="form-calc__right-content">
					<?php echo apply_filters('the_content', $key['ak_complex_form_calc_right_text']); ?>
				</div>
			</div>
		</div>
	</div>
</section>