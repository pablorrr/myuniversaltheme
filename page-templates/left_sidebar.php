<?php
/**
 * Template Name: Left Sidebar
 * @package myuniversaltheme
 */

get_header(); ?>
    <div class="container">
        <div class="row mx-auto m-single">
            <section id="primary" class="content-area col-sm-12 col-md-8 col-lg-8">
                <main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page' );
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile; // End of the loop.
					?>
                </main><!-- #main -->
            </section><!-- #primary -->
        </div>

    </div>
<?php get_footer();