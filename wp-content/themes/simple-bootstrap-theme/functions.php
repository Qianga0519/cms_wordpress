<?php

function file_style()
{
    wp_register_style('icon', get_theme_file_uri() . '/assets/favicon.ico');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null);
    wp_register_style('bootstrap_icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css');
    wp_register_style('main_style', get_theme_file_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
    wp_register_style('style_add', get_theme_file_uri() . '/assets/css/addstyle.css', array(), '1.0', 'all');
    wp_register_style('style_404', get_theme_file_uri() . '/assets/css/404.css', array(), '1.0', 'all');
    wp_register_style('style_phantrang', get_theme_file_uri() . '/assets/css/cssphantrang.css', array(), '1.0', 'all');
    wp_register_style('main_script_online', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
    wp_register_script('main_script_file', get_theme_file_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true);
    wp_register_script('script_404', get_theme_file_uri() . '/assets/js/404.js', array('jquery'), '1.0', true);





    wp_enqueue_style('icon');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('bootstrap_icon');
    wp_enqueue_style('main_style');
    wp_enqueue_style('style_add');
    wp_enqueue_style('style_phantrang');
    wp_enqueue_style('main_script_online');
    wp_enqueue_script('main_script_file');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), 1.0, 'all');

    if (is_404()) {
        wp_enqueue_style('style_404');
        wp_enqueue_script('script_404');
    }



}
add_action('wp_enqueue_scripts', 'file_style');
//nav menu
function simple_theme_nav_config()
{
    register_nav_menus(
        array(
            "sbt_primary_menu_id" => "SBT Primary Menu",
            "sbt_secondary_menu_id" => "SBT Sidebar Menu",
            "sbt_custom_1_menu_id" => "SBT Custom Menu 1",
            "sbt_custom_2_menu_id" => "SBT Custom Menu 2"

        )
    );

    add_theme_support('post-thumbnails');
    add_theme_support(
        'woocommerce',
        array(
            "thumbnail_image_width" => 200,
            "single_image_width" => 250,
            "product_grid" => array(
                "default_columns" => "10",
                "min_columns" => "2",
                "max_columns" => "3",

            )
        )
    );

}
add_action('after_setup_theme', 'simple_theme_nav_config');
//add menu li class
function simple_theme_nav_add_li_class($classes, $item, $args)
{
    $classes[] = 'nav-item sbt-theme';
    return $classes;
}
add_filter('nav_menu_css_class', 'simple_theme_nav_add_li_class', 1, 3);
// add class anchor link
function simple_theme_add_anchor_link($classes, $item, $args)
{
    $classes['class'] = 'nav-link sbt-link-class';
    return $classes;
}
add_filter('nav_menu_link_attributes', 'simple_theme_add_anchor_link', 1, 3);



//Code phan trang
// Numbered Pagination
if (!function_exists('wpex_pagination')) {

    function wpex_pagination()
    {

        $prev_arrow = is_rtl() ? '→' : '←';
        $next_arrow = is_rtl() ? '←' : '→';

        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big = 999999999; // need an unlikely integer
        if ($total > 1) {
            if (!$current_page = get_query_var('paged'))
                $current_page = 1;
            if (get_option('permalink_structure')) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo paginate_links(
                array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => $format,
                    'current' => max(1, get_query_var('paged')),
                    'total' => $total,
                    'mid_size' => 3,
                    'type' => 'list',
                    'prev_text' => $prev_arrow,
                    'next_text' => $next_arrow,
                )
            );
        }
    }

}
add_filter('woocommerce_show_page_title', 'toggle_page_title');
function toggle_page_title($value)
{
    $value = false;
    return $value;
}
//hien thi mo ta san pham
//add_action('woocommerce_after_shop_loop_item_title','the_excerpt');

//xoa duong dan tu archive-product.php trangchu/cuahang/abc

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

//xoa hien thi so luong san pham
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
//xoa thanh sap xep 
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
//xóa thêm giỏ hàng
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');


//zoom product singgle-product
add_theme_support("wc-product-gallery-zoom");
add_theme_support("wc-product-gallery-lightbox");
add_theme_support("wc-product-gallery-slider");


add_action('after_setup_theme', function () {
    add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 7);
});


add_action('login_enqueue_scripts', 'custom_logo_admin');