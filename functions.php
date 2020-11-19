<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-reset', get_template_directory_uri() . '/reset.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . './style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );

    // Load Bootstrap CSS
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    
    wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css' );

    wp_enqueue_style( 'bootstrap-reboot', get_stylesheet_directory_uri() . '/css/bootstrap-reboot.min.css' );

    //Load Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( '' ), '4.5.3', true );

}


?>