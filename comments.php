<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package myuniversaltheme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$turn_blocks = get_theme_mod( 'toggle_setting_id' );
$path        = get_theme_file_path( 'patterns/comments.php' );

if ( ! file_exists( $path ) ):?>
    <script>alert('Ooopss ..check your patterns folder !!!')</script>
<?php endif;

if ( file_exists( $path ) && $turn_blocks === true ) {
	echo do_blocks( '<!-- wp:pattern {"slug":"my-universal-theme/comments"} /-->' );
}

if ( $turn_blocks === false || ! file_exists( $path ) ) {
	require get_template_directory() . '/inc/classic-templates/classic-comments.php';
}
