<div class="col two-col" style="margin-bottom: 1.618em; overflow: hidden;">
    <div class="col">
        <h1 style="margin-right: 0;"><?php echo '<strong>My Universal Theme</strong>'; ?></h1>
        <ul class="list-group">
            <li class="list-group-item disabled"><?php _e( 'In this theme you can:', 'myuniversaltheme' ); ?></li>
            <li class="list-group-item"><?php _e( '- print phone number', 'myuniversaltheme' ); ?></li>
            <li class="list-group-item"><?php _e( '- print opening time', 'myuniversaltheme' ); ?></li>
            <li class="list-group-item"><?php _e( '- edit pages with block theme support',
					'myuniversaltheme' ); ?></li>
            <li class="list-group-item"><?php _e( '- create new themes!!', 'myuniversaltheme' ); ?></li>
        </ul>
    </div>


    <div class="col last-feature">
        <img src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>" alt="myuniversaltheme"
             class="image-50" width="440"/>
    </div>
</div>
<div id="" class="col two-col panel" style="margin-bottom: 1.618em; padding-top: 1.618em; overflow: hidden;">

    <h2><?php echo sprintf( esc_html__( 'Welcome to the %sMy Universal Theme%s  , enjoy it!!!', 'myuniversaltheme' ),
			'<strong>', '</strong>' ); ?></h2>
    <p class="tagline"><?php _e( 'The theme contains many ways to configure.', 'myuniversaltheme' ); ?></p>

    <div class="col-1">

        <!-- MENUS -->
        <h4><?php _e( 'Configure menu location &nbsp<span class="dashicons dashicons-menu"></span>',
				'myuniversaltheme' ); ?></h4>
        <p><?php _e( 'Configure your menu. The theme supports scrolling from the menu to selected segments on the front page.
         To do this, go to the Menu in the Administration Panel,
          choose your own links and paste - (http: // yourdomainname / #services) and add to the Menu.',
				'myuniversaltheme' ); ?></p>
        <p><a href="<?php echo esc_url( self_admin_url( 'nav-menus.php' ) ); ?>" target="_blank"
              class="button"><?php _e( 'Configure menus', 'myuniversaltheme' ); ?></a></p>

    </div><!--.col-1-->
    <div class="col-2 last-feature">
        <!-- SET UP CUSTOM PERMALINKS -->
        <h4><?php _e( 'Set up your permalinks &nbsp <span class="dashicons dashicons-admin-site"></span>',
				'myuniversaltheme' ); ?></h4>

        <p><?php echo sprintf( esc_html__( 'Create %sCustom Links%s to this theme. Customized links simplify the readability of links and are more friendly seo.',
				'myuniversaltheme' ), '<strong>', '</strong>' ); ?>
            <a href="https://codex.wordpress.org/Using_Permalinks"> Visit Wordpress Codex</a> to see custom permalinks
            examples. Recommended custom permalink: /%category%/%postname%/</p>
        <p><?php printf( wp_kses( __( ' <a href="%1$s" target="%2$s" class="%3$s">Open Permalink Settings</a>',
				'myuniversaltheme' ),
				array( 'a' => array( 'href' => array(), 'target' => array(), 'class' => array() ) ) ),
				esc_url( self_admin_url( 'options-permalink.php' ) ), '_blank', 'button' ); ?></p>

        <!-- WOOCOMMERCE  -->
        <h4><?php _e( 'Sell products through Woocommerce plugin &nbsp <span class="dashicons dashicons-cart"></span>',
				'myuniversaltheme' ); ?></h4>

        <p><?php _e( 'To sell products, download and install the Woocommerce plugin. It is necessary to pre-configure the plugin; create products, choose a template for a store, cart etc.',
				'myuniversaltheme' ); ?>
        </p>
        <p><a class="button" href="https://docs.woocommerce.com/document/start-with-woocommerce-in-5-steps/"
              target="_blank">Woocomerce link</a></p>

    </div><!--.col-2 .last-feature-->
</div><!--#lets_started-->
<?php
/**
 * Welcome screen add-ons template
 */
?>
<div id="" class="my-universal-theme-add-ons panel" style="padding-top: 1.618em; clear: both;">
    <h2><?php echo esc_html__( 'Install recommended plugins', 'myuniversaltheme' ); ?></h2>

    <p class="tagline">
		<?php echo sprintf( esc_html__( 'Add to the subject plugins supporting take care of seo, security and inform users that you are using cookie in %sMy Universal Theme%s',
			'myuniversaltheme' ), '<strong>', '</strong>' ); ?>
    </p>

    <div class="add-on">
        <div class="content">
            <!-- Plugins -->
            <div class="section plugins">
                <h4><?php _e( 'Install recommended plugins <span class="dashicons dashicons-admin-plugins"></span>',
						'myuniversaltheme' ); ?></h4>
                <p style="margin-bottom:10px;"><?php echo sprintf( esc_html__( '%sIncrease the functionality%s of your theme by applying extensions in the form of plugins. take care of seo, security on the network, cookie privacy policy and commercial selling- %sWoocommerce%s',
						'myuniversaltheme' ), '<strong>', '</strong>',
						'<a target="_blank" href="' . esc_url( 'https://wordpress.org/plugins/woocommerce/' ) . '"><strong>',
						'</strong></a>' ); ?></p>


                <p><a href="<?php echo esc_url( self_admin_url( 'themes.php?page=tgmpa-install-plugins' ) ); ?>"
                      class="button button-primary"><?php _e( 'Install &amp; Activate Recommended Plugins',
							'myuniversaltheme' ); ?></a></p>
            </div>
        </div>
    </div>

    <hr style="clear: both;"/>
</div>

<div id="" class="add-ons panel" style="padding-top: 1.618em; clear: both;">
    <h2><?php echo esc_html__( 'Read documentation', 'myuniversaltheme' ); ?></h2>

    <ul class="list-group">
        <li class="list-group-item disabled"><?php _e( 'Other features', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- responsive ( Bootsrap 4 framework )', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- customizable ( Wp Customizer)' , 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- translatable', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- supported e-shoping ( Woocommerce )', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- supported custom theme blocks', 'myuniversaltheme' ); ?></li>
    </ul>
    <hr style="clear: both;"/>
</div>
<hr/>
