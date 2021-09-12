<?php get_header() ?>
<?php get_template_part( 'template-parts/breadcrumbs' ) ?>

    <!--single blog starts-->

    <div class="single-blog-area section-padding">
        <div class="container">
            <div class="row">
                <!--blog area starts-->

                <div id="blog" class="blog-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-section">

									<?php if ( have_posts() ):while ( have_posts() ):the_post(); ?>

                                        <div <?php post_class( array(
											'mb-15',
											'col-md-4',
											'col-sm-6',
											'col-xs-12',
											'mb-30'
										) ); ?>>
                                            <div class="single-blog xs-mb-30 wow fadeInDown" data-wow-delay="0.2s">
                                                <div class="blog-img">
													<?php if ( has_post_thumbnail() ) {
														the_post_thumbnail();
													} ?>
                                                </div>
                                                <div class="blog-text">
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                                    </h2>
                                                    <div class="meta">
                                                        <span><i class="fa fa-user"></i><?php the_author() ?></span>
                                                        <span><i class="fa fa-comments"></i><?php comments_popup_link( __( 'Leave a comment', 'keira' ), __( '1 Comment', 'keira' ), __( '% Comments', 'keira' ) ); ?></span>
                                                    </div>
													<?php esc_html_e( wp_trim_words( get_the_content(), 17, '' ) ) ?>
                                                    <div class="read-more">
                                                        <a href="<?php the_permalink(); ?>"><?php _e( 'Read More', 'keira' ); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

									<?php endwhile;endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--blog area ends-->
            </div>
        </div>
    </div>

    <!--single blog ends-->


<?php get_footer() ?>