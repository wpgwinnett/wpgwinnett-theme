<?php
namespace Mythic;

use function Hybrid\Template\path;

/**
 * Adds theme support for the events plugin.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'after_setup_theme', function() {

	add_theme_support( 'events' );
} );

/**
 * This overrides the top-level events templates that would normally go in
 * the theme root. By default, we're looking for a `resources/views/events.php`
 * template, which falls back to `resources/views/index.php`.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $files
 * @return array
 */
add_filter( 'events_template_loader_files', function( $files ) {

	return [
		path( 'events.php' ),
		path( 'index.php' )
	];

}, PHP_INT_MAX );

/**
 * Filters the path to the `events` template parts folder.  This filter
 * moves that folder to `resources/views/events`.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $path
 * @return string
 */
add_filter( 'events_template_path', function( $path ) {

	return path( $path );
} );
?>