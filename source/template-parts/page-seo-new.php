<?php

/** Template Name: Новая SEO страница */
get_header();
while (have_posts()) {
  the_post();
?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "url": "<?= get_page_link(); ?>",
      "name": "<?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?>",
      "softwareVersion": "1",
      "description": "<?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?>",
      "inLanguage": "de",
      "applicationCategory": "https://schema.org/OtherApplication",
      "aggregateRating": {
        "@type": "AggregateRating",
        "worstRating": "1",
        "bestRating": "5",
        "ratingValue": "4,9",
        "ratingCount": "176"
      },
      "offers": {
        "@type": "AggregateOffer",
        "lowprice": "51",
        "priceCurrency": "EUR"
      }
    }
  </script>
  <div class="seo-banner" style="background-image: url('<?= carbon_get_post_meta(get_the_ID(), 'de_fon'); ?>');">
    <div class="container">
      <div class="row">
        <div class="col-xxl-4 col-xl-4 col-12 flex_right">
          <div class="seo-banner__wrap">
            <div class="seo-banner__title">
              <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
            </div>
            <div class="seo-banner__subtitle">
              <?= carbon_get_post_meta(get_the_ID(), 'de_subtitle'); ?>
            </div>

          </div>
        </div>
        <div class="col-xxl-8 col-xl-8 col-12">
          <div class="col-xxl-12 col-xl-12 col-12">
            <div class="seo-form__wrap" style="padding-top:45px; padding-bottom:45px; max-width: 100%;">
              <div class="seo-form__title text-center mb-3">
                Fordern Sie einen unverbindlichen Kostenvoranschlag an
              </div>
              <form method="post" id="form_GA5">
                <div class="seo-form__message js-message alert d-none pt-3 pb-3"></div>
                <div class="col-xxl-12 col-xl-12 col-12 mobil_mark" style="display: flex;">
                  <div class="col-lg-7 col-12 mb-3 left_col">
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <?php get_template_part('template-parts/components/form/select-type') ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <?php get_template_part('template-parts/components/form/select-discipline') ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <label>
                          <span style="color:#FF4E4D;font-weight:bold;">* </span>Art der Arbeit<span class="photo" data-title="Art der Arbeit"> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
                          <input type="text" name="arbeit" class="form-control" placeholder="Art der Arbeit..." />
                        </label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <label>
                          <span style="color:#FF4E4D;font-weight:bold;">* </span>Thema<span class="photo" data-title="Dies ist das Thema Ihrer Arbeit. Es ist sehr wichtig, das Thema Ihrer Arbeit jetzt festzulegen, da Sie es später nicht mehr ändern können, wenn der Autor mit dem Auftrag begonnen hat."> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
                          <input type="text" name="theme" class="form-control" placeholder="Thema der Arbeit..." />
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <div class="form-input _pb_xxs">
                          <label class="form-input__label_sm" for="header-count">
                            <span style="color:#FF4E4D;font-weight:bold;">* </span>Seitenanzahl<span class="photo" data-title="Der Liefertermin ist sehr wichtig, um den besten Autor für Ihre Arbeit zu finden. Bitte nennen Sie den genauen Liefertermin Ihrer Arbeit. Den genannten Termin können Sie vor der Zahlung ändern."> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
                          </label>
                          <div class="form-counter">
                            <div data-id="decrement" class="quantity-arrow-minus">-</div>
                            <input class="form-input__input count-input quantity-num" id="header-count" name="count" type="number" value="40" max="1000" min="0" step="5" />

                            <div data-id="increment" class="quantity-arrow-plus">+</div>
                          </div>
                        </div>
                        <div class="form-col _size_1 _size_md_3 _pb_xxs">
                          <label class="form-input__label_sm" style="padding-top: 10px;">&nbsp;</label>
                          <div class="form-counter-text">Seiten (40-150 Seiten)</div>
                        </div>
                      </div>
                    </div>


                  </div>


                  <div class="col-lg-5 col-12 mb-3 right_col">
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <div class="form-checkbox">
                          <div class="form-checkbox__title"><span style="color:#FF4E4D;font-weight:bold;">* </span>Überprüfung der Korrektheit des Designs: </div>
                          <div>
                            <input class="form-checkbox__input" id="main-form-präsentation" value="Präsentation" name="services[]" type="checkbox">
                            <label for="main-form-präsentation">Formatierung</label>
                          </div>
                          <div>
                            <input class="form-checkbox__input" value="Rede zur Verteidigung" id="main-form-verteidigung" name="services[]" type="checkbox">
                            <label for="main-form-verteidigung">Zitat</label>
                          </div>
                          <div>
                            <input class="form-checkbox__input" id="main-form-exposé" name="services[]" type="checkbox" value="Exposé">
                            <label for="main-form-exposé">Erstellung einer Referenzliste</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <label>
                          <span style="color:#FF4E4D;font-weight:bold;">* </span>Abgabetermin<span class="photo" data-title="Abgabetermin"> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
                          <input type="date" name="date" class="form-control calendar" placeholder="Abgabetermin..." />
                        </label>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <label>
                          <span style="color:#FF4E4D;font-weight:bold;">* </span>Vorname / Nickname<span class="photo" data-title="podskazka"> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
                          <input type="text" name="name" class="form-control" placeholder="Geben Sie Ihren Namen ein" required />
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <label>
                          <span style="color:#FF4E4D;font-weight:bold;">* </span>WhatsApp
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="WhatsApp..." />
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xxl-12 col-xl-8 col-12">
                        <label>
                          <span style="color:#FF4E4D;font-weight:bold;">* </span>E-Mail
                          <input type="text" name="email" class="form-control" placeholder="E-mail..." required />
                        </label>
                      </div>
                    </div>



                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-12 mb-3">
                    <div class="form-checkbox">
                      <div>
                        <input class="form-checkbox__input" id="main-form-erstellung" value="Erstellung" name="services[]" type="checkbox">
                        <label for="main-form-erstellung">Unterstützung bei der Erstellung eines Arbeitsplans</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-12 mb-3">
                    <div class="form-checkbox">
                      <div>
                        <input class="form-checkbox__input" id="main-form-hilfe" value="Hilfe" name="services[]" type="checkbox">
                        <label for="main-form-hilfe">Hilfe bei der Auswahl eines Themas</label>
                      </div>
                    </div>
                  </div>
                </div>

                <p class="main_seo_form-text"><span style="color:#FF4E4D;font-weight:bold;">* </span>Pflichtfeld</p>

                <div class="row text-center">
                  <div class="col-12">
                    <?php echo General::get_utm(); ?>
                    <input type="hidden" name="fc_campaign" id="fc_campaign">
                    <input type="hidden" name="fc_channel" id="fc_channel">
                    <input type="hidden" name="fc_content" id="fc_content">
                    <input type="hidden" name="fc_landing" id="fc_landing">
                    <input type="hidden" name="fc_medium" id="fc_medium">
                    <input type="hidden" name="fc_referrer" id="fc_referrer">
                    <input type="hidden" name="fc_source" id="fc_source">
                    <input type="hidden" name="fc_term" id="fc_term">
                    <input type="hidden" name="lc_campaign" id="lc_campaign">
                    <input type="hidden" name="lc_channel" id="lc_channel">
                    <input type="hidden" name="lc_content" id="lc_content">
                    <input type="hidden" name="landing" id="lc_landing">
                    <input type="hidden" name="lc_medium" id="lc_medium">
                    <input type="hidden" name="lc_referrer" id="lc_referrer">
                    <input type="hidden" name="lc_source" id="lc_source">
                    <input type="hidden" name="lc_term" id="lc_term">
                    <input type="hidden" name="OS" id="OS">
                    <input type="hidden" name="GA_Client_ID" id="GA_Client_ID">
                    <input type="hidden" name="gclid" id="gclid">
                    <input type="hidden" name="all_traffic_sources" id="all_traffic_sources">
                    <input type="hidden" name="browser" id="browser">
                    <input type="hidden" name="city" id="city">
                    <input type="hidden" name="country" id="country">
                    <input type="hidden" name="device" id="device">
                    <input type="hidden" name="page_visits" id="page_visits">
                    <input type="hidden" name="pages_visited_list" id="pages_visited_list">
                    <input type="hidden" name="region" id="region">
                    <input type="hidden" name="time_zone" id="time_zone">
                    <input type="hidden" name="time_passed" id="time_passed">
                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longitude" id="longitude">
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                    <input type="hidden" name="page" value="<?= $post->post_title; ?>" />
                    <button class="btn btn-primary">DAS FORMULAR ABSCHICKEN</button>
                  </div>
                  <p class="text-center sheet"><img src="/wp-content/themes/akademily/assets/images/sheet.png" width="24" hspace="10">Ihre Daten werden nicht an Dritte weitergegeben</p>
                  <p class="mt-3 small"><input class="form-checkbox__green" value="Agree" id="main-form-agree" name="agree" type="checkbox">Die Hinweise aus der <a href="https://akademily.de/datenschutz/"><span style="color:#FF4E4D;">Datenschutzerklärung</span></a> und den <a href="https://akademily.de/agb/"><span style="color:#FF4E4D;">AGB</span></a> habe ich gelesen und akzeptiere diese</p>
                </div>
            </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <div class="container" style="margin-bottom: 40px;">
    <div class="row">
      <div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper pt-5">
        <?php



        the_content();
        /** Sections top */
        get_template_part('template-parts/components/sectionsTop');
        ?>
      </div>


    </div>
  </div>

  <!-- <div class="container">
    <div class="row">
      <div id="article" class="col-xxl-9 col-xl-12 col-12 page-wrapper pt-5">
        <?php 
        // echo carbon_get_post_meta(get_the_ID(), 'de_home_desc_seven'); 
        ?>
        <div class="accord">
          <div class="accord_head">
            <?php 
            // echo carbon_get_post_meta(get_the_ID(), 'de_home_title_seven');
            ?>
            <div class="head_drop_down1">Coaching</div> <div class="head_drop_down2">Ghostwriting</div>
          </div>
          <?php 
          // echo do_shortcode('[sp_easyaccordion id="15025"]'); 
          ?>
        </div>
        <div class="accord_footer">
          <div class="footer_drop_down1">Finden Sie die Kosten</div>
          <div class="footer_drop_down2">Eine Bestellung aufgeben</div>
        </div>
      </div>

      <?php 
      // get_sidebar(); 
      ?>
    </div>
  </div> -->

  <div class="seo-form pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-12">
          <div class="seo-form__wrap">
            <div class="seo-form__title text-center mb-3" style="padding-top: 20px;">
              Lassen Sie sich einen unverbindlichen Kostenvoranschlag erstellen
            </div>
            <p class="text-center">Garantierte Antwortzeit innerhalb <span style="color:#FF4E4D;">von 15 Minuten!</span></p>
            <form method="post" id="form_GA6">
              <div class="seo-form__message js-message alert d-none pt-3 pb-3"></div>
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <?php get_template_part('template-parts/components/form/select-type') ?>
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    <span style="color:#FF4E4D;font-weight:bold;">* </span>Vorname / Nickname
                    <input type="text" name="name" class="form-control" placeholder="Geben Sie Ihren Namen ein" required />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <?php get_template_part('template-parts/components/form/select-discipline') ?>
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    <span style="color:#FF4E4D;font-weight:bold;">* </span>Phone
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone..." />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    <span style="color:#FF4E4D;font-weight:bold;">* </span>Abgabetermin
                    <input type="date" name="date" class="form-control calendar" placeholder="Abgabetermin..." />
                  </label>
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    <span style="color:#FF4E4D;font-weight:bold;">* </span>E-Mail
                    <input type="text" name="email" class="form-control" placeholder="E-Mail..." required />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-3">
                  <label>
                    <span style="color:#FF4E4D;font-weight:bold;">* </span>Thema der Arbeit...
                    <textarea name="theme" class="form-control" placeholder="Thema der Arbeit..."></textarea>
                  </label>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-12">
                  <?php echo General::get_utm(); ?>
                  <input type="hidden" name="fc_campaign" id="fc_campaign">
                  <input type="hidden" name="fc_channel" id="fc_channel">
                  <input type="hidden" name="fc_content" id="fc_content">
                  <input type="hidden" name="fc_landing" id="fc_landing">
                  <input type="hidden" name="fc_medium" id="fc_medium">
                  <input type="hidden" name="fc_referrer" id="fc_referrer">
                  <input type="hidden" name="fc_source" id="fc_source">
                  <input type="hidden" name="fc_term" id="fc_term">
                  <input type="hidden" name="lc_campaign" id="lc_campaign">
                  <input type="hidden" name="lc_channel" id="lc_channel">
                  <input type="hidden" name="lc_content" id="lc_content">
                  <input type="hidden" name="landing" id="lc_landing">
                  <input type="hidden" name="lc_medium" id="lc_medium">
                  <input type="hidden" name="lc_referrer" id="lc_referrer">
                  <input type="hidden" name="lc_source" id="lc_source">
                  <input type="hidden" name="lc_term" id="lc_term">
                  <input type="hidden" name="OS" id="OS">
                  <input type="hidden" name="GA_Client_ID" id="GA_Client_ID">
                  <input type="hidden" name="gclid" id="gclid">
                  <input type="hidden" name="all_traffic_sources" id="all_traffic_sources">
                  <input type="hidden" name="browser" id="browser">
                  <input type="hidden" name="city" id="city">
                  <input type="hidden" name="country" id="country">
                  <input type="hidden" name="device" id="device">
                  <input type="hidden" name="page_visits" id="page_visits">
                  <input type="hidden" name="pages_visited_list" id="pages_visited_list">
                  <input type="hidden" name="region" id="region">
                  <input type="hidden" name="time_zone" id="time_zone">
                  <input type="hidden" name="time_passed" id="time_passed">
                  <input type="hidden" name="latitude" id="latitude">
                  <input type="hidden" name="longitude" id="longitude">
                  <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                  <input type="hidden" name="page" value="<?= $post->post_title; ?>" />
                  <button class="btn btn-primary">DAS FORMULAR ABSCHICKEN</button>
                </div>
                <p class="text-center sheet"><img src="/wp-content/themes/akademily/assets/images/sheet.png" width="24" hspace="10">Ihre Daten werden nicht an Dritte weitergegeben</p>
                <p class="mt-3 small"><input class="form-checkbox__green" value="Agree" id="main-form-agree" name="agree" type="checkbox">Die Hinweise aus der <a href="https://akademily.de/datenschutz/"><span style="color:#FF4E4D;">Datenschutzerklärung</span></a> und den <a href="https://akademily.de/agb/"><span style="color:#FF4E4D;">AGB</span></a> habe ich gelesen und akzeptiere diese</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container pt-5">
    <div class="row">
      <div id="article" class="col-xxl-12 col-xl-12 col-12 page-wrapper ">
        <!-- <h3>Unsere Lektoren & Coaches</h3>
                <div class="sl_text3"> <?= carbon_get_post_meta(get_the_ID(), 'de_home_title_four'); ?></div>
                <?php echo do_shortcode('[metaslider id="14837"]'); ?><br>
                <div class="text-center mt-4"><a class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#Modal">PREISVORSCHLAG</a></div>
                <br><br>
                <h3>Hochqualifizierte wissenschaftliche Betreuer</h3><br>
                <div class="col-xxl-12 col-xl-12 col-12 mobil_mark" style="display:flex;">
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark1">Hochqualifizierte und unterstützende Betreuer<span class="photo" data-title="Unsere Betreuer verfügen über akademische Abschlüsse: ab Bachelor- und s.w. und haben auch Erfahrung in der Lehre in ihrem professionellen Bereich "> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span></div>
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark7">Möglichkeiten, <br>uns zu erreichen<span class="photo" data-title="Sie können uns per Website, E-mail, Telefon, WhatsApp/Skype kontaktieren"> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark3"><br>7 Tage pro Woche <span class="photo" data-title="Sie können uns 7 Tage pro Woche von 8:00 bis 23:00 Uhr erreichen."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span></div>
                </div>
                <div class="col-xxl-12 col-xl-12 col-12 mobil_mark" style="display:flex;">
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark4"><br>Lernprozess<span class="photo" data-title="Im Coaching erhalten Sie nicht nur Ratschläge und Hilfe beim Schreiben Ihrer Arbeit, sondern werden auch weitergebildet."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark5"><br>Persönlicher Manager<span class="photo" data-title="Ein persönlicher Manager wird Ihnen zur Verfügung gestellt, der Sie auf dem Weg unserer Zusammenarbeit begleitet."> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                    <div class="col-xxl-4 col-xl-4 col-12 mark mark6"><br>Offizieller Vertrag<span class="photo" data-title="Wir schließen einen offiziellen Vertrag mit Ihnen. Rechtsperson und Büro sind in Deutschland registriert"> <img src="/wp-content/themes/akademily/assets/images/ip2.png" width="15"></span><br></div>
                </div>

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

  <?php get_template_part('template-parts/components/blog'); ?>

  <div class="background-light">
    <div class="container pt-5">
      <?php
      /** Reviews */
      get_template_part('template-parts/components/reviews');
      ?>
    </div>
  </div>

<?php
}
get_footer(); ?>

<style>
  body .sticky,
  html .sticky {
    position: relative !important;
    z-index: 5;
  }

  body .stop,
  html .stop {
    position: inherit !important;
    z-index: 5;
  }

  h3 {
    color: #555555;
    font-weight: bold;
    font-size: 29px !important;
    padding-bottom: 20px;
    padding-top: 35px;
  }

  h2 {
    color: #102752;
    font-size: 32px !important;
    text-transform: uppercase;
    padding-top: 40px;
    padding-bottom: 15px;
  }

  h3.ea-header {
    padding-bottom: 0;
    padding-top: 0;
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

  .row {

    position: relative;
  }

  h3.ea-header::before {
    display: none;
  }

  .ea-header::before {
    display: none;
  }

  .seo-banner__subtitle {

    font-size: 24px !important;
    line-height: 36px;
    font-weight: 200;
  }

  .seo-banner__title h1 {
    font-size: 56px !important;
    line-height: 73px;
  }

  .ol_new_seo li::marker {
    display: none;
  }

  .ol_new_seo li {
    color: #555555;
    font-size: 20px;
    line-height: 29px;
    padding-bottom: 15px;
    font-weight: 600;
    list-style: none;
    position: relative;
    padding-left: 45px;
  }

  ol {
    counter-reset: orderedlist;
    padding-left: 0 !important;
  }

  ol li::before {
    counter-increment: orderedlist;
    content: counter(orderedlist);
    width: 35px;
    padding-top: 0;
    padding-bottom: 2px;
    padding-right: 9px;
    padding-left: 9px;
    text-align: center;
    color: #102752;
    background-color: #fff;
    border-radius: 50%;
    border: 2px solid #102752;
    margin-right: 15px;
    position: absolute;
    left: 0px;
  }

  .text-center {
    color: #63656B;
  }

  .form-checkbox__green {
    margin-right: 10px;

  }

  .form-checkbox__green::before {
    content: '';
    display: inline-block;
    width: 1.15em;
    height: 1.15em;
    flex-shrink: 0;
    flex-grow: 0;
    border: 3px solid #04B856;
    border-radius: 0.25em;
    margin-right: 0.5em;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 60% 60%;
    margin-top: -2px;
    position: absolute;
    margin-left: -2px;
  }

  .form-checkbox__green:checked::before {
    border-color: #04B856;
    background-color: #04B856;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
  }

  .form-col {
    position: absolute;
    top: 8px;
    left: 180px;
  }

  body .global-title:after,
  html .global-title:after {

    width: 85px !important;

  }

  @media (max-width: 680px) {
    .mobil_mark {
      flex-wrap: wrap;
    }

    .mark7 {
      margin-left: 0px;
    }

    .mark {
      margin-left: 0px;
    }

    .seo-banner__title h1 {
      font-size: 36px !important;
      line-height: 45px;
    }

    .seo-banner__subtitle {
      font-size: 18px !important;
      line-height: 24px;
      font-weight: 200;
    }
  }
</style>