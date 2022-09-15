<?php 
if ( have_rows('flexible_content') ): 
while ( have_rows('flexible_content') ): the_row();
				
	if ( get_row_layout() == 'image_list' ):
	$flexgallery = get_sub_field('flex_gallery');
	$animate = get_sub_field('animate');
	$animatedirection = get_sub_field('animation_direction');
	$maxwidth = get_sub_field('max_width');
	$imgalignment = get_sub_field('image_alignment');
	$captionalignment = get_sub_field('caption_alignment');
	$flexbox = get_sub_field('flexbox_layout');
	
	switch ($captionalignment) {
		case 'left':
			$captionalignment = '';
			break;
		case 'center':
			$captionalignment = ' text-align-center';
			break;
		case 'right':
			$captionalignment = ' text-align-right';
			break;
		default:
			$captionalignment = '';
	}
	
	switch ($animatedirection) {
		case 'up':
			$animatedirection = 'up';
			break;
		case 'left':
			$animatedirection = 'left';
			break;
		case 'right':
			$animatedirection = 'right';
			break;
		default:
			$animatedirection = 'up';
	}
					
		if ( $flexgallery ): ?>
		<ul class="flex-gallery<?php if ($imgalignment == 'center'): echo ' img-align-center'; elseif ($imgalignment == 'right'): echo ' img-align-right'; endif; if ($flexbox): echo ' flexbox-layout'; endif; ?>"<?php if ($maxwidth): echo ' style="max-width: '; echo $maxwidth; echo ';"'; endif; ?>>
							
			<?php foreach ( $flexgallery as $fleximage ):
			$caption = $fleximage['caption']; ?>
			<li<?php if ($animate): echo ' data-aos="fade-'; if ($animatedirection): echo $animatedirection; endif; echo'"'; endif; ?>>
				<img src="<?php echo $fleximage['sizes']['large']; ?>" alt="<?php echo $fleximage['alt']; ?>" />
				<?php if ($caption): ?>
				<p class="img-caption<?php if ($captionalignment): echo $captionalignment; endif; ?>"><?php echo $caption ?></p>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
							
		</ul>
		<?php endif;
						
	elseif ( get_row_layout() == 'flex_text' ):
	$flextext = get_sub_field('text_editor');
						
		if ( $flextext ):
			include 'module-margins.php';
			echo $flextext;
			if ( have_rows('module_margins') ): while ( have_rows('module_margins') ): the_row();
			echo
			'</div>';
			endwhile; endif;
		endif;
						
	elseif ( get_row_layout() == 'spacer' ):
	$spacerheight = get_sub_field('spacer_height');
	switch ($spacerheight) {
		case 'default':
			$spacerheight = '';
			break;
		case 'tall':
		$spacerheight = ' flex-spacer-tall';
		break;
	default:
		$spacerheight = '';
	} ?>
						
		<div class="flex-spacer<?php if ($spacerheight): echo $spacerheight; endif; ?>">&nbsp;</div>
						
	<?php elseif ( get_row_layout() == 'post_content' ):
	$video = get_sub_field('video');
	$animate = get_sub_field('animate');
	$animatedirection = get_sub_field('animation_direction');
	//$issuu = get_sub_field('issuu');
					
		if ($video):
			setup_postdata($video);
			// VARIABLES
			$thumb = get_the_post_thumbnail_url( $video->ID, 'large');
			$title = get_the_title($video->ID); ?>
						 	
			<div<?php if ($animate): echo ' data-aos="fade-'; if ($animatedirection): echo $animatedirection; endif; echo'"'; endif; ?> class="photoZoom videoOverlay">
				<a data-id="<?php echo $video->ID ?>" class="open-modal" title="<?php echo $title ?>" href="<?php echo the_permalink($video->ID); ?>">
					<?php if ($thumb): ?>
					<img src="<?php echo $thumb ?>">
					<?php else: ?>
					<div class="video-placeholder-container">
						<div class="video-placeholder">
							<h3 style="color: #fff; padding: 0 1em;"><?php echo $title ?></h3>
						</div>
					</div>
					<?php endif; ?>
				</a>
			</div>
		<?php 
		endif;
					
	endif;
				
endwhile;
endif;