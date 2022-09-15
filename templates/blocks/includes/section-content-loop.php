<?php 
$padding = get_field('section_padding');
$content = get_field('content_editor');
$txtalign = get_field('text_alignment');

switch ($padding) {
	case 'top':
		$padding = ' top-padding';
		break;
	case 'bottom':
		$padding = ' bottom-padding';
		break;
	case 'both':
		$padding = ' top-bottom-padding';
		break;
	default:
		$padding = ' top-bottom-padding';
}
switch ($txtalign) {
	case 'left':
		$txtalign = '';
		break;
	case 'center':
		$txtalign = ' text-align-center';
		break;
	case 'right':
		$txtalign = ' text-align-right';
		break;
	default:
		$txtalign = '';
} ?>

<div class="clear<?php if ($padding): echo $padding; endif; if ($txtalign): echo $txtalign; endif; ?>">
	
	<?php
	if ( $content ) {
		echo $content;
		if ($bgcolor = 'light') {
		include 'content-cta-button-light.php';
		} elseif ($bgcolor = 'dark') {
		include 'content-cta-button-dark.php';
		} else {
		include 'content-cta-button-light.php';	
		}
	} ?>
			
</div>