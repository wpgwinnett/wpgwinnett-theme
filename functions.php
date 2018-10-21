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
add_action( 'hybrid/templates/register', function( $templates ) {
// this is how you add templates for the Mythic theme 
// this is not used for the calendar 

	$templates->add(
		'content/events/events-home.php',
		[
			'label'      => __( 'Events Home' ),
			'post_types' => [ 'page', 'another type' ]
		]
	);
	
	
	
} );

/*  tribe_filter_template_paths 
 *
 *
 *  Tells the tribe calendar where to look for the template we want to use 
 *
 *  If you use this on your local machine, you have to alter the custom path
 *
 */
function tribe_filter_template_paths ( $file, $template ) {
 /*  This is the file path for when we go on the server 
 */
   $custom_file_path =  ABSPATH . 'wp-content/themes/wpgwinnett-theme/resources/views/content/events/' . $template;;
   
  /*  this is the file path for when you are on your local server */
 
 $custom_file_path =  realpath(dirname(__FILE__)) . "\\resources\\views\\content\\events\\" . $template;


    // file doesn't exist in custom path, go with the default option
    if ( !file_exists($custom_file_path) ) return $file;

    // file exists in custom path, let's use it
    return $custom_file_path;
}
 
add_filter( 'tribe_events_template', 'tribe_filter_template_paths', 10, 2 );


/* tribeEventsTitle 
 *
 *  Displays the word "Calendar" on the Tribe Events calendar page 
 * 
 *  otherwise it would display the title of the first event 
 *
 */
 
 
function tribeEventsTitle( $html ){
	
   global $post;

   if ($post->post_type === "tribe_events") {
      $title = "<h1 class='entry__title'>Calendar</h1>";

   }else return $html;

   return $title;
}
add_filter('hybrid/post/title', 'tribeEventsTitle');

/*  allow us to upload svg file types. 
 *  we may have to remove this if we don't use an svg file for the logo 
 */
 
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


