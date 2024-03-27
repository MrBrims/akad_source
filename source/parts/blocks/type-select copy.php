<div class="wrapper-selec">
	<!-- <select class="wide search-select custom-select input" name="type" required>
		<option value="" disabled="" selected="" class="">Arbeitstyp</option>
		<?php
		foreach (TYPES as $value) { ?>
			<option value="<?php echo $value; ?>" class="">
				<?php echo $value; ?>
			</option>
		<?php } ?>
	</select> -->
	<select class="wide search-select custom-select input" name="type" required onclick="loadOptions()">
		<option value="" disabled="" selected="">Arbeitstyp</option>
	</select>
	<script>
		function loadOptions() {
			// Проверяем, были ли уже загружены опции, чтобы избежать повторной загрузки
			console.log('click')
			const select = document.querySelector('.search-select');
			if (select.querySelectorAll('option').length > 1) {
				// return;
			}

			fetch(window.location.origin + '/wp-json/my-namespace/v2/spec')
				.then(response => response.json())
				.then(data => {
					data.forEach(value => {
						const option = document.createElement('option');
						option.value = value;
						option.textContent = value;
						select.appendChild(option);
					});
				})
				.catch(error => console.error('Ошибка загрузки данных: ', error));
		}
	</script>
</div>