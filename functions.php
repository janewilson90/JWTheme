<?php
/**
 * Main Functions File - used for:
 * • including other function-files
 * • WP-Support & WP-Setup
 * • general functions like replacements, translations
 *
 * @author      Jane Wilson
 * @version     1.0
 * @since       WPSeed 0.1
 *
 */

 function remove_parent_styles() {
   wp_dequeue_style( 'wpseed/styles', get_template_directory_uri() . '/dist/style.min.css', false, null );

  //  wp_enqueue_style('wpseed/styles', get_template_directory_uri() . '/dist/style.min.css', false, null);

  //  wp_enqueue_style('wpseed/styles', get_template_directory_uri() . '/dist/style.min.css', false, null);
  //  # fonts
  //  wp_enqueue_style('google/fonts', 'https://fonts.googleapis.com/css?family=Ubuntu:400,500,700', false, null);
}
add_action( 'wp_enqueue_scripts', 'remove_parent_styles', 20 );

 function my_theme_enqueue_styles() {

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/dist/style.min.css', false, null
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>
