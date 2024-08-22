<?php
/**
 * The template for displaying all woocommerce pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.Based on Understrap Starter.
 *
 * @package myuniversaltheme
 */

get_header( 'woo' ); ?>
<div class="wrapper" id="woocommerce-wrapper">
    <div id="content" class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <main class="site-main" id="main">
                <h3>wc classic</h3>
                <div class="site-search">
					<?php if ( function_exists( 'woocomerce_product_search' ) ) {
						echo woocommerce_product_search();
					} else {
						the_widget( 'WC_Widget_Product_Search', 'title=' );
					} ?>
                </div>

				<?php

				$template_name = '\archive-product.php';
				$args          = array();
				$template_path = '';
				$default_path  = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '\woocommerce';

				if ( is_singular( 'product' ) ) {
                    woocommerce_content();
                    //For ANY product archive, Product taxonomy, product search or /shop landing page etc Fetch the template override;
				} elseif ( file_exists( $default_path . $template_name ) ) {
					wc_get_template( $template_name, $args, $template_path, $default_path );

					//If no archive-product.php template exists, default to catchall;
				} else {
					woocommerce_content();
				}; ?>
            </main><!-- #main -->

        </div><!--col-md-18-->
        <div class="col-md-2"></div>

    </div><!-- .row -->

</div><!-- Container end .wrapper #woocommerce-wrapper -->
<?php get_footer(); ?>
