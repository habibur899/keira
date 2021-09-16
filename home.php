<?php get_header() ?>

    <!--banner area starts-->

    <div id="home"></div>
    <div class="banner-area" id="slider-area">
        <div id="particles-js"></div>
        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><?php esc_html_e( get_theme_mod( 'keira_banner_name' ), 'keira' ); ?></h3>
                                <h2><?php esc_html_e( get_theme_mod( 'keira_banner_position' ), 'keira' ); ?></h2>
                                <p class="welcome-des"><?php esc_html_e( get_theme_mod( 'keira_banner_description' ), 'keira' ); ?></p>
                                <p class="banner-btn">
                                    <a class="active smooth-menu"
                                       href="#portfolio"><?php esc_html_e( get_theme_mod( 'keira_banner_left_button_text' ), 'keira' ); ?></a>
                                    <a class="smooth-menu" href="#contact">Contact Me</a>
                                </p>
                                <div class="clearfix"></div>
                                <div class="mouse-icon hidden-sm hidden-xs">
                                    <div class="wheel"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--banner area ends-->

    <!--about area starts-->

    <div id="about" class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>
                            <span><?php esc_html_e( get_theme_mod( 'keira_about_me_heading_color' ), 'keira' ); ?></span> <?php esc_html_e( get_theme_mod( 'keira_about_me_heading_white' ), 'keira' ); ?>
                        </h2>
                        <p class="sec-icon"><i class="fa fa-user"></i></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="about-video">
                        <div class="single-video">
                            <img src="<?php echo esc_url( get_theme_mod( 'keira_about_me_image' ), 'keira' ) ?>"
                                 alt="about image"> <!--change image-->
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="about-main">
                        <h3><?php esc_html_e( get_theme_mod( 'keira_about_me_top' ), 'keira' ); ?></h3>
                        <h2><?php esc_html_e( get_theme_mod( 'keira_about_me_position' ), 'keira' ); ?></h2>
                        <div class="single-about">
                            <p><?php esc_html_e( get_theme_mod( 'keira_about_me_description' ), 'keira' ); ?></p>
                        </div>
                        <a target="_blank"
                           href="<?php echo esc_url( get_theme_mod( 'keira_about_me_button_link' ) ) ?>"><?php esc_html_e( get_theme_mod( 'keira_about_me_button_text' ), 'keira' ); ?></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--about area ends-->

    <!--services area starts-->

    <div id="services" class="services-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>
                            <span><?php esc_html_e( get_theme_mod( 'keira_services_heading_color' ), 'keira' ); ?></span> <?php esc_html_e( get_theme_mod( 'keira_services_heading_white' ), 'keira' ); ?>
                        </h2>
                        <p class="sec-icon"><i class="fa fa-cog"></i></p>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php $services = get_theme_mod( 'keira_services_repeater' ); ?>

				<?php foreach ( $services as $service ): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service active lg-mb-30 xs-mb-30 sm-mb-30">
                            <i class="icon icon-wallet"></i>
                            <h4><?php esc_html_e( $service['keira_services_heading'], 'keira' ); ?></h4>
                            <p><?php esc_html_e( $service['keira_services_description'], 'keira' ); ?></p>
                            <i class="icon icon-wallet animated-icon"></i>
                        </div>
                    </div>
				<?php endforeach; ?>

            </div>
        </div>
    </div>

    <!--services area ends-->

    <!--statistic area starts-->

    <div class="statistic-area">
        <div class="sts-overlay section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-count count-one xs-mb-30 sm-mb-30">
                            <i class="icon icon-clock"></i>
                            <h2 class="count"><?php esc_html_e( get_theme_mod( 'keira_statistic_hour_number' ), 'keira' ); ?></h2>
                            <!--edit here-->
                            <p><?php esc_html_e( get_theme_mod( 'keira_statistic_hour_title' ), 'keira' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-count count-two xs-mb-30 sm-mb-30">
                            <i class="icon icon-map-pin"></i>
                            <h2 class="count"><?php esc_html_e( get_theme_mod( 'keira_statistic_location_number' ), 'keira' ); ?></h2>
                            <!--edit here-->
                            <p><?php esc_html_e( get_theme_mod( 'keira_statistic_location_title' ), 'keira' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-count count-three xs-mb-30">
                            <i class="icon icon-happy"></i>
                            <h2 class="count"><?php esc_html_e( get_theme_mod( 'keira_statistic_customer_number' ), 'keira' ); ?></h2>
                            <!--edit here-->
                            <p><?php esc_html_e( get_theme_mod( 'keira_statistic_customer_title' ), 'keira' ); ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="single-count count-four">
                            <i class="icon icon-trophy"></i>
                            <h2 class="count"><?php esc_html_e( get_theme_mod( 'keira_statistic_awards_number' ), 'keira' ); ?></h2>
                            <!--edit here-->
                            <p><?php esc_html_e( get_theme_mod( 'keira_statistic_awards_title' ), 'keira' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--statistic area ends-->

    <!--portfolio area starts-->

    <div id="portfolio" class="portfolio-area section-padding">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>
                            <span><?php esc_html_e( get_theme_mod( 'keira_portfolio_heading_color' ), 'keira' ); ?></span> <?php esc_html_e( get_theme_mod( 'keira_portfolio_heading_white' ), 'keira' ); ?>
                        </h2>
                        <p class="sec-icon"><i class="fa fa-image"></i></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-content">
            <div class="port-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="port-nav-list">
                                <li><a class="img-filter active"
                                       data-filter="*"><?php esc_html_e( 'All', 'keira' ); ?></a></li>
								<?php $terms = get_terms( 'portfolio_category' );
								foreach ( $terms as $term ) :?>
                                    <li><a class="img-filter"
                                           data-filter=".<?php echo esc_attr( $term->slug ); ?>"><?php esc_html_e( $term->name, 'keira' ); ?></a>
                                    </li>
								<?php
								endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row port-items" id="img-filter">
					<?php $portfolio = new WP_Query( array(
						'post_type'       => 'portfolio',
						'posts_per_page ' => 6,
						'order'           => 'ASC'
					) ) ?>
					<?php if ( have_posts() ):while ( $portfolio->have_posts() ):$portfolio->the_post(); ?>
						<?php
						?>

                        <div class="col-md-4 col-sm-6 col-xs-12 single-port<?php $terms = get_the_terms( get_the_ID(), 'portfolio_category' );
						foreach ( $terms as $term ) {
							echo esc_attr( " " . $term->slug . " " );
						} ?>">

                            <div class="project-item">
                                <a href="<?php echo esc_url( get_the_post_thumbnail_url() ) ?>" class="zoom1">
                                    <!--edit image-->
									<?php the_post_thumbnail(); ?>
                                    <div class="overlay">
                                        <div class="overlay-inner">
                                            <h4><?php the_title() ?></h4>
											<?php the_content(); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
					<?php endwhile;endif;
					wp_reset_query(); ?>

                </div>
            </div>

        </div>
    </div>

    <!--portfolio area ends-->

    <!--team area starts-->

    <div id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>
                            <span><?php esc_html_e( get_theme_mod( 'keira_team_heading_color' ), 'keira' ); ?></span> <?php esc_html_e( get_theme_mod( 'keira_team_heading_white' ), 'keira' ); ?>
                        </h2>
                        <p class="sec-icon"><i class="fa fa-users"></i></p>
                    </div>
                </div>
            </div>

            <div class="row">

				<?php $teams = get_theme_mod( 'keira_team_repeater' ); ?>

				<?php foreach ( $teams as $team ) : ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="team-member lg-mb-30 xs-mb-30 sm-mb-30">
                            <div class="team-image team-overlay">
                                <img src="<?php echo esc_url( wp_get_attachment_image_src( $team['keira_team_image'] )[0], 'keira' ) ?>"
                                     alt="team image" class="img-responsive"> <!--edit image-->
                                <div class="social-area">
                                    <div class="team-text">
                                        <div class="team-text-middle">
                                            <ul class="list-inline">
                                                <li><a target="_blank"
                                                       href="<?php echo esc_url( $team['keira_team_fb_url'] ) ?>"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank"
                                                       href="<?php echo esc_url( $team['keira_team_tw_url'] ) ?>"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank"
                                                       href="<?php echo esc_url( $team['keira_team_ldin_url'] ) ?>"><i
                                                                class="fa fa-linkedin"></i></a></li>
                                                <li><a target="_blank"
                                                       href="<?php echo esc_url( $team['keira_team_pin_url'] ) ?>"><i
                                                                class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-designation">
                                <h2><?php esc_html_e( $team['keira_team_name'], 'keira' ) ?></h2>
                                <p><?php esc_html_e( $team['keira_team_position'], 'keira' ) ?></p>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </div>

    <!--team area ends-->

    <!--blog area starts-->

    <div id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>
                            <span><?php esc_html_e( get_theme_mod( 'keira_blog_heading_color' ), 'keira' ); ?></span> <?php esc_html_e( get_theme_mod( 'keira_blog_heading_white' ), 'keira' ); ?>
                        </h2>
                        <p class="sec-icon"><i class="fa fa-weixin"></i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-section">
						<?php $front_page_post = new WP_Query( array(
							'post_type'      => 'post',
							'posts_per_page' => 3
						) ) ?>
						<?php if ( have_posts() ):while ( $front_page_post->have_posts() ):$front_page_post->the_post(); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-blog xs-mb-30 wow fadeInDown" data-wow-delay="0.2s">
                                    <div class="blog-img">
										<?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="blog-text">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                                        <div class="meta">
                                            <span><i class="fa fa-user"></i><?php the_author() ?></span>
                                            <span><i class="fa fa-comments"></i><?php comments_popup_link( __( 'Leave a comment', 'keira' ), __( '1 Comment', 'keira' ), __( '% Comments', 'keira' ) ); ?></span>
                                        </div>
										<?php esc_html_e( wp_trim_words( get_the_content(), 17, ' ' ), 'keira' ) ?>
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

    <!--testimonial Area Starts-->

    <div id="testimonial" class="testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>
                            <span><?php esc_html_e( get_theme_mod( 'keira_testimonial_heading_color' ), 'keira' ); ?></span> <?php esc_html_e( get_theme_mod( 'keira_testimonial_heading_white' ), 'keira' ); ?>
                        </h2>
                        <p class="sec-icon"><i class="fa fa-comment"></i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel" id="testimonial-carousel">

						<?php $testimonials = get_theme_mod( 'keira_testimonial_repeater' );
						foreach ( $testimonials as $testimonial ) : ?>
                            <div class="item ">
                                <p><?php esc_html_e( $testimonial['keira_testimonial_says'], 'keira' ) ?></p>
                                <h5>
                                    <strong><?php esc_html_e( $testimonial['keira_testimonial_name'], 'keira' ) ?></strong>
                                </h5> <!--change reviewer name-->
                                <h6><?php esc_html_e( $testimonial['keira_testimonial_position'], 'keira' ) ?></h6>
                            </div>
						<?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--testimonial Area Ends-->

    <!--contact area starts-->

    <div id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="top-ddd">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h2><span>Contact</span> Me</h2>
                            <p class="sec-icon"><i class="fa fa-envelope-o"></i></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box-contact-form">

                        <form id="contact-form" method="post" action="https://mourithemes.com/keira/contact.php">

                            <div class="messages"></div> <!--you can change the message in contact.php file -->

                            <div class="controls">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                   placeholder="Name *" required="required"
                                                   data-error="Fullname is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                   placeholder="Email *" required="required"
                                                   data-error="Valid email is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" class="form-control"
                                                   placeholder="Subject *" required="required"
                                                   data-error="Subject is required.">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" class="form-control"
                                                      placeholder="Message *" rows="4" required="required"
                                                      data-error="Leave a message for me"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-send" value="">Send message</button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="col-sm-6 col-xs-12 col-md-6">
                        <div class="con-right-side">
                            <h4 class="con-right-header">Frequently Asked Questions</h4>
                            <div class="middle-space"></div>
                            <!-- con-right-accordion Starts -->
                            <div class="panel-group" id="con-right-accordion">
                                <!-- con-right-accordion #1 Starts -->
                                <div class="panel">
                                    <!-- Panel Heading Starts -->
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#con-right-accordion"
                                               href="#collapse1">What is order Policy?</a>
                                        </h5>
                                    </div>
                                    <!-- Panel Heading Ends -->
                                    <!-- Panel Body Starts -->
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi
                                                eius est expedita illum praesentium quaerat quia, reprehenderit sequi
                                                temporibus ut voluptate voluptatum. Enim, officia.</p>
                                        </div>
                                    </div>
                                    <!-- Panel Body Ends -->
                                </div>
                                <!-- con-right-accordion #1 Ends -->
                                <!-- con-right-accordion #2 Starts -->
                                <div class="panel">
                                    <!-- Panel Heading Starts -->
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#con-right-accordion"
                                               href="#collapse2">When You receive Order?</a>
                                        </h5>
                                    </div>
                                    <!-- Panel Heading Ends -->
                                    <!-- Panel Body Starts -->
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi
                                                eius est expedita illum praesentium quaerat quia, reprehenderit sequi
                                                temporibus ut voluptate voluptatum. Enim, officia.</p>
                                        </div>
                                    </div>
                                    <!-- Panel Body Ends -->
                                </div>
                                <!-- con-right-accordion #2 Ends -->
                                <!-- con-right-accordion #3 Starts -->
                                <div class="panel">
                                    <!-- Panel Heading Starts -->
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#con-right-accordion"
                                               href="#collapse3">How Does it Work?</a>
                                        </h5>
                                    </div>
                                    <!-- Panel Heading Ends -->
                                    <!-- Panel Body Starts -->
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi
                                                eius est expedita illum praesentium quaerat quia, reprehenderit sequi
                                                temporibus ut voluptate voluptatum. Enim, officia.</p>
                                        </div>
                                    </div>
                                    <!-- Panel Body Ends -->
                                </div>
                                <!-- con-right-accordion #3 Ends -->
                                <!-- con-right-accordion #4 Starts -->
                                <div class="panel">
                                    <!-- Panel Heading Starts -->
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#con-right-accordion"
                                               href="#collapse4">How to Refund Order?</a>
                                        </h5>
                                    </div>
                                    <!-- Panel Heading Ends -->
                                    <!-- Panel Body Starts -->
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi
                                                eius est expedita illum praesentium quaerat quia, reprehenderit sequi
                                                temporibus ut voluptate voluptatum. Enim, officia.</p>
                                        </div>
                                    </div>
                                    <!-- Panel Body Ends -->
                                </div>
                                <!-- con-right-accordion #4 Ends -->
                            </div>
                            <!-- con-right-accordion Ends -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--contact area ends-->

    <!--client area starts-->

    <div class="client-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel" id="client-carousel">

						<?php $clients = get_theme_mod( 'keira_client_repeater' ); ?>
						<?php foreach ( $clients as $client ) : ?>
                            <div class="item">
                                <img src="<?php echo esc_url( wp_get_attachment_image_src( $client['keira_client_logo'] )[0], 'keira' ) ?>"
                                     alt="client image"> <!--edit image-->
                            </div>

						<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--client area Ends-->
<?php get_footer() ?>