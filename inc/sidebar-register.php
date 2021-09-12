<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function keira_widgets_init() {
	// Blog sidebar
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'keira' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add blog widgets here.', 'keira' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	//Footer one
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'keira' ),
			'id'            => 'footer-one',
			'description'   => esc_html__( 'Add footer one widgets here.', 'keira' ),
			'before_widget' => '<div id="%1$s" class="single-footer-top xs-mb-30 sm-mb-30 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	//Footer two
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'keira' ),
			'id'            => 'footer-two',
			'description'   => esc_html__( 'Add footer two widgets here.', 'keira' ),
			'before_widget' => '<div id="%1$s" class="single-footer-top xs-mb-30 sm-mb-30 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	//Footer three
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'keira' ),
			'id'            => 'footer-three',
			'description'   => esc_html__( 'Add footer three widgets here.', 'keira' ),
			'before_widget' => '<div id="%1$s" class="single-footer-top latest-news xs-mb-30 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	//Footer four
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Four', 'keira' ),
			'id'            => 'footer-four',
			'description'   => esc_html__( 'Add footer four widgets here.', 'keira' ),
			'before_widget' => '<div id="%1$s" class="single-footer-top photo-galleries %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	//Footer copyright
	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright', 'keira' ),
			'id'            => 'footer-copyright',
			'description'   => esc_html__( 'Add footer copyright widgets here.', 'keira' ),
			'before_widget' => '<div id="%1$s" class="col-md-12 text-center %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'keira_widgets_init' );