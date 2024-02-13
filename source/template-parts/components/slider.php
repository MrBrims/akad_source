<div id="main-slider" class="swiper">
  <div class="swiper-wrapper">
    <?php
    if ($slides = carbon_get_post_meta(DE_HOMEPAGE, 'de_slider')) {
      foreach ($slides as $slide) {
    ?>
        <div class="swiper-slide">
          <div class="swiper-slide-image swiper-lazy" style="background-image: url('<?= $slide['image'] ?>');"></div>
          <div class="swiper-slide-content">
            <div class="container">
              <div class="row">
                <div class="col-12 pt-sm-5 pt-2">
                  <div class="swiper-slide-title">
                    <?= $slide['title'] ?>
                  </div>
                  <a class="btn btn-primary btn-lg" href="<?= $slide['url'] ?>">MEHR</a>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
        </div>
    <?php
      }
    }
    ?>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>

<div class="container pt-5 pb-5 directions">
  <div class="row text-center d-lg-flex d-none">
    <div class="col">
      <div class="directions-item h-100 p-4">
        <img src="<?= DE_URI ?>/assets/images/home/directions/01.svg" alt="Bis zur erfolgreichen Abgabe">
        <div class="directions-title">Beratung<br />& Coaching</div>
        <a href="/coaching-beratung/">Mehr <span></span></a>
      </div>
    </div>
    <div class="col">
      <div class="directions-item h-100 p-4">
        <img src="<?= DE_URI ?>/assets/images/home/directions/02.svg" alt="KORREKTORAT UND LEKTORAT FÜR OPTIMALE TEXTE">
        <div class="directions-title">Lektorat<br />& Korrektorat</div>
        <a href="/lektorat-korrektorat/">Mehr <span></span></a>
      </div>
    </div>
    <div class="col">
      <div class="directions-item h-100 p-4">
        <img src="<?= DE_URI ?>/assets/images/home/directions/03.svg" alt="ÜBERSETZUNGEN UND TRANSKRIPTIONEN IN ZUVERLÄSSIGER QUALITÄT">
        <div class="directions-title">Übersetzungen<br />& Transkription</div>
        <!-- <a href="/ubersetzungen-transkription/">Mehr <span></span></a> -->
        <!-- <a href="">Mehr <span></span></a> -->
      </div>
    </div>
    <div class="col">
      <div class="directions-item h-100 p-4">
        <img src="<?= DE_URI ?>/assets/images/home/directions/04.svg" alt="AKADEMISCHES  GHOSTWRITING UND REWRITING">
        <div class="directions-title">Ghostwriting<br />& Umschreiben</div>
        <!-- <a href="/ghostwriting-umschreiben/">Mehr <span></span></a> -->
        <!-- <a href="">Mehr <span></span></a> -->
      </div>
    </div>
    <div class="col">
      <div class="directions-item h-100 p-4">
        <img src="<?= DE_URI ?>/assets/images/home/directions/01.svg" alt="AUDIOKONFERENZEN UND VIDEOKONFERENZEN: PROFESSIONELLES COACHING AN JEDEM ORT">
        <div class="directions-title">Audio-Video<br />- Konsultationen</div>
        <a href="/audio-video-konsultationen/">Mehr <span></span></a>
      </div>
    </div>
  </div>

  <div class="row d-lg-none d-block">
    <div class="col-12 mb-3">
      <a class="d-flex directions-mobile-item" href="/coaching-beratung/">
        <div class="directions-mobile-square">
          <img src="<?= DE_URI ?>/assets/images/home/directions/01.svg" />
        </div>
        <div class="directions-mobile-title">Beratung<br />& Coaching</div>
        <span></span>
      </a>
    </div>
    <div class="col-12 mb-3">
      <a class="d-flex directions-mobile-item" href="/lektorat-korrektorat/">
        <div class="directions-mobile-square">
          <img src="<?= DE_URI ?>/assets/images/home/directions/02.svg" />
        </div>
        <div class="directions-mobile-title">Lektorat<br />& Korrektorat</div>
      </a>
    </div>
    <!-- <div class="col-12 mb-3">
            <a class="d-flex directions-mobile-item" href="/ubersetzungen-transkription/">
                <div class="directions-mobile-square">
                    <img src="<?= DE_URI ?>/assets/images/home/directions/03.svg"/>
                </div>
                <div class="directions-mobile-title">Übersetzungen<br/>& Transkription</div>
                <span></span>
            </a>
        </div>
        <div class="col-12 mb-3">
            <a class="d-flex directions-mobile-item" href="/ghostwriting-umschreiben/">
                <div class="directions-mobile-square">
                    <img src="<?= DE_URI ?>/assets/images/home/directions/04.svg"/>
                </div>
                <div class="directions-mobile-title">Ghostwriting<br/>& Umschreiben</div>
                <span></span>
            </a>
        </div> -->
    <div class="col-12">
      <a class="d-flex directions-mobile-item" href="/audio-video-konsultationen/">
        <div class="directions-mobile-square">
          <img src="<?= DE_URI ?>/assets/images/home/directions/01.svg" />
        </div>
        <div class="directions-mobile-title">Audio-Video<br />- Konsultationen</div>
        <span></span>
      </a>
    </div>
  </div>
</div>