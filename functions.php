<?php
/**
 * xuongrongkieng functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package xuongrongkieng
 */

if ( ! function_exists( 'xuongrongkieng_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function xuongrongkieng_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on xuongrongkieng, use a find and replace
	 * to change 'xuongrongkieng' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'xuongrongkieng', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'xuongrongkieng' ),
                'category' => esc_html__( 'Category Menu', 'xuongrongkieng' )
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'xuongrongkieng_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // xuongrongkieng_setup
add_action( 'after_setup_theme', 'xuongrongkieng_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function xuongrongkieng_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'xuongrongkieng_content_width', 640 );
}
add_action( 'after_setup_theme', 'xuongrongkieng_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function xuongrongkieng_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'xuongrongkieng' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'xuongrongkieng_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function xuongrongkieng_scripts() {
	wp_enqueue_style( 'xuongrongkieng-style', get_stylesheet_uri() );               
        
        wp_enqueue_style( 'xuongrongkieng-menu-style', get_template_directory_uri() . '/style/menu.css' );    
        
        wp_enqueue_style( 'xuongrongkieng-them-style', get_template_directory_uri() . '/style/theme-style.css' );    
//        wp_enqueue_style( 'xuongrongkieng-inline-style', get_template_directory_uri() . '/style/inline.css' );    
//    
//        wp_enqueue_style( 'xuongrongkieng-copy-style', get_template_directory_uri() . '/style/style0.css' );
//        
//        wp_enqueue_style( 'xuongrongkieng-btcontentslider-style', get_template_directory_uri() . '/style/btcontentslider.css' );
//        
//        wp_enqueue_style( 'xuongrongkieng-iview-style', get_template_directory_uri() . '/style/iview.css' );
//        
//        wp_enqueue_style( 'xuongrongkieng-nexus-style', get_template_directory_uri() . '/style/nexus.css' );                
//        
//        wp_enqueue_style( 'xuongrongkieng-style1-style', get_template_directory_uri() . '/style/style1.css' );                
//        
//        wp_enqueue_style( 'xuongrongkieng-system-style', get_template_directory_uri() . '/style/system.css' );                
//        
//        wp_enqueue_style( 'xuongrongkieng-template-style', get_template_directory_uri() . '/style/template.css' );                
//        
//        wp_enqueue_style( 'xuongrongkieng-typo-style', get_template_directory_uri() . '/style/typo.css' );                
        //wp_enqueue_style( 'xuongrongkieng-copy-style', get_template_directory_uri() . '/style/' );

	wp_enqueue_script( 'xuongrongkieng-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'xuongrongkieng-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'xuongrongkieng_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


// Start intergration
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
// End intergration

/**
 * woo_hide_page_title
 *
 * Removes the "shop" title on the main shop page
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
function woo_hide_page_title() {	
	return false;	
}
add_filter( 'woocommerce_show_page_title' , 'woo_hide_page_title' );
// End remove shop title
/**
 *  #End of Woocommerce
 */