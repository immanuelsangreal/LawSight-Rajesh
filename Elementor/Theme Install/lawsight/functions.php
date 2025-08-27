<?php
/**
 * Theme functions: init, enqueue scripts and styles, include required files and widgets.
 *
 * @package Case-Themes
 * @since Lawsight 1.0
 */

if(!defined('DEV_MODE')){ define('DEV_MODE', true); }

if(!defined('THEME_DEV_MODE_ELEMENTS') && is_user_logged_in()){
    define('THEME_DEV_MODE_ELEMENTS', true);
}
 
require_once get_template_directory() . '/inc/classes/class-main.php';

if ( is_admin() ){ 
	require_once get_template_directory() . '/inc/admin/admin-init.php'; }
 
/**
 * Theme Require
*/
Lawsight()->require_folder('inc');
Lawsight()->require_folder('inc/classes');
Lawsight()->require_folder('inc/theme-options');
Lawsight()->require_folder('template-parts/widgets');
if(class_exists('Woocommerce')){
    Lawsight()->require_folder('woocommerce');
}

// function theme_enqueue_scripts() {
//     wp_enqueue_script('counter-js', get_template_directory_uri() . '/elements/assets/js/counter.js', array('jquery'), '1.0.0', true);
// }
// add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');


add_action( 'after_setup_theme', 'remove_woocommerce_gallery_zoom_lightbox_slider', 100 );
function remove_woocommerce_gallery_zoom_lightbox_slider() {
    remove_theme_support( 'wc-product-gallery-zoom' ); // close zoom img in single product
}