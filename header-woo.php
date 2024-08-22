<?php
/**
 * The template for displaying header
 *
 * Displays all of the <head>  and <header> section
 *
 * @package my_universal_wp
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
	$path       = get_theme_file_path( 'parts/header-woo.html' );

	if ( ! file_exists( $path ) ):?>
        <script>alert('Ooopss ..check your parts folder !!!')</script>
	<?php endif;
	//if header-woo.html exists and block support is on in Customizer
	if ( file_exists( $path ) && $toggle_opt === true ) : ?>
        <header class="wp-block-template-part site-header">
			<?php block_template_part( 'header-woo' ); ?>
        </header>
	<?php endif;

	if ( $toggle_opt === false || ! file_exists( $path ) ) {
		require get_template_directory() . '/inc/classic-templates/classic-header-woo.php';
	}
	?>
