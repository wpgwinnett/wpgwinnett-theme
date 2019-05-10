<?php
add_action( 'wp_enqueue_scripts', 'wpgwinnett_enqueue_styles' );

function wpgwinnett_enqueue_styles() {

	$parent_style = 'twentynineteen-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'wpgwinnett-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);

}

//TODO this needs to go in a custom plugin
add_filter( 'tribe_events_list_show_ical_link', 'wpgwinnett_tribe_events_list_show_ical_link' );

function wpgwinnett_tribe_events_list_show_ical_link() {

	return false;
}