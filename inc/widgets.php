<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package myuniversaltheme
 */
function my_universal_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'myuniversaltheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'myuniversaltheme' ),
		'before_widget' => '<div style="style="padding:15px;" id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'myuniversaltheme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'myuniversaltheme' ),
        'before_widget' => '<div style="padding:15px;" id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'myuniversaltheme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'myuniversaltheme' ),
        'before_widget' => '<div style="padding:15px;" id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'myuniversaltheme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'myuniversaltheme' ),
        'before_widget' => '<div style="padding:15px;" id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'my_universal_theme_widgets_init' );
