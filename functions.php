<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );




function justmechs_enqueue_style() {

  wp_enqueue_script( 'jquery', false );

	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', false );

  wp_enqueue_style( 'core', get_template_directory_uri() . '/css/styles.css', false );

  wp_enqueue_script( 'gumroad', 'https://gumroad.com/js/gumroad.js', false );

}

add_action( 'wp_enqueue_scripts', 'justmechs_enqueue_style' );

?>
