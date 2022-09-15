<?php
$bgimg = get_field('background_image');
$bgcolor = get_field('background_color');
$bgimgoverlay = get_field('background_image_overlay');
$width = get_field('content_width');
$dasheddivider = get_field('dashed_divider');

// CUSTOM ID
$id = '' . $block['id'];
if ( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}
// CUSTOM CLASS	
$className = '';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}

switch ($bgimgoverlay) {
	case 'dark':
		$bgimgoverlay = ' dark-overlay';
		break;
	case 'light':
		$bgimgoverlay = ' light-overlay';
		break;
	default:
		$bgimgoverlay = '';
}

switch ($bgcolor) {
	case 'dark':
		$bgtint = ' darkbg';
		break;
	case 'light':
		$bgtint = ' lightbg';
		break;
	default:
		$bgtint = '';
} ?>
	
<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="content-section<?php if ($dasheddivider): echo ' dashed-divider'; endif; if ( $className ): echo esc_attr($className); endif; if ($bgimgoverlay): echo $bgimgoverlay; endif; if ($bgtint): echo $bgtint; endif; if ($bgimg): echo ' bg-img-cover'; endif; ?>"<?php if ($bgimg): echo ' style="background-image: url('; echo $bgimg; echo ');"'; endif; ?>>
	<div class="bullet-points innerContainer<?php if ($width): echo ' maxWidth850'; endif; ?>">
		<?php include('includes/section-content-loop.php'); ?>
	</div>
</section>