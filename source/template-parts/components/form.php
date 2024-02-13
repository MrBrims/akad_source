<div class="seo-form pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-xxl-12 col-xl-12 col-12">
        <div class="seo-form__wrap">
          <div class="seo-form__title text-center mb-3" style="padding-top: 20px;">
            Lassen Sie sich einen unverbindlichen Kostenvoranschlag erstellen
          </div>
          <p class="text-center">Garantierte Antwortzeit innerhalb <span style="color:#FF4E4D;">von 15
              Minuten!</span></p>
          <form method="post" id="form_GA7">
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
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
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
              <p class="mt-3 small"><input class="form-checkbox__green" value="Agree" id="main-form-agree" name="agree" type="checkbox">Die Hinweise aus der <a href="https://akademily.de/datenschutz/"><span style="color:#FF4E4D;">Datenschutzerklärung</span></a> und den <a href="https://akademily.de/agb/"><span style="color:#FF4E4D;">AGB</span></a> habe ich gelesen
                und akzeptiere diese</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>