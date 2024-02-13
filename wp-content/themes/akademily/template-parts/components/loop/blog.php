<div id="blog-id-<?= get_the_ID(); ?>" class="blog-item pt-4 pb-4 mb-4 ps-4 pe-4">
	<div class="row">
		<div class="blog-item-img col-lg-4 col-12 text-center text-lg-start mb-4">
			<?= get_the_post_thumbnail(get_the_ID(), 'medium'); ?>
		</div>
		<div class="col-lg-8 col-12">
			<div class="blog-item-title">
				<a href="<?= get_the_permalink(); ?>">
					<?= get_the_title(); ?>
				</a>
			</div>
			<div class="blog-item-meta d-block d-lg-flex mb-3">
				<div class="blog-item-meta-work text-center text-lg-start me-lg-5 me-0 mb-2">
					<?php
					$cat = get_the_category(get_the_ID());
					echo $cat[0]->name;
					?>
				</div>
				<div class="blog-item-meta-data text-center text-lg-start me-lg-5 me-0 mb-2">
					<span><?= get_the_date('d.m.Y'); ?></span>
				</div>
				<div class="blog-item-meta-name text-center text-lg-start me-lg-5 me-0 mb-2">
					<a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
						<?= get_the_author_meta('display_name', get_the_author_meta('ID')); ?>
					</a>
				</div>
			</div>
			<div class="blog-item-expect mb-4">
				<?= get_the_excerpt(get_the_ID()); ?>
			</div>
			<div class="text-center text-lg-start">
				<a class="btn btn-primary" href="<?= get_the_permalink(); ?>">ARTIKEL LESEN</a>
			</div>
		</div>
	</div>
</div>