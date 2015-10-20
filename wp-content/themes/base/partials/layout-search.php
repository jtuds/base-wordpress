<aside class="panel panel--subtle panel--search">

	<div class="grid">

		<div class="grid__item one-whole">
			<h1>Search...</h1>
			<form method="get" class="form" action="<?php echo esc_url(home_url('/')); ?>">
				<p><input type="search" class="input" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s"><button type="submit" class="btn">Go</button></p>
			</form>
		</div><!--/.grid__item -->

	</div><!--/.grid -->

</aside>