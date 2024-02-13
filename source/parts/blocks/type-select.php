<select class="wide search-select custom-select" name="type" required>
	<option value="" disabled="" selected="" class="">Arbeitstyp</option>
	<?php
	foreach (TYPES as $value) { ?>
		<option value="<?php echo $value; ?>" class="">
			<?php echo $value; ?>
		</option>
	<?php } ?>
</select>