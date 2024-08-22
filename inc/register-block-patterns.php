<?php
/**
 * Registers block pattern and categories.
 * @package myuniversaltheme
 */


function my_universal_theme_register_block_pattern_category() {

	register_block_pattern_category(
		'my-universal-theme-pattern-cat',
		array( 'label' => esc_html__( 'My Universal Theme pattern cat', 'myuniversaltheme' ) )
	);

}

add_action( 'init', 'my_universal_theme_register_block_pattern_category', 9 );


register_block_pattern(
	'my-universal-theme/paragraph-pattern',
	array(
		'title'       => __( 'Custom paragraph', 'myuniversaltheme' ),
		'description' => _x( 'Use custom paragraph - predefined', 'Block pattern description', 'myuniversaltheme' ),
		'categories'  => array( 'my-universal-theme-pattern-cat' ),
		'content'     => '<!-- wp:preformatted {"className":"is-style-default","fontSize":"medium"} -->
							<pre class="wp-block-preformatted is-style-default has-medium-font-size">
							<strong>
							<em>This is custom paragraph</em>
							</strong>
							</pre>
							<!-- /wp:preformatted -->',
	)
);
