<?php
/**
 * The template for displaying category
 * @link https://codex.wordpress.org/Taxonomies
 * @package myuniversaltheme
 *
 */
get_header();
?>
    <section id="primary">
        <div class="container">
            <div class="row mar-top-20">
                <div class="col-md-12">
                    <h5><?php echo ucfirst( single_cat_title() ); ?></h5>
					<?php if ( ! empty( category_description() ) ) : ?>
						<?php echo category_description(); ?>
					<?php endif; ?>
					<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php else: ?>
                        <div class="col-md-12">
                            <h2 style="padding:100px;">
								<?php _e( 'Sorry, there are no posts in this category', 'myuniversaltheme' ); ?></h2>
                        </div>
					<?php endif; ?>
                </div>
            </div>
        </div><!--.container-->
    </section><!--#primary -->
    <div class="row mar-bot-30"></div>
<?php get_footer();
