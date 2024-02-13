<?php

/** Template Name: FAQ */
get_header();
while (have_posts()) {
    the_post();
?>
    <div class="container">
        <div class="row">
            <div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5 pb-5">
                <div class="global-title mb-5">
                    <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
                </div>
                <?php
                get_template_part('template-parts/components/page-meta');
                echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'de_desc'));
                ?>
                <?php if ($faq = carbon_get_post_meta(get_the_ID(), 'de_faq')) { ?>
                    <div class="faq">
                        <div id="accordion" class="accordion">
                            <?php foreach ($faq as $key => $value) { ?>
                                <div class="accordion-item mb-3">
                                    <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-id-<?= $key; ?>">
                                        <?= $value['question']; ?>
                                    </div>
                                    <div id="collapse-id-<?= $key; ?>" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="faq-text">
                                                <?= apply_filters('the_content', $value['answer']); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <script type="application/ld+json">
                {
                    "@context": "https://schema.org/",
                    "@type": "FAQPage",
                    "mainEntity": [
                        <?php foreach ($faq as $key => $value) { ?> {
                                "@type": "Question",
                                "name": "<?= $value['question']; ?>",
                                "acceptedAnswer": {
                                    "@type": "Answer",
                                    "text": "<?= strip_tags(apply_filters('the_content', $value['answer'])); ?>"
                                }
                            },
                        <?php } ?> {}
                    ]
                }
            </script>
            <!--FAQPage Schema Markup-->

            <?php get_sidebar(); ?>
        </div>
    </div>
<?php
}
get_footer();
