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
                'main_menu' => 'Main Menu',
                'footer_menu' => 'Footer Menu'
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

    // Register the Sidebars

    add_action('widgets_init', 'resolute_sidebars');
    function resolute_sidebars() {
        register_sidebar(
            array(
                'name' => 'Archives Sidebar',
                'id' => 'archives-sidebar',
                'description' => 'Archives Sidebar.  You can add your widgets here. ',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
    }

// Adding a modified excerpt length
function mytheme_custom_excerpt_length( $length ) {
    return 150;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


// Adding a 'Read More' link
function excerpt_readmore() {
    return '...<a href="'. get_permalink( get_the_ID() ) . '" class="readmore">' . ' ' . '<span class="readmoreclass">Read More</span><span class="readmorearrow"> &raquo;</span>' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');

add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_category() ) {
        // $title = single_cat_title( '', false, 'categories' );
        $title = sprintf( __( '"%s" Article Items' ), single_cat_title( '', false ));
    } elseif ( is_tag() ) {
        $title = sprintf( __( '"%s" Article Items' ), single_tag_title( '', false ));
    } elseif ( is_date() ) {
		$year     = get_query_var('year');
		$month = get_query_var('monthnum');
		$monthName = date("F", mktime(0, 0, 0, $month, 10));
		$day      = get_query_var('day');

		$title = 'Items Posted In ' . $monthName . ', ' . $year; 
	} elseif ( is_author() ) {
        $title = sprintf( __( 'Post Items Written by "%s"' ), get_the_author() );
    }
    return $title;
});

function custom_excerpt_length_short( $length ){
    return 60;
}