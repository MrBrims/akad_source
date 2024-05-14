<?php
$current_url = home_url() . $_SERVER['REQUEST_URI'];
$random_rating = rand(49, 50) / 10;
$random_all_rating = rand(372, 391);
?>

<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "CreativeWorkSeries",
		"name": "<?php the_title(); ?>",
		"aggregateRating": {
			"@type": "AggregateRating",
			"bestRating": "5",
			"ratingValue": "<?php echo $random_rating; ?>",
			"ratingCount": "<?php echo $random_all_rating; ?>"
		},
	}
</script>