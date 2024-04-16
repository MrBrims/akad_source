<?php get_header();
$termId = get_queried_object_id();
$thumbUrl = carbon_get_term_meta($termId, 'term_hero_bg');
?>

<main class="main">
	<section class="hero hero-single hero-category" style="background-image:url(<?php echo $thumbUrl; ?>);">
		<div class="container">
			<h1 class="hero-single__title">
				<?php echo single_cat_title(); ?>
			</h1>
		</div>
	</section>
	<div class="container">
		<?php if (!is_front_page() && function_exists('yoast_breadcrumb')) { ?>
			<div class="single-breadcrumb">
				<?php yoast_breadcrumb('<div class="single-breadcrumb__list">', '</div>'); ?>
			</div>
		<?php } ?>
		<div class="inner">
			<div class="content">
				<?php
				// while (have_posts()) {
				// 	the_post();
				// 	get_template_part('parts/blocks/post-list');
				// }
				// echo get_the_posts_pagination([
				// 	'prev_next' => false,
				// 	'screen_reader_text' => ' ',
				// 	'aria_label' => '',
				// ]); 
				echo do_shortcode('[ajax_load_more post_type="post" sticky_posts="true" posts_per_page="5"]');
				?>
			</div>
			<aside class="sidebar">
				<div class="team-vidget">
					<?php get_template_part('parts/blocks/form-sidebar'); ?>
				</div>
			</aside>
		</div>
	</div>
	<?php get_template_part('parts/sections/contact'); ?>
</main>

<?php get_footer(); ?>