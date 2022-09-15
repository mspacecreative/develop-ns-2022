<?php 
$featuredimg = get_field('featured_image');
$featvideo = get_field('featured_video');
$featuredimgsize = 'anamorphic';
$textureelement = get_field('texture_element');
$tapeplacement = get_field('tape_texture_placement');
$dashedlineplacement = get_field('dashed_line_placement');

switch ($tapeplacement) {
	case 'top-left':
		$tapeplacement = ' tape-top-left';
		break;
	case 'top-right':
		$tapeplacement = ' tape-top-right';
		break;
	case 'bottom-left':
		$tapeplacement = ' tape-bottom-left';
		break;
	case 'bottom-right':
		$tapeplacement = ' tape-bottom-right';
		break;
	default:
		$tapeplacement = '';
}

if ($featuredimg): ?>
<section class="video-section">
	<div class="photoZoom videoOverlay<?php if ($tapeplacement): echo $tapeplacement; endif; if ($dashedlineplacement == 'left'): echo ' verticalStitchLeft'; elseif ($dashedlineplacement == 'right'): echo ' verticalStitchRight'; endif; ?>">
				
		<?php 
		if ($featvideo):
		setup_postdata($featvideo);
		$title = get_the_title($featvideo->ID); ?>
		<a href="<?php echo the_permalink($featvideo->ID); ?>" data-id="<?php echo $featvideo->ID ?>" class="open-modal" title="<?php echo $title ?>">
			<?php echo wp_get_attachment_image( $featuredimg, $featuredimgsize ); ?>
		</a>
		<?php endif; ?>
				
	</div>
</section>
<?php endif; ?>