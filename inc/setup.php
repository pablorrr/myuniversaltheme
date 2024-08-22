<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */


/*add_action( 'after_switch_theme', 'mytheme_setup_options' );

function mytheme_setup_options() {
	// Redirect to welcome page after activation theme
	global $pagenow;

	if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {
		wp_redirect( admin_url( 'themes.php?page=myuniversaltheme-welcome' ) );
	}
}*/


if ( ! function_exists( 'my_universal_theme_setup' ) ) :

	function my_universal_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
		 * to change 'my_universal_theme' to the name of your theme in all the template files.
		 *
		 */

		load_theme_textdomain( 'myuniversaltheme', get_template_directory() . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'first-size', 250, 250 );
		add_image_size( 'second-size', 250, 250 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary'   => __( 'Primary Header Menu', 'myuniversaltheme' ),
				'secondary' => __( 'Footer Menu', 'myuniversaltheme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'caption',
			'search-form'
		) );

// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('myuniversaltheme_custom_background_args', array(
			'default-color' => '',
			'default-image' => '',
		)));
		// Redirect to welcome page after activation theme
		global $pagenow;

			if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {
				wp_redirect( admin_url( 'themes.php?page=myuniversaltheme-welcome' ) );
			}

		// Add theme support for block templates.
		add_theme_support( 'block-templates' );

		// Add theme support for block template parts.
		add_theme_support( 'block-template-parts' );
//The following features are enabled by default in block themes from version 5.9 onwards:
		add_theme_support( 'responsive-embeds' );

		//Enabling theme support for align full and align wide option for the block editor, use
		add_theme_support( 'align-wide' );

		// Add theme support for block styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles. tiny mce?
		//add_editor_style( 'editor-style.css' );

	}
endif;
add_action( 'after_setup_theme', 'my_universal_theme_setup' );

/**
 * add WC Icons
 */
if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}

if ( class_exists( 'woocommerce' ) && is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
	add_filter( 'wp_nav_menu_items', 'my_universal_theme_custom_menu_item', 10, 2 );
	function my_universal_theme_custom_menu_item( $items, $args ) {
		if ( $args->theme_location == 'primary' ) {
			$items .= '<div class="row mx-md-n5">
  						<div class="col md-12"></div>
                        <div class="col px-md-3">
                           
                            <a  href="' . esc_url( wc_get_page_permalink( 'cart' ) ) . ' " >
                                <i class="fa fa-shopping-cart"></i>
                                </a>
                          
						</div>
                        <div class="col px-md-3">
                           
                            <a  href="' . esc_url( wc_get_page_permalink( 'shop' ) ) . '" >
                                <i class="fa fa-shopping-bag"></i>
                                </a>
                               
						 </div>
						 <div class="col px-md-3">
                         
                            <a  href="' . esc_url( wc_get_page_permalink( 'myaccount' ) ) . '" >
                                 <i class="fa fa-user"></i>
                                </a>
                                
                                
						 </div>
						 <div class="col px-md-3">
                            
                            <a  href="' . esc_url( wc_get_checkout_url() ) . '" >
                               <i class="fa fa-check"></i>
                                </a>
                                </div>
                                
                        </div>';
		}

		return $items;
	}
}
