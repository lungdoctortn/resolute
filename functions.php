<?php  

function load_scripts(){

    wp_register_script('template-js', get_template_directory_uri() . '/final/js/min/build.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('template-js');

    wp_enqueue_style( 'template', get_template_directory_uri() . '/final/css/styles.css?v='.time(), array(), '1.0', 'all' );
    
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

//Main configuration function
function resolute_configuration(){

    //Registering the menus
        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'my_footer_menu' => 'Footer Menu'
                )
            );
    
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array('video', 'image') );
        add_theme_support( 'title-tag' );
        add_image_size( 'reasons', 200, 200, true );
        add_image_size( 'blog-image', 300, 260, true );
        add_image_size( 'blog-single-image', 1200, 500, true);
        add_image_size( 'secondary-image', 500, 250, true );
        add_image_size( 'front-page-featured', 800, 800, true);
        add_image_size( 'related-posts', 800, 300, true );
        add_filter('image_size_names_choose', 'reasons_custom_sizes');
        function reasons_custom_sizes( $sizes ) {
        return array_merge( $sizes, array(
            'reasons' => __( 'Reasons' ),
            'blog-image' => __( 'Blog Image' ),
            'blog-single-image' => __( 'Blog Single Image' ),
            'secondary-image' => __( 'Secondary Image' ),
            'related-posts' => __( 'Related Posts Image' )
            ) );
        }
    }
    add_action( 'after_setup_theme', 'resolute_configuration', 0 );