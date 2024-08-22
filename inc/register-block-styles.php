<?php
/**
 * Register block styles
 * @package myuniversaltheme
 */

/**
 * Add new heading block style.
 */

function my_universal_theme_register_block_style(): void {

	register_block_style(
		'core/heading',
		array(
			'name'  => 'header',
			'label' => __( 'Header', 'myuniversaltheme' ),
		)
	);

	/**
	 * Add new post/page title block style.
	 */

	register_block_style(
		'core/post-title',
		array(
			'name'  => 'post-page-title',
			'label' => __( 'Post/Page Title', 'myuniversaltheme' ),
		)
	);
	/**
	 * Add new paragraph block style.
	 */

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'paragraph',
			'label' => __( 'Paragraph', 'myuniversaltheme' ),
		)

	);
	/**
	 * Add new image  block style.
	 */
	register_block_style(
		'core/image',
		array(
			'name'  => 'image',
			'label' => __( 'Box Shadow', 'myuniversaltheme' ),
		)
	);
}

add_action( 'init', 'my_universal_theme_register_block_style' );
