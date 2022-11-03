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
				<img src="<?php echo get_home_url(); ?>/wp-content/themes/develop-ns-2022/assets/img/hero/Peggys-Cove-new-decking-homepage.jpg">
			</div>
		</div>
	</div>
	<!-- / HERO CAROUSEL -->
	
</div>

<!--<section>
	<div class="innerContainer">
		<p class="hero-caption"><?php echo __('Lunenburg Doc Fest 2021, photo credit Nancy MacDonald'); ?></p>
	</div>
</section>-->