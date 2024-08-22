<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package myuniversaltheme
 */

$turn_blocks = get_theme_mod( 'toggle_setting_id' );
$path        = get_theme_file_path( 'patterns/no-results.php' );

if ( ! file_exists( $path ) ):?>
    <script>alert('Ooopss ..check your patterns folder !!!')</script>
<?php endif;

if ( file_exists( $path ) && $turn_blocks === true ) {
	echo do_blocks( '<!-- wp:pattern {"slug":"my-universal-theme/no-results"} /-->' );
}
if ( $turn_blocks === false || ! file_exists( $path ) ) :?>
    <section class="no-results not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'myuniversaltheme' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.',
						'myuniversaltheme' ), array( 'a' => array( 'href' => array() ) ) ),
						esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
			<?php elseif ( is_search() ) : ?>
                <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.',
						'myuniversaltheme' ); ?></p>
				<?php
				get_search_form();
			else : ?>
                <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.',
						'myuniversaltheme' ); ?></p>
				<?php
				get_search_form();

			endif; ?>
        </div><!-- .page-content -->
    </section><!-- .no-results -->
<?php endif; ?>
