<?php if ($sections = carbon_get_post_meta(get_the_ID(), 'de_sections')) { ?>
    <div class="de-section pb-5">
        <div class="de-section-wrapper">
            <?php foreach ($sections as $key => $value) {?>
                <div id="block-id<?= $key; ?>" class="de-section-item">
                    <h2 class="de-section-item-title"><?= $value['de_section_title']; ?></h2>
                    <div class="de-section-item-text">
                        <?= apply_filters('the_content', $value['de_section_desc']); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>