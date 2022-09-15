<div class="hero">
	<div class="innerContainer">
		<div class="heroContentBox">
			<h1>
				<?php
				$herotitle = get_field('hero_title'); 
				if ( $herotitle ) {
					echo $herotitle;
				}
				?>
			</h1>
		</div>
	</div>
	
	<!-- HERO CAROUSEL -->
	<div class="carouselContainer">
		<div class="carousel">
			<div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/hero/hero-1.jpg);">
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/hero/hero-2.jpg);">
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/hero/hero-3.jpg);">
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/hero/hero-4.jpg);">
			</div>
			<div>
				<img src="<?php echo get_template_directory_uri() ?>/assets/img/hero/hero-5.jpg);">
			</div>
		</div>
	</div>
	<!-- / HERO CAROUSEL -->
	
</div>

<section>
	<div class="innerContainer">
		<p class="hero-caption"><?php echo __('Lunenburg Doc Fest 2021, photo credit Nancy MacDonald'); ?></p>
	</div>
</section>