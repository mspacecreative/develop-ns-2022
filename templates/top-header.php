<!-- header -->
<header id="header" class="header clear" role="banner">

	<!-- INNER CONTAINER -->
	<div class="innerContainer clear">

		<!-- logo -->
		<div class="logo"><a href="<?php echo esc_url( home_url() ); ?>">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/branding/logo.svg" alt="Develop Nova Scotia" class="logo-img">
		</a></div>
		<!-- /logo -->
	
		<!-- nav -->
		<nav class="nav" role="navigation">
			<?php dns_nav(); ?>
		</nav>
		<!-- /nav -->
	
	</div>
	<!-- / INNER CONTAINER -->
	
</header>
<!-- /header -->