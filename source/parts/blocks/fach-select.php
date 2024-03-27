<div class="wrapper-selec">
	<select class="wide search-select custom-select input" name="specialization" required>
		<option value="" disabled selected>Fachrichtung</option>
		<?php
		foreach (SPEC as $value) { ?>
			<option value="<?php echo $value; ?>" class=""><?php echo $value; ?></option>
		<?php } ?>
	</select>
</div>