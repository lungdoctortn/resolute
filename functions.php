<?php  

function load_scripts(){

    wp_register_script('template-js', get_template_directory_uri() . '/final/js/min/build.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('template-js');

    wp_enqueue_style( 'template', get_template_directory_uri() . '/final/css/styles.css?v='.time(), array(), '1.0', 'all' );
    
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

Add_theme_support( 'post-thumbnails', array( 'post', 'page', 'customposttype' ) );