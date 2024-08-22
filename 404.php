<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package myuniversaltheme
 */

get_header();

$turn_blocks = get_theme_mod( 'toggle_setting_id' );
$path       = get_theme_file_path( 'patterns/404.php' );

if ( ! file_exists( $path ) ):?>
    <script>alert('Ooopss ..check your patterns folder !!!')</script>
<?php endif;
//if header.html exists and block support is on in Customizer
if ( file_exists( $path ) && $turn_blocks === true ) {
	echo do_blocks( '<!-- wp:pattern {"slug":"my-universal-theme/404"} /-->' );
}
if ( $turn_blocks === false || ! file_exists( $path ) ) :?>
    <section id="primary" class="content-area col-sm-12 col-lg-8">
        <main id="main" class="site-main" role="main">
            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
							'myuniversaltheme' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
							'myuniversaltheme' ); ?></p>
                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </main><!-- #main -->
    </section><!-- #primary -->
<?php endif; ?>
<?php get_footer(); ?>
