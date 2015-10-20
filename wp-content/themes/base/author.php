<?php 
get_header();

if (is_category())
{
  $this_category = get_category($cat);
} 
else 
{
  $this_category = get_the_category($post->ID);
  $this_category = $this_category[0];
}
?>
<div class="wrapper push--bottom">

    <div class="grid">

      <div class="grid__item one-whole">
        <?php
          $curauth = get_userdata(intval($author));
        ?>

        <h1 class="page__title soft--bottom text--secondary fa-angle-right"> <?php echo ucfirst($curauth->display_name) ?></h1>

     </div><!--/.grid__item

      --><div class="grid__item palm-one-whole mid-one-whole two-thirds">

        <div class="grid">
          <div class="grid__item palm-one-whole one-quarter">
           <?php echo '<span>' . get_wp_user_avatar( get_the_author_meta( 'user_email' ), 150 ) . '</span>'; ?>
          </div><!--

      --><div class="grid__item palm-one-whole push--bottom three-quarters">
            <div class="author-social">
              <?php 
                $theme_path = get_template_directory_uri();

                if ($curauth->website)
                  echo '<a href="' . $curauth->website . '"><img class="author-social-icon" src="' . $theme_path . '/dist/images/twitter_circle_color.png"></a>';
                if ($curauth->twitter)
                  echo '<a href="' . $curauth->twitter . '"><img class="author-social-icon" src="' . $theme_path . '/dist/images/twitter_circle_color.png"></a>';
                if ($curauth->facebook)
                  echo '<a href="' . $curauth->facebook . '"><img class="author-social-icon" src="' . $theme_path . '/dist/images/facebook_circle_color.png"></a>';
                if ($curauth->google)
                  echo '<a href="' . $curauth->google . '"><img class="author-social-icon" src="' . $theme_path . '/dist/images/google_circle_color.png"></a>';
                if ($curauth->linkedin)
                  echo '<a href="' . $curauth->linkedin . '"><img class="author-social-icon" src="' . $theme_path . '/dist/images/linkedin_circle_color.png"></a>';
              ?>
              <hr>
            </div>
            <?php echo '<p class="author-description">' . get_the_author_meta('description', $curauth->ID) . '</p>'; ?>
          </div>

          <div class="push--top">

            <div class="grid__item one-whole">
              <h2 class="form__title-border">Recent Blog Posts By <?php echo $curauth->display_name; ?></h2>
            </div>
           
                <?php if ( have_posts('posts_per_page=5') ) : while ( have_posts('posts_per_page=5') ) : the_post();
                $category = get_the_category();

                  $day = get_the_date('d');
                  $month = get_the_date('M');
                  $year = get_the_date('Y');
                ?>
                    <div class="grid__item one-whole">
                      <div class="post-meta">
                        <div class="post-date vertical-align-top">
                          <span class="list-date">
                            <span class="list-date-month"><?php echo $month; ?></span>
                            <span class="list-date-day text--secondary"><?php echo $day; ?></span>
                            <span class="list-date-year"><?php echo $year; ?></span>
                          </span>
                        </div><div class="list-title vertical-align-top">
                          <h3 class="list-heading"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                          <div class="list-category">
                            Written by <span class="list-link"><a href="<?php echo get_author_posts_url($post->post_author); ?>"><?php echo get_the_author(); ?></span></a>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class="grid__item one-whole push--bottom">
                        <a href="<?php echo get_permalink(); ?>">
                          <p class="single-list-text">
                            <?php the_excerpt(); ?>
                          </p>
                        </a>
                      </div>
                  <?php endwhile; ?>
                  <?php else: ?>
                    <p><?php _e('No posts by this author.'); ?></p>
                <?php endif; ?>

          </div> <!-- Close inner grid item -->
        </div><!--  close inner grid -->
      </div><!-- /.grid__item

        Sidebar
       --><div class="grid__item palm-one-whole mid-one-whole one-third">

        <?php include (dirname(__FILE__) . '/inc/sidebars.php'); ?>

      </div> <!-- /.grid__item -->

    </div> <!-- /.grid (outer) -->

  </div> <!-- /.wrapper -->
<?php get_footer(); ?>

