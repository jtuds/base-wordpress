<div class="panel panel--subtle">
	<nav class="pagination nav nav--pagination">
		<?php
			// Navigation links.
			if (get_next_posts_link()) echo '<a rel="next" href="' . get_next_posts_page_link() . '" class="btn next ss-navigateright">Next</a>';
			if (get_previous_posts_link()) echo '<a rel="previous" href="' . get_previous_posts_page_link() . '" class="btn prev ss-navigateleft">Previous</a>';

			// Number of pages.
			echo 'Page ' . ($wp_query->query_vars['paged'] ?: 1) . ' of ' . $wp_query->max_num_pages;
		?>
	</nav>
</div><!--/.panel -->