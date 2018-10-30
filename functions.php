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


<?php Hybrid\View\display( 'header', Hybrid\Template\hierarchy() ) ?>

<div class="app-content">
	



<main id="main" class="app-main">



<div id="tribe-events-pg-template" class="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
	
</div> <!-- #tribe-events-pg-template -->



</main>

	
	<?php Hybrid\View\display( 'footer', Hybrid\Template\hierarchy() ); ?>
</div>

