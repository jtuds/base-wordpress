<?php
	switch (get_sub_field('style'))
	{
		case 'subtle': $class = 'panel panel--subtle'; break;
		case 'strong': $class = 'panel panel--strong'; break;
		default: $class = 'panel';
	}
?>
<section class="<?php echo $class; ?>">
  <div class="wrapper">
  	<?php if ($v = get_sub_field('title')) echo '<h1>' . $v . '</h1>'; ?>
  
  	<div class="grid">
  
  		<div class="flexible__columns">
  			<?php
  				// First get all the columns.
  				if ($columns = get_sub_field('columns'))
  				{
  					// Divide it equally.
  					switch (count($columns))
  					{
  						case 6: $class = 'grid__item two-twelfths'; break;
  						case 5: $class = 'grid__item one-fifth'; break;
  						case 4: $class = 'grid__item one-quarter'; break;
  						case 3: $class = 'grid__item one-third'; break;
  						case 2: $class = 'grid__item one-half'; break;
  						case 1: $class = 'grid__item one-whole'; break;
  						default: $class = 'grid__item';
  					}
  
  					// Loop.
  					foreach ($columns as $column)
  					{
  						// Link and tag type.
  						switch ($column['link'])
  						{
  							case 'url': $tag = 'a'; $link = ' href="' . esc_url($column['link_url']) . '"'; break;
  							case 'page': $tag = 'a'; $link = ' href="' . esc_url($column['link_page']) . '"'; break;
  							default: $tag = 'section'; $link = '';
  						}
  
  						// Open.
  						echo '<' . $tag . ' class="' . $class . '"' . $link . '>';
  						  
  						  echo '<div class="card card--column' . ($column['title'] ? ' card--has-excerpt' : false ) . '">';
  
  							// Title.
  							if ($column['title']) echo '<h2 class="card__heading">' . esc_html($column['title']) . '</h2>';
  	            
  							// Content.
  							if ($column['content'])
  							{
    							echo '<div class="card__description">';
    							echo wpautop($column['content']);
    							echo '</div>';
    						}
                
                echo '</div>';
                
  						// Close.
  						echo '</' . $tag . '>';
  					}
  				}
  			?>
  		</div><!--/.fliexble_columns -->
  
  	</div><!--/.grid -->
  </div><!--/.wrapper -->
</section>