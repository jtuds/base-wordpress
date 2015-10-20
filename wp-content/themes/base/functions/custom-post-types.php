<?php

// Custom post types.
function cs_types()
{
	// Portfolios.
	register_post_type(
		'portfolio',
		array(
			'labels' => array(
				'name' => 'Portfolio',
				'singular_name' => 'Portfolio',
				'add_new' => 'Add new',
				'add_new_item' => 'Add new portfolio entry',
				'edit_item' => 'Edit portfolio entry',
				'new_item' => 'New portfolio entry',
				'all_items' => 'All portfolio entries',
				'view_item' => 'View portfolio entry',
				'search_items' => 'Search portfolio entries',
				'not_found' =>  'No portfolio entries found',
				'not_found_in_trash' => 'No portfolio entries found in trash',
				'menu_name' => 'Portfolio'
			),
			'hierarchical' => false,
			'menu_icon' => 'dashicons-portfolio',
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'has_archive' => false,
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			'rewrite' => array('slug' => 'portfolio', 'with_front' => false),
	 		'taxonomies' => array('portfolio_category'),
		)
	);

	// Portfolio categories.
  	register_taxonomy(
  		'portfolio_category',
  		array('portfolio'),
  		array(
			'hierarchical' => true,
			'labels' => array(
				'name' => 'Sectors',
				'singular_name' => 'Sector',
				'search_items' =>  'Search sectors',
				'all_items' => 'All sectors',
				'parent_item' => 'Parent sectopr',
				'parent_item_colon' => 'Parent sector:',
				'edit_item' => 'Edit sector',
				'update_item' => 'Update sector',
				'add_new_item' => 'Add New sector',
				'new_item_name' => 'New sector name'
			),
			'show_ui' => true,
			'query_var' => true,
			'public' => false,
			'has_archive' => false,
			'rewrite' => array('slug' => 'portfolio/category', 'with_front' => false)
		)
	);

	// Testimonials.
	register_post_type(
		'testimonial',
		array(
			'labels' => array(
				'name' => 'Testimonials',
				'singular_name' => 'Testimonial',
				'add_new' => 'Add new',
				'add_new_item' => 'Add new testimonial',
				'edit_item' => 'Edit testimonial',
				'new_item' => 'New testimonial',
				'all_items' => 'All testimonials',
				'view_item' => 'View testimonial',
				'search_items' => 'Search testimonials',
				'not_found' =>  'No testimonials found',
				'not_found_in_trash' => 'No testimonials found in trash',
				'menu_name' => 'Testimonials'
			),
			'hierarchical' => false,
			'menu_icon' => 'dashicons-testimonial',
			'exclude_from_search' => false,
			'publicly_queryable' => false,
			'has_archive' => false,
			'public' => true,
			'supports' => array('title', 'editor', 'excerpt'),
			'rewrite' => array('slug' => 'testimonials', 'with_front' => false)
		)
	);

}
add_action('init', 'cs_types');

// Flush rewrite rules when parameter set
if (isset($_GET['flush']))
{
    flush_rewrite_rules();
    exit('Flushed!');
}