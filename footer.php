<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-universal-wp
 */

$toggle_opt = get_theme_mod( 'toggle_setting_id' );
$path       = get_theme_file_path( 'parts/footer.html' );

if ( ! file_exists( $path ) ):?>
    <script>alert('Ooopss ..check your parts folder !!!')</script>
<?php endif;
//if footer.html exists and block support is on in Customizer
if ( file_exists( $path ) && $toggle_opt === true ) : ?>
    <footer class="wp-block-template-part site-footer">
		<?php block_footer_area(); ?>
    </footer>
    </div><!-- .wp-site-blocks -->
	<?php wp_footer(); ?>

<?php endif; ?>

<?php if ( $toggle_opt === false || ! file_exists( $path ) ) {
	require get_template_directory() . '/inc/classic-templates/classic-footer.php';
}
?>
</body>
</html>
