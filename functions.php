<?php
/**
 * mindspace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mindspace
 */

if ( ! function_exists( 'mindspace_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mindspace_setup() {

	/*
	 * Add Redux Framework
	 */
	require get_template_directory() . '/admin/admin-init.php';

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mindspace, use a find and replace
		 * to change 'mindspace' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mindspace', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mindspace' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mindspace_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mindspace_setup' );



/*
*   Restrict non logged users to certain pages
*/

/* add_action('template_redirect','my_non_logged_redirect');
function my_non_logged_redirect()
{
     if ((is_page('parents') || is_page('agregar-empresa')) && !is_user_logged_in() )
    {

    		echo "<script>";
		echo " alert('Please login to view the page.');      
		window.location.href='".site_url('home')."';
		</script>";
    }
} */




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mindspace_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mindspace_content_width', 640 );
}
add_action( 'after_setup_theme', 'mindspace_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mindspace_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mindspace' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mindspace' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mindspace_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function mindspace_scripts() 
{
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.1.3' );
	wp_enqueue_style( 'padd-mar', get_template_directory_uri().'/css/padd-mar.css', array(), '1.0' );
	wp_enqueue_style( 'swiper', get_template_directory_uri().'/css/swiper.min.css', array(), '3.3.1' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css', array(), '3.5.1' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/css/magnific-popup.css', array(), '1.1.0' );
	wp_enqueue_style( 'shriram-prop-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array(), '2.2.4' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '4.1.3', true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '3.2.7', true );
	wp_enqueue_script( 'countUp', get_template_directory_uri() . '/js/countUp.min.js', array(), '1.9.3', true );
	wp_enqueue_script( 'validator', get_template_directory_uri() . '/js/validator.min.js', array(), '3.2.7', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '1.1.3', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '3.0.4', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), '1.0.4', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.1.0', true );
	//wp_enqueue_script( 'google-map', 'https://maps.google.com/maps/api/js?key=AIzaSyAAoTk2K_aCZrYfLr2dUK8SVy0YFBqh5Fs', array(), '3.0', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );
	wp_enqueue_script( 'pubnub', get_template_directory_uri() . '/js/pubnub.min.js', array(), true );
	$urlarrays = array('site_url' => get_site_url(), 'template_url' => get_template_directory_uri());
	wp_localize_script( 'custom', 'siteurls', $urlarrays );
}
add_action( 'wp_enqueue_scripts', 'mindspace_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
