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
				<?php $settings = get_theme_mod( 'keira_services_repeater' ); ?>

				<?php foreach ( $settings as $setting ): ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-service active lg-mb-30 xs-mb-30 sm-mb-30">
                            <i class="icon icon-wallet"></i>
                            <h4><?php esc_html_e( $setting['keira_services_heading'], 'keira' ); ?></h4>
                            <p><?php esc_html_e( $setting['keira_services_description'], 'keira' ); ?></p>
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
                                <li><a class="img-filter active" data-filter="*"><?php esc_html_e('All','keira');?></a></li>
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

    <!--pricing area starts-->

    <div id="pricing" class="pricing-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2><span>My</span> Pricing</h2>
                        <p class="sec-icon"><i class="fa fa-usd"></i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="single-pricing xs-mb-30">
                        <div class="single-pricing-header">
                            <h3 class="heading">Standard</h3>
                            <span class="price-value">
                                <span class="currency">$</span>29<span class="month">/&nbsp;mo</span> <!--edit here-->
                            </span>
                        </div>
                        <div class="pricing-content"> <!--edit here-->
                            <ul>
                                <li>2GB Disk Space</li>
                                <li>512 MB Memory</li>
                                <li>5 Email Address</li>
                                <li>10 Subdomains</li>
                                <li>15 Domains</li>
                                <li>Enhanced Security</li>
                                <li>Unlimited Support</li>
                            </ul>
                            <a href="#" class="read">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="single-pricing xs-mb-30 active">
                        <div class="single-pricing-header">
                            <h3 class="heading">Business</h3>
                            <span class="price-value">
                                <span class="currency">$</span>49<span class="month">/&nbsp;mo</span> <!--edit here-->
                            </span>
                        </div>
                        <div class="pricing-content"> <!--edit here-->
                            <ul>
                                <li>5GB Disk Space</li>
                                <li>1 GB Memory</li>
                                <li>25 Email Address</li>
                                <li>50 Subdomains</li>
                                <li>75 Domains</li>
                                <li>Enhanced Security</li>
                                <li>Unlimited Support</li>
                            </ul>
                            <a href="#" class="read">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="single-pricing">
                        <div class="single-pricing-header">
                            <h3 class="heading">Premium</h3>
                            <span class="price-value">
                                <span class="currency">$</span>79<span class="month">/&nbsp;mo</span> <!--edit here-->
                            </span>
                        </div>
                        <div class="pricing-content"> <!--edit here-->
                            <ul>
                                <li>10GB Disk Space</li>
                                <li>2 GB Memory</li>
                                <li>50 Email Address</li>
                                <li>70 Subdomains</li>
                                <li>100 Domains</li>
                                <li>Enhanced Security</li>
                                <li>Unlimited Support</li>
                            </ul>
                            <a href="#" class="read">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--pricing area ends-->

    <!--team area starts-->

    <div id="team" class="team-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2><span>My</span> Team</h2>
                        <p class="sec-icon"><i class="fa fa-users"></i></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="team-member lg-mb-30 xs-mb-30 sm-mb-30">
                        <div class="team-image team-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/team/4.jpg"
                                 alt="team image" class="img-responsive"> <!--edit image-->
                            <div class="social-area">
                                <div class="team-text">
                                    <div class="team-text-middle">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-designation">
                            <h2>Robert Myers</h2>
                            <p>WordPress Developer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-member lg-mb-30 xs-mb-30 sm-mb-30">
                        <div class="team-image team-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/team/2.jpg"
                                 alt="team image" class="img-responsive"> <!--edit image-->
                            <div class="social-area">
                                <div class="team-text">
                                    <div class="team-text-middle">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-designation">
                            <h2>Albert Jones</h2>
                            <p>Laravel Developer</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-member lg-mb-30 xs-mb-30 sm-mb-30">
                        <div class="team-image team-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/team/3.jpg"
                                 alt="team image" class="img-responsive"> <!--edit image-->
                            <div class="social-area">
                                <div class="team-text">
                                    <div class="team-text-middle">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-designation">
                            <h2>Andrew Miller</h2>
                            <p>Graphics Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-member xs-mb-30 sm-mb-30">
                        <div class="team-image team-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/team/1.jpg"
                                 alt="team image" class="img-responsive"> <!--edit image-->
                            <div class="social-area">
                                <div class="team-text">
                                    <div class="team-text-middle">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-designation">
                            <h2>Alfred Davis</h2>
                            <p>SEO Exapert</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-member xs-mb-30">
                        <div class="team-image team-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/team/5.jpg"
                                 alt="team image" class="img-responsive"> <!--edit image-->
                            <div class="social-area">
                                <div class="team-text">
                                    <div class="team-text-middle">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-designation">
                            <h2>Arthur Brown</h2>
                            <p>UI / UX Desiger</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-member">
                        <div class="team-image team-overlay">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/team/6.jpg"
                                 alt="team image" class="img-responsive"> <!--edit image-->
                            <div class="social-area">
                                <div class="team-text">
                                    <div class="team-text-middle">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-designation">
                            <h2>Anthony Garcia</h2>
                            <p>Joomla Developer</p>
                        </div>
                    </div>
                </div>
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
                        <h2><span>Our</span> Blog</h2>
                        <p class="sec-icon"><i class="fa fa-weixin"></i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-section">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog xs-mb-30 wow fadeInDown" data-wow-delay="0.2s">
                                <div class="blog-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/blog/blog1.jpg"
                                         alt="blog image"> <!--edit image-->
                                </div>
                                <div class="blog-text">
                                    <h2><a href="single-blog.html">Best CMS For Designers</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>admin</span>
                                        <span><i class="fa fa-comments"></i>5 Comments</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet sed do minim aute dolor velit esse cillum dolore elit
                                        Nobis quas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog xs-mb-30 wow fadeInDown" data-wow-delay="0.4s">
                                <div class="blog-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/blog/blog2.jpg"
                                         alt="blog image"> <!--edit image-->
                                </div>
                                <div class="blog-text">
                                    <h2><a href="single-blog.html">Importance of UI / UX</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>admin</span>
                                        <span><i class="fa fa-comments"></i>5 Comments</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet sed do minim aute dolor velit esse cillum dolore elit
                                        Nobis quas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 hidden-sm">
                            <div class="single-blog wow fadeInDown" data-wow-delay="0.6s">
                                <div class="blog-img">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/blog/blog3.jpg"
                                         alt="blog image"> <!--edit image-->
                                </div>
                                <div class="blog-text">
                                    <h2><a href="single-blog.html">Recent Website Trends</a></h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>admin</span>
                                        <span><i class="fa fa-comments"></i>5 Comments</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet sed do minim aute dolor velit esse cillum dolore elit
                                        Nobis quas</p>
                                </div>
                            </div>
                        </div>
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
                        <h2><span>Clients</span> Says</h2>
                        <p class="sec-icon"><i class="fa fa-comment"></i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel" id="testimonial-carousel">

                        <div class="item ">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type </p>
                            <h5><strong>Richard Jhonson</strong></h5> <!--change reviewer name-->
                            <h6>Designation, Company</h6>
                        </div>

                        <div class="item ">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type </p>
                            <h5><strong>Richa Chadda</strong></h5> <!--change reviewer name-->
                            <h6>Designation, Company</h6>
                        </div>

                        <div class="item ">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type </p>
                            <h5><strong>John Brenson</strong></h5> <!--change reviewer name-->
                            <h6>Designation, Company</h6>
                        </div>
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

                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/clients/1.png"
                                 alt="client image"> <!--edit image-->
                        </div>

                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/clients/2.png"
                                 alt="client image"> <!--edit image-->
                        </div>

                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/clients/3.png"
                                 alt="client image"> <!--edit image-->
                        </div>

                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/clients/4.png"
                                 alt="client image"> <!--edit image-->
                        </div>

                        <div class="item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/clients/5.png"
                                 alt="client image"> <!--edit image-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--client area Ends-->
<?php get_footer() ?>