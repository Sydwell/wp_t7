<?php

// require_once('wp-bootstrap-navwalker.php');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

wp_enqueue_script('jquery'); 

function be_load_resources() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js'
        , array('jquery'), '3.3.7', true );

    // Add your own JavaScript code to the template.
    // Note first parameter is the name that WordPress uses to reference the script.
    // The second parameter is the actual script note the use of get_template_directory_uri() to find the location of the script.
    // The third parameter is an array of scripts that should be load be this script is loaded.
    // The fourth is the version of the script you must change this number every time you edit your script.
   
    wp_enqueue_script('my-site-js', get_template_directory_uri() . '/my-site.js', array('jquery'), '1.0.3');
}

// Use the built add_action function to call the above function when WordPress load the scripts 
add_action('wp_enqueue_scripts', 'be_load_resources');


// Allows WP to manage our navigation Navigation Menus
// Maps theme location to WordPress Display Locations (in Admin GUI)
register_nav_menus( 
    array(
        'primary' => __('Primary Menu'),
        'seconds' => __('Second MenuT'),
        'menu3' => __('Third Menu'),
    )
);




// No terminating php tag? That's correct php files should not end with a terminating php tag!
