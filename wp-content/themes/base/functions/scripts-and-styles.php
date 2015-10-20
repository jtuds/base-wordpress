<?php

// Enqueuing Scripts and Styles.

	// Enqueue jQuery via CDN
	// Define the latest or desired jQuery version
	define('JQUERY_V', '1.11.3');

	if (JQUERY_V == '') {
	    echo ('<script> alert("You haven\'t defined the jQuery version you want to use. Define the \'JQUERY_V\' consant in the functions.php file"); </script>');
	} else {
	    // Enqueue jQuery via CDN
	    function register_jquery() {
	            wp_deregister_script( 'jquery' );
	            wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/' . JQUERY_V . '/jquery.min.js' ), false, null, true );
	            wp_enqueue_script( 'jquery' );
	        }
	    add_action( 'wp_enqueue_scripts', 'register_jquery' );
	}

	// Enqueue scripts and styles
	function cs_enqueue_theme_scripts_and_styles()
	{
		wp_enqueue_style('global', get_template_directory_uri() . '/dist/css/style.css', null, '0.0.1', '');

		// Load concatenated scripts file
	    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/dist/js/scripts.js', null, '', true );
	    
	    // Load our global file last so we can manipulate any plugins from here
	    wp_enqueue_script( 'global', get_template_directory_uri() . '/dist/js/global.js', null, '', true );
		}
	add_action('wp_enqueue_scripts', 'cs_enqueue_theme_scripts_and_styles');


	// Remove already registered styles.
	function cs_deregister_styles()
	{
	  wp_deregister_style('name_of_css');
	}
	//add_action( 'wp_print_styles', 'cs_deregister_styles' );