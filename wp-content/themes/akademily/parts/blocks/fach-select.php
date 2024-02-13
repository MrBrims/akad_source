<select class="wide search-select custom-select" name="specialization" required>
	<option value="" disabled selected>Fachrichtung</option>
	<?php
	foreach (SPEC as $value) { ?>
		<option value="<?php echo $value; ?>" class=""><?php echo $value; ?></option>
	<?php } ?>
</select>