<?php
/**
 * keira functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package keira
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'keira_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function keira_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on keira, use a find and replace
		 * to change 'keira' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'keira', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary Menu', 'keira' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'keira_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'keira_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function keira_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'keira_content_width', 640 );
}

add_action( 'after_setup_theme', 'keira_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function keira_scripts() {
	wp_enqueue_style( 'popins-font', '//fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'line-icons-css', get_template_directory_uri() . '/assets/css/line-icons.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'owl-theme-default-css', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'main-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), time(), 'all' );
	wp_enqueue_style( 'responsive-style-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'keira-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'keira-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'particles-js', get_template_directory_uri() . '/assets/js/particles.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'validator-js', get_template_directory_uri() . '/assets/js/validator.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'contact-js', get_template_directory_uri() . '/assets/js/contact.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'keira-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'keira_scripts' );


/**
 * File require here
 */
// Comment Listing
require_once 'inc/comment-listing.php';

// Register Sidebar
require_once 'inc/sidebar-register.php';

// Bootstrap nav walker
require_once 'inc/class-wp-bootstrap-navwalker.php';