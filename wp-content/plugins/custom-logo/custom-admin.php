<?php
/** 
 * Plugin Name: Custom Admin Settings 
 * Plugin URI: http://code.tutsplus.com/tutorials/creating-custom-admin-pages-in-wordpress-1 
 * Description: Demonstrates how to write custom administration pages in WordPress. 
 * Version: 1.0.0 
 * Author: Tom McFarlin 
 * Author URI: https://tommcfarlin.com 
 * License: GPL-2.0+ 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt 
 */


 function custom_logo_admin()
 { ?>
 
     <style type="text/css">
         #login h1 a {
             background-image: url(<?php echo plugins_url('logo.png', __FILE__) ?>);
             width: 175px;
             height: 160px;
             background-size: 175px 160px;
             background-position: center;
         }
     </style>
 
     <?php
 }