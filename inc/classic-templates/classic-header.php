<?php
/**
 * classic header template
 *
 * @package myuniversaltheme
 *
 */

?>
<div class="jumbotron">
    <header id="home" class="home" style="background-image: url('<?php header_image(); ?>');" role="banner">
        <div class="container-fluid text-vcenter">
            <div class="row align-items-start">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-md fixed-top" data-spy="affix" data-offset-top="400"
                         role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                                        data-target="#mainNav" aria-controls="navbarCollapse" aria-expanded="false"
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
									'walker'          => new My_Universal_Theme_Navwalker()
								) );
								?>
                            </div>
                        </div>
						<?php elseif ( is_user_logged_in() ): ?>

                            <div class="container-fluid">
                                <h3>
									<?php printf( wp_kses( __( 'Theres no menu, 
                                <a href="%1$s" target="%2$s">go to admin panel and create and activate menu</a>.',
										'myuniversaltheme' ),
										array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
										admin_url( 'nav-menus.php' ), '_blank' ); ?>
                                </h3>
                            </div>
                            <!-- end has menu primary-->
						<?php endif; ?>
                    </nav>

                    <!-- main home content -->
                    <div class="site-branding">
                        <div class="wrap">
                            <div class="site-branding-text">
								<?php if ( ! has_custom_logo( get_current_blog_id() ) ) : ?>
                                    <h1 class="site-title respo"><a style="font-size:2.3em;" class="site-title"
                                                                    href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                                    rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php else : the_custom_logo();
								endif;//is_front_page

								$description = get_bloginfo( 'description', 'display' );

								if ( $description || is_customize_preview() ) : ?>

                                    <div class="col-md-12 mt-1">

                                        <p class="site-description respo"><?php echo $description; ?></p>
                                        <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>

                                    </div><!-- .col-md-12 .mt-1 -->
                                    <!-- end if is_customize_preview()-->
								<?php endif; ?>
                            </div><!-- .site-branding-text-->
                        </div><!--wrap .-->
                    </div><!--.site-branding-->
                </div><!--.col-md-12 -->
            </div><!--.row align-items-start-->
        </div><!--container-fluid text-vcenter-->
    </header>
</div>
