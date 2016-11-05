<?php

function my_theme_enqueue_styles() {

    $parent_style = 'shoreditch-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//Enqueue the Dashicons script
add_action( 'wp_enqueue_scripts', 'amethyst_enqueue_dashicons' );
function amethyst_enqueue_dashicons() {
	wp_enqueue_style( 'amethyst-dashicons-style', get_stylesheet_directory_uri(), array('dashicons'), '1.0' );
}


function wpcodex_add_excerpt_support_for_cpt() {
 add_post_type_support( 'jetpack-testimonial', 'excerpt' );
 add_post_type_support( 'jetpack-portfolio', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_cpt' );
?>
