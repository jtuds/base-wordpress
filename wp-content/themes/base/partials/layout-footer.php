<footer class="footer">
  <div class="wrapper">
  	<div class="grid">
  
  		<div class="grid__item desk-narrow-max-one-whole three-tenths vertical-align-middle">
  		  <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-tagline-white.svg">
  		</div><!--/.grid__item -->
  		<div class="grid__item desk-narrow-max-one-whole seven-tenths vertical-align-middle">
  			<div class="soft--top soft--bottom soft--left">
  			  <div class="vertical-align-middle desk-narrow-max-one-whole four-tenths soft--right">
  			    <h3 class="milli-size weight--bold text--white">Sign up to receive our latest news and special offers</h3>
          </div><div class="vertical-align-middle desk-narrow-max-one-whole six-tenths">
    			  <?php include(get_template_directory() . '/inc/subscribe-form.php'); ?>
  			  </div>
        </div>
        <?php dynamic_sidebar('footer'); ?>
  		</div><!--/.grid__item -->
  
  	</div><!--/.grid -->
  </div><!--/.wrapper -->
</footer>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="<?php getThemePath(); ?>/dist/js/selectivizr.js"></script>
<![endif]-->

<?php wp_footer(); ?>

<noscript>
  <link rel="stylesheet" href="<?php getThemePath(); ?>/dist/css/no-js.css">
</noscript>

</body>
</html>