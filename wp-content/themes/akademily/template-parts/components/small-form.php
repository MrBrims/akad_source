<div class="feedback pt-5 pb-5">
  <div class="container">
    <div class="row text-center">
      <form id="form_GA1">
        <div class="col-12">
          <div class="feedback-title">
            <div>Lassen Sie sich einen <span>unverbindlichen Kostenvoranschlag</span> erstellen</div>
            <p>Garantierte Antwortzeit innerhalb von 15 Minuten!</p>
          </div>
          <div class="feedback-message alert d-none pt-3 pb-3 js-message"></div>
          <div class="feedback-form">
            <label>
              Vorname / Nickname
              <input type="text" name="nickname" class="form-control" placeholder="Geben Sie Ihren Namen" required />
            </label>
            <label>
              Phone
              <input type="text" name="phone" class="form-control tel" placeholder="Phone..." id="phone" />
            </label>
            <label>
              E-Mail
              <input type="email" name="email" class="form-control" placeholder="E-Mail..." required />
            </label>
          </div>
          <div class="feedback-mail mb-4">
            Prüfen Sie vor dem Abschicken des Formulars bitte die Korrektheit Ihrer E-Mail-Adresse.
          </div>
          <div>
            <input type="hidden" name="csrf_token" value="<?php 
            
            // echo  $_SESSION['csrf_token'];
            
            ?>">
            <?php echo General::get_utm(); ?>
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            <input type="hidden" name="page" value="<?= $post->post_title; ?>" />
            <button class="btn btn-primary">ANFRAGE ABSCHICKEN</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>