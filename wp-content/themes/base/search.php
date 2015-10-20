<?php get_header(); ?>

<div class="wrapper push--bottom">

	<div class="grid">

		<div class="grid__item one-whole">
      <?php echo '<h1 class="page__title soft--bottom text--secondary fa-angle-right"> Search results for: ' . wp_specialchars($s) . '</h1>' ?>
		</div><!--/.grid__item -->

      	<div class="grid__item palm-one-whole portable-one-whole two-thirds">

    		<?php if ( have_posts() ) :
    			echo '<div class="grid">';
	          	echo '<!--';
	        	while ( have_posts() ) : the_post();
				echo '--><div class="grid__item one-whole push--bottom">';
					$url = get_permalink();
					echo '<a href="' . $url . '">';
						the_title('<h2 class="text--secondary"> ', '</h2>');
	            		the_excerpt();
	        		echo '</a>';
        	    echo '</div><!--';
        	
        		endwhile;
        		echo '--></div>';
        	else : ?>
        	
	        	<div class="grid__item one-whole push--bottom">
	          		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	          
	          			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'peninsula' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	          
	          		<?php elseif ( is_search() ) : ?>
	          
	          			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'peninsula' ); ?></p>
	          			<?php get_search_form(); ?>
	          
	          		<?php else : ?>
	                <h2>There are no posts under <?php if ( is_tag() ) echo 'this tag'; elseif ( is_category() ) echo 'this category'; else echo 'here' ?> currently</h2>
	          			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'peninsula' ); ?></p>
	          			<?php get_search_form(); ?>
	          
	          		<?php endif; ?>
	          	</div>
        
        <?php endif; ?>

		 </div><div class="grid__item palm-one-whole portable-one-whole one-third">

			<?php include (dirname(__FILE__) . '/inc/sidebars.php'); ?>

		</div> <!-- /.grid__item -->

	</div> <!-- /.grid (outer) -->

</div> <!-- /.wrapper -->

<?php get_footer(); ?>
