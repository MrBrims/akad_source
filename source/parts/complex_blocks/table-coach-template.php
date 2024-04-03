<section class="table-coach section rich-text">
	<div class="container">
		<?php if (!empty($key['ak_complex_table_coaching_title'])) : ?>
			<div class="table-coach__head">
				<?php echo apply_filters('the_content', $key['ak_complex_table_coaching_title']); ?>
			</div>
		<?php endif ?>
		<table class="table-coach__table">
			<?php foreach ($key['ak_complex_table_coaching_row'] as $keyRow) : ?>
				<tr>
					<?php foreach ($keyRow['ak_complex_table_coaching_col'] as $k) : ?>
						<td>
							<?php if (!empty($k['table_coaching_col_title'])) : ?>
								<p class="table-coach__table-title">
									<?php echo $k['table_coaching_col_title']; ?>
								</p>
							<?php endif; ?>
							<?php if (!empty($k['table_coaching_col_text'])) : ?>
								<p class="table-coach__table-text">
									<?php echo $k['table_coaching_col_text']; ?>
								</p>
							<?php endif; ?>
						</td>
					<?php endforeach; ?>
				</tr>
			<?php endforeach; ?>
		</table>
		<?php if (!empty($key['table_coaching_rich'])) : ?>
			<div class="table-coach__text">
				<?php echo apply_filters('the_content', $key['table_coaching_rich']); ?>
			</div>
		<?php endif ?>
	</div>
</section>