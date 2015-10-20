<?php get_header(); ?>

	<div id="post-404">

		<div class="wrapper">
			<p>Sorry but we can't seem to find the page you were looking for. Perhaps a search will help?</p>
			<form method="get" action="<?php echo home_url(); ?>">
				<div class="form__field">
					<input type="search" name="s" class="form__input form__input--full form__input--search">
					<button class="icon--search" type="submit"><span class="visuallyhidden">Submit search</span></button>
				</div><!--/.form__field -->
			</form>
		</div><!--/.wrapper -->

	</div><!--/#404 -->

<?php get_footer(); ?>