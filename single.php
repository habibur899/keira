<?php get_header() ?>
<?php get_template_part( 'template-parts/breadcrumbs' ) ?>
<?php if ( is_active_sidebar( 'blog-sidebar' ) ) {
	$clumn = "8";
} else {
	$clumn = "12";
}
?>
    <!--single blog starts-->
<?php while ( have_posts() ) :
	the_post(); ?>
    <div class="single-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-<?php echo esc_attr($clumn)?>">
                    <div class="blog-left">
                        <div class="single-post-blog">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
							} ?>
                            <div class="single-post-text">
                                <h2><?php the_title() ?></h2>
                                <div class="compliment-area">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="meta">
                                                <span><i class="fa fa-user"></i><?php the_author() ?></span>
                                                <span><i class="fa fa-comments"></i><?php comments_popup_link( __( 'Leave a comment', 'keira' ), __( '1 Comment', 'keira' ), __( '% Comments', 'keira' ) ); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-post-content">
									<?php the_content(); ?>
                                </div>
                            </div>


                            <div class="discussion-form-area"> <!-- comments form area -->
								<?php
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
								?>
                            </div>


                        </div>


                    </div>
                </div>
                <div class="col-md-4">
					<?php get_sidebar() ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
    <!--single blog ends-->


<?php get_footer() ?>