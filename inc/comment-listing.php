<?php

// Custom Comment Listing -------------------------

function custom_comment_callback( $comment, $args, $depth ) {
	if ( 'div' === $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li ';
		$add_below = 'div-comment';
	} ?>
    <<?php echo $tag; ?><?php comment_class( empty( $args['has_children'] ) ? '' : 'parent discussion-items' ); ?> id="comment-<?php comment_ID() ?>"><?php
	if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="row mb-30"><?php
	} ?>
    <div class="col-xs-4 col-sm-2 col-md-2"><?php
		if ( $args['avatar_size'] != 0 ) {
			echo get_avatar( $comment, $args['avatar_size'], null, 'avatar', array(
				'class' => array(
					'img-responsive',
					'rounded-circle'
				)
			) );

		} ?>

    </div>
	<?php
	if ( $comment->comment_approved == '0' ) { ?>
        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'keira' ); ?></em>
        <br/><?php
	} ?>
    <div class="col-xs-8 col-sm-10 col-md-10 diss-no-padding">
        <div class="discussion-metadata">
            <h5><?php printf( get_comment_author() ); ?></h5>
            <p>
				<?php printf(__('%1$s At %2$s', 'keira'), get_comment_date('jS F Y'),  get_comment_time('h:i A')) ?>
            </p>
			<?php
			edit_comment_link( __( '(Edit)', 'keira' ), '  ', '' ); ?>
        </div>
        <div class="discussion-contents"><?php comment_text(); ?></div>
	    <?php
	    comment_reply_link(
		    array_merge(
			    $args,
			    array(
				    'reply_text' => __('<i class="fa fa-reply" aria-hidden="true"></i> Replay', 'keira'),
				    'add_below' => $add_below,
				    'depth'     => $depth,
				    'max_depth' => $args['max_depth']
			    )
		    )
	    );
	    ?>
    </div>

	<?php
	if ( 'div' != $args['style'] ) : ?>
        </div><?php
	endif;

}

// Comment box filtered to the bottom-----------------------------------

function keira_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

add_filter( 'comment_form_fields', 'keira_move_comment_field_to_bottom' );