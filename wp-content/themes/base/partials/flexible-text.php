<?php
	// Class.
	switch (get_sub_field('style'))
	{
		case 'subtle': $class = 'panel panel--subtle'; break;
		case 'strong': $class = 'panel panel--strong'; break;
		default: $class = 'panel';
	}

	// Link and tag type.
	switch (get_sub_field('link'))
	{
		case 'url': $tag = 'a'; $link = ' href="' . esc_url(get_sub_field('link_url')) . '"'; break;
		case 'page': $tag = 'a'; $link = ' href="' . esc_url(get_sub_field('link_page')) . '"'; break;
		default: $tag = 'section'; $link = '';
	}

	// Get image/icon type.
	$type = get_sub_field('type');
	$types = array('icon_right', 'icon_left', 'image_right', 'image_left');
?>
<?php if ( get_row_layout() === 'text' ) : ?>
<?php echo '<' . $tag . ' class="' . $class . '"' . $link . '>'; ?>
  <div class="wrapper">
  	<div class="grid<?php if ( ! in_array($type, $types) ) echo ' text--center'; ?>">
  
  		<?php if ($type === 'icon_right'): ?>
  
  			<div class="grid__item">
  
  				<div class="flexible__text flexible__text--has-icon">
  
  					<div class="grid">
  
  						<div class="grid__item desk-narrow-max-one-whole six-tenths">
  							<div class="flexible__content--left">
  							  <?php if ($v = get_sub_field('title')) echo '<h1 class="first">' . esc_html($v) . '</h1>'; ?>
    							<?php echo wpautop(get_sub_field('content')); ?>
    						</div>
  						</div><!--/.grid__item -->
  
  						<div class="grid__item desk-narrow-max-one-whole four-tenths">
  							<?php if ($v = get_sub_field('icon')) echo '<span class="icon icon--' . $v . ' flexible__text__icon flexible__text__icon--right"></span>'; ?>
  						</div><!--/.grid__item -->
  
  					</div><!--/.grid -->
  
  				</div><!--/.flexible__text -->
  
  			</div><!--/.grid__item -->
  
  		<?php elseif ($type === 'icon_left'): ?>
  
  			<div class="grid__item">
  
  				<div class="flexible__text flexible__text--has-icon">
  					
  					<div class="grid">
  
  						<div class="grid__item desk-narrow-max-one-whole four-tenths">
  							<?php if ($v = get_sub_field('icon')) echo '<span class="icon icon--' . $v . ' flexible__text__icon flexible__text__icon--left"></span>'; ?>
  						</div><!--/.grid__item -->
  
  						<div class="grid__item desk-narrow-max-one-whole six-tenths">
  							<div class="flexible__content--right">
  							  <?php if ($v = get_sub_field('title')) echo '<h1 class="first">' . esc_html($v) . '</h1>'; ?>
    							<?php echo wpautop(get_sub_field('content')); ?>
    						</div>
  						</div><!--/.grid__item -->
  
  					</div><!--/.grid -->
  
  				</div><!--/.flexible__text -->
  
  			</div><!--/.grid__item -->
  
  		<?php elseif ($type === 'image_right'): ?>
  
  			<div class="grid__item desk-narrow-max-one-whole six-tenths">
  			  <div class="flexible__content--left">
    				<?php if ($v = get_sub_field('title')) echo '<h1>' . esc_html($v) . '</h1>'; ?>
    				<?php echo wpautop(get_sub_field('content')); ?>
  				</div>
  			</div><!--/.grid__item -->
  
  			<div class="grid__item desk-narrow-max-one-whole four-tenths">
  				<figure>
  					<?php
  						if ($v = get_sub_field('image')) echo '<img class="flexible__img flexible__img--third" src="' . esc_url($v['sizes']['600x600']) . '" alt="' . esc_attr($v['alt']) . '">';
  						if ($v = get_sub_field('caption')) echo '<figcaption>' . esc_html($v) . '</figcaption>';
  					?>
  				</figure>
  			</div><!--/.grid__item -->
  
  		<?php elseif ($type === 'image_left'): ?>
  
  			<div class="grid__item desk-narrow-max-one-whole four-tenths">
  				<figure>
  					<?php
  						if ($v = get_sub_field('image')) echo '<img class="flexible__img flexible__img--third" src="' . esc_url($v['sizes']['600x600']) . '" alt="' . esc_attr($v['alt']) . '">';
  						if ($v = get_sub_field('caption')) echo '<figcaption>' . esc_html($v) . '</figcaption>';
  					?>
  				</figure>
  			</div><!--/.grid__item -->
  			<div class="grid__item desk-narrow-max-one-whole six-tenths">
  				<div class="flexible__content--right">
    				<?php if ($v = get_sub_field('title')) echo '<h1>' . esc_html($v) . '</h1>'; ?>
    				<?php echo wpautop(get_sub_field('content')); ?>
          </div>
  			</div><!--/.grid__item -->
  
  		<?php else: ?>
  
  			<div class="grid__item desk-narrow-max-one-whole eight-twelfths text--left">
  				<?php if ($v = get_sub_field('title')) echo '<h1>' . esc_html($v) . '</h1>'; ?>
  				<?php echo wpautop(get_sub_field('content')); ?>
  			</div><!--/.grid__item -->
  
  		<?php endif; ?>
    </div><!--/.grid -->
	</div><!--/.wrapper -->

<?php echo '</' . $tag . '>'; ?>
<?php endif; ?>