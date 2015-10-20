<?php get_header(); ?>

  <div class="wrapper">

    <div class="grid">

  		<div class="grid__item one-whole">
        <?php the_title('<h1 class="page__title soft--bottom text--secondary fa-angle-right"> ', '</h1>'); ?>
  		</div><!--/.grid__item -->

  		<div class="grid__item">

          <?php if ( have_posts() ) : ?>
            
          	<?php while ( have_posts() ) : the_post(); ?>

              	<?php the_content(); ?>

          	<?php endwhile; ?>
          
          <?php else : ?>
          
          	<section class="no-results not-found entry">
            	<div class="entry-content">
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
            	</div><!--/.entry-content -->
            </section>
          
          <?php endif; ?>

  		</div><!-- /.grid__item -->

  	</div><!--/.grid (outer) -->

  </div><!--/.wrapper -->

<?php get_footer(); ?>
