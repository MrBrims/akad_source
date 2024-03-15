<section class="section interview">
	<div class="container">
		<?php foreach ((carbon_get_post_meta(get_the_ID(), 'bewert_fields')) as $key) : ?>
			<div class="interview__inner">
				<div class="interview__info">
					<div class="interview__card">
						<div class="interview__card-head">
							<div class="interview__card-imgbox">
								<img class="interview__card-img" src="<?php echo $key['bewert_field_img']; ?>">
							</div>
							<div class="interview__card-name">
								<?php echo $key['bewert_field_name']; ?>
							</div>
						</div>
						<div class="interview__meta">
							<div class="interview__meta-item">
								<span class="interview__meta-text">
									<?php echo $key['bewert_field_art']; ?>
								</span>
								<span class="interview__meta-text">
									<?php echo $key['bewert_field_art_name']; ?>
								</span>
							</div>
							<div class="interview__meta-item">
								<span class="interview__meta-text">
									<?php echo $key['bewert_field_fach']; ?>
								</span>
								<span class="interview__meta-text">
									<?php echo $key['bewert_field_fach_name']; ?>
								</span>
							</div>
						</div>
						<div class="interview__card-text">
							<?php echo $key['bewert_field_text']; ?>
						</div>
					</div>
				</div>
				<div class="interview__content">
					<?php
					$data = $key['bewert_field_content'];
					foreach ($data as $k) {
						switch ($k['_type']) {
							case 'bewert_field_interw':
								if (!$k['bewert_field_author_name']) {
									break;
								} ?>
								<div class="interview__content-inner">
									<div class="interview__content-head">
										<div class="interview__content-imgbox">
											<img class="interview__content-img" src="<?php echo $k['bewert_field_author_img']; ?>" alt="icon">
										</div>
										<div class="interview__content-name">
											<?php echo $k['bewert_field_author_name']; ?>
										</div>
									</div>
									<div class="interview__content-text">
										<?php echo $k['bewert_field_author_quest']; ?>
									</div>
								</div>
							<?php
								break;
							case 'bewert_field_cust':
								if (!$k['bewert_field_cust_name']) {
									break;
								} ?>
								<div class="interview__content-inner">
									<div class="interview__content-head">
										<div class="interview__content-imgbox">
											<img class="interview__content-img" src="<?php echo $k['bewert_field_cust_img']; ?>" alt="icon">
										</div>
										<div class="interview__content-name">
											<?php echo $k['bewert_field_cust_name']; ?>
										</div>
									</div>
									<div class="interview__content-text">
										<?php echo $k['bewert_field_cust_quest']; ?>
									</div>
								</div>
					<?php
								break;
						}
					}
					?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>