<?php
/**
 * kct functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kct
 */

if (!defined('LFK_VERSION')) {
    // Replace the version number of the theme on each release.
    define('LFK_VERSION', '1.0.0');
}

if (!function_exists('lfk_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lfk_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on _s, use a find and replace
         * to change '_s' to the name of your theme in all the template files.
         */
        load_theme_textdomain('lfk', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            [
                'primary-menu' => esc_html__('Primary', 'lfk'),
            ]
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            ]
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'kct_custom_background_args',
                [
                    'default-color' => 'ffffff',
                    'default-image' => '',
                ]
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            [
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            ]
        );
    }
}
add_action('after_setup_theme', 'lfk_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lfk_content_width() {
    $GLOBALS['content_width'] = apply_filters('brxt_content_width', 1140);
}
add_action('after_setup_theme', 'lfk_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lfk_widgets_init() {
    register_sidebar(
        [
            'name'          => esc_html__( 'Sidebar', 'lfk' ),
            'id'            => 'site-sidebar',
            'description'   => esc_html__( 'Add Site Sidebar widgets here.', 'lfk' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
    register_sidebar(
        [
            'name'          => esc_html__( 'Sliding Menu', 'lfk' ),
            'id'            => 'sliding-menu',
            'description'   => esc_html__( 'Add sliding menu content here.', 'lfk' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
    register_sidebar(
        [
            'name'          => esc_html__( 'Footer Copyright', 'lfk' ),
            'id'            => 'footer-copyright',
            'description'   => esc_html__( 'Add Copyright here.', 'lfk' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );    
}
add_action( 'widgets_init', 'lfk_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lfk_scripts() {
    /**
     * Site enqueue Style
     */
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('lfk-style', get_stylesheet_uri(), [], time());
    wp_style_add_data('lfk-style', 'rtl', 'replace');

    /**
     * Site enqueue script
     */
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], LFK_VERSION, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], LFK_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'lfk_scripts');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';