<?php

/** Template Name: Калькулятор */
get_header();
while (have_posts()) {
  the_post();
?>
  <div class="seo-banner" style="background-image: url('<?= carbon_get_post_meta(get_the_ID(), 'de_fon'); ?>');">
    <div class="container">
      <div class="row">
        <div class="col-12">
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
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div id="article" class="col-xxl-8 col-xl-8 col-12 page-wrapper pt-5">

        <form class="form-container" id="form_GA_calc">
          <!-- Section 1,2 -->
          <div class="form-row">
            <div class="form-column">
              <div class="form-input">
                <input id="section_1" class="js-global-check" type="checkbox" name="section_1" value="Литература. Подбор источников">
                <label for="section_1">Литература. Подбор источников</label>
              </div>
            </div>
            <div class="form-column">
              <div class="form-input">
                <input id="section_2" class="js-global-check" type="checkbox" name="section_2" value="Определение темы работы">
                <label for="section_2">Определение темы работы</label>
              </div>
            </div>
          </div>

          <div class="form-section section_1">
            <div class="form-section-min">
              <span>*</span> Выберите необходимую услугу
            </div>
            <div class="form-input">
              <input id="check_1_1" type="checkbox" name="check_1_1" value="Подбор источников для написания работы" data-price="15">
              <label for="check_1_1">
                <span>Подбор источников для написания работы</span>
                <span class="form-question" data-text="Не старше 10 лет"></span>
              </label>
            </div>
          </div>
          <div class="form-section section_2">
            <div class="form-section-min">
              <span>*</span> Выберите необходимую услугу
            </div>
            <div class="form-input">
              <input id="check_2_1" type="checkbox" name="check_2_1" value="Online обсуждение темы будущей работы" data-price="2.5">
              <label for="check_2_1">
                <span>Online обсуждение темы будущей работы</span>
                <span class="form-question" data-text="Audio/Video чат"></span>
              </label>
              <div class="form-counter">
                Мин.
                <div class="form-counter-btn" data-id="minus"></div>
                <input type="number" min="60" max="600" step="60" value="60">
                <div class="form-counter-btn" data-id="plus"></div>
              </div>
            </div>
            <div class="form-input">
              <input id="check_2_2" type="checkbox" name="check_2_2" value="Подбор темы работы" data-price="40">
              <label for="check_2_2">
                <span>Подбор темы работы</span>
                <span class="form-question" data-text="Мы предоставляем 3 темы на выбор с описание по каждой на 1/3 листа: чем именно актуальна данная тема, какие вопросы могут быть затронуты при написании работы на базе данной темы"></span>
              </label>
              <div class="form-counter">
                Ед.
                <div class="form-counter-btn" data-id="minus"></div>
                <input type="number" min="1" max="100" step="1" value="1">
                <div class="form-counter-btn" data-id="plus"></div>
              </div>
            </div>
          </div>

          <!-- Section 3,4 -->
          <div class="form-row">
            <div class="form-column">
              <div class="form-input">
                <input id="section_3" class="js-global-check" type="checkbox" name="section_3" value="Работа над планом">
                <label for="section_3">Работа над планом</label>
              </div>
            </div>
            <div class="form-column">
              <div class="form-input">
                <input id="section_4" class="js-global-check" type="checkbox" name="section_4" value="Работа с содержимым научной работы">
                <label for="section_4">Работа с содержимым научной работы</label>
              </div>
            </div>
          </div>

          <div class="form-section section_3">
            <div class="form-section-min">
              <span>*</span> Выберите необходимую услугу
            </div>
            <div class="form-input">
              <input id="check_3_1" type="checkbox" name="check_3_1" value="Online обсуждение плана будущей работы">
              <label for="check_3_1">Online обсуждение плана будущей работы</label>
            </div>
            <div class="form-input">
              <input id="check_3_2" type="checkbox" name="check_3_2" value="Проверка и улучшение плана работы клиента">
              <label for="check_3_2">Проверка и улучшение плана работы клиента</label>
            </div>
            <div class="form-input">
              <input id="check_3_3" type="checkbox" name="check_3_3" value="Составление для клиента развернутого плана работы">
              <label for="check_3_3">Составление для клиента развернутого плана работы</label>
            </div>
          </div>
          <div class="form-section section_4">
            <div class="form-section-min">
              <span>*</span> Выберите необходимую услугу
            </div>
            <div class="form-input">
              <input id="check_4_1" type="checkbox" name="check_4_1" value="Online обсуждение темы будущей работы">
              <label for="check_4_1">Online обсуждение темы будущей работы</label>
            </div>
            <div class="form-input">
              <input id="check_4_2" type="checkbox" name="check_4_2" value="Подбор темы работы">
              <label for="check_4_2">Подбор темы работы</label>
            </div>
          </div>

          <!-- Section 5,6 -->
          <div class="form-row">
            <div class="form-column">
              <div class="form-input">
                <input id="section_5" class="js-global-check" type="checkbox" name="section_5" value="Предзащита">
                <label for="section_5">Предзащита</label>
              </div>
            </div>
            <div class="form-column">
              <div class="form-input">
                <input id="section_6" class="js-global-check" type="checkbox" name="section_6" value="Транскрибация">
                <label for="section_6">Транскрибация</label>
              </div>
            </div>
          </div>

          <div class="form-section section_5">
            <div class="form-section-min">
              <span>*</span> Выберите необходимую услугу
            </div>
            <div class="form-input">
              <input id="check_5_1" type="checkbox" name="check_5_1" value="Обсуждение с Вашим научным руководителем всех нюансов готовой работы, имитация защиты работы перед научной комиссией">
              <label for="check_5_1">Обсуждение с Вашим научным руководителем всех нюансов готовой работы, имитация защиты работы перед научной комиссией</label>
            </div>
          </div>
          <div class="form-section section_6">
            <div class="form-section-min">
              <span>*</span> Выберите необходимую услугу
            </div>
            <div class="form-input">
              <input id="check_6_1" type="checkbox" name="check_6_1" value="Не искусственный интеллект">
              <label for="check_6_1">Не искусственный интеллект</label>
            </div>
          </div>

          <!-- Total -->
          <div class="form-total">
            <div class="form-total-price">
              <input type="hidden" name="total" value="10">
              <span class="form-total-count">10</span>
              <span>€</span>
            </div>
          </div>

          <div class="alert js-message"></div>

          <div class="form-row">
            <div class="form-column">
              <div class="form-input">
                <input type="text" name="mail" placeholder="E-mail">
              </div>
            </div>
            <div class="form-column">
              <div class="form-input">
                <?php echo General::get_utm(); ?>
                <input type="hidden" name="form_type" value="calculator">
                <input type="submit" value="Отправить на почту">
              </div>
            </div>
          </div>
        </form>

        <script src="/wp-content/themes/akademily/assets/js/main_calc.js"></script>



      </div>
      <div class="col-xxl-4 col-xl-4 col-12 page-wrapper pt-5 calc_form">
        <div class="row text-center">
          <form>
            <div class="col-12">

              <div class="feedback-message alert d-none pt-3 pb-3 js-message"></div>
              <div class="feedback-form">
                <label>
                  Vorname / Nickname
                  <input type="text" name="nickname" class="form-control" placeholder="Geben Sie Ihren Namen" required />
                </label>
                <label>
                  WhatsApp
                  <input type="text" name="phone" id="phone" class="form-control tel" placeholder="WhatsApp..." />
                </label>
                <label>
                  E-Mail
                  <input type="email" name="email" class="form-control" placeholder="E-Mail..." required />
                </label>
                <label>
                  <span style="color:#FF4E4D;font-weight:bold;">* </span>Abgabetermin<span class="photo" data-title="Abgabetermin"> <img src="/wp-content/themes/akademily/assets/images/vopros2.png" width="10"></span>
                  <input type="datetime-local" name="date" class="form-control calendar" placeholder="Abgabetermin..." />
                </label>
              </div>
              <p class="mt-3 small"><input class="form-checkbox__green" value="Agree" id="main-form-agree" name="agree" type="checkbox">Die Hinweise aus der <a href="https://akademily.de/datenschutz/"><span style="color:#FF4E4D;">Datenschutzerklärung</span></a> und den <a href="https://akademily.de/agb/"><span style="color:#FF4E4D;">AGB</span></a> habe ich gelesen und akzeptiere diese</p>
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
  </div>


  <div class="container">
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

  <div class="background-light">
    <div class="container pt-5">
      <?php
      /** Reviews */
      get_template_part('template-parts/components/reviews');
      ?>
    </div>
  </div>

  <div class="mini_form">

    <?php echo do_shortcode('[short_forms]'); ?><br>

  </div>

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
  .kalk {
    width: 913px;

    border-radius: 10px;
    padding: 0;

    margin: 0 auto;
  }

  .kalk>div {
    padding: 10px 30px;
  }

  .kalk_head {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 88px;
    background: #003C51;
    color: white;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;

    font-weight: 400;
    font-size: 24px;

  }

  .kalk_head span {
    font-weight: 700;
    font-size: 40px;
  }

  .graph_h2,
  .kalk_h2 {
    font-weight: 700;
    font-size: 32px;
    line-height: 48px;
  }

  .kalk_star {
    font-size: 12px;
  }

  .kalk_star span {
    color: red;
  }

  .kalk_wrapper {
    display: flex;
    justify-content: space-between;
    align-content: center;
    align-items: center;
  }

  .kalk_table1 {
    width: 60%;
    padding: 10px;
  }

  .kalk_table2,
  .spinner {
    width: 40%;
    padding: 10px;
  }

  .radiobox1,
  .radiobox2 {
    display: flex;
    justify-content: flex-start;
    padding: 10px;
    margin-right: 20px;
    border-radius: 4px;
    font-size: 14px;
    background: #FBFCFF;
    border: 1px solid #E5E5E5;
    border-radius: 4px;
  }

  .radiobox1 input,
  .radiobox2 input,
  .checkbox input {
    margin-right: 10px;
  }

  .radiobox1 {
    width: 30%;
  }

  .radiobox2 {
    width: 100%;
  }

  .checked {
    background: #086788;
    color: #FFFFFF;
  }

  .radiobox_container,
  .checkbox_container {
    width: 48%;
    height: 120px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

  }

  .checkbox {
    display: flex;
    justify-content: flex-start;
    font-size: 12px;
  }

  .ui-slider-horizontal {
    height: 4px;
    border-radius: 20px;
    background: #E5E5E5;
  }

  .ui-slider .ui-slider-handle {
    position: absolute;
    top: -7px;
    z-index: 2;
    width: 16px;
    height: 16px;
    cursor: pointer;
    -ms-touch-action: none;
    touch-action: none;
    background: #086788;
    border: 0px solid #086788;
  }

  .ui-state-default,
  .ui-state-focus {
    background: #086788;
    border: 0px solid #086788;
    color: #086788;
    padding: 0;
    background-image: none;
    margin: 0;
  }

  .ui-slider .ui-corner-all {
    border-radius: 25px;
  }

  .ui-slider .ui-slider-range {
    position: absolute;
    top: -1px;
    left: -1px;
    z-index: 1;
    height: 4px;
    display: block;
    border: 0;
    background-color: #086788;
  }

  .ui-spinner {
    font-family: Open Sans;
    font-size: 14px;
    font-weight: 400;
    line-height: 24px;
    text-align: left;
    width: 117px;
    border: 0;
  }

  .ui-spinner-button {
    opacity: 0.5;
  }

  .ui-spinner input {
    width: 90px;
    padding-left: 20px;
    border: none;
  }

  .slider {
    width: 60%;
    margin-left: 10px;
  }

  .kalk_table2 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 284px;
    height: 291px;
    background: #FFFFFF;
    border: 1px solid #E5E5E5;
    border-radius: 6px;
    text-align: center;
  }

  .kalk_table2>div {
    font-size: 16px;
  }

  .kalk_table2 .value_wrapper {
    display: flex;
    justify-content: center;
    font-weight: 700;
    font-size: 56px;
    color: #D80027;
  }

  .kalk_table2 .value_wrapper>div {
    padding: 0 10px;
  }

  .kalk_table2 .date {
    font-weight: 700;
    font-size: 16px;
    color: #086788;
  }

  .kalk_table2 .btn {
    margin-top: 36px;
    width: 178px;
    height: 39px;
    font-weight: 400;
    font-size: 14px;
    line-height: 19px;
    text-transform: uppercase;
    color: #FFFFFF;
  }

  @media (max-width: 1024px) {

    .kalk_wrapper {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .kalk_table1,
    .kalk_table2,
    .radiobox1 {
      width: 100%;

    }

    .radiobox_container,
    .checkbox_container {
      width: 100%;
      height: auto;

    }

    .slider {
      width: 100%;
      margin: 20px auto;
    }

    .checkbox_container,
    .radiobox1,
    .radiobox2 {
      margin-top: 10px;
    }
  }






  .custom-control-label {
    opacity: 0;
    height: 0px;
    font-size: 0px;
  }

  #new1:checked~.custom-control-label {
    display: block;
    opacity: 1;
    transition: 0.5s;
    min-height: 80px;
    font-size: inherit;

  }

  #new2:checked~.custom-control-label {
    display: block;
    opacity: 1;
    transition: 0.95s;
    min-height: 80px;
    font-size: inherit;
  }

  #new3:checked~.custom-control-label {
    display: block;
    opacity: 1;
    transition: 0.95s;
    min-height: 80px;
    font-size: inherit;
  }

  #frag:checked~.custom-control-label {
    display: block;
    opacity: 1;
    transition: 0.95s;
    min-height: 80px;
    font-size: inherit;
  }

  #del:checked~.custom-control-label {
    display: block;
    opacity: 1;
    transition: 0.95s;
    min-height: 80px;
    font-size: inherit;
  }

  #load:checked~.custom-control-label {
    display: block;
    opacity: 1;
    transition: 0.95s;
    min-height: 80px;
    font-size: inherit;
    width: 820px;
  }

  .calc_form {
    background: #F7F7F7;
    padding: 15px 15px 2px 15px;
    border-radius: 12px;
    margin-top: 50px;
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

  .rub {
    font-size: 24px;
  }

  #out {
    color: #FF4E4D;
    font-weight: bold;
  }
</style>