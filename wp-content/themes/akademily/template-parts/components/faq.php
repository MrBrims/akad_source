<?php if ($faq = carbon_get_post_meta(get_the_ID(), 'de_faq')) { ?>
    <div class="faq pb-5 row">
        <div class="col-12 mb-5">
            <div class="global-title"><h2>Häufige Fragen (FAQ)</h2></div>
        </div>
        <div class="col-12">
            <div id="accordion" class="accordion">
                <?php foreach ($faq as $key => $value) { ?>
                    <div class="accordion-item mb-3">
                        <div class="accordion-button collapsed"
                             data-bs-toggle="collapse"
                             data-bs-target="#collapse-id-<?= $key; ?>"
                        >
                            <h3 class="faq_accord"><?= $value['question']; ?></h3>
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
    </div>
<?php } ?>

<script type="application/ld+json">
{
    "@context": "https://schema.org/",
    "@type": "FAQ",
    "mainEntity":[
        <?php foreach ($faq as $key => $value) { ?>
        {
            "@type": "Question",
            "name": "<?= $value['question']; ?>",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<?= strip_tags(apply_filters('the_content', $value['answer'])); ?>"
            }
        },<?php } ?>{}]}
</script>
<!--FAQPage Schema Markup-->
                    
                           
                         
                                    
                                 
                
