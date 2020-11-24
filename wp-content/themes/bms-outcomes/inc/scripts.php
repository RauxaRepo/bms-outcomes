<?php

/**
 * Enqueue Styles and Scripts
 */
function mf_enqueue() {
	
	$version = get_field( 'css_version_number', 'options' );

	wp_dequeue_style('wp-block-library');

	// style
	wp_enqueue_style(
		'main-styles',
		get_template_directory_uri().'/assets/css/style.css',
		array(),
		$version
	);

	// script
	wp_enqueue_script(
		'main-scripts',
		get_template_directory_uri().'/assets/js/script.js', 
		array(),
		$version,
		1
	);

	//wp_deregister_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'mf_enqueue' );