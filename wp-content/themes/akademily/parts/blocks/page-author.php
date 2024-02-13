<div class="page-author">
    <div class="page-author__inner">
        <div class="page-author__img-box">
            <img  class="page-author__img" src="<?php echo carbon_get_user_meta(get_the_author_meta('ID'), 'de_avatar'); ?>" />
        </div>
        <div class="page-author__content">
            <div class="page-author__head">
                <h2 class="page-author__name">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                        <?php echo get_the_author_meta('display_name'); ?>
                    </a>
                </h2>
                <div class="page-author__soc">
                    <?php if ($facebook = get_the_author_meta('facebook')) { ?>
                        <a target="_blank" href="<?php echo $facebook; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/facebook.svg" alt="Facebook" />
                        </a>
                    <?php } ?>
                    <?php if ($youtube = get_the_author_meta('youtube')) { ?>
                        <a target="_blank" href="<?php echo $youtube; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/youtube.svg" alt="YouTube" />
                        </a>
                    <?php } ?>
                    <?php if ($instagram = get_the_author_meta('instagram')) { ?>
                        <a target="_blank" href="<?php echo $instagram; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/instagram.svg" alt="Instagram" />
                        </a>
                    <?php } ?>
                    <?php if ($twitter = get_the_author_meta('twitter')) { ?>
                        <a target="_blank" href="<?php echo $twitter; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/twitter.svg" alt="Twitter" />
                        </a>
                    <?php } ?>
                    <?php if ($linkedin = get_the_author_meta('linkedin')) { ?>
                        <a target="_blank" href="<?php echo $linkedin; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/linkedin.svg" alt="LinkedIn" />
                        </a>
                    <?php } ?>
                    <?php if ($myspace = get_the_author_meta('myspace')) { ?>
                        <a target="_blank" href="<?php echo $myspace; ?>">
                            <img src="<?php echo DE_URI; ?>/resources/images/social/myspace.svg" alt="MySpace" />
                        </a>
                    <?php } ?>
                    <?php if ($pinterest = get_the_author_meta('pinterest')) { ?>
                        <a target="_blank" href="<?php echo $pinterest; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/pinterest.svg" alt="Pinterest" />
                        </a>
                    <?php } ?>
                    <?php if ($soundcloud = get_the_author_meta('soundcloud')) { ?>
                        <a target="_blank" href="<?php echo $soundcloud; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/soundcloud.svg" alt="SoundCloud" />
                        </a>
                    <?php } ?>
                    <?php if ($tumblr = get_the_author_meta('tumblr')) { ?>
                        <a target="_blank" href="<?php echo $tumblr; ?>">
                            <img class="page-author__soc-icon" src="<?php echo DE_URI; ?>/resources/images/social/tumblr.svg" alt="Tumblr" />
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div>
                <p class="page-author__position">
                    <strong>Autor, Doctor</strong>
                </p>
                <p class="page-author__text">
                    <?php echo carbon_get_user_meta(get_the_author_meta('ID'), 'de_user_short'); ?>
                </p>
            </div>
        </div>
    </div>
</div>