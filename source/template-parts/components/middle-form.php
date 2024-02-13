<div class="feedback2">
  <div class="container">
    <div class="row text-center">
      <form id="form_GA2">
        <div class="feedback2__item">
          <div class="feedback2__items">
            <?php get_template_part('template-parts/components/form/select-type') ?>
          </div>
          <div class="feedback2__items">
            <?php get_template_part('template-parts/components/form/select-discipline') ?>
          </div>
        </div>
        <div class="feedback2__item">
          <label>
            <span style="color:#FF4E4D;font-weight:bold;">* </span>Thema<span class="photo" data-title="Dies ist das Thema Ihrer Arbeit. Es ist sehr wichtig, das Thema Ihrer Arbeit jetzt festzulegen, da Sie es später nicht mehr ändern können, wenn der Autor mit dem Auftrag begonnen hat."> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
            <input type="text" name="theme" class="form-control" placeholder="Thema der Arbeit..." />
          </label>
        </div>
        <div class="feedback2__item">
          <div class="feedback2__items">
            <label class="form-input__label_sm" for="header-count">
              <span style="color:#FF4E4D;font-weight:bold;">* </span>Seitenanzahl<span class="photo" data-title="Der Liefertermin ist sehr wichtig, um den besten Autor für Ihre Arbeit zu finden. Bitte nennen Sie den genauen Liefertermin Ihrer Arbeit. Den genannten Termin können Sie vor der Zahlung ändern."> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
            </label>
            <div class="form-input">
              <div class="form-counter">
                <div data-id="decrement" class="quantity-arrow-minus">-</div>
                <input class="form-input__input count-input quantity-num" id="header-count" name="count" type="number" value="40" max="1000" min="0" step="5" />
                <div data-id="increment" class="quantity-arrow-plus">+</div>
              </div>
            </div>
          </div>
          <div class="feedback2__items">
            <label>
              <span style="color:#FF4E4D;font-weight:bold;">* </span>Abgabetermin<span class="photo" data-title="Abgabetermin"> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
              <input type="date" name="date" class="form-control calendar" placeholder="Abgabetermin..." />
            </label>
          </div>
        </div>
        <div class="feedback2__item">
          <div class="feedback2__items">
            <label>
              <span>*</span> WhatsApp
              <input type="text" name="phone" class="form-control tel" placeholder="WhatsApp..." id="phone" />
            </label>
          </div>
          <div class="feedback2__items">
            <label>
              <span>*</span> E-Mail
              <input type="email" name="email" class="form-control" placeholder="E-Mail..." required />
            </label>
          </div>
        </div>
        <?php

        // session_start();
        // $csrf_token = uniqid('csrf_token_', true);
        // $_SESSION['csrf_token'] = $csrf_token;

        // $token = bin2hex(random_bytes(32));
        // setcookie('csrf_token', $token, time() + 3600, '/');

        var_dump($_SESSION) ?>

        <div class="feedback2__btn-wrap">
          <input type="hidden" name="csrf_token" value="<?php echo $_COOKIE['csrf_token']; ?>">
          <?php echo General::get_utm(); ?>
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
          <input type="hidden" name="page" value="<?= $post->post_title; ?>" />
          <button class="btn btn-primary">ANFRAGE ABSCHICKEN</button>
        </div>
      </form>
    </div>
  </div>
</div>