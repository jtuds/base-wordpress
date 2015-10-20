<?php
	/**
	 * Template Name: Flexible content
	 */
?>
<?php get_header(); ?>
<?php the_post(); ?>
<?php get_template_part('partials/layout', 'banner'); ?>
<?php get_template_part('partials/layout', 'flexible'); ?>
<?php get_footer(); ?>