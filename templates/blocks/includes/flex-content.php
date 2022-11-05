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
	$topmargin = get_sub_field('top_margin');
	
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
		<ul class="flex-gallery<?php if ($imgalignment == 'center'): echo ' img-align-center'; elseif ($imgalignment == 'right'): echo ' img-align-right'; endif; if ($flexbox): echo ' flexbox-layout'; endif; ?>"<?php if ($maxwidth && $topmargin): echo ' style="max-width: '; echo $maxwidth; echo '; margin-top: '; echo $topmargin; echo ';"'; elseif ($maxwidth): echo ' style="max-width: '; echo $maxwidth; echo ';"'; elseif ($topmargin): echo ' style="margin-top: '; echo $topmargin; echo ';"'; endif; ?>>
							
			<?php foreach ( $flexgallery as $fleximage ):
			$caption = $fleximage['caption']; ?>
			<li<?php if ($animate): echo ' data-aos="fade-'; if ($animatedirection): echo $animatedirection; endif; echo'"'; endif; ?>>
				<img src="<?php echo $fleximage['sizes']['xlarge']; ?>" alt="<?php echo $fleximage['alt']; ?>" />
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
	$customspacing = $spacerheight == 'custom' ? ' style="height: ' . get_sub_field('custom_spacing') . ';"' : '';
	$hideonmobile = get_sub_field('hide_on_mobile') ? ' hide-on-mobile' : '';
	$reduceheightonmobile = $hideonmobile == 'FALSE' && get_sub_field('reduce_height_on_mobile') ? ' flex-spacer__mobile' : '';
	/*switch ($spacerheight) {
		case 'default':
			$spacerheight = '';
			break;
		case 'tall':
			$spacerheight = ' flex-spacer-tall';
			break;
		default:
			$spacerheight = '';
			break;
	}*/ ?>
						
		<div class="flex-spacer<?php if ($spacerheight == 'tall'): echo ' flex-spacer-tall'; endif; echo $hideonmobile, $reduceheightonmobile ?>"<?php echo $customspacing ?>>&nbsp;</div>
						
	<?php elseif ( get_row_layout() == 'post_content' ):
	$video = get_sub_field('video');
	$article = get_sub_field('article');
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

		elseif ($article):
			setup_postdata($article);
			foreach ($article as $item) :
				// VARIABLES
				$externalurl = get_field('article_url', $item->ID) ? '<a class="button navy_bg" href="' . get_field('article_url', $item->ID) . '" target="_blank" style="margin-top: 20px;">' . __('Read more') . '</a>' : '';
				$date = get_the_date('F j, Y', $item->ID);
				$title = get_the_title($item->ID);
				$terms = get_the_terms($item->ID, 'company'); ?>
								
				<div<?php if ($animate): echo ' data-aos="fade-'; if ($animatedirection): echo $animatedirection; endif; echo'"'; endif; ?> class="row article-container">
					<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2" style="flex-basis: auto; max-width: 100%;">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/icons/article-icon.svg'; ?>" style="margin-top: 5px;">
					</div>
					<div class="col col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<h4>
							<?php echo $title . __(' ...'); ?>
						</h4>
						<div class="article-meta-data">
						<?php
						foreach ($terms as $term) {
							echo 
							'<span class="small-text">' . $term->name . '</span>';
						}
						echo ' | ' . $date; ?>
						</div>
						<?php echo $externalurl ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php 
		endif;
					
	endif;
				
endwhile;
endif;