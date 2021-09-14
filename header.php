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
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

							if ( has_custom_logo() ) {
								echo '<img class="navbar-brand" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
							} else {
								echo '<a href="' . esc_url( site_url() ) . '"><span class="navbar-brand">' . get_bloginfo( 'name' ) . '</span></a>';
							}
							?>
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
								<?php wp_nav_menu( array(
									'theme_location' => 'primary-menu',
									'menu_class'     => 'menu nav navbar-nav navbar-right',
									'walker'         => new WP_Bootstrap_Navwalker()
								) ) ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--navigation area ends-->