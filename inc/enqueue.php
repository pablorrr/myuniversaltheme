<?php

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// ENQUEUE SCRIPTS AND STYLES.
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

function my_universal_theme_scripts() {
	// ---------------------------------------------
// load theme and Bootstrap CSS  conditionally     -
// ---------------------------------------------

	if ( ! is_admin() ) {

		//load Bootstrap Css
		wp_enqueue_style( 'my-universal-theme-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
		// load theme styles
		wp_enqueue_style( 'my-universal-theme-css',
			get_template_directory_uri() . '/assets/css/my-universal-theme.css', array(), '1.0',
			false );
	}

// -----------------------------------------------
// load dashicon WP style, Jquery, HTML5 support     -
// -----------------------------------------------

	wp_enqueue_style( 'dashicons' );
	wp_enqueue_script( 'jquery' );


// ---------------------------------------------------
// load Bootstrap Jquery, Theme Jquery conditionally    -
// --------------------------------------------------

	if ( ! is_admin() ) {
		//fontawesome
		wp_enqueue_script( 'my-universal-theme-fontawesome',
			get_template_directory_uri() . '/assets/js/fontawesome/fontawesome-all.js', array() );
		//fontawesome-V4
		wp_enqueue_script( 'my-universal-theme-fontawesome-v4',
			get_template_directory_uri() . '/assets/js/fontawesome/fa-v4-shims.js', array() );
		//popper
		wp_enqueue_script( 'my-universal-theme-popper', get_template_directory_uri() . '/assets/js/popper.js',
			array() );
		//theme's JS
		wp_enqueue_script( 'my-universal-theme-theme-js',
			get_template_directory_uri() . '/assets/js/my-universal-wp-scripts.js', array() );


		//Bootstrap Jquery
		wp_enqueue_script( 'my-universal-theme-bootstrap-js',
			get_template_directory_uri() . '/assets/js/bootstrap.js' );
		// popover shortcode effect
		wp_enqueue_script( 'my-universal-theme-popover-tootlip',
			get_template_directory_uri() . '/assets/js/popover-tootlip.js', array( 'jquery' ), '', true );
		// popper shortcode effect
		wp_enqueue_script( 'my-universal-theme-popper', get_template_directory_uri() . '/assets/js/popper.js',
			array( 'jquery' ), '', true );

	}

	// -

// ---------------------------------------------------
//  thread comments support  -
// --------------------------------------------------

	if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'my_universal_theme_scripts' );

// ---------------------------------------------
// remove WooCommerce css style when is unnecessary     -
// source: https://crunchify.com/how-to-stop-loading-woocommerce-js-javascript-and-css-files-on-all-wordpress-postspages/
// ---------------------------------------------


add_action( 'wp_enqueue_scripts', 'my_universal_theme_disable_woocommerce_loading_css_js' );

function my_universal_theme_disable_woocommerce_loading_css_js() {

	// Check if WooCommerce plugin is active
	if ( function_exists( 'is_woocommerce' ) ) {

		// Check if it's any of WooCommerce page
		if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {

			## Dequeue WooCommerce styles
			wp_dequeue_style( 'woocommerce-layout' );
			wp_dequeue_style( 'woocommerce-general' );
			wp_dequeue_style( 'woocommerce-smallscreen' );

			## Dequeue WooCommerce scripts
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'wc-add-to-cart' );

		}
	}
}


function my_universal_theme_enqueue_blocks_scripts() {
	wp_enqueue_style(
		'my_universal_theme_enqueue_blocks_scripts',
		get_template_directory_uri() . '/assets/css/blocks/blocks.css'
	);
}

// Adds the style to both the front and backend editor.
add_action( 'enqueue_block_assets', 'my_universal_theme_enqueue_blocks_scripts' );


function my_universal_theme_block_variations() {
	wp_enqueue_script(
		'my-universal-theme-enqueue-block-variations',
		get_template_directory_uri() . '/assets/js/variations.js',
		array( 'wp-blocks', 'wp-element', 'wp-dom-ready', 'wp-edit-post' )
	//	array( 'wp-blocks', 'wp-element', 'wp-dom-ready', 'wp-edit-post','wp-i18n' )
	);
//problemy z tlumaczeniem js
	/*wp_set_script_translations(
		'my-universal-theme-enqueue-block-variations',
		'myuniversaltheme',
		get_template_directory().'languages'
	);*/
}

add_action( 'enqueue_block_editor_assets', 'my_universal_theme_block_variations' );
