<?php

/** Template Name: Гайд страница */
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
                        <a class="btn btn-primary btn-lg" href="#" data-bs-toggle="modal" data-bs-target="#Modal">E-Book kostenfrei herunterladen</a>
                    </div>
                    
                </div>
                <div class="col-xxl-4 col-xl-4 col-12"><img src="<?= carbon_get_post_meta(get_the_ID(), 'de_guide'); ?>"  /></div>
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

    <div class="container">
        <div class="row">
            <div class="slider_guide">
            <?php echo do_shortcode('[metaslider id="19592"]'); ?>
            </div>
        </div>
    </div>

    <div class="first_list_grey">
        <div class="seo-form-new pt-5 pb-5">
            <div class="container">
                <div class="row">

                    <div class="col-xxl-8 col-xl-8 col-12"><?= carbon_get_post_meta(get_the_ID(), 'de_home_desc_three'); ?></div>
                    <div class="col-xxl-4 col-xl-4 col-12">
                        <?php
                        get_template_part('template-parts/components/small-form2');

                        ?>
                    </div>

                </div>
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
        color: #102752;
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