<?php

/** Template Name: New Halfe & Coaching */

get_header();

?>

<main class="main">
	<?php get_template_part('parts/sections/hero'); ?>
	<div class="container">
		<div class="inner">
			<div class="content">
				<?php
				$data = carbon_get_post_meta(get_the_ID(), 'ak_complex_fields_page');
				foreach ($data as $key) {
					switch ($key['_type']) {
						case 'template_rich':
							if (!$key['ak_complex_rich_text']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/rich-text.php';
							break;
						case 'template_rich_accent':
							if (!$key['ak_complex_rich_accent']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/rich-text-accent.php';
							break;
						case 'template_global_select':
							if (!$key['ak_complex_global_select']) {
								break;
							}
							get_template_part($key['ak_complex_global_select']);
							break;
						case 'template_price':
							if (!$key['get_ak_complex_table_price']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/table-price.php';
							break;
						case 'template_price_lekt':
							if (!$key['complex_price_lektkor_table']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/price-lekt-template.php';
							break;
						case 'template_form_calc':
							if (!$key['ak_complex_form_calc_title']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/form-calc-template.php';
							break;
						case 'template_unic_work':
							if (!$key['unic_accordeon_work']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/unic-work-template.php';
							break;
						case 'template_unic_guarant':
							if (!$key['unic_guarant_card']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/unic-guarant-template.php';
							break;
						case 'template_unic_diagram':
							if (!$key['unic_diagram_list']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/unic-diagram-template.php';
							break;
						case 'template_trust':
							if (!$key['ak_complex_trust_title']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/trust-bage-template.php';
							break;
						case 'template_tabl_coach':
							if (!$key['ak_complex_table_coaching_row']) {
								break;
							}
							include get_template_directory() . '/parts/complex_blocks/table-coach-template.php';
							break;
					}
				}
				get_template_part('parts/sections/main-faq');
				?>
			</div>
			<div class="sidebar">
				<div class="team-vidget">
					<?php get_template_part('parts/blocks/team'); ?>
				</div>
			</div>
		</div>
		<?php
		get_template_part('parts/sections/message');
		get_template_part('parts/sections/contact');
		get_template_part('parts/shema/microdata');
		?>
	</div>
</main>

<?php get_footer(); ?>