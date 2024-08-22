<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-universal-wp
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wp-site-blocks">

	<?php
	$toggle_opt = get_theme_mod( 'toggle_setting_id' );
	$path       = get_theme_file_path( 'parts/header.html' );

	if ( ! file_exists( $path ) ):?>
        <script>alert('Ooopss ..check your parts folder !!!')</script>
	<?php endif;
	//if header.html exists and block support is on in Customizer
	if ( file_exists( $path ) && $toggle_opt === true ) : ?>
        <header class="wp-block-template-part site-header">
			<?php block_header_area(); ?>
        </header>
	<?php endif; ?>

	<?php if ( $toggle_opt === false || ! file_exists( $path ) ) {
		require get_template_directory() . '/inc/classic-templates/classic-header.php';
	}
	?>
