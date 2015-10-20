<?php
	if ($background = get_field('image'))
	{
		echo '<header class="banner banner--image">';
		echo '<style>';

			// Defaults to 1280px wide banner.
			echo '.banner--image { background-image: url(' . esc_attr($background['sizes']['banner']) . '); }';

			// Extra wide monitors and >1.5x devices use 2560px wide banner.
			// Detected using
			echo '@media (min-width: 1639px), (min-width: 1280px) and (-webkit-min-resolution: 1.5dppx), (min-width: 1280px) and (min-resolution: 1.5dppx) { .banner { background-image: url(' . esc_attr($background['sizes']['banner2x']) . '); }}';

			// Mobile size use 960px wide banner.
			echo '@media (max-width: 480px) { .banner--image { background-image: url(' . esc_attr($background['sizes']['full']) . '); }}';

		echo '</style>';
	}
	else echo '<header class="banner banner--no-image banner--background-primary">';
?>
  <div class="wrapper">
  	<div class="grid">
  
  		<div class="grid__item one-whole text--center">
  			<?php
  				// Vars.
  				$type = get_post_type();
  
  				// Overridden title, or fallback default title.
  				if ($v = get_field('page_title'))
  				{
  					// Overridden title.
  					echo '<h1 class="heading banner__heading banner__heading--overridden">' . esc_html($v) . '</h1>';
  
  					// Optional overridden subtitle.
  					if ($v = get_field('page_subtitle')) echo '<p class="subheading banner__subheading banner__subheading--overridden">' . esc_html($v) . '</p>';
  				}
  				elseif (is_category())
  				{
  					// Category title.
  					echo '<h1 class="heading banner__heading banner__heading--category">' . single_cat_title('', true) . '</h1>';
  
  					// Standardised blog category.
  					echo '<p>Blog category</p>';
  				}
  				elseif ($type === 'post')
  				{
  					// Normal title.
  					echo '<h1 class="heading banner__heading banner__heading--post">' . esc_html(get_the_title()) . '</h1>';
  
  					// Date.
  					echo '<p class="class="meta date banner__meta banner__date"">' . esc_html(get_the_date()) . '</p>';
  
  					// Author.
  					echo '<p class="author banner__author">' . get_avatar(get_the_author_meta('ID'), 64) . '<br>' . get_the_author() . '</p>';
  				}
  				else
  				{
  					// Normal title.
  					echo '<h1 class="heading banner__heading">' . esc_html(get_the_title()) . '</h1>';
  
  					// Optional overridden subtitle.
  					if ($v = get_field('page_subtitle')) echo '<p class="subheading banner__subheading">' . esc_html($v) . '</p>';
  				}
  
  				// Link button.
  				$link = get_field('link');
  				$text = get_field('link_text');
  				if ($link === 'url')
  				{
  					// Link to a URL.
  					echo '<a href="' . esc_url(get_field('link_url')) . '" class="btn banner__btn">' . esc_html($text) . '</a>';
  				}
  				elseif ($link === 'page')
  				{
  					// Link to a page.
  					echo '<a href="' . esc_url(get_field('link_page')) . '" class="btn banner__btn">' . esc_html($text) . '</a>';
  				}
  
  				if(is_singular('portfolio'))
  				{
  					?>
  					<div class="flags">
  						<?php echo get_the_term_list(get_the_ID(), 'portfolio_category', '', ' &#124; '); ?>
  					</div><!--/.flags -->
  					<?php
  				}
  			?>
  		</div><!--/.grid__item -->
  
  	</div><!--/.grid -->
  </div><!--/.wrapper -->
</header>