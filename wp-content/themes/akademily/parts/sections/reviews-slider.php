<section class="section reviews-slider">
    <div class="container">
        <h2 class="title reviews-slider__title">
            Feedback aus der Kommunikation mit Kundenbetreuern
        </h2>
        <div class="soc-rev">
            <div class="soc-rev__body swiper">
                <div class="soc-rev__wrapper swiper-wrapper">
                    <?php foreach ((carbon_get_theme_option('soc_reviews')) as $key) : ?>
                        <div class="soc-rev__slide swiper-slide">
                            <img class="soc-rev__slide-img" src="<?php echo $key['soc_reviews_img']; ?>" alt="social reviews">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="soc-rev__nav"></div>
        </div>
    </div>
</section>