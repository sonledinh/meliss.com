<?php
/**
 * theme_spa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme_spa
 */

if ( ! function_exists( 'theme_spa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function theme_spa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on theme_spa, use a find and replace
		 * to change 'theme_spa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'theme_spa', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'theme_spa' ),
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
		add_theme_support( 'custom-background', apply_filters( 'theme_spa_custom_background_args', array(
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
add_action( 'after_setup_theme', 'theme_spa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_spa_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'theme_spa_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_spa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_spa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme_spa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme_spa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_spa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

define('__BASE_URL__',  get_template_directory_uri().'/assets');

function theme_spa_scripts() {
	wp_enqueue_style( 'animate', __BASE_URL__.'/css/animate.css' );
	wp_enqueue_style( 'slick', __BASE_URL__.'/css/slick.min.css' );
	wp_enqueue_style( 'slick-theme', __BASE_URL__.'/css/slick-theme.min.css' );
	wp_enqueue_style( 'bootstrap', __BASE_URL__.'/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', __BASE_URL__.'/css/style.css' );
	wp_enqueue_style( 'responsive', __BASE_URL__.'/css/responsive.css' );

	wp_enqueue_script( 'wow', 'https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wow_js',  __BASE_URL__.'/js/wow.js', array(), '20151215', true );
	wp_enqueue_script( 'slick',  __BASE_URL__.'/js/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap',  __BASE_URL__.'/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'main',  __BASE_URL__.'/js/main.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'theme_spa_scripts' );

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


function paginationCustom($max_num_pages)
{
	if ($max_num_pages > 1) {
		$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
		if ($paged > 1) {
			echo '<li class=""><a href="'.esc_url( get_pagenum_link( 1 ) ).'" class="">
			<i class="fa fa-angle-left"></i></a></li>';
		}
		for($i= 1; $i <= $max_num_pages; $i++){
			$half_total_links = floor( 5 / 2);
			$from = $paged - $half_total_links;
			$to = $paged + $half_total_links;
			if ($paged < $half_total_links) {
	           $to += $half_total_links - $paged;
	        }
	        if ($max_num_pages - $paged < $half_total_links) {
	            $from -= $half_total_links - ($max_num_pages - $paged) - 1;
	        }
	        if ($from < $i && $i < $to) {
	        	$class = $i == $paged ? 'active' : null;
				echo '<li class="'.$class.'"><a href="'.esc_url( get_pagenum_link( $i ) ).'" class="">'.$i.'</a></li>';
	        }
		}
		if ($paged + 1 <= $max_num_pages ) {
			echo '<li class=""><a href="'.esc_url( get_pagenum_link( $paged + 1 ) ).'" class="">
			<i class="fa fa-angle-right"></i></a></li>';
		}
	}
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Tùy chỉnh',
		'menu_title'	=> 'Tùy chỉnh',
		'menu_slug' 	=> 'options',
	));

}

add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );
 
function custom_remove_woo_checkout_fields( $fields ) {
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_last_name']);
    return $fields;
}



