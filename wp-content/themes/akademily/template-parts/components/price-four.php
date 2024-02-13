<div class="container blog__price_four">
	<h2><?php echo carbon_get_post_meta(get_the_ID(), 'cf_price_title'); ?></h2>
	<div class="blog__container">
		<?php
		$items = carbon_get_post_meta(get_the_ID(), 'cf_prices');
		foreach ($items as $key => $item) { ?>
		<div class="blog__item">
			<p><?php echo $item['name'] ?></p>
			<p><?php echo $item['desc'] ?></p>
			<p>ab <span><?php echo $item['price'] ?></span></p>
			<ul>
				<li>Schaffung von Arbeitsplätzen</li>
				<li>Überprüfung durch einen erfahrenen Dozenten</li>
				<li>Präsentation des Papiers gemäß den Regeln der Schule</li>
				<li>Bericht über die Einzigartigkeit in %</li>
				<li>Garantie für kostenlose Überarbeitungen</li>
			</ul>
			<a class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#Modal"><?php echo $item['btn'] ?></a>
		</div>
		<?php } ?>
	</div>
</div>