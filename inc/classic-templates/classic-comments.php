<?php
/**
 * classic comments template
 *
 * @package myuniversaltheme
 */
?>
<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'myuniversaltheme' ),
					get_the_title() );
			} else {
				printf(
				/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'myuniversaltheme'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2><!-- .comments-title -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to //navigate through? ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'myuniversaltheme' ); ?></h2>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments',
							'myuniversaltheme' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments',
							'myuniversaltheme' ) ); ?></div>
				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">
			<?php wp_list_comments( array(
				'callback'    => 'my_universal_theme_comments_feed_template_callback',
				'avatar_size' => 50
			) ); ?>
		</ul><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to //navigate through? ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'myuniversaltheme' ); ?></h2>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments',
							'myuniversaltheme' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments',
							'myuniversaltheme' ) ); ?></div>
				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'myuniversaltheme' ); ?></p>
	<?php
	endif; ?>

	<?php comment_form( $args = array(
		'id_form'           => 'commentform',
		// that's the wordpress default value! delete it or edit it ;)
		'id_submit'         => 'commentsubmit',
		'class_form'        => 'comment-form',
		'class_submit'      => 'fr-end-butt',
		'title_reply'       => __( 'Leave a Reply', 'myuniversaltheme' ),
		// that's the wordpress default value! delete it or edit it ;)
		'title_reply_to'    => __( 'Leave a Reply to %s', 'myuniversaltheme' ),
		// that's the wordpress default value! delete it or edit it ;)
		'cancel_reply_link' => __( 'Cancel Reply', 'myuniversaltheme' ),
		// that's the wordpress default value! delete it or edit it ;)
		'label_submit'      => __( 'Post Comment', 'myuniversaltheme' ),
		// that's the wordpress default value! delete it or edit it ;)

		'comment_field' => '<textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>',

		'comment_notes_after' => '<p class="form-allowed-tags">' .
		                         __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:',
			                         'myuniversaltheme' ) .
		                         '</p><div class="alert alert-info">' . allowed_tags() . '</div>'

		// So, that was the needed stuff to have bootstrap basic styles for the form elements and buttons

		// Basically you can edit everything here!
		// Checkout the docs for more: http://codex.wordpress.org/Function_Reference/comment_form
		// Another note: some classes are added in the bootstrap-wp.js - ckeck from line 1

	) );
	?>
</div><!-- #comments -->
