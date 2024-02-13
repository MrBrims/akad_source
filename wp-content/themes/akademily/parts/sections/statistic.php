<section class="statistic section">
    <div class="container">
        <?php if (!empty(carbon_get_post_meta(get_the_ID(), 'statistic_title'))) : ?>
            <h2 class="title">
                <?php echo carbon_get_post_meta(get_the_ID(), 'statistic_title'); ?>
            </h2>
        <?php endif ?>
        <div class="statistic__items">
            <?php foreach ((carbon_get_post_meta(get_the_ID(), 'statistic_card')) as $key) : ?>
                <div class="statistic__item">
                    <img class="statistic__img" src="<?php echo $key['statistic_image']; ?>" alt="statistic images">
                    <span class="statistic__num">
                        <?php echo $key['statistic_num']; ?>
                    </span>
                    <h3 class="statistic__title">
                        <?php echo $key['statistic_title']; ?>
                    </h3>
                    <p class="statistic__text show-less">
                        <?php echo $key['statistic_text']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>