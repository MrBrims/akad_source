<section class="price-list">
    <div class="container">
        <h2 class="title price-list__title">
            <?php echo carbon_get_post_meta(get_the_ID(), 'price_list_title'); ?>
        </h2>
        <div class="price-list__wrapper">
            <table class="price-list__table">
                <thead>
                    <tr class="price-list__table-tr">
                        <th class="price-list__table-th">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'price_list_th_1'); ?>
                        </th>
                        <th class="price-list__table-th">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'price_list_th_2'); ?>
                        </th>
                        <th class="price-list__table-th">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'price_list_th_3'); ?>
                        </th>
                        <th class="price-list__table-th">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'price_list_th_4'); ?>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ((carbon_get_post_meta(get_the_ID(), 'price_list_table')) as $key) : ?>
                        <tr class="price-list__table-tr">
                            <td class="price-list__table-td price-list__table-name">
                                <?php echo $key['price_list_td_1']; ?>
                            </td>
                            <td class="price-list__table-td price-list__table-time">
                                <?php echo $key['price_list_td_2']; ?>
                            </td>
                            <td class="price-list__table-td price-list__table-num">
                                <?php echo $key['price_list_td_3']; ?>
                            </td>
                            <td class="price-list__table-td">
                                <a class="price-list__btn popup-link price-list__table-btn" href="#popup-form">
                                    <?php echo $key['price_list_td_4']; ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>