<section class="section price-lekt">
	<?php if (!empty($key['complex_price_lektkor_title'])) : ?>
		<h2 class="title"><?php echo $key['complex_price_lektkor_title']; ?></h2>
	<?php endif ?>
	<div class="price-lekt__inner">
		<table class="price-lekt__table">
			<tbody>
				<?php
				$first_lek = true;
				$first_kor = true;
				$num_array = count($key['complex_price_lektkor_table']);
				foreach ($key['complex_price_lektkor_table'] as $k) :
				?>
					<tr>
						<td>
							<h4><?php echo $k['complex_price_lektkor_disc'] ?></h4>
							<span><?php echo $k['complex_price_lektkor_disc_list'] ?></span>
						</td>
						<td class="price-lekt__td-btn">
							<span class="price-lekt__pref">
								<?php echo $k['complex_price_lekt_pref'] ?>
							</span>
							<span class="price-lekt__num">
								<?php echo $k['complex_price_lekt_price'] ?>
							</span>
							<span class="price-lekt__pro">
								<?php echo $k['complex_price_lekt_pro'] ?>
							</span>
							<a class="price-lekt__btn btn popup-link" href="#popup-form">
								<?php echo $k['complex_price_lekt_btn'] ?>
							</a>
						</td>
						<?php if ($first_lek) : ?>
							<td rowspan="<?php echo $num_array ?>">
								<?php echo apply_filters('the_content', $key['complex_price_lekt_list']); ?>
							</td>
						<?php
							$first_lek = false;
						endif
						?>
						<td class="price-lekt__td-btn">
							<span class="price-lekt__pref">
								<?php echo $k['complex_price_kor_pref'] ?>
							</span>
							<span class="price-lekt__num">
								<?php echo $k['complex_price_kor_price'] ?>
							</span>
							<span class="price-lekt__pro">
								<?php echo $k['complex_price_kor_pro'] ?>
							</span>
							<a class="price-lekt__btn btn popup-link" href="#popup-form">
								<?php echo $k['complex_price_kor_btn'] ?>
							</a>
						</td>
						<?php if ($first_kor) : ?>
							<td rowspan="<?php echo $num_array ?>">
								<?php echo apply_filters('the_content', $key['complex_price_kor_list']); ?>
							</td>
						<?php
							$first_kor = false;
						endif
						?>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>

</section>