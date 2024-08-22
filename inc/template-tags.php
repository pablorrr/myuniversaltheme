<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package my_universal_theme
 */

if ( ! function_exists( 'my_universal_theme_comments_feed_template_callback' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 */
	/* comments form callback function */

	function my_universal_theme_comments_feed_template_callback( $comment, $args, $depth ) {
		$GLOBAL['comment'] = $comment;
		?> <br>
        <div class="row media">
            <a href="<?php get_comment_author_url(); ?>" class="pull-left"></a>
            <div class="col-md-12 media-body">
                <h5 class="media-heading">
                    <a href="<?php get_comment_author_url(); ?>"><?php echo get_comment_author(); ?></a>
                    <small><?php comment_date(); ?> at <?php comment_time(); ?></small>
                </h5>
                <br>
				<?php comment_text(); ?>
				<?php comment_reply_link( array_merge( $args, array(
					'reply_text' => __( '<strong class="btn-lg fr-end-butt">Answer </strong><i class="icon-share-alt"></i>',
						'myuniversaltheme' ),
					'depth'      => $depth,
					'max_depth'  => $args['max_depth']
				) ) ); ?>
            </div>
        </div>
        <hr>
		<?php
	}

endif;
/* Modify link class into Bootstrap classs */
add_filter( 'comment_reply_link', 'my_universal_theme_add_reply_link_class' );

function my_universal_theme_add_reply_link_class( $class ) {
	$class = str_replace( "class='comment-reply-link", "class='btn btn-default pull-right", $class );

	return $class;
}

add_filter( 'preprocess_comment', 'my_universal_theme_comment_limitation' );

/* limit comments char */
function my_universal_theme_comment_limitation( $comment ) {
	if ( strlen( $comment['comment_content'] ) > 800 ) {
		wp_die( 'Comment is too long. Please keep your comment under 250 characters.' );
	}
	if ( strlen( $comment['comment_content'] ) < 60 ) {
		wp_die( 'Comment is too short. Please use at least 60 characters.' );
	}

	return $comment;
}

/* password protection for protected posts */
function my_universal_theme_password_form() {
	global $post;
	$label = 'pwbox-' . ( empty( $post->ID ) ? rand() : $post->ID );
	$o     = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "myuniversaltheme" ) . '</div>
    <div class="form-group form-inline">
    <label for="' . $label . '" class="mr-2">' . __( "Password:", "myuniversaltheme" ) . ' </label>
    <input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> 
    <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "myuniversaltheme" ) . '" class="btn btn-primary"/>
    </div>
    </form>';

	return $o;
}

add_filter( 'the_password_form', 'my_universal_theme_password_form' );

/* https://codex.wordpress.org/Dashboard_Widgets_API */

function my_universal_theme_dashboard_widget() {
	wp_add_dashboard_widget(
		'my_universal_theme_dashboard_widget',// Widget slug.
		'My Universal Theme Dashboard Widget',// Title.
		'my_universal_theme_dashboard_widget_function'// Display function.
	);

	global $wp_meta_boxes;
	// Get the regular dashboard widgets array
	// (which has our new widget already but at the end)
	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
	// Backup and delete our new dashboard widget from the end of the array
	$my_universal_theme_widget_backup = array( 'my_universal_theme_dashboard_widget' => $normal_dashboard['my_universal_theme_dashboard_widget'] );
	unset( $normal_dashboard['my_universal_theme_dashboard_widget'] );

	// Merge the two arrays together so our widget is at the beginning
	$sorted_dashboard = array_merge( $my_universal_theme_widget_backup, $normal_dashboard );
	// Save the sorted array back into the original metaboxes
	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;
}

add_action( 'wp_dashboard_setup', 'my_universal_theme_dashboard_widget' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function my_universal_theme_dashboard_widget_function() {
	ob_start(); // outer buffer?>
    <ul class="list-group">
        <li class="list-group-item disabled"><?php _e( 'Welcome in My Universal Theme,enjoy it!!!', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item disabled"><?php _e( 'In this theme you can:', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- print phone number', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- print opening time', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- edit pages with block theme support', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- create new themes!!', 'myuniversaltheme' ); ?></li>
        <li class="list-group-item"><?php _e( '- sell products(WC integrate)', 'myuniversaltheme' ); ?></li>
    </ul>
	<?php ob_end_flush();
}
/* Redirect to Home Page after logout */
add_action( 'wp_logout', 'my_universal_theme_auto_redirect_external_after_logout' );

function my_universal_theme_auto_redirect_external_after_logout() {
	wp_redirect( home_url() );
	exit();
}
