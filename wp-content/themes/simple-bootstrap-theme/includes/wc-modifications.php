<?
add_filter('woocommerce_show_page_title','toggle_page_title');
function toggle_page_title($value){
    $value = false;
    return $value;
}
add_action('woocommerce_after_shop_loop_item_title','the_excerpt');