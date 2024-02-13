<?php
echo '<div class="container blog__price price-container js-fixes-block-end">';
echo '<h2>Preise</h2>';
echo '<div class="table-adaptive">';
echo '<table class="table-price">';
echo '<thead>';
echo '<tr>';
echo '<th>ab <span>' . carbon_get_theme_option('cf_price_1') . '</span></th>';
echo '<th>ab <span>' . carbon_get_theme_option('cf_price_2') . '</span></th>';
echo '<th>ab <span>' . carbon_get_theme_option('cf_price_3') . '</span></th>';
echo '<th>ab <span>' . carbon_get_theme_option('cf_price_4') . '</span></th>';
echo '<th>ab <span>' . carbon_get_theme_option('cf_price_5') . '</span></th>';
echo '<th>ab <span>' . carbon_get_theme_option('cf_price_6') . '</span></th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$prices = carbon_get_theme_option('cf_price');
foreach ($prices as $key => $price) {
  echo '<tr>';
  $sliced = array_slice($price, 1);
  foreach ($sliced as $key => $value) {
    echo '<td>' . $value . '</td>';
  }
  echo '</tr>';
}
echo '</tbody>';
echo '<tfoot></tfoot>';
echo '</table>';
echo '</div>';
echo '</div>';
