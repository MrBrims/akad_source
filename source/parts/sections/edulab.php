<section class="section edulab">
	<div class="container">
		<h2 class="edulab__title">
			EduLab Limited
		</h2>
		<div class="edulab__inner">
			<div class="edulab__col">
				<div class="edulab__item">
					<span class="edulab__reg">
						Reg.number:
					</span>
					<span>
						3193099
					</span>
				</div>
				<div class="edulab__item">
					<span class="edulab__gesh">
						Geschäftsführer:
					</span>
					<span>
						Valery Salauyou
					</span>
				</div>
				<div class="edulab__item">
					<span class="edulab__adress">
						Adresse:
					</span>
					<span>
						<?php echo carbon_get_theme_option('global__adress'); ?>
					</span>
				</div>
			</div>
			<div class="edulab__col">
				<div class="edulab__item">
					<span class="edulab__time">
						Öffnungszeiten:
					</span>
					<span>
						<?php echo carbon_get_theme_option('global_time'); ?>
					</span>
				</div>
				<div class="edulab__item">
					<span class="edulab__phone">
						Telefonnumber:
					</span>
					<a href="tel:<?php echo preg_replace('/[^,.0-9]/', '', carbon_get_theme_option('global_phone')); ?>">
						<?php echo carbon_get_theme_option('global_phone'); ?>
					</a>
				</div>
				<div class="edulab__item">
					<span class="edulab__mail">
						Email:
					</span>
					<a href="mailto:<?php echo carbon_get_theme_option('global_email'); ?>">
						<?php echo carbon_get_theme_option('global_email'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>