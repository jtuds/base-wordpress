<?php
/**
 * Actions for Base Template
 */


// Theme defaults.
function cs_setup()
{
	// Enable post thumbnails.
	add_theme_support('post-thumbnails');

	// Add excerpts to pages.
	add_post_type_support('page', 'excerpt');

	// Register two navigation menus.
	register_nav_menus(array(
		'primary'   => 'Primary menu',
		'secondary' => 'Secondary menu',
	));

	// Remove comments feed in head.
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'feed_links');
}
add_action('after_setup_theme', 'cs_setup');


// Register widgetized area and update sidebar with default widgets.
function cs_widgets()
{
	// Footer widget areas.
	// Left, center, and right, each 1/3rd wide.
	register_sidebar([
		'id' 			=> 'footer-left',
		'name'          => 'Footer - Left',
		'description' 	=> 'Left-hand widget area in the footer.',
		'before_widget' => '<section class="block">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	]);
	register_sidebar([
		'id' 			=> 'footer-center',
		'name'          => 'Footer - Center',
		'description' 	=> 'Central widget area in the footer.',
		'before_widget' => '<section class="block">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	]);
	register_sidebar([
		'id' 			=> 'footer-right',
		'name'          => 'Footer - Right',
		'description' 	=> 'Right-hand widget area in the footer.',
		'before_widget' => '<section class="block">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	]);

	// Call-to-action widget areas.
	// One on the left, one on the right.
	register_sidebar([
		'id' 			=> 'cta-left',
		'name' 			=> 'CTA - Left',
		'description' 	=> 'Left-hand widget area in the call-to-action row.',
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);
	register_sidebar([
		'id' 			=> 'cta-right',
		'name' 			=> 'CTA - Right',
		'description' 	=> 'Right-hand widget area in the call-to-action row.',
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	]);

	// Blog sidebar widget area.
	register_sidebar([
		'id'            => 'blog',
		'name'          => 'Blog',
		'description' 	=> 'Widget sidebar for the Blog section.',
		'before_widget' => '<section class="widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1>',
		'after_title'   => '</h1>',
	]);
}
add_action('widgets_init', 'cs_widgets');


// Clean up admin links.
function cs_admin()
{

	// Remove things.
	remove_menu_page('index.php'); // Who uses the dashboard anyway.
	remove_menu_page('link-manager.php'); // Links? Really?
	remove_menu_page('edit-comments.php'); // Comments are disabled.
}
add_action('admin_menu', 'cs_admin', 999);


// Clean up admin bar.fff
function cs_bar($bar)
{
	$bar->remove_node('comments');
	$bar->remove_node('wp-logo');
	$bar->remove_node('wpseo-menu');
}
add_action('admin_bar_menu', 'cs_bar', 999);


// Clean up.
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');