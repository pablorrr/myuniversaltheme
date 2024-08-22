<?php
/**
 * classic header-woo template
 *
 * @package myuniversaltheme
 *
 */
?>
<div id="content">
    <div class="jumbotron">
        <header id="home" class="home" role="banner">
            <div class="container-fluid text-vcenter">
                <div class="row align-items-start">
                    <div class="col-md-12">
                        <nav class="navbar navbar-expand-md" data-spy="affix" data-offset-top="400"
                             role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button class="navbar-toggler collapsed" type="button"
                                            data-toggle="collapse"
                                            data-target="#mainNav" aria-controls="navbarCollapse"
                                            aria-expanded="false"
                                            aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                </div>
								<?php if ( has_nav_menu( 'primary' ) ): ?>
                                    <div id="mainNav" class="navbar-collapse collapse">
										<?php
										wp_nav_menu( array(
											'theme_location'  => 'primary',
											'container'       => 'div',
											'container_id'    => '',
											'container_class' => '',
											'menu_id'         => false,
											'menu_class'      => 'navbar-nav mr-auto',
											'depth'           => 3,
											'walker'          => new  my_universal_theme_navwalker()
										) );
										?>
                                    </div>
								<?php endif; ?>
                            </div>
                        </nav>
                        <!-- main home content -->
                        <div class="container mt-5 pt-5">
                            <div class="row justify-content-center">
                                <h1 class=""><a style="" class="site-title"
                                                href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            </div>
                            <div class="row justify-content-center">
                                <h2 class="has-text-align-center">
									<?php if ( is_shop() ) {
										_e( 'Shop Page', 'myuniversaltheme' );
									} elseif ( is_checkout() ) {
										_e( 'Checkout Page', 'myuniversaltheme' );
									} elseif ( is_cart() ) {
										_e( 'Cart Page', 'myuniversaltheme' );
									} elseif ( is_account_page() ) {
										_e( 'Account Page', 'myuniversaltheme' );
									} elseif ( is_product() ) {
										_e( 'Product Page', 'myuniversaltheme' );
									} elseif ( is_product_category() ) {
										_e( 'Product Category Page', 'myuniversaltheme' );
									} elseif ( is_product_tag() ) {
										_e( 'Product Tag Page', 'myuniversaltheme' );
									}
									?></h2>
                            </div>
                        </div>
                    </div><!--.col-md-12 -->
                </div><!--.row align-items-start-->
            </div><!--container-fluid text-vcenter-->
        </header>
    </div>
