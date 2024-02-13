<?php

/** Template Name: Гайд главная страница */
get_header();
while (have_posts()) {
    the_post();
?>
    <div class="seo-banner" style="background-image: url('<?= carbon_get_post_meta(get_the_ID(), 'de_fon'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8  col-12">
                    <div class="seo-banner__wrap">
                        <div class="seo-banner__title">
                            <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
                        </div>
                        <div class="seo-banner__subtitle">
                            <?= carbon_get_post_meta(get_the_ID(), 'de_subtitle'); ?>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper pt-5 position">
                <?php
                the_content();

                /** Sections top */
                get_template_part('template-parts/components/sectionsTop');
                ?>
            </div>


        </div>
    </div>


    <div class="second_list">

        <div class="container position">
            <div class="row">
                <h3>E-Books Studium</h3>
                <?php
                if ($guides = carbon_get_post_meta(get_the_ID(), 'de_guides')) {
                    foreach ($guides as $guides) {
                ?>
                        <div class="col-lg-4 col-md-4 col-12 mb-4">
                            <div class="de_guides">
                                <img src="<?= $guides['image'] ?>" />
                                <div class="de_guides_inner">
                                    <div class="de_guides_title"><a href="<?= $guides['url'] ?>"><?= $guides['title'] ?></a> </div>
                                    <div class="de_guides_text"><?= $guides['text'] ?></div>
                                    <div class="de_guides_date">E-Book - <?= $guides['date'] ?></div>
                                    <div class="de_guides_button"><a href="<?= $guides['url'] ?>">Mehr erfahren</a></div>

                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper pt-5">
                <?php
                /** Sections bottom */
                get_template_part('template-parts/components/sectionsBottom');
                ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/components/blog'); ?>


<?php
}
get_footer(); ?>
<script src="/wp-content/themes/akademily/assets/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        //localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        preferredCountries: ['de', 'us', 'gb'],
        // separateDialCode: true,
        utilsScript: "/wp-content/themes/akademily/assets/js/utils.js",
    });
</script>
<style>
    h2 {
        color: #102752;
        font-size: 32px !important;
        text-transform: uppercase;
        padding-top: 40px;
        padding-bottom: 15px;
    }

    h3 {
        color:  #555555;

        font-weight: bold;
        font-size: 29px !important;
        padding-bottom: 20px;
        padding-top: 35px;
    }

    h4 {
        color: #102752;
        font-weight: bold;
        font-size: 29px !important;
        padding-bottom: 20px;
        padding-top: 35px;
    }

    h3::before {
        content: "";
        position: absolute;
        width: 115px;
        height: 3px;
        background: #dd1c1a;
        left: 0px;
        bottom: 0px;
    }
</style>