<?php if (!empty($key['unic_guarant_card'])) : ?>
	<section class="guarant">
		<?php foreach ($key['unic_guarant_card'] as $k) : ?>
			<div class="guarant__item">
				<h4 class="guarant__item-title">
					<?php echo $k['unic_guarant_card_title']; ?>
				</h4>
				<?php if (!empty($k['unic_guarant_card_subtitle'])) : ?>
					<p class="guarant__item-subtitle">
						<?php echo $k['unic_guarant_card_subtitle']; ?>
					</p>
				<?php endif ?>
				<p class="guarant__item-text">
					<?php echo $k['unic_guarant_card_text']; ?>
				</p>
				<img class="guarant__item-img" src="<?php echo $k['unic_guarant_card_img']; ?>" alt="guarant icons">
			</div>
		<?php endforeach; ?>
	</section>
<?php endif ?>