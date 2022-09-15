<?php 
get_header();
$pagetitle = get_the_title();
$featuredimg = get_the_post_thumbnail($post->ID, 'large' );
$featuredbgimg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$themecolour = get_field('theme_colour');
$icon = get_field('icon');
$size = 'icon';

if ( $themecolour ) {

	if ( $themecolour == 'orange' ) {
		echo	'<div class="pageHeader" style="background-color: #f36f00;">
				 	<div class="row pageHeaderBgGrid end-lg end-md end-sm">
				 		<div class="col col-lg-7 col-md-7 col-sm-5 col-xs-12 absoluteImgContainer absolutePositionedImg">'
				 			. $featuredimg .
				 		'</div>
				 	</div>
			 	
		   			<div class="innerContainer">
				 		<div class="row">
				 			
				 			<div class="col col-lg-5 col-md-5 col-sm-4 col-xs-12">
						 		<div class="iconAndTitleContainer clear desktopLayout" style="background-color: #f36f00;">
						 			<div class="imgContainer">'
						 				. wp_get_attachment_image( $icon, $size ) .
						 			'</div>
						 			<h1>' . $pagetitle . '</h1>
						 		</div>
						 	</div>
						 	
					 	</div>
			 		</div>
				</div>
				<div class="iconAndTitleContainer mobileLayout" style="background-color: #f36f00;">
					<div class="imgContainer">'
						. wp_get_attachment_image( $icon, $size ) .
					'</div>
					<h1>' . $pagetitle . '</h1>
				</div>';
	} elseif ( $themecolour == 'blue' ) {
		echo	'<div class="pageHeader" style="background-color: #008fb7;">
				 	<div class="row pageHeaderBgGrid end-lg end-md end-sm">
				 		<div class="col col-lg-7 col-md-7 col-sm-5 col-xs-12 absoluteImgContainer absolutePositionedImg">'
				 			. $featuredimg .
				 		'</div>
				 	</div>
			 	
		   			<div class="innerContainer">
				 		<div class="row">
				 			
				 			<div class="col col-lg-5 col-md-5 col-sm-4 col-xs-12">
						 		<div class="iconAndTitleContainer clear desktopLayout" style="background-color: #008fb7;">
						 			<div class="imgContainer">'
						 				. wp_get_attachment_image( $icon, $size ) .
						 			'</div>
						 			<h1>' . $pagetitle . '</h1>
						 		</div>
						 	</div>
						 	
					 	</div>
			 		</div>
				</div>
				<div class="iconAndTitleContainer mobileLayout" style="background-color: #008fb7;">
					<div class="imgContainer">'
						. wp_get_attachment_image( $icon, $size ) .
					'</div>
					<h1>' . $pagetitle . '</h1>
				</div>';
	} elseif ( $themecolour == 'navy' ) {
		echo	'<div class="pageHeader" style="background-color: #012a3c;">
				 	<div class="row pageHeaderBgGrid end-lg end-md end-sm">
				 		<div class="col col-lg-7 col-md-7 col-sm-5 col-xs-12 absoluteImgContainer absolutePositionedImg">'
				 			. $featuredimg .
				 		'</div>
				 	</div>
			 	
		   			<div class="innerContainer">
				 		<div class="row">
				 			
				 			<div class="col col-lg-5 col-md-5 col-sm-4 col-xs-12">
						 		<div class="iconAndTitleContainer clear desktopLayout" style="background-color: #012a3c;">
						 			<div class="imgContainer">'
						 				. wp_get_attachment_image( $icon, $size ) .
						 			'</div>
						 			<h1>' . $pagetitle . '</h1>
						 		</div>
						 	</div>
						 	
					 	</div>
			 		</div>
				</div>
				<div class="iconAndTitleContainer mobileLayout" style="background-color: #012a3c;">
					<div class="imgContainer">'
						. wp_get_attachment_image( $icon, $size ) .
					'</div>
					<h1>' . $pagetitle . '</h1>
				</div>';
	}
} else {
	echo 	'<div class="pageHeader" style="background-image: url(' . $featuredbgimg[0] . ');">
	 			<div class="innerContainer">
	 				<div class="iconAndTitleContainer noBgColor clear">
	 					<h1>' . $pagetitle . '</h1>
	 				</div>
	 			</div>
	 		</div>';
}