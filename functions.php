<?php

	define("MAIN_VERSION", 1.0);

	add_action( 'wp_enqueue_scripts', 'load_parent_styles' );

	function load_parent_styles() {
    	wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css', array(), MAIN_VERSION );
    	wp_enqueue_style( 'child-style', get_stylesheet_uri() , array(), MAIN_VERSION );
	}

	/*CUSTOM SCRIPT WENN BENÖTIGT*/
	// add_action( 'wp_enqueue_scripts', 'load_custom_script' );

	// function load_custom_script(){
	// 	wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/javascript/script.js', array( 'jquery' ), MAIN_VERSION, true ,'all');
 	// 		wp_enqueue_script( 'custom-script');
	// }

?>
