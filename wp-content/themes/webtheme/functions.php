<?php
//attach/add assets file
function webtheme_load_script()
{
    //theme.css
    wp_enqueue_style("theme-css", get_template_directory_uri() . "/assets/css/theme.css", array(), "1.0", "all");
    //style.css
    wp_enqueue_style("theme-style", get_template_directory_uri(), array(), "1.0", "all");
    //script.js
    wp_enqueue_style("script-js", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), "1.0", true);

}
;
add_action("wp_enqueue_script", "webtheme_load_script");
/**register nav menu */
function webtheme_nav_config()
{
    register_nav_menu('theme-primary-menu', 'Primary Menu Webtheme ');
    register_nav_menu('theme-footer-menu', 'Footer Menu Webtheme ');
    register_nav_menu('theme-sidebar-menu', 'Sidebar Menu Webtheme ');
}
add_action('after_setup_theme', 'webtheme_nav_config');