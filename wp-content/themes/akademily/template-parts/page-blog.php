<?php 
/** Template Name: Страница блога */
get_header();
while (have_posts()) {
	the_post();
?>
<div class="container blog__section">
	<div class="blog-leftside">
		<div class="blog-leftside__search">
			<input type="text" name="" id="" placeholder="Suche...">
			<button>Suchen</button>
		</div>
		<div class="blog-leftside__menu">
			<?php
			wp_nav_menu([
				'theme_location' => 'side-menu',
				'container_class' => 'blog-leftside__menu',
				'container_id' => 'wrap-side-menu',
				'menu_class' => 'blog-leftside__cont',
				'menu_id' => 'side-menu',
			]);
			?>
			<!-- <div class="blog-leftside__cont">
				<a href="">Bachelorarbeit</a>
				<a href="">Übersicht</a>
				<a href="">Beispiel</a>
				<a href="">Vorlage</a>
				<a href="">Nicht bestanden</a>
				<a href="">Zeitplan</a>
			</div>
			<div class="blog-leftside__cont">
				<a href="">Bachelorarbeit</a>
				<a href="">Übersicht</a>
				<a href="">Beispiel</a>
				<a href="">Vorlage</a>
				<a href="">Nicht bestanden</a>
				<a href="">Zeitplan</a>
			</div> -->
		</div>
		<div class="blog-leftside__block">
			<a href="">
				<div class="blog-leftside__item">
					<img src="<?= DE_URI; ?>/assets/images/pageblog/Group 2622.svg" alt="">
				</div>
			</a>
			<a href="">
				<div class="blog-leftside__item">
					<img src="<?= DE_URI; ?>/assets/images/pageblog/Group 2623.svg" alt="">
				</div>
			</a>
			<a href="">
				<div class="blog-leftside__item">
					<img src="<?= DE_URI; ?>/assets/images/pageblog/Group 2624.svg" alt="">
				</div>
			</a>
		</div>
	</div>
	<div class="blog-rightside">
		<h3>Sie benötigen Unterstützung bei Ihrer Bachelorarbeit?</h3>
		<?php echo get_the_post_thumbnail(); ?>
		<div class="blog-rightside__bc">
			<div class="blog-rightside__bc1">
				<p>Autor, Doctor</p>
				<p>Prof. Dr. Conrad Rüth</p>
			</div>
			<div class="blog-rightside__bc2">
				<p>Veröffentlicht</p>
				<p>25.08.2021</p>
			</div>
			<div class="blog-rightside__bc3">
				<p>Erneut</p>
				<p>14.01.2023</p>
			</div>
		</div>
		<p>Das Online-Mentoring während Ihres Bachelorstudiums an der Akademie ist umfassend. Während des gesamten Schreibprozesses Ihrer Bachelorarbeit steht Ihnen ein persönlicher Coach zur Seite, der Sie professionell begleitet. Mit Rat und Tat zeigt er Ihnen organisatorische Grundlagen auf und sorgt für einen stressfreien Start. Ein professioneller Berater unterstützt SIe bei der Entwicklung und formulierung der Gliederung und gestaltet mit Ihnen die einzelnen Kapitel. Wenn Sie beim schreiben von der Struktur abweichen, sorgt ihr Betreuer dafür, dass Sie diese beibehalten und gibt Ihnen die notwendige Unterstützung.
Wir sorgen dafür, dass Ihr persönlicher Stil erhalten bleibt.</p>
		<h4>DER ABLAUF – WIE IST DER ABLAUF?</h4>
		<h5>DER ABLAUF – WIE IST DER ABLAUF?</h5>
		<h6>DER ABLAUF – WIE IST DER ABLAUF?</h6>
		<p><strong>Ihre Meinung ist uns wichtig! Nach Abschluss der Betreuung geben wir Ihnen die Gelegenheit, sowohl Ihren Coach als auch Ihren Supervisior zu bewerten. Wir geben  Ihnen ein Versprechen : Lebenslange Qualitätsgarantie!</strong></p>
	</div>
</div>


<div class="container">
	<h2>Bewertungen</h2>
	<div class="slider"></div>
</div>


<?php get_template_part('template-parts/components/thema'); ?>
<!-- <?php get_template_part('template-parts/components/price'); ?> -->
<?php get_template_part('template-parts/components/price-four'); ?>
<?php get_template_part('template-parts/components/guarant'); ?>
<?php get_template_part('template-parts/components/how'); ?>
<!-- <?php get_template_part('template-parts/components/form'); ?> -->




<div class="container">
	<h2>Garantien und Vorteile der Zusammenarbeit mit uns</h2>
</div>
<div class="container thema__section">
	<h2>Wie verläuft alles?</h2>
</div>

<div class="background-light">
	<div class="container pt-5">
		<?php
		/** Reviews */
		get_template_part('template-parts/components/reviews');
		?>
	</div>
</div>

<?php 
}
get_footer();
?>