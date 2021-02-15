<?php
/**
 * superultratheme_test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package superultratheme_test
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
if (!function_exists('superultratheme_test_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function superultratheme_test_setup()
	{
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'nav-pri' => esc_html__('Primary', 'superultratheme_test'),
		));
	}
endif;
add_action( 'after_setup_theme', 'superultratheme_test_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'author-thumb', 120, 120, true ); // (cropped)
    add_image_size( 'author-post', 304, 171, true ); // (cropped)
}
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function superultratheme_test_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'superultratheme_test_content_width', 640 );
}
add_action( 'after_setup_theme', 'superultratheme_test_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function superultratheme_test_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'superultratheme_test' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'superultratheme_test' ),
			'before_widget' => '<section class="widget widget_archive">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title" itemprop="name">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-1', 'superultratheme_test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'superultratheme_test' ),
			'before_widget' => '<section class="widget widget_categories">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title" itemprop="name">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-2', 'superultratheme_test' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'superultratheme_test' ),
			'before_widget' => '<section class="widget widget_pages">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title" itemprop="name">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-3', 'superultratheme_test' ),
			'id'            => 'sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'superultratheme_test' ),
			'before_widget' => '<section class="widget widget_recent_comments">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title" itemprop="name">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-4', 'superultratheme_test' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'superultratheme_test' ),
			'before_widget' => '<section class="widget widget_recent_entries">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title" itemprop="name">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-5', 'superultratheme_test' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'superultratheme_test' ),
			'before_widget' => '<section class="widget widget_tag_cloud">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title" itemprop="name">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'superultratheme_test_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function superultratheme_test_enque() {
    $uri = get_theme_file_uri();
    wp_register_style('google_fonts','https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800|Nunito+Sans:400,400i,600,600i,700,700i');
	wp_register_style('su_style',$uri.'/style.css');
	wp_register_style('su_font-awesome',$uri.'/css/fontawesome-all.css');
	wp_register_style('su_raratheme',$uri.'/css/raratheme-companion-public.css');
	wp_enqueue_style('su_font-awesome');
	wp_enqueue_style('su_raratheme');
	wp_enqueue_style('su_style');
	wp_enqueue_style('google_fonts');
	wp_register_script('su_custom',$uri.'/js/custom.js',[],false,true);
	wp_register_script('su_sticky_sidebar',$uri.'/js/sticky-sidebar.js',[],false,true);
	wp_register_script('su_jquery',$uri.'/js/jquery-1.12.0.js',[],true);
	wp_enqueue_script('su_custom');
	wp_enqueue_script('su_sticky_sidebar');
	wp_enqueue_script('su_jquery');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'superultratheme_test_enque' );

include(get_theme_file_path('/inc/setup.php'));

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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

}

/**
 * Load Custom Nav Walker.
 */
/*if (!file_exists(get_template_directory() . '/inc/ss-bootstrap-navwalker.php')) {
	wp_die('<div style="text-align:center"><h1 style="font-weight:normal">Custom Walker Nav Not Found</h1><p>Opps we have got error!<br>It appears the bootstrap-navwalker.php file may be missing.</p></div>', 'Custom Walker Nav Not Found');
} else {
	require_once get_template_directory() . '/inc/ss-bootstrap-navwalker.php';
}*/

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

