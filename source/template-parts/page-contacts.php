<?php
/** Template Name: Контакты */
get_header();
while (have_posts()) {
    the_post();
    ?>
    <div class="contacts">
        <div class="container">
            <div class="row">
                <div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5 pb-5">
                    <div class="global-title mb-5">
                        <h1><?= get_the_title(); ?></h1>
                    </div>
                    <div class="row">
                        <div class="contacts-info col-12 mb-4">
                            <div class="contacts-info-item">
                                <div class="contacts-info-item-title mb-3">Anschrift:</div>
                                <div class="contacts-info-item-text mb-4">
                                    <?= carbon_get_post_meta(get_the_ID(), 'contacts_address'); ?>
                                </div>
                            </div>
                            <div class="contacts-info-item">
                                <div class="contacts-info-item-title mb-3">Telefon:</div>
                                <div class="contacts-info-item-text mb-4">
                                    <?= carbon_get_post_meta(get_the_ID(), 'contacts_phone'); ?>
                                </div>
                            </div>
                            <div class="contacts-info-item">
                                <div class="contacts-info-item-title mb-3">E-Mail:</div>
                                <div class="contacts-info-item-text mb-4">
                                    <?= carbon_get_post_meta(get_the_ID(), 'contacts_mail'); ?>
                                </div>
                            </div>
                            <div class="contacts-info-item">
                                <div class="contacts-info-item-title mb-3">Geschäftszeiten:</div>
                                <div class="contacts-info-item-text mb-4">
                                    <?= carbon_get_post_meta(get_the_ID(), 'contacts_work'); ?>
                                </div>
                            </div>
                            <div class="contacts-info-item">
                                <!-- <div class="contacts-info-item-title mb-3">Skype:</div>
                                <div class="contacts-info-item-text skype mb-4">
                                    <div class="row">
                                        <?php
                                        if ($skype = carbon_get_post_meta(get_the_ID(), 'contacts_skype')) {
                                            foreach ($skype as $item) {
                                                ?>
                                                <div class="col-6 col-lg-4 mb-2">
                                                    <a href="skype:live:<?= $item['live']; ?>?chat">
                                                        <?= $item['login']; ?>
                                                    </a>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="contacts-map">
                                <iframe src="<?= carbon_get_post_meta(get_the_ID(), 'contacts_map'); ?>"
                                        width="100%"
                                        height="450"
                                        style="border:0;"
                                        allowfullscreen=""
                                        loading="lazy"
                                >
                                </iframe>
                            </div>
                        </div>
                        <div class="col-12 mt-5 mb-5">
                            <div class="global-title">
                                <h2><?= carbon_get_post_meta(get_the_ID(), 'contacts_block_title'); ?></h2>
                            </div>
                        </div>
                        <div class="contacts-appeal col-12">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-3 mb-4">
                                    <div class="contacts-appeal-item text-center pt-5 pt-xl-4 pb-4 ps-4 pe-4">
                                        <div class="contacts-appeal-item-title mb-3">
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_1_desc'); ?>
                                        </div>
                                        <a class="contacts-appeal-item-text ai1" href="https://wa.me/4915772400107" rel="nofollow">
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_1_link'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-3 mb-4">
                                    <div class="contacts-appeal-item text-center pt-5 pt-xl-4 pb-4 ps-4 pe-4">
                                        <div class="contacts-appeal-item-title mb-3">
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_2_desc'); ?>
                                        </div>
                                        <a class="contacts-appeal-item-text ai2"
                                           href="mailto:<?= carbon_get_post_meta(get_the_ID(), 'contacts_block_2_link'); ?>" rel="nofollow"
                                        >
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_2_link'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-3 mb-4">
                                    <div class="contacts-appeal-item text-center pt-5 pt-xl-4 pb-4 ps-4 pe-4">
                                        <div class="contacts-appeal-item-title mb-3">
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_3_desc'); ?>
                                        </div>
                                        <a class="contacts-appeal-item-text ai3"
                                           href="tel:<?= carbon_get_post_meta(get_the_ID(), 'contacts_block_3_link'); ?>" rel="nofollow"
                                        >
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_3_link'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-3 mb-4">
                                    <div class="contacts-appeal-item text-center pt-5 pt-xl-4 pb-4 ps-4 pe-4">
                                        <div class="contacts-appeal-item-title mb-3">
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_4_desc'); ?>
                                        </div>
                                        <a class="contacts-appeal-item-text"
                                           data-bs-target="#Modal"
                                           data-bs-toggle="modal"
                                           href="#"
                                        >
                                            <?= carbon_get_post_meta(get_the_ID(), 'contacts_block_4_link'); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5 mb-5">
                            <div class="global-title">
                                <h1>DIE ZUSAMMENARBEIT MIT UNSEREM SERVICE FÜR WISSENSCHAFTLICHE ARBEITEN</h1>
                            </div>
                        </div>
                        <div class="contacts-support">
                            <div class="row">
                                <div class="col-12 col-lg-6 order-2 order-lg-1">
                                    <div class="contacts-support-title mb-4">
                                        Ihre Ansprechpartner bei Akademily und unsere Öffnungszeiten. Benötigte Unterstützung ist nicht immer planbar. Gut zu wissen, dass unsere Manager von 07:00 Uhr bis 20:00 Uhr für Sie erreichbar sind:
                                    </div>
                                    <div class="contacts-support-text mb-3">
                                        <ul>
                                            <li>
                                                Per Telefon
                                                <a href="tel:+493021789099">+49 (30) 217-890-99</a>
                                            </li>
                                            <li>
                                                Per E-Mail
                                                <a href="mailto:info@akademily.de">info@akademily.de</a>
                                            </li>
                                            <!-- <li>
                                                Via
                                                <a href="skype:live:.cid.47d8186b9fadb15d?chat" rel="nofollow">Skype</a>
                                            </li> -->
                                            <li>
                                                Via
                                                <a href="https://wa.me/4915772400107" rel="nofollow">WhatsApp</a>
                                            </li>
                                            <li>
                                                Über das Auftragsformular per <a data-bs-target="#Modal" data-bs-toggle="modal" href="#">Anfrage-Formular</a> auf unserer Seite
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 order-1 order-lg-2">
                                    <img class="contacts-support-img img-fluid mb-4"
                                         src="<?= get_template_directory_uri(); ?>/assets/images/contacts/support.png"
                                         alt="Akademily kontakte"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php
}
get_footer();