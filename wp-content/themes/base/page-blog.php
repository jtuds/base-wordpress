<?php get_header(); ?>

<?php get_template_part('partials/layout', 'banner'); ?>
<?php get_template_part('partials/layout', 'content'); ?>

<?php
	// Make a new query.
	$wp_query = new WP_Query([
		'post_type' => 'post',
		'paged' => get_query_var('paged') ?: 1
	]);
?>

<?php if ($wp_query->have_posts()): ?>

	<div class="row-normal">
		<div class="cards">
			<?php
				// Do the loop.
				while ($wp_query->have_posts())
				{
					// Initiate post.
					$wp_query->the_post();

					// Use a post type portial based on the type of the post.
					// Look for a file like partials/card-testimonial.php
					get_template_part('partials/card', get_post_type());
				}
			?>
		</div>
	</div>

	<?php get_template_part('partials/layout', 'pagination'); ?>

<?php else: ?>

	<h1 class="notice">No posts</h1>

<?php endif; ?>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>