<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');


// let's debug this theme in the browser's Console
require_once('library/chromephp/ChromePhp.php');
ChromePhp::log('Hello Console, this is ChromePhp!');


// let's give a proper name to the function to get the active theme's folder
function get_active_theme_directory()
{
	return get_template_directory_uri();
}



?>
