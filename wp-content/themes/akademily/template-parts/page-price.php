<?php

/** Template Name: Страница цен */
get_header();
while (have_posts()) {
    the_post();
?>
    <div class="seo-banner" style="background-image: url('<?= carbon_get_post_meta(get_the_ID(), 'de_fon'); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8  col-12">
                    <div class="seo-banner__wrap">
                        <div class="seo-banner__title commerc">
                            <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
                        </div>
                        <div class="seo-banner__subtitle commerc_sub">
                            <?= carbon_get_post_meta(get_the_ID(), 'de_subtitle'); ?>
                        </div>
                        <a class="btn btn-primary btn-lg" href="#" data-bs-toggle="modal" data-bs-target="#Modal">UNVERBINDLICH ANFRAGEN</a>
                        <br /><br />
                    </div>

                </div>
                <div class="col-xxl-4 col-xl-4 col-12"><?php get_template_part('template-parts/components/small-form2');  ?></div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div id="article" class="col-xxl-9 col-xl-12 col-12 page-wrapper pt-5 position">
                <?php
                the_content();

                /** Sections top */
                get_template_part('template-parts/components/sectionsTop');
                ?>
            </div>
            <div id="aside1" class="col-xxl-3 col-xl-12 col-12 page-wrapper pt-5 position">
                <?php get_template_part('template-parts/components/managerSlider'); ?>
            </div>

        </div>
    </div>
    <?php get_template_part('template-parts/components/price'); ?>
    <div class="container js-fixes-block-end pt-5">
        <div class="row">
            <div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper position">

                <h3>Hochqualifizierte wissenschaftliche Betreuer</h3><br>
                <div class="col-xxl-12 col-xl-12 col-12 mobil_mark" style="display:flex;">
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark1">Hochqualifizierte und unterstützende Betreuer<span class="photo" data-title="Unsere Betreuer verfügen über akademische Abschlüsse: ab Bachelor- und s.w. und haben auch Erfahrung in der Lehre in ihrem professionellen Bereich "> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span></div>
                    <!-- <div class="col-xxl-4 col-xl-4 col-12 mark mark7">Möglichkeiten, <br>uns zu erreichen<span class="photo" data-title="Sie können uns per Website, E-mail, Telefon, WhatsApp/Skype kontaktieren"> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div> -->
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark7">Möglichkeiten, <br>uns zu erreichen<span class="photo" data-title="Sie können uns per Website, E-mail, Telefon, WhatsApp kontaktieren"> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark3"><br>7 Tage pro Woche <span class="photo" data-title="Sie können uns 7 Tage pro Woche von 8:00 bis 23:00 Uhr erreichen."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span></div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-12 mobil_mark" style="display:flex;">
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark4"><br>Lernprozess<span class="photo" data-title="Im Coaching erhalten Sie nicht nur Ratschläge und Hilfe beim Schreiben Ihrer Arbeit, sondern werden auch weitergebildet."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark5"><br>Persönlicher Manager<span class="photo" data-title="Ein persönlicher Manager wird Ihnen zur Verfügung gestellt, der Sie auf dem Weg unserer Zusammenarbeit begleitet."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark6"><br>Offizieller Vertrag<span class="photo" data-title="Wir schließen einen offiziellen Vertrag mit Ihnen. Rechtsperson und Büro sind in Deutschland registriert"> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/components/thema'); ?>
    <?php get_template_part('template-parts/components/form'); ?>
    <!-- <?php get_template_part('template-parts/components/price'); ?> -->
    <?php get_template_part('template-parts/components/price-four'); ?>
    <?php get_template_part('template-parts/components/guarant'); ?>
    <?php get_template_part('template-parts/components/how'); ?>

    <div class="first_second">
        <div class="container pt-5">
            <?php
            /** Reviews */
            get_template_part('template-parts/components/reviews');
            ?>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper position">
                <!-- <h3>Unsere Lektoren & Coaches</h3>
                <div class="sl_text3"> <?= carbon_get_post_meta(get_the_ID(), 'de_home_title_four'); ?></div>
                <?php echo do_shortcode('[metaslider id="14837"]'); ?><br>
                <div class="text-center mt-4"><a class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#Modal">PREISVORSCHLAG</a></div>
                <br><br>
                <br> -->
                <?php

                /** FAQ */
                get_template_part('template-parts/components/faq');

                /** Author */
                get_template_part('template-parts/components/page-author');


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

    <!-- <?php get_template_part('template-parts/components/blog'); ?> -->


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
    .feedback2 {
        background-color: rgba(255, 255, 255, 0.7);
    }

    h3.ea-header {
        padding-bottom: 0;
        padding-top: 0;
    }

    h2 {
        /* color: #102752;
        font-size: 32px;
        text-transform: uppercase;
        padding-top: 40px;
        padding-bottom: 15px; */
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 48px;
        text-transform: uppercase;

        /* identical to box height, or 150% */

        color: #102752;
    }

    h3 {
        color: #102752;
        font-weight: bold;
        font-size: 29px;
        padding-bottom: 20px;
        padding-top: 35px;
    }

    h4 {
        color: #102752;
        font-weight: bold;
        font-size: 29px;
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

    h3.ea-header::before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        background: transparent;
        left: 12px;
        margin-top: 38px;
    }

    .head_drop_down1 {
        margin-left: 55%;
    }

    .head_drop_down2 {
        margin-left: 165px;
    }
</style>