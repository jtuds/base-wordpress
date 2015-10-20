<?php
/**
 * Template Name: Flexible custom post type
 */
?>

<?php get_header(); ?>

<?php get_template_part('partials/layout', 'banner'); ?>

	<?php

		// Check the page exists
		if (have_posts()):

			// Do the loop
			while (have_posts()):

				// Initiate post.
				the_post();

				// Get the content partial
				get_template_part('partials/layout', 'content');

			endwhile;

		else:

			echo '<p class="notice">No posts</p>';

		endif;

	?>

	<?php

		// Use the page name as the custom post type
		$post_type = $post->post_name;

		// Query all posts of that type
		$wp_query = new WP_Query([
			'posts_per_page' => -1,
			'post_type' => $post_type,
		]);

	?>

	<?php

		// Query the post types
		if ($wp_query->have_posts()):

			// Open a container class
			echo '<div class="cards">';

				// Do the loop
				while ($wp_query->have_posts()):

					// Initiate post.
					$wp_query->the_post();

					// Use a post type partial based on the type of the post.
					// Look for a file like partials/card-testimonial.php
					get_template_part('partials/card', $post_type);

				endwhile;

			// Close container class
			echo '</div>';

		else:

			echo '<p class="notice">No single posts for this type</p>';

		endif;

	?>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>