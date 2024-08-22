<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package myuniversalthetheme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-thumbnail">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'first-size' );
		} ?>
    </div>
    <header class="entry-header">
		<?php if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
				'</a></h2>' );
		endif; ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php
		//https://wordpress.stackexchange.com/questions/370096/how-to-view-all-currently-registered-block-patterns
		$WP_Register_Instance = WP_Block_Patterns_Registry::get_instance();
		if ( $WP_Register_Instance->is_registered( "my-universal-theme/paragraph-pattern" ) ) {
			echo do_blocks( '<!-- wp:pattern {"slug":"my-universal-theme/paragraph-pattern"} /-->' );
		}

		if ( is_single() ) : the_content();
		else : the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'myuniversaltheme' ) );
		endif;

		wp_link_pages( array(
			'before' => '
    <div class="page-links">' . esc_html__( 'Pages:', 'myuniversaltheme' ),
			'after'  => '
    </div>',
		) );
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">

    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
