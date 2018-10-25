<?php
/**
 * Theme functions file.
 *
 * This file is used to bootstrap the theme.
 *
 * @package   WordPressGwinnett
 * @author    WordPress Gwinnett contributors <hello@wpgwinnett.com>
 * @copyright 2018 WordPress Gwinnett contributors
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wpgwinnett.com
 */

# ------------------------------------------------------------------------------
# Compatibility check.
# ------------------------------------------------------------------------------
#
# Check that the site meets the minimum requirements for the theme before
# proceeding if this is a theme for public release. If building for a client
# that meets these requirements, this code is unnecessary.

if ( version_compare( $GLOBALS['wp_version'], '4.9.6', '<' ) || version_compare( PHP_VERSION, '5.6', '<' ) ) {

	require_once( get_parent_theme_file_path( 'app/bootstrap-compat.php' ) );
	return;
}

# ------------------------------------------------------------------------------
# Bootstrap the theme.
# ------------------------------------------------------------------------------
#
# Load the bootstrap files. Note that autoloading should happen first so that
# any classes/functions are available that we might need.

require_once( get_parent_theme_file_path( 'app/bootstrap-autoload.php' ) );
require_once( get_parent_theme_file_path( 'app/bootstrap-app.php'      ) );

// Register the single event page
add_action( 'hybrid/templates/register', function( $templates ) {

	$templates->add(
		'content/events/single-event.php',
		[
			'label'      => __( 'Single Event' ),
			'post_types' => [ 'page', 'another_type' ]
		]
	);
});

function tribe_filter_template_paths ( $file, $template ) {
	/*  This is the file path for when we go on the server 
	*/
		$custom_file_path =  ABSPATH . 'wp-content/themes/wpgwinnett-theme/resources/views/content/events/' . $template;
		
	 /*  this is the file path for when you are on your local server */
	
	$custom_file_path =  realpath(dirname(__FILE__)) . "\\resources\\views\\content\\events\\" . $template;
		 // file doesn't exist in custom path, go with the default option
		 if ( !file_exists($custom_file_path) ) return $file;
		 // file exists in custom path, let's use it
		 return $custom_file_path;
 }
// tribe_events_template hook is in plugins/the-events-calendar/src/Tribe/Templates.php	
 add_filter( 'tribe_events_template', 'tribe_filter_template_paths', 10, 2 );



// function test_action_function() {
// 	echo "Ilene's Code:";
// 	echo "<br>";
// 	echo "<h3>file path for when we go on the server</h3><br>";
// 	$custom_file_path =  ABSPATH . 'wp-content/themes/wpgwinnett-theme/resources/views/content/events/' . $template;;
// 	echo $custom_file_path;

// 	echo "<h3>file path for when you are on your local server</h3><br>";
// 	$custom_file_path =  realpath(dirname(__FILE__)) . "\\resources\\views\\content\\events\\" . $template;
// 	echo $custom_file_path;

// }
// add_action( 'test_action', 'test_action_function' );