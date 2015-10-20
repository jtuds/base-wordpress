<?php
	switch (get_sub_field('style'))
	{
		case 'subtle': $class = 'panel panel--subtle'; break;
		case 'strong': $class = 'panel panel--strong'; break;
		default: $class = 'panel';
	}
?>
<section class="<?php echo $class; ?>">

		<?php
			$venue = get_sub_field('venue');
			$address = get_sub_field('address');
			$center = str_replace([' ', '<br>'], ['+', ','], $address);
			$color = '#1d1d1b';
			$image = 'https://maps.googleapis.com/maps/api/staticmap?v=1&center=' . urlencode($center) . '&size=960x540&maptype=roadmap&zoom=14&markers=size:large%7Ccolor:0x1BC9E0%7C' . urlencode($center);
		?>
		
		<div class="wrapper">

  		<div class="grid">
  
  			<div class="grid__item desk-narrow-max-one-whole one-half">
  				<div class="map flexible__map"><div class="flexible__map--stretch" style="background-image: url(<?php echo $image ?>);"></div></div>
  			</div><!--/.grid__item -->
  
  			<div class="grid__item desk-narrow-max-one-whole one-half">
  				<div class="flexible__content--right">
  				  <?php if ( $v = get_sub_field('title') ) echo '<h1>' . get_sub_field('title') . '</h1>'; ?>
  					<?php echo get_sub_field('content'); ?>
  				</div><!--/.block -->
  			</div><!--/.grid__item -->
  			
  		</div><!--/.grid -->
		
    </div><!--/.wrapper -->
    
</section>