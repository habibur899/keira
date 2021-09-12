<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Keira
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="discussion-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<div class="post-comments">
			<h3 class="discussion-title">
					<?php
					$keira_comment_count = get_comments_number();
					if ( '1' === $keira_comment_count ) {
						printf(
						/* translators: 1: title. */
							esc_html__( 'One Comment', 'keira' ),
							'<span>' . wp_kses_post( get_the_title() ) . '</span>'
						);
					} else {
						printf(
						/* translators: 1: comment count number, 2: title. */
							esc_html( _nx( '%1$s Comment', '%1$s Comments', $keira_comment_count, 'comments title', 'keira' ) ),
							number_format_i18n( $keira_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							'<span>' . wp_kses_post( get_the_title() ) . '</span>'
						);
					}
					?>
			</h3><!-- .comments-title -->
			<!-- .comment-list -->
			<ul class="discussion-tally ul-m-0">
				<?php
				wp_list_comments(
					array(
						'style'       => 'ul',
						'short_ping'  => true,
						'callback'    => 'custom_comment_callback',
						'avatar_size' => 100,
					)
				);
				?>
			</ul><!-- .comment-list -->

			<?php the_comments_navigation(); ?>
		</div>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'keira' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	// Code for custom comments form

	$commenter = wp_get_current_commenter();
	if ( isset( $args['format'] ) ) {
		;
	}
	$args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
	$req            = get_option( 'require_name_email' );
	$aria_req       = ( $req ? "aria-required = 'true' " : '' );
	$html_req       = ( $req ? "required = 'required' " : '' );
	$html5          = 'html5' === $args['format'];

	$comments_args = array(
		// change the title of send button
		'label_submit'         => __( 'Post Comment', 'keira' ),
		'class_submit'         => 'btn btn-send custom-button-4',
		'id_form'              => '',
		'id_submit'            => '',
		'class_container'      => 'discussion-form-area',
		'class_form'           => 'contact-form',
		// change the title of the reply section
		'title_reply'          => __( 'Leave a Reply', 'keira' ),
		'title_reply_to'       => __( 'Leave a Reply to %s', 'keira' ),
		'title_reply_before'   => '<h3 class="dis-form-title">',
		'title_reply_after'    => '</h3>',
		'cancel_reply_before'  => ' <small>',
		'cancel_reply_after'   => '</small>',
		'cancel_reply_link'    => __( 'Cancel reply', 'keira' ),
		'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
		'submit_field'         => '<div class="col-md-12">%1$s %2$s</div></div>',
		'format'               => 'xhtml',
		// remove "Text or HTML to be displayed after the set of comment fields"
		'comment_form_top'     => 'ds',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		// redefine your own textarea (the comment body)
		'comment_field'        => '<div class="row"><div class="col-md-12"><div class="form-group"><textarea id="comment" class="form-control" name="comment" placeholder="Your Reply *" aria-required="true" rows="4" data-error="Leave a message for me"></textarea><div class="help-block with-errors"></div></div></div>',
		'fields'               => apply_filters( 'comment_form_default_fields', array(

				'author' =>
					'<div class="row"><div class="col-md-6"><div class="form-group">' .
					'<input id="author" name="author" class="form-control" placeholder="Enter your full name *" type="text" data-error="Fullname is required." value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30"' . $aria_req . ' /><div class="help-block with-errors"></div></div></div>',

				'email' =>
					'<div class="col-md-6"><div class="form-group">' .
					'<input id="email" name="email" class="form-control" placeholder="Enter your email *" type="email" data-error="Valid email is required." value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></div></div></div>',

				// Now we will add our new privacy checkbox optin
				'cookies' => '',

			)
		),
	);

	comment_form( $comments_args );

	?>

</div><!-- #comments -->