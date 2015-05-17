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
// include 'library/chromephp/ChromePhp.php';
// ChromePhp::log('Hello Console, this is ChromePhp!');


// let's give a proper name to the function to get the active theme's folder
function get_active_theme_directory()
{
	return get_template_directory_uri();
}

// function to wrap the "spit out a variable" command
function showMeTheGoods($theGoods)
{
	echo '<pre>';
	print_r($theGoods);
	echo '</pre>';
}

// function to get the category slug for a page
function getCategorySlug()
{
	$categories = get_the_category(); // returns all categories assigned to a page/post as an Array
	
	$category = $categories[0]; // let's grab the first category in the Array (the element at index 0)

	// quick hack: if the first category is the "Event Espresso" one, grab the second category instead..
	if ($category->slug == 'eventespresso') {
		$category = $categories[1];
	}

	$slug = $category->slug; // kind of self-explanatory (the slug property inside the category Object)
	return $slug;
}

// a handy function to "console.log" PHP data
function consoleLog($data) {
	if (is_array($data) || is_object($data)) {
		echo("<script>console.log(".json_encode($data).");</script>");
	} else {
		echo("<script>console.log(".$data.");</script>");
	}
}


?>
