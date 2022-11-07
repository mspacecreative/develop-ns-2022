<?php 
get_header();
$pagetitle = get_the_title();
$featuredimg = get_the_post_thumbnail($post->ID, 'large' );
$featuredbgimg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$themecolour = get_field('theme_colour');
$icon = get_field('icon');
$size = 'icon';

switch ($themecolour) {
	case 'orange':
		$themecolour = 'background-color: #f36f00';
		break;
	case 'blue':
		$themecolour = 'background-color: #008fb7';
		break;
	case 'navy':
		$themecolour = 'background-color: #012a3c';
		break;
	default:
		$themecolour = 'background-image: url(' . $featuredbgimg[0] . ')';
		break;
}

echo	
'<div class="pageHeader" style="' . $themecolour . ';">';
	if ( !empty($icon) ) {
	echo
	'<div class="row pageHeaderBgGrid end-lg end-md end-sm end-xs">
		<div class="col col-lg-7 col-md-7 col-sm-5 col-xs-6 absoluteImgContainer absolutePositionedImg">'
			. $featuredimg .
		'</div>
	</div>';
	}
	
	echo
	'<div class="innerContainer">';
				 		
		if ( !empty($icon) ) {
		echo
		'<div class="row">
			
			<div class="col col-lg-5 col-md-5 col-sm-4 col-xs-12">
				<div class="iconAndTitleContainer clear desktopLayout" style="' . $themecolour . '">
					<div class="imgContainer">'
						. wp_get_attachment_image( $icon, $size ) .
					'</div>
					<h1>' . $pagetitle . '</h1>
				</div>
			</div>
								
		</div>';
		} else {
			echo 
			'<div class="iconAndTitleContainer noBgColor clear">
	 			<h1>' . $pagetitle . '</h1>
	 		</div>';
		}
	
	echo
	'</div>
</div>';
				
echo
'<div class="iconAndTitleContainer mobileLayout" style="' . $themecolour . ';">
	<div class="imgContainer">'
		. wp_get_attachment_image( $icon, $size ) .
	'</div>
	<h1>' . $pagetitle . '</h1>
</div>';