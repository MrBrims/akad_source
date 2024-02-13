<?php if ($sections = carbon_get_post_meta(get_the_ID(), 'de_sections')) { ?>
    <div class="de-section pb-5">
        <div class="de-section-anchor">
            <div class="de-section-anchor-bg">
                <?php foreach ($sections as $key => $value) {?>
                    <div class="de-section-anchor-item">
                        <a href="#block-id<?= $key; ?>">
                            <?= $value['de_section_title']; ?>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>