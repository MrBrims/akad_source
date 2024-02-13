<?php

/** Template Name: SEO страница */
get_header();
while (have_posts()) {
  the_post();
?>
  <div class="seo-banner" style="background-image: url('<?= carbon_get_post_meta(get_the_ID(), 'de_fon'); ?>');">
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6  col-12">
          <div class="seo-banner__wrap">
            <div class="seo-banner__title">
              <h1><?= carbon_get_post_meta(get_the_ID(), 'de_title'); ?></h1>
            </div>
            <div class="seo-banner__subtitle">
              <?= carbon_get_post_meta(get_the_ID(), 'de_subtitle'); ?>
            </div>
            <a class="btn btn-primary btn-lg" href="#" data-bs-toggle="modal" data-bs-target="#Modal">Jetzt anfragen</a>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-12">
          <?php get_template_part('template-parts/components/middle-form');  ?>
        </div>
      </div>
    </div>
  </div>

  <div class="escort">
    <div class="container pt-5">
      <div class="row">
        <div class="col-12 col-lg mb-4">
          <a href="/masterarbeit/" class="escort-list">
            <div class="escort-list-img mb-3">
              <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Masterarbeit" />
            </div>
            <div class="escort-list-name">Masterarbeit</div>
          </a>
        </div>
        <div class="col-12 col-lg mb-4">
          <a href="/bachelorarbeit/" class="escort-list">
            <div class="escort-list-img mb-3">
              <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Bachelorarbeit" />
            </div>
            <div class="escort-list-name">Bachelorarbeit</div>
          </a>
        </div>
        <div class="col-12 col-lg mb-4">
          <a href="/diplomarbeit/" class="escort-list">
            <div class="escort-list-img mb-3">
              <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Diplomarbeit" />
            </div>
            <div class="escort-list-name">Diplomarbeit</div>
          </a>
        </div>
        <div class="col-12 col-lg mb-4">
          <a href="/hausarbeit/" class="escort-list">
            <div class="escort-list-img mb-3">
              <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Hausarbeit" />
            </div>
            <div class="escort-list-name">Hausarbeit</div>
          </a>
        </div>
        <div class="col-12 col-lg mb-4">
          <a href="/doktorarbeit/" class="escort-list">
            <div class="escort-list-img mb-3">
              <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Doktorarbeit" />
            </div>
            <div class="escort-list-name">Doktorarbeit</div>
          </a>
        </div>
        <div class="col-12 col-lg mb-4">
          <a href="/losung-der-aufgaben/" class="escort-list">
            <div class="escort-list-img mb-3">
              <img src="<?= DE_URI; ?>/assets/images/check.svg" alt="Lösung der Aufgaben" />
            </div>
            <div class="escort-list-name">Lösung der Aufgaben</div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5">
        <?php
        get_template_part('template-parts/components/page-meta');
        echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'de_desc'));

        /** Sections top */
        get_template_part('template-parts/components/sectionsTop');
        ?>
      </div>

      <?php get_sidebar(); ?>
    </div>
  </div>

  <div class="seo-form pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-xxl-9 col-xl-8 col-12">
          <div class="seo-form__wrap">
            <div class="seo-form__title text-center mb-3">
              Lassen Sie sich einen unverbindlichen Kostenvoranschlag erstellen
            </div>
            <p class="text-center">Garantierte Antwortzeit innerhalb von 15 Minuten!</p>
            <form method="post" id="form_GA4">
              <div class="seo-form__message js-message alert d-none pt-3 pb-3"></div>
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <?php get_template_part('template-parts/components/form/select-type') ?>
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    Vorname / Nickname
                    <input type="text" name="name" class="form-control" placeholder="Geben Sie Ihren Namen" required />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <?php get_template_part('template-parts/components/form/select-discipline') ?>
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    Phone
                    <input type="text" name="phone" class="form-control" placeholder="Phone..." />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    Abgabetermin
                    <input type="date" name="date" class="form-control" placeholder="Abgabetermin..." />
                  </label>
                </div>
                <div class="col-lg-6 col-12 mb-3">
                  <label>
                    E-mail
                    <input type="text" name="email" class="form-control" placeholder="E-mail..." required />
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-3">
                  <label>
                    Thema der Arbeit...
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
                  <button class="btn btn-primary">Abschicken</button>
                </div>
                <p class="mt-3 small">Vor dem Abschicken des Formulars prüfen Sie bitte die Korrektheit Ihrer E-Mail-Adresse</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5">
        <?php
        /** Sections bottom */
        get_template_part('template-parts/components/sectionsBottom');

        /** Author */
        get_template_part('template-parts/components/page-author');

        /** FAQ */
        get_template_part('template-parts/components/faq');
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
get_footer();
