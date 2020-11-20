<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/reset.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . './style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );

    // Load Bootstrap CSS
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
    
    wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.min.css' );

    wp_enqueue_style( 'bootstrap-reboot', get_stylesheet_directory_uri() . '/css/bootstrap-reboot.min.css' );

    //Load Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js', array( '' ), '4.5.3', true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//Check see if the customisetheme_setup exists
if ( !function_exists('customisetheme_setup') ):
    //Any theme customisations contained in this function
    function customisetheme_setup() {
        //Define default header image
        define( 'HEADER_IMAGE', '%s/header/default.jpg' );

        //Define the width and height of our header image
        define( 'HEADER_IMAGE_WIDTH', apply_filters( 'customisetheme_header_image_width', 125 ) );
        define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'customisetheme_header_image_height', 125 ) );

        //Turn off text inside the header image
        define( 'NO_HEADER_TEXT', true );

        //Don't forget this, it adds the functionality to the admin menu
        add_custom_image_header( '', 'customisetheme_admin_header_style' );

        //Set some custom header images, add as many as you like
        //%s is a placeholder for your theme directory
        // $customHeaders = array (
        //         //Image 1
        //         'perfectbeach' => array (
        //         'url' => '%s/header/default.jpg',
        //         'thumbnail_url' => '%s/header/thumbnails/pb-thumbnail.jpg',
        //         'description' => __( 'Perfect Beach', 'customisetheme' )
        //     ),
        //         //Image 2
        //         'tiger' => array (
        //         'url' => '%s/header/tiger.jpg',
        //         'thumbnail_url' => '%s/header/thumbnails/tiger-thumbnail.jpg',
        //         'description' => __( 'Tiger', 'customisetheme' )
        //     ),
        //         //Image 3
        //         'lunar' => array (
        //         'url' => '%s/header/lunar.jpg',
        //         'thumbnail_url' => '%s/header/thumbnails/lunar-thumbnail.jpg',
        //         'description' => __( 'Lunar', 'customisetheme' )
        //     )
        // );
        //Register the images with Wordpress
        register_default_headers($customHeaders);
    }
endif;

if ( ! function_exists( 'customisetheme_admin_header_style' ) ) :
    //Function fired and inline styles added to the admin panel
    //Customise as required
    function customisetheme_admin_header_style() {
    ?>
        <style type="text/css">
            #wpbody-content #headimg {
                height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
                width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
                border: 1px solid #333;
            }
        </style>
    <?php
    }
endif;

//Execute our custom theme functionality
add_action( 'after_setup_theme', 'customisetheme_setup' );

/**
 * Register Custom Navigation Walker
 */
if ( ! file_exists( get_stylesheet_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_stylesheet_directory() . '/class-wp-bootstrap-navwalker.php';
}

?>
