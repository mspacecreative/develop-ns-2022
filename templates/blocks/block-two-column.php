<?php
$bgtype = get_field('background_type');
$bgcolor = get_field('background_colour');
$bgimg = get_field('background_image');
$bgimgalign = get_field('background_image_position');
$contenttype = get_field('content_type');
$aligncolumns = get_field('align_columns');
$rowheading = get_field('row_heading');
$subrowheading = get_field('sub_row_heading');
$headingalignment = get_field('heading_alignment');
$textcolor = get_field('text_colour');
$headingcolor = get_field('heading_colour');
$blockanchor = get_field('block_anchor');
$reverse = get_field('reverse_columns');
$narrow = get_field('narrow_row');
$colratio = get_field('column_ratio');
$removeBulletSpacing = get_field('remove_spacing_between_bullet_points');
$gutterspacing = get_field('gutter_space');
$section_padding = get_field('section_padding');
$offsetlayout = get_field('offset_layout');
$overlayopacity = get_field('overlay_opacity');
$inner = get_field('inner_container');
$hide = get_field('hide_block');
$overlay = get_field('background_image_overlay');
$maxwidth = get_field('max_width');
$dasheddivider = get_field('dashed_divider');
$bgsize = get_field('background_size');

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

switch ( $bgcolor ) {
	case 'blue':
		$shade = 'brandbluebg light';
		break;
	case 'grey': 
		$shade = 'brandlightgreybg';
		break;
	default:
		$shade = '';
}
switch ( $narrow ) {
	case '1080':
		$rowwidth = ' max-width-1080';
		break;
	case '800': 
		$rowwidth = ' max-width-800';
		break;
	case 'default': 
		$rowwidth = '';
		break;
	default:
		$rowwidth = '';
}
switch ( $overlay ) {
	case 'blue':
		$tint = 'blue-overlay';
		break;
	case 'green':
		$tint = 'green-overlay';
		break;
	case 'white':
		$tint = 'white-overlay';
		break;
	default:
		$tint = '';
}
switch ( $textcolor ) {
	case 'light':
		$color = ' light';
		break;
	case 'dark':
		$color = ' dark';
		break;
	default: ' dark';
}
switch ( $aligncolumns ) {
	case 'top':
		$position = 'top-lg top-md';
		break;
	case 'middle':
		$position = 'middle-lg middle-md';
		break;
	case 'bottom':
		$position = 'bottom-lg bottom-md';
		break;
	default:
		$position = '';
}
switch ( $headingalignment ) {
	case 'center':
		$align = 'class="text-align-center"';
		break;
	case 'right':
		$align = 'class="text-align-right"';
		break;
	default:
		$align = '';
}
switch ( $section_padding ) {
	case 'top':
		$section_padding = ' topPadding';
		break;
	case 'bottom':
		$section_padding = ' bottomPadding';
		break;
	case 'both':
		$section_padding = ' topBottomPadding';
		break;
	default:
		$section_padding = '';
}
switch ( $bgimgalign ) {
	case 'center':
		$bgposition = 'center';
		break;
	case 'top':
		$bgposition = 'top center';
		break;
	case 'bottom':
		$bgposition = 'bottom center';
		break;
	default:
		$bgposition = 'center';
}
switch ( $gutterspacing ) {
	case 'wide':
		$gutterspacing = ' gutter_space_3';
		break;
	case 'default':
		$gutterspacing = ' gutter_space_2';
		break;
	case 'none':
		$gutterspacing = ' gutter_space_1';
		break;
	default:
		$gutterspacing = ' gutter_space_2';
}

if ( $bgimg ): ?>
<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="section_has_bg_img<?php if ($dasheddivider): echo ' dashed-divider'; endif; if ( $className ): echo esc_attr($className); endif; if ($hide): echo ' hidden'; endif; ?>" style="background-image: url(<?php echo $bgimg ?>);<?php if ( $bgposition ): echo ' background-position: '; echo $bgposition; else: echo ' background-position: center'; endif; ?>; <?php if ($bgsize == '100'): echo 'background-size: 100%;'; else: echo 'background-size: cover;'; endif; ?> background-repeat: no-repeat;<?php if ( $hide ): echo ' display: none;'; endif; ?>">
	<?php if ( $tint ): ?>
	<div class="<?php echo $tint ?>" style="position: absolute; height: 100%; width: 100%; top: 0; left: 0; opacity: <?php if ( $overlayopacity ): echo $overlayopacity; endif; ?>"></div>
	<?php endif; ?>

<?php else : ?>
<section<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="positionRelative<?php if ( $className ): echo esc_attr($className); endif; if ($dasheddivider): echo ' dashed-divider'; endif; echo ' '; echo $shade ?>"<?php if ( $hide ): echo ' style="display: none;"'; endif; ?>>

<?php endif; ?>

	<div class="innerContainer<?php if ( $rowwidth ): echo $rowwidth; endif; if ( $section_padding ): echo $section_padding; endif; ?>">
				
		<?php 
		if ( $rowheading ) {
		echo '<h2 ' . $align . '>' . $rowheading . '</h2>';
		}
		if ($subrowheading) {
		echo '<h3 ' . $align . '>' . $subrowheading . '</h3>';
		}
		?>
				
		<div class="row<?php if ( $gutterspacing ): echo $gutterspacing; else: ' gutter_space_2'; endif; if ( $reverse ): echo ' reverse'; endif; if ( $position ): echo ' '; echo $position; endif; ?>"<?php if ( $maxwidth ): echo ' style="max-width: '; echo $maxwidth; echo 'px;"'; endif; ?>>
				
			<?php
			if( have_rows('left_column') ):
			while( have_rows('left_column') ): the_row();
			$anchor = get_sub_field('anchor');
			$icon = get_sub_field('icon');
			$iconsize = 'thumbnail';
			$heading = get_sub_field('heading');
			$content = get_sub_field('content');
			$contenttype = get_sub_field('content_type');
			$mobile = get_sub_field('mobile_spacing');
			$animatecol = get_sub_field('animate_column');
				 		
			switch ( $colratio ) {
				case 'three-fifth-two-fifth':
					$colwidth = 'col-lg-7';
					break;
				case 'two-fifth-three-fifth':
					$colwidth = 'col-lg-5';
					break;
				case 'two-third-one-third':
					$colwidth = 'col-lg-8';
					break;
				case 'one-third-two-third':
					$colwidth = 'col-lg-4';
					break;
				case 'three-quarter-one-quarter':
					$colwidth = 'col-lg-10';
					break;
				case 'one-quarter-three-quarter':
					$colwidth = 'col-lg-2';
					break;
				default:
					$colwidth = 'col-lg-6';
			} ?>
			 		
			<div<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; if ($animatecol): echo ' data-aos="fade-up"'; endif; ?> class="<?php if ( $colwidth ): echo $colwidth; echo ' '; else: echo 'col-lg-6 '; endif; if ( $mobile ): echo ' keepSpacing '; endif; ?>bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col">
					
				<?php include 'includes/column-margins.php';
				
				if ( $contenttype == 'carousel' ): ?>
							
				<div class="carousel who_we_are">
									
				<?php
				$images = get_sub_field('photo_gallery');
				$size = 'large';
								
				if( $images ):
				foreach( $images as $image ): ?>
								
					<div>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</div>
								
				<?php 
				endforeach;
				endif; ?>
							
				</div>
						
				<?php elseif ( $contenttype == 'grid' ): ?>
						
				<ul class="photoGrid">
								
					<?php
					$images = get_sub_field('photo_gallery');
					$size = 'large';
								
					if( $images ):
					foreach( $images as $image ):
					$url = get_field('external_url', $image['id']);
					$shrink = get_field('shrink_image', $image['id']); ?>
								
					<li>
						<?php if ( $url && $shrink ) {
						echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
						} elseif ( $url ) {
						echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
						} else {
						echo wp_get_attachment_image( $image['ID'], $size );
						} ?>
					</li>
								
					<?php 
					endforeach;
					endif; ?>
				</ul>
						
				<?php elseif ( $contenttype == 'image' ):
						
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img data-aos="fade-right" class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif;
				
				elseif ( $contenttype == 'flex' ):
				
				include 'includes/flex-content.php';
						
				else :
						
				if ( $icon ) {
					echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
				}
						
				if ( $heading ) {
					echo '<h3>' . $heading . '</h3>';
				}
				if ( $content ) {
					if ( $removeBulletSpacing ) {
						echo '<div class="bullet-points removeSpacing">' . $content . '</div>';
					} else {
						echo '<div class="bullet-points">' . $content . '</div>';
					}
				}
						
				include 'includes/cta.php';
						
				endif;
				
				if ( have_rows('column_margins') ): while ( have_rows('column_margins') ): the_row(); ?>
				</div>
				<?php endwhile; endif; ?>
				
			</div>
					
			<?php endwhile;
			endif; ?>
					
			<?php if( have_rows('right_column') ):
			while( have_rows('right_column') ): the_row();
			$anchor = get_sub_field('anchor');
			$icon = get_sub_field('icon');
			$iconsize = 'thumbnail';
			$contenttype = get_sub_field('content_type');
			$heading = get_sub_field('heading_right_col');
			$contentrightcol = get_sub_field('content_right_col');
			$mobile = get_sub_field('mobile_spacing');
			$animatecol = get_sub_field('animate_column');
						
			switch ( $colratio ) {
				case 'three-fifth-two-fifth':
					$colwidth = 'col-lg-5';
					break;
				case 'two-fifth-three-fifth':
					$colwidth = 'col-lg-7';
					break;
				case 'two-third-one-third':
					$colwidth = 'col-lg-4';
					break;
				case 'one-third-two-third':
					$colwidth = 'col-lg-8';
					break;
				case 'three-quarter-one-quarter':
					$colwidth = 'col-lg-2';
					break;
				case 'one-quarter-three-quarter':
					$colwidth = 'col-lg-10';
					break;
				default:
					$colwidth = 'col-lg-6';
			} ?>
					
			<div<?php if ( $anchor ): echo ' id="'; echo $anchor; echo '"'; endif; if ($animatecol): echo ' data-aos="fade-up"'; endif; ?> class="<?php if ( $colwidth ): echo $colwidth; echo ' '; else: echo 'col-lg-6 '; endif; if ( $mobile ): echo ' keepSpacing '; endif; ?>bottomMarginMobile col-md-6 col-sm-6 col-xs-12 col">
						
				<?php include 'includes/column-margins.php';
				
				if ( $contenttype == 'carousel' ): ?>
							
				<div class="carousel who_we_are">
									
					<?php
					$images = get_sub_field('photo_gallery');
					$size = 'large';
									
					if( $images ):
					foreach( $images as $image ): ?>
									
					<div>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</div>
									
					<?php 
					endforeach;
					endif; ?>
								
				</div>
							
				<?php elseif ( $contenttype == 'grid' ): ?>
							
				<ul class="photoGrid">
									
					<?php
					$images = get_sub_field('photo_gallery');
					$size = 'large';
										
					if( $images ):
					foreach( $images as $image ):
					$url = get_field('external_url', $image['id']);
					$shrink = get_field('shrink_image', $image['id']); ?>
									
					<li>
						<?php if ( $url && $shrink ) {
							echo '<div class="shrinkLogo"><a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a></div>';
						} elseif ( $url ) {
							echo '<a href="' . $url . '" target="_blank">' . wp_get_attachment_image( $image['ID'], $size ) . '</a>';
						} else {
							echo wp_get_attachment_image( $image['ID'], $size );
						} ?>
					</li>
									
					<?php 
					endforeach;
					endif; ?>
						
				</ul>
							
				<?php elseif ( $contenttype == 'image' ):
							
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
							
				<?php elseif ( $contenttype == 'content' ):
							
				if ( $icon ) {
					echo '<div class="iconContainer">' . wp_get_attachment_image( $icon, $iconsize ) . '</div>';
				}
							
				if ( $heading ) {
					echo '<h3>' . $heading . '</h3>';
				}
				if ( $contentrightcol ) {
					if ( $removeBulletSpacing ) {
						echo '<div class="bullet-points removeSpacing">' . $contentrightcol . '</div>';
					} else {
						echo '<div class="bullet-points">' . $contentrightcol . '</div>';
					}
				}
							
				include 'includes/cta.php';
				
				elseif ( $contenttype == 'flex' ):
				
				include 'includes/flex-content.php';
							
				endif;
				
				if ( have_rows('column_margins') ): while ( have_rows('column_margins') ): the_row(); ?>
				</div>
				<?php endwhile; endif; ?>
				
			</div>
					
			<?php endwhile;
			endif; ?>
					
		</div>
	</div>
</section>