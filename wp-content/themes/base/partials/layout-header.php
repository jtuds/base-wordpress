<header class="header">

	<a class="logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">CandidSky</a>

	<div class="navs">
		<nav class="nav nav--primary"><?php wp_nav_menu(['theme_location' => 'primary', 'container' => '']); ?></nav>
		<nav class="nav nav--secondary"><?php wp_nav_menu(['theme_location' => 'secondary', 'container' => '']); ?></nav>
	</div><!--/.navs -->

	<button type="button" class="btn nav__toggle ss-menu" id="nav-toggle">Show navigation</button>
	
</header>