<?php
function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_theme_support( 'title-tag' );
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

function mytheme_enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );


function custom_wp_enqueue_scripts() {
    wp_enqueue_script('script-name', get_template_directory_uri() . '/script/script.js', array(), '1.0.0', false);
    wp_enqueue_script('script-name', get_template_directory_uri() . '/script/classes.js', array(), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'custom_wp_enqueue_scripts');

add_action( 'init', 'theme_prefix_register_menus' );
function theme_prefix_register_menus() {
    register_nav_menus(
        array(
            'primary_menu' => __( 'Primary Menu', 'theme_prefix' ),
        )
    );
}
function heartofhelen_widget_init() {

    // Register the footer widget area
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-center',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'heartofhelen_widget_init' );


add_filter( 'the_content', 'my_autoembed_adjustments', 7 );
/**
 * Add a new line around paragraph links
 * @param string $content
 * @return string $content
 */
function my_autoembed_adjustments( $content ){
    $pattern = '|(?<!")(?<!"\s)(https?:\/\/[^\s"\[<]+)|im';    // your own pattern
    $to      = "<p>\n$1\n</p>";                          // your own pattern
    $content = preg_replace( $pattern, $to, $content );
    return $content;
}


?>