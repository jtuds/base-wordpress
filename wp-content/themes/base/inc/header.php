<body <?php body_class(); ?>>
	
	<header class="l-sitewide-header sitewide-header">

		<a class="logo sitewide-header__logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">CandidSky</a>

		<div class="navs sitewide-header__navs">

			<nav class="nav nav--primary"><?php wp_nav_menu(['theme_location' => 'primary', 'container' => '']); ?></nav>

			<?php if(has_nav_menu('secondary')): ?>
			<nav class="nav nav--secondary"><?php wp_nav_menu(['theme_location' => 'secondary', 'container' => '']); ?></nav>
			<?php endif; ?>

		</div><!--/.navs -->

		<button type="button" class="btn nav__toggle ss-menu" id="nav-toggle">Show navigation</button>
		
	</header>

<?php include('breadcrumbs.php'); ?>