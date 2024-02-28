<table class="table-prise">
	<thead>
		<tr>
			<th><?php echo $key['get_ak_complex_table_price_title'] ?></th>
			<th>Preis</th>
		</tr>
	</thead>
	<tbody>
		<?php if (!empty($key['get_ak_complex_table_price'])) : ?>
			<?php
			$first = true;
			$num_array = count($key['get_ak_complex_table_price']);
			foreach ($key['get_ak_complex_table_price'] as $k) :
			?>
				<tr>
					<td><?php echo $k['get_ak_complex_table_price_td'] ?></td>
					<?php if ($first) : ?>
						<td rowspan="<?php echo $num_array ?>">
							<span class="table-prise__num">ab <?php echo $key['get_ak_complex_table_price_num'] ?> Euro</span>
							<span class="table-prise__time">(30 Min.)</span>
							<a class="table-prise__btn btn popup-link" href="#popup-form">
								Jetzt anfragen
							</a>
						</td>
					<?php
						$first = false;
					endif;
					?>
				</tr>
		<?php
			endforeach;
		endif;
		?>
	</tbody>
</table>