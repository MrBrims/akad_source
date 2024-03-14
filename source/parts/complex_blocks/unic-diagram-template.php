<section class="section diagram">
	<div class="container">
		<h2 class="title diagram__title">
			<?php echo $key['unic_diagram_title']; ?>
		</h2>
		<ul class="diagram__list">
			<?php foreach ($key['unic_diagram_list'] as $k) : ?>
				<li class="diagram__list-item">
					<?php echo $k['unic_diagram_list_text']; ?>
				</li>
			<?php endforeach; ?>
		</ul>
		<img class="diagram__img" src="<?php echo $key['unic_diagram_img']; ?>" alt="diagram">
		<h2 class="diagram__subtitle">
			<?php echo $key['unic_diagram_subtitle']; ?>
		</h2>
		<div class="diagram__items">
			<?php foreach ($key['unic_diagram_items'] as $k) : ?>
				<div class="diagram__item">
					<div class="diagram__item-box">
						<img class="diagram__item-icon" src="<?php echo $k['unic_diagram_items_img']; ?>" alt="diagram icon">
					</div>
					<div class="diagram__item-text">
						<?php echo $k['unic_diagram_items_text']; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>