<?php
$current_url = home_url() . $_SERVER['REQUEST_URI'];
$random_rating = rand(48, 50) / 10;
$random_all_rating = rand(372, 745);
?>

<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "CreativeWorkSeries",
		"name": "Akademily",
		"aggregateRating": {
			"@type": "AggregateRating",
			"bestRating": "5",
			"ratingValue": "<?php echo $random_rating; ?>",
			"ratingCount": "<?php echo $random_all_rating; ?>"
		}
	}
</script>