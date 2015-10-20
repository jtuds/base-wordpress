<?php
	/**
	 * Template Name: Services
	 */
?>
<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('partials/layout', 'banner'); ?>

<?php $categories = get_categories(array('taxonomy' => 'portfolio_category'));
print("<pre>".print_r($categories,true)."</pre>"); ?>

<?php get_template_part('partials/layout', 'flexible'); ?>

<?php get_footer(); ?>