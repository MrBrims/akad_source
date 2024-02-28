<?php

/** Template Name: Halfe & Coaching */

get_header();

?>

<main class="main">
    <?php get_template_part('parts/sections/hero'); ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <?php
                $data = carbon_get_post_meta(get_the_ID(), 'ak_complex_fields_page');
                // echo '<pre>';
                // print_r($data);
                // echo '</pre>';
                foreach ($data as $key) {
                    switch ($key['_type']) {
                        case 'template_rich':
                            if (!$key['ak_complex_rich_text']) {
                                break;
                            }
                            include 'complex_blocks/rich-text.php';
                            break;
                        case 'template_global_select':
                            if (!$key['ak_complex_global_select']) {
                                break;
                            }
                            get_template_part($key['ak_complex_global_select']);
                            break;
                        case 'template_price':
                            if (!$key['get_ak_complex_table_price']) {
                                break;
                            }
                            include 'complex_blocks/table-price.php';
                            break;
                    }
                }
                get_template_part('parts/sections/main-faq');
                ?>
            </div>
            <div class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/team'); ?>
                </div>
            </div>
        </div>
        <?php
        get_template_part('parts/sections/message');
        get_template_part('parts/sections/contact');
        get_template_part('parts/shema/microdata');
        ?>
    </div>
</main>

<?php get_footer(); ?>