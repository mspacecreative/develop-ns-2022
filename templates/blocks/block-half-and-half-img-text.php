<?php
$bgcolor = get_field('background_colour');
$contenttype = get_field('content_type');
$aligncolumns = get_field('align_columns');
$rowheading = get_field('row_heading');
$headingalignment = get_field('heading_alignment');
$textcolor = get_field('text_colour');
$headingcolor = get_field('heading_colour');
$blockanchor = get_field('block_anchor');
$reverse = get_field('reverse_columns');
$narrow = get_field('narrow_row');
$colratio = get_field('column_ratio');
$removeBulletSpacing = get_field('remove_spacing_between_bullet_points');
$gutters = get_field('gutter_space');

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

if ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg borderTopGoldGradient">

<?php elseif ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light borderTopGoldGradient">

<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg borderTopGoldGradient">

<?php elseif ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">

<?php elseif ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">

<?php elseif ( $bgcolor == 'light' ): ?>
<div class="section lightbg borderTopGoldGradient">

<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkbg borderTopGoldGradient light">

<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkbg light">

<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">

<?php else : ?>
<div<?php if ( $id ): echo ' id="'; echo $id; echo '"'; endif; ?> class="section lightbg">

<?php endif;

 	if ( $narrow ): ?>
	<div class="innerContainer no-top-bottom-padding maxWidth850">
	<?php else : ?>
	<div class="innerContainer no-top-bottom-padding">
	<?php endif; ?>
		
		<?php 
		if ( $rowheading && $headingalignment == 'center' ) {
			echo '<h2 class="text-align-center">' . $rowheading . '</h2>';
		} elseif ( $rowheading && $headingalignment == 'right' ) {
			echo '<h2 class="text-align-right">' . $rowheading . '</h2>';
		} elseif ( $rowheading ) {
			echo '<h2>' . $rowheading . '</h2>';
		}
		
		if ( $gutters == 'none' ): ?>
			
		<?php if ( $aligncolumns == 'top' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_0 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_0 middle-lg middle-md reverse">
		<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_0 bottom-lg bottom-md reverse">
		<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_0 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'top' ): ?>
		<div class="row relativePositioning gutter_space_0 top-lg top-md">
		<?php elseif ( $aligncolumns == 'middle' ): ?>
		<div class="row relativePositioning gutter_space_0 middle-lg middle-md">
		<?php elseif ( $aligncolumns == 'bottom' ): ?>
		<div class="row relativePositioning gutter_space_0 bottom-lg bottom-md">
		<?php elseif ( $reverse ): ?>
		<div class="row relativePositioning gutter_space_0 reverse">
		<?php else : ?>
		<div class="row relativePositioning gutter_space_0">
		<?php endif; ?>
		
		<?php elseif ( $gutters == 'default' ): ?>
		
		<?php if ( $aligncolumns == 'top' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_1 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_1 middle-lg middle-md reverse">
		<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_1 bottom-lg bottom-md reverse">
		<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_1 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'top' ): ?>
		<div class="row relativePositioning gutter_space_1 top-lg top-md">
		<?php elseif ( $aligncolumns == 'middle' ): ?>
		<div class="row relativePositioning gutter_space_1 middle-lg middle-md">
		<?php elseif ( $aligncolumns == 'bottom' ): ?>
		<div class="row relativePositioning gutter_space_1 bottom-lg bottom-md">
		<?php elseif ( $reverse ): ?>
		<div class="row relativePositioning gutter_space_1 reverse">
		<?php else : ?>
		<div class="row relativePositioning gutter_space_1">
		<?php endif; ?>
		
		<?php else : ?>
		
		<?php if ( $aligncolumns == 'top' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_2 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'middle' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_2 middle-lg middle-md reverse">
		<?php elseif ( $aligncolumns == 'bottom' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_2 bottom-lg bottom-md reverse">
		<?php elseif ( $aligncolumns == 'top' && $reverse ): ?>
		<div class="row relativePositioning gutter_space_2 top-lg top-md reverse">
		<?php elseif ( $aligncolumns == 'top' ): ?>
		<div class="row relativePositioning gutter_space_2 top-lg top-md">
		<?php elseif ( $aligncolumns == 'middle' ): ?>
		<div class="row relativePositioning gutter_space_2 middle-lg middle-md">
		<?php elseif ( $aligncolumns == 'bottom' ): ?>
		<div class="row relativePositioning gutter_space_2 bottom-lg bottom-md">
		<?php elseif ( $reverse ): ?>
		<div class="row relativePositioning gutter_space_2 reverse">
		<?php else : ?>
		<div class="row relativePositioning gutter_space_2">
		<?php endif; ?>
		
		<?php endif; ?>
			
			<?php if( have_rows('left_column') ):
	 		while( have_rows('left_column') ): the_row();
	 		$heading = get_sub_field('heading');
			$content = get_sub_field('content');
			$contenttype = get_sub_field('content_type');
			$colspacing = get_sub_field('column_bottom_spacing');
	 		
	 		if ( $colratio == 'three-fifth-two-fifth' && $colspacing ): ?>
			<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-fifth-three-fifth' && $colspacing ): ?>
			<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-third-one-third' && $colspacing ): ?>
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-third-two-third' && $colspacing ): ?>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'three-quarter-one-quarter' && $colspacing ): ?>
			<div class="col-lg-10 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-quarter-three-quarter'&& $colspacing ): ?>
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'three-fifth-two-fifth' ): ?>
			<div class="col-lg-7 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-fifth-three-fifth' ): ?>
			<div class="col-lg-5 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-third-one-third' ): ?>
			<div class="col-lg-8 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-third-two-third' ): ?>
			<div class="col-lg-4 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'three-quarter-one-quarter' ): ?>
			<div class="col-lg-10 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-quarter-three-quarter' ): ?>
			<div class="col-lg-2 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colspacing ) : ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col">
			<?php else : ?>
			<div class="col-lg-6 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php endif;
			
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
					foreach( $images as $image ): ?>
						
					<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</li>
						
					<?php 
					endforeach;
					endif; ?>
				</ul>
				
				<?php elseif ( $contenttype == 'image' ):
				
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img data-aos="fade-right" class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
				
				<?php else :
				
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
				if ( have_rows('call_to_action') ) {
					while ( have_rows('call_to_action') ) { 
						the_row();
						$link = get_sub_field('link');
						$label = get_sub_field('label');
						if ( $bgcolor == 'dark' && $link && $label ) {
							echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
						} elseif ( $bgcolor == 'dark' && $link ) {
							echo '<a href="' . $link . '" class="button light">Learn more</a>';
						} elseif ( $bgcolor == 'light' && $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $bgcolor == 'light' && $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						} elseif ( $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						}
					}
				} 
				
				endif; ?>
			</div>
			
			<?php endwhile;
			endif; ?>
			
			<?php if( have_rows('right_column') ):
	 		while( have_rows('right_column') ): the_row();
	 		$contenttype = get_sub_field('content_type');
	 		$heading = get_sub_field('heading_right_col');
	 		$contentrightcol = get_sub_field('content_right_col');
			$colspacing = get_sub_field('column_bottom_spacing');
			
			if ( $colratio == 'three-fifth-two-fifth' && $colspacing ): ?>
			<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-fifth-three-fifth' && $colspacing ): ?>
			<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-third-one-third' && $colspacing ): ?>
			<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-third-two-third' && $colspacing ): ?>
			<div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'three-quarter-one-quarter' && $colspacing ): ?>
			<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-quarter-three-quarter' && $colspacing ): ?>
			<div class="col-lg-10 col-md-6 col-sm-12 col-xs-12 col">
			
			<?php elseif ( $colratio == 'three-fifth-two-fifth' ): ?>
			<div class="col-lg-5 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-fifth-three-fifth' ): ?>
			<div class="col-lg-7 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'two-third-one-third' ): ?>
			<div class="col-lg-4 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-third-two-third' ): ?>
			<div class="col-lg-8 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'three-quarter-one-quarter' ): ?>
			<div class="col-lg-2 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colratio == 'one-quarter-three-quarter' ): ?>
			<div class="col-lg-10 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php elseif ( $colspacing ) : ?>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col">
			<?php else : ?>
			<div class="col-lg-6 bottomMarginMobile col-md-6 col-sm-12 col-xs-12 col">
			<?php endif;
			
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
					foreach( $images as $image ): ?>
						
					<li>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
					</li>
						
					<?php 
					endforeach;
					endif; ?>
				</ul>
				
				<?php elseif ( $contenttype == 'image' ):
				
				$img = get_sub_field('image');
				if( !empty( $img ) ): ?>
				<img data-aos="fade-left" data-aos-duration="1500" class="full-width" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
				<?php endif; ?>
				
				<?php elseif ( $contenttype == 'content' ):
				
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
				if ( have_rows('call_to_action') ) {
					while ( have_rows('call_to_action') ) { 
						the_row();
						$link = get_sub_field('link');
						$label = get_sub_field('label');
						if ( $bgcolor == 'dark' && $link && $label ) {
							echo '<a href="' . $link . '" class="button light">' . $label . '</a>';
						} elseif ( $bgcolor == 'dark' && $link ) {
							echo '<a href="' . $link . '" class="button light">Learn more</a>';
						} elseif ( $bgcolor == 'light' && $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $bgcolor == 'light' && $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						} elseif ( $link && $label ) {
							echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
						} elseif ( $link ) {
							echo '<a href="' . $link . '" class="button dark">Learn more</a>';
						}
					}
				} 
				
				endif; ?>
			</div>
			
			<?php endwhile;
			endif; ?>
			
		</div>
	</div>
</div>