<section class="main-faq section">
	<div class="container">
		<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'local_faq_title'))) : ?>
			<h2 class="main-faq title">
				<?php echo carbon_get_post_meta(get_the_ID(), 'local_faq_title'); ?>
			</h2>
		<?php endif ?>
		<div class="main-faq__wrapper">
			<div class="tab main-faq__tab">
				<div class="tab__nav-inner main-faq__nav-inner">
					<?php if (empty(carbon_get_post_meta(get_the_ID(), 'global_faq_show'))) : ?>
						<?php foreach ((carbon_get_theme_option('main_faq_tab')) as $key) : ?>
							<div class="tab__nav main-faq__nav">
								<?php echo $key['main_faq_tab_name']; ?>
							</div>
						<?php endforeach; ?>
					<?php endif ?>
					<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'local_faq_tab'))) : ?>
						<?php foreach ((carbon_get_post_meta(get_the_ID(), 'local_faq_tab')) as $key) : ?>
							<div class="tab__nav main-faq__nav">
								<?php echo $key['local_faq_tab_name']; ?>
							</div>
						<?php endforeach; ?>
					<?php endif ?>
				</div>
				<div class="main-faq__content-inner">
					<?php if (empty(carbon_get_post_meta(get_the_ID(), 'global_faq_show'))) : ?>
						<?php foreach ((carbon_get_theme_option('main_faq_tab')) as $key) : ?>
							<div class="tab__content main-faq__tab-content">
								<h3 class="main-faq__tab-title">
									<?php echo $key['main_faq_tab_name']; ?>
								</h3>
								<?php foreach ($key['main_faq_items'] as $k) : ?>
									<div class="main-faq__item">
										<div class="main-faq__inner">
											<div class="main-faq__head">
												<div class="main-faq__inner-icon">
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
												<h3 class="main-faq__inner-title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
													<?php echo $k['main_faq_head']; ?>
												</h3>
											</div>
											<div class="main-faq__content">
												<div style="min-height:0;">
													<div class="main-faq__text" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
														<?php echo apply_filters('the_content', $k['main_faq_content']); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endforeach; ?>
					<?php endif ?>

					<?php if (!empty(carbon_get_post_meta(get_the_ID(), 'local_faq_tab'))) : ?>
						<?php foreach ((carbon_get_post_meta(get_the_ID(), 'local_faq_tab')) as $key) : ?>
							<div class="tab__content main-faq__tab-content">
								<h3 class="main-faq__tab-title">
									<?php echo $key['local_faq_tab_name']; ?>
								</h3>
								<?php foreach ($key['local_faq_items'] as $k) : ?>
									<div class="main-faq__item">
										<div class="main-faq__inner">
											<div class="main-faq__head">
												<div class="main-faq__inner-icon">
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
												<h3 class="main-faq__inner-title" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
													<?php echo $k['local_faq_head']; ?>
												</h3>
											</div>
											<div class="main-faq__content">
												<div style="min-height:0;">
													<div class="main-faq__text" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
														<?php echo apply_filters('the_content', $k['local_faq_content']); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endforeach; ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>