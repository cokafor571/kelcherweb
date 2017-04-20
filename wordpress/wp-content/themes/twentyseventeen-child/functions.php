<?php 

/*
 * A simple function to control the number of Twenty Seventeen Theme Front Page Sections
 * Source: wpcolt.com
 */

function wpc_custom_front_sections( $num_sections )
	{
		return 4; //Change this number to change the number of the sections.
	}

add_filter( 'twentyseventeen_front_page_sections', 'wpc_custom_front_sections' );


function twentyseventeen_child_setup() {
    // prepare theme for translation
    
    load_theme_textdomain( 'twentyseventeen-child', get_stylesheet_directory() . '/language' );
    
    // This theme uses wp_nav_menu() in three locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twentyseventeen-child' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen-child' ),
        'secondary' => __( 'Footer Menu', 'twentyseventeen-child' ),
	) );
}

add_action( 'after_setup_theme', 'twentyseventeen_child_setup' );

//enqueue for script to grab panel and insert div to add background image

function kelcher_scripts() {
     if ( is_front_page() ) {
        wp_enqueue_script( 'kelcher-scripts', get_stylesheet_directory_uri() . '/js/kelcher-scripts.js', array( 'jquery' ), '20170413'); 
    }
}

add_action( 'wp_enqueue_scripts', 'kelcher_scripts' ); 

function load_fonts() {
    
    $query_args = array(
        'family' => 'Poppins|Sorts+Mill'
    ); 
    
    wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null ); 
}

add_action( 'wp_enqueue_scripts', 'load_fonts' ); 


