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
	
	<?php
	$images = get_field('slider_images');
	$size = 'full'; ?>
	<!-- HERO CAROUSEL -->
	<div class="carouselContainer">
		<div class="carousel">
			<?php 
			if ($images):
			foreach ($images as $image) : ?>
			<div>
				<?php echo wp_get_attachment_image( $image, $size ); ?>
			</div>
			<?php 
			endforeach;
			else : ?>
			<div>
				<img src="<?php echo get_home_url(); ?>/wp-content/themes/develop-ns-2022/assets/img/hero/Peggys-Cove-new-decking-homepage.jpg">
			</div>
			<?php 
			endif; ?>
		</div>
	</div>
	<!-- / HERO CAROUSEL -->
	
</div>

<!--<section>
	<div class="innerContainer">
		<p class="hero-caption"><?php echo __('Lunenburg Doc Fest 2021, photo credit Nancy MacDonald'); ?></p>
	</div>
</section>-->