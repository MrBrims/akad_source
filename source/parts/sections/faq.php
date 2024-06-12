<section class="faq section">
	<div class="container">
		<?php if (!empty(carbon_get_theme_option('faq_title'))) : ?>
			<h2 class="faq__title title">
				<?php echo carbon_get_theme_option('faq_title'); ?>
			</h2>
		<?php endif ?>
		<div class="faq">
			<?php foreach ((carbon_get_post_meta(get_the_ID(), 'faq_local_items')) as $key) : ?>
				<div class="faq__item">
					<div class="faq__inner">
						<div class="faq__head">
							<div class="faq__inner-icon">
								<svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g fill="#002E5D" clip-path="url(#a)">
										<path d="M.363 7.151h15.274v1.697H.363z" />
										<path d="M7.152 15.636V.362h1.697v15.274z" />
									</g>
									<defs>
										<clipPath id="a">
											<path fill="#fff" d="M0 0h16v16H0z" />
										</clipPath>
									</defs>
								</svg>
							</div>
							<p class="faq__inner-title">
								<?php echo $key['faq_local_head']; ?>
							</p>
						</div>
						<div class="faq__content">
							<div style="min-height:0;">
								<div class="faq__text">
									<?php echo apply_filters('the_content', $key['faq_local_content']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			<?php foreach ((carbon_get_theme_option('faq_items')) as $key) : ?>
				<div class="faq__item">
					<div class="faq__inner">
						<div class="faq__head">
							<div class="faq__inner-icon">
								<svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g fill="#002E5D" clip-path="url(#a)">
										<path d="M.363 7.151h15.274v1.697H.363z" />
										<path d="M7.152 15.636V.362h1.697v15.274z" />
									</g>
									<defs>
										<clipPath id="a">
											<path fill="#fff" d="M0 0h16v16H0z" />
										</clipPath>
									</defs>
								</svg>
							</div>
							<p class="faq__inner-title">
								<?php echo $key['faq_head']; ?>
							</p>
						</div>
						<div class="faq__content">
							<div style="min-height:0;">
								<div class="faq__text">
									<?php echo apply_filters('the_content', $key['faq_content']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>