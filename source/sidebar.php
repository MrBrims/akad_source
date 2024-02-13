<div id="aside1" class="col-xxl-3 col-xl-4 col-12">
  <div class="sidebar mt-5 mb-xl-0 mb-5">
    <form id="form-sidebar" class="p-4 text-center">
      <div class="feedback-title">
        <div>Lassen Sie sich einen <span>unverbindlichen Kostenvoranschlag</span> erstellen</div>
      </div>
      <div class="feedback-form">
        <?php get_template_part('template-parts/components/form/select-type-sidebar') ?>
        <?php get_template_part('template-parts/components/form/select-discipline-sidebar') ?>
        <label class="sidebar__label">
          <span class="sidebar__star">*</span>
          <input name="theme" class="form-control" placeholder="Thema der Arbeit...">
        </label>
        <div class="form-input">
          <div class="form-counter">
            <div data-id="decrement" class="quantity-arrow-minus">-</div>
            <input class="form-input__input count-input quantity-num" id="header-count" name="count" type="number" value="40" max="1000" min="0" step="5" />
            <div data-id="increment" class="quantity-arrow-plus">+</div>
          </div>
        </div>
        <label class="sidebar__label">
          <span class="sidebar__star">*</span>
          <input type="date" name="date" class="form-control calendar" placeholder="Abgabetermin..." />
        </label>
        <label class="sidebar__label">
          <input type="text" name="phone" class="form-control tel" placeholder="Phone..." id="phone" />
        </label>
        <label class="sidebar__label">
          <span class="sidebar__star">*</span>
          <input type="email" name="email" class="form-control" placeholder="E-Mail..." required />
        </label>
      </div>
      <p class="text-center sheet" style="font-size:14px;"><img src="/wp-content/themes/akademily/assets/images/sheet.png" width="24" hspace="10">Ihre Daten werden nicht an Dritte weitergegeben</p>
      <p class="mt-3 small"><input class="form-checkbox__green" value="Agree" id="main-form-agree" name="agree" type="checkbox" checked> Die Hinweise aus der <a href="https://akademily.de/datenschutz/"><span style="color:#FF4E4D;">Datenschutzerklärung</span></a> und den <a href="https://akademily.de/agb/"><span style="color:#FF4E4D;">AGB</span></a> habe ich gelesen und akzeptiere diese</p>

      <div>
        <input type="hidden" name="csrf_token" value="<?php

                                                      // echo  $_SESSION['csrf_token'];

                                                      ?>">
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
    </form>
  </div>
</div>