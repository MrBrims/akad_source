<?php

/** Template Name: Наша команда */
get_header();
while (have_posts()) {
    the_post();
?>
    <div class="container">
        <div class="row">
            <div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5">
                <div class="mb-5">
                    <div class="global-title mb-5">
                        <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
                    </div>
                    <?php
                    get_template_part('template-parts/components/page-meta');

                    ?>
                </div>


            </div>
        </div>
    </div>
    <div class="slide_unser">
        <div class="row">
            <div id="article" class="col-xxl-12 col-xl-12 col-12">
                <?php
                //  echo do_shortcode('[metaslider id="19362"]'); 
                 ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5">
                <div class="mb-5">

                    <?php

                    echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'de_desc'));
                    ?>
                </div>
                <div class="de_team_in">
                    <div class="global-title mb-5">
                        <h2><?= carbon_get_post_meta(get_the_ID(), 'de_team_title'); ?></h2>
                    </div>
                    <div class="row">
                        <?php
                        $team = carbon_get_post_meta(get_the_ID(), 'de_team');
                        foreach ($team as $item) {
                        ?>
                            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                                <div class="team-item mb-4">
                                    <div class="team-item-img">
                                        <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>">
                                        <div class="team-item-img-back d-none d-lg-block">
                                            <?= $item['desc']; ?>
                                        </div>
                                    </div>
                                    <div class="team-item-background">

                                        <div class="team-item-name text-center mb-1"><?= $item['title']; ?></div>
                                        <div class="team-item-position text-center"><?= $item['position']; ?></div>
                                        <div class="team-item-back d-block d-lg-none"><?= $item['desc']; ?></div>
                                        <div class="team-item-position_desc text-center mt-3 "><?= $item['desc']; ?></div>
                                        <div class="team-item-social">
                                            <div class="wats">
                                                <?php if (!empty($item['whatsapp'])) { ?>
                                                    <a href="<?= $item['whatsapp']; ?>" rel="nofollow">
                                                    <img src="<?= DE_URI; ?>/assets/images/unser/whatsapp-blue.png" alt="whatsapp" width="20"> WhatsApp
                                                    </a>
                                                <?php } ?>
                                            </div>
                                            <!-- <div class="skyp">
                                            <?php if (!empty($item['skype'])) { ?>
                                                <a href="skype:<?= $item['skype']; ?>" rel="nofollow">
                                                    <img src="<?= DE_URI; ?>/assets/images/unser/skype-h.png" alt="skype" width="20"> Skype
                                                </a>
                                            <?php } ?>
                                            </div> -->
                                            <div class="e_mail">
                                            <?php if (!empty($item['email'])) { ?>
                                                <a href="mailto:<?= $item['email']; ?>" rel="nofollow">
                                                    <img src="<?= DE_URI; ?>/assets/images/unser/email1.png" alt="email" width="20"> E-mail
                                                </a>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
                /** Photo */
                get_template_part('template-parts/components/photo');
                ?>


            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
    <div class="container pt-5 pb-5 js-fixes-block-end">
        <div class="other_unser">
            <div class="row">
                <?php
                /** Green block - progress */
                get_template_part('template-parts/components/progress');
                ?>
            </div>
        </div>
    </div>
<?php
}
get_footer();
