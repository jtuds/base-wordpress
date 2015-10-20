<?php if ($content = get_the_content()) { ?>
	<section class="panel">
    <div class="wrapper">
  		<div class="grid text--center">
  
  			<div class="grid__item ten-twelfths">
  				<?php echo apply_filters('the_content', $content); ?>
  			</div><!--/.grid__item -->
  
  		</div><!--/.grid -->
    </div>
	</section>
<?php } ?>