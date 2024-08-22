<?php
/**
 * My Universal Theme  functions and definitions
 *
 * @package myuniversaltheme
 */
//todo sprawdzic czy dziala back compat
/**
 * Check WP version to fully use of this theme.
 */
require get_template_directory() . '/inc/back-compat.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Register block styles css.
 */
require get_template_directory() . '/inc/register-block-styles.php';

/**
 * Register block patterns.
 */
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';//?? dlazcego nie get templqte directory??

/**
 * Load shortccodes.
 */
//require get_template_directory() . '/inc/shortcodes.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'my_universal_theme_navwalker' ) ) {
	require_once( get_template_directory() . '/inc/my-universal-theme-navwalker.php' );
}


/**
 * Load WooCommerce custom settings.
 */
if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}

if ( class_exists( 'woocommerce' ) && is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * .
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 */
//require_once get_template_directory() . '/inc/plugin-compatibility/class-tgm-plugin-activation.php';

/**
 * Register the required plugins for this theme.
 */
//add_action( 'tgmpa_register', 'my_universal_theme_register_required_plugins' );

//require get_template_directory() . '/inc/tgm-register-plugin.php';


/**
 * Show Welcome screen on activation
 */
if ( is_admin() ) {
	require get_template_directory() . '/inc/admin/myuniversaltheme-welcome-screen.php';
}
