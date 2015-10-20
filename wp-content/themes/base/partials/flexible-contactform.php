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
  
  	<?php if ($title = get_sub_field('title')) echo '<h1 class="heading">' . $title . '</h1>'; ?>
  
  	<div class="grid">
  
  		<div class="grid__item one-whole">
  
  			<div class="form form--contact form--ninja flexible__form">
  				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
  			</div><!--/.form -->
  			
  		</div><!--/.grid__item -->
  
  	</div><!--/.grid -->
  	
  </div><!--/.wrapper -->
</section>