<section class="after-reviews rich-text section">
    <div class="container">
        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'rich_after_reviews')); ?>
    </div>
</section>