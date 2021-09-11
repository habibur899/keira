<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <!--meta tags-->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!--preloader starts-->

<div class="loader_bg">
    <div class="loader"></div>
</div>

<!--preloader ends-->

<!--navigation area starts-->

<header class="nav-area navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="main-menu">
                    <div class="navbar navbar-cus">
                        <div class="navbar-header">
                            <a href="index-2.html" class="navbar-brand"><span>K</span>eira</a>
                            <!--change the logo here or brand name here-->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a class="smooth-menu" href="#home">Home</a></li>
                                    <li><a class="smooth-menu" href="#about">About</a></li>
                                    <li><a class="smooth-menu" href="#services">Services</a></li>
                                    <li><a class="smooth-menu" href="#portfolio">Portfolio</a></li>
                                    <li><a class="smooth-menu" href="#pricing">Pricing</a></li>
                                    <li><a class="smooth-menu" href="#blog">Blog</a></li>
                                    <li><a class="smooth-menu" href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--navigation area ends-->

<!--blog img area starts-->

<div class="blog-img-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Single Blog Page</h2>
                <div class="breadcrumb">
                    <a href="index-2.html">Home</a> / <a href="index.php">Single Blog</a>
                    <!--change the home redirection according to whichever demo you want to use. for instant if you use particle version then use index-particles.html-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--blog img area ends-->

<!--single blog starts-->

<div class="single-blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-left">
                    <div class="single-post-blog">
                        <img src="images/blog/single-blog.jpg" alt="blog image" class="img-responsive">
                        <div class="single-post-text">
                            <h2>Our Upcoming Projects</h2>
                            <div class="compliment-area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="meta">
                                            <span><i class="fa fa-user"></i>admin</span>
                                            <span><i class="fa fa-comments"></i>5 Comments</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores atque, autem
                                    dignissimos, dolore dolorem, dolorum et eveniet facilis ipsa magnam magni odio
                                    perferendis quae quaerat quibusdam quis saepe unde veritatis. Consequuntur culpa
                                    dicta fugiat harum impedit maxime molestias natus nobis omnis voluptatem.</p>
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias
                                    assumenda beatae, doloremque eaque earum eligendi enim error, eveniet illum iste
                                    minima nemo nulla, odit optio perferendis quas quo quod reiciendis rem repellendus
                                    reprehenderit rerum sit velit vero voluptates voluptatum! Aliquam eaque earum minima
                                    non possimus repellendus soluta suscipit veritatis?
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi at commodi
                                    dignissimos distinctio dolores ducimus ea, earum eius, et excepturi, facere harum
                                    impedit iusto minima molestias nam quam quod repellat repudiandae sed sequi suscipit
                                    ut veritatis vero. Atque, explicabo?</p>
                            </div>
                        </div>

                        <div class="discussion-area"> <!-- comments area -->
                            <h3 class="discussion-title">1 Comments</h3>
                            <ul class="discussion-tally">
                                <li class="discussion-items">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-2 col-md-2">
                                            <img src="images/blog/comment1.jpg" alt="commentor image">
                                        </div>
                                        <div class="col-xs-8 col-sm-10 col-md-10 diss-no-padding">
                                            <div class="discussion-metadata">
                                                <h5>Robert Myers</h5>
                                                <p>28 July 2021 At 10:57 AM</p>
                                            </div>
                                            <div class="discussion-contents">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters</p>
                                            </div>
                                            <a href="#" class="dis-button"><i class="fa fa-reply"></i> &nbsp;Reply</a>
                                        </div>
                                    </div>
                                    <div class="row discussion-reply">
                                        <div class="col-xs-4 col-sm-2 col-md-2">
                                            <img src="images/blog/comment2.jpg" alt="commentor image">
                                        </div>
                                        <div class="col-xs-8 col-sm-10 col-md-10 diss-no-padding">
                                            <div class="discussion-metadata">
                                                <h5>Albert Jones</h5>
                                                <p>1st June 2021 At 11:07 AM</p>
                                            </div>
                                            <div class="discussion-contents">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters</p>
                                            </div>
                                            <a href="#" class="dis-button"><i class="fa fa-reply"></i> &nbsp;Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="discussion-items">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-2 col-md-2">
                                            <img src="images/blog/comment3.jpg" alt="commentor image">
                                        </div>
                                        <div class="col-xs-8 col-sm-10 col-md-10 diss-no-padding">
                                            <div class="discussion-metadata">
                                                <h5>Andrew Miller</h5>
                                                <p>11 June 2021 At 00:15 AM</p>
                                            </div>
                                            <div class="discussion-contents">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters</p>
                                            </div>
                                            <a href="#" class="dis-button"><i class="fa fa-reply"></i> &nbsp;Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="discussion-items">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-2 col-md-2">
                                            <img src="images/blog/comment4.jpg" alt="commentor image">
                                        </div>
                                        <div class="col-xs-8 col-sm-10 col-md-10 diss-no-padding">
                                            <div class="discussion-metadata">
                                                <h5>Alfred Davis</h5>
                                                <p>18 June 2021 At 00:49 AM</p>
                                            </div>
                                            <div class="discussion-contents">
                                                <p>It is a long established fact that a reader will be distracted by the
                                                    readable content of a page when looking at its layout. The point of
                                                    using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters</p>
                                            </div>
                                            <a href="#" class="dis-button"><i class="fa fa-reply"></i> &nbsp;Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="discussion-form-area"> <!-- comments form area -->
                                <h3 class="dis-form-title">Leave a Reply</h3>

                                <form id="contact-form" method="post"
                                      action="https://mourithemes.com/keira/contact.php">

                                    <div class="messages"></div> <!--you can change the message in contact.php file -->

                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                           placeholder="Enter your full name *" required="required"
                                                           data-error="Fullname is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input id="form_email" type="email" name="email"
                                                           class="form-control" placeholder="Enter your email *"
                                                           required="required" data-error="Valid email is required.">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea id="form_message" name="message" class="form-control"
                                                              placeholder="Your Reply *" rows="4" required="required"
                                                              data-error="Leave a message for me"></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="btn btn-send custom-button-4">post comment</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
            <div class="col-md-4">
                <div class="widget search"> <!-- widget single -->
                    <form class="search-area">
                        <input type="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="widget recent-post"> <!-- widget single -->
                    <h3 class="widget-title">Latest Blog Posts</h3>
                    <hr>
                    <ul class="widget-current-post">
                        <li>
                            <div class="recent-blog-text">
                                <a href="#">
                                    Latest trend In Web Design
                                    <p> 1st July, 2021</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="recent-blog-text">
                                <a href="#">
                                    Typography In Detail
                                    <p> 1st July, 2021</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="recent-blog-text">
                                <a href="#">
                                    CSS3 Animation Tutorial
                                    <p> 1st July, 2021</p>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="recent-blog-text">
                                <a href="#">
                                    Divinector - Youtube Channel
                                    <p> 1st July, 2021</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="widget category"> <!-- widget single -->
                    <h3 class="widget-title">Categories</h3>
                    <hr>
                    <ul>
                        <li><a href="#">Laravel <span>(5)</span></a></li>
                        <li><a href="#">Trending <span>(17)</span></a></li>
                        <li><a href="#">WebDesign<span>(25)</span></a></li>
                        <li><a href="#">WebTips <span>(24)</span></a></li>
                        <li><a href="#">Typography <span>(8)</span></a></li>
                    </ul>
                </div>

                <div class="widget category"> <!-- widget single -->
                    <h3 class="widget-title">Archive</h3>
                    <hr>
                    <ul>
                        <li><a href="#">January 2021<span>(3)</span></a></li>
                        <li><a href="#">December 2020<span>(11)</span></a></li>
                        <li><a href="#">November 2020<span>(7)</span></a></li>
                        <li><a href="#">October 2020<span>(6)</span></a></li>
                    </ul>
                </div>

                <div class="widget tags sm-mb-0 xs-mb-0"> <!-- widget single -->
                    <h3 class="widget-title">Tags</h3>
                    <hr>
                    <ul>
                        <li><a href="#">WedDesign</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Trending</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Laravel</a></li>
                        <li><a href="#">Typography</a></li>
                        <li><a href="#">WordPress</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!--single blog ends-->


<!--footer starts-->

<footer>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-footer-top xs-mb-30 sm-mb-30">
                        <h4>About <b><span>K</span>eira</b></h4> <!--edit logo-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard</p>
                        <ul class="social-list">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-footer-top xs-mb-30 sm-mb-30">
                        <h4>Useful Links</h4>
                        <ul class="foot-navs">
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Career</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-footer-top latest-news xs-mb-30">
                        <h4>Latest News</h4>
                        <ul>
                            <li>
                                <h6><a href="#">WordPress Development</a></h6>
                                <span>19 June 2021</span>
                            </li>
                            <li>
                                <h6><a href="#">CSS3 Animation Snippets</a></h6>
                                <span>12 July 2021</span>
                            </li>
                            <li>
                                <h6><a href="#">CSS Gradient Effect</a></h6>
                                <span>29 Aug 2021</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-footer-top photo-galleries">
                        <h4>Photo gallery</h4>

                        <div class="row">
                            <div class="col-md-4 col-xs-4 foo-no-padding">
                                <a class="zoom1" href="images/portfolio/port-1.jpg"><img
                                            src="images/portfolio/port-1.jpg" alt="photo image"></a>
                            </div>
                            <div class="col-md-4 col-xs-4 foo-no-padding">
                                <a class="zoom1" href="images/portfolio/port-2.jpg"><img
                                            src="images/portfolio/port-2.jpg" alt="photo image"></a>
                            </div>
                            <div class="col-md-4 col-xs-4 foo-no-padding">
                                <a class="zoom1" href="images/portfolio/port-3.jpg"><img
                                            src="images/portfolio/port-3.jpg" alt="photo image"></a>
                            </div>
                            <div class="col-md-4 col-xs-4 foo-no-padding">
                                <a class="zoom1" href="images/portfolio/port-4.jpg"><img
                                            src="images/portfolio/port-4.jpg" alt="photo image"></a>
                            </div>
                            <div class="col-md-4 col-xs-4 foo-no-padding">
                                <a class="zoom1" href="images/portfolio/port-5.jpg"><img
                                            src="images/portfolio/port-5.jpg" alt="photo image"></a>
                            </div>
                            <div class="col-md-4 col-xs-4 foo-no-padding">
                                <a class="zoom1" href="images/portfolio/port-6.jpg"><img
                                            src="images/portfolio/port-6.jpg" alt="photo image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2021 Keira. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!--footer ends-->
<?php wp_footer(); ?>
</body>

</html>