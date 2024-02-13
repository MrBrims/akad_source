<div class="feedback2">
  <div class="container">
    <div class="row text-center">
      <form id="form_GA2">
        <div class="col-12">

          <div class="feedback-message alert d-none pt-3 pb-3 js-message"></div>
          <div class="feedback-form">
            <label>
              <span>*</span> Vorname / Nickname
              <input type="text" name="nickname" class="form-control" placeholder="Geben Sie Ihren Namen" required />
            </label>
            <label>
              <span>*</span> WhatsApp
              <input type="text" name="phone" class="form-control tel" placeholder="WhatsApp..." id="phone" />
            </label>
            <label style="margin-top: 20px;">
              <span>*</span> E-Mail
              <input type="email" name="email" class="form-control" placeholder="E-Mail..." required />
            </label>
          </div>

          <div>
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