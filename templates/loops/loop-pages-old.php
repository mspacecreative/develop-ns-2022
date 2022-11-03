<?php
$args = array(
	'post__in' => array( 172, 174, 176 ),
	'post_type' => 'page',
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>

<div class="homePagePagesFeedContainer">

<?php while ( $loop->have_posts() ) : $loop->the_post();

$pagetitle = get_the_title( $post->ID );
//$featuredimg = get_the_post_thumbnail($post->ID, 'large' );
$featuredimg = get_field('home_page_featured_image', get_the_ID() );
$featuredimgsize = 'large';
$themecolour = get_field('theme_colour', $post->ID );
$excerpt = get_the_excerpt( $post->ID );
$icon = get_field('icon', $post->ID );
$mainheading = get_field( 'main_heading', $post->ID );
$subheading = get_field( 'sub_heading', $post->ID );
$size = 'icon'; ?>

	<div class="row noPadding half_half_section light homePagePagesFeed verticalStitch">
		
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 who_we_are no-left-padding absoluteImgContainer absolutePositionedImg">
			<?php 
			if ( $featuredimg ) {
				echo wp_get_attachment_image( $featuredimg, $featuredimgsize );
			} ?>
		</div>
		
		<?php if ( $themecolour == 'blue' ): ?>	
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 no-right-padding blue_bg">
		<?php elseif ( $themecolour == 'orange' ): ?>
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 no-right-padding orange_bg">
		<?php elseif ( $themecolour == 'navy' ): ?>
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 no-right-padding navy_bg">
		<?php else : ?>
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 no-right-padding orange_bg">
		<?php endif; ?>
			
			<div class="col-inner">
				<?php
					
				if ( $icon ) {
					echo '<div class="imgContainer">' .  wp_get_attachment_image( $icon, $size ) . '</div>';
				}
				if ( $pagetitle ) {
					echo '<h2>' . $pagetitle . '</h2>';
				}
				if ( $mainheading && $subheading ) {
					echo '<h3><strong><span style="text-transform: uppercase;">' . $mainheading . '</span><br />' . $subheading . '</strong></h3>';
				} elseif ( $mainheading ) {
					echo '<h3><strong>' . $mainheading . '</strong></h3>';
				} elseif ( $subheading ) {
					echo '<h3><strong>' . $subheading . '</strong></h3>';
				}
				if ( $excerpt ) {
					echo '<p>' . $excerpt . '</p>';
				}
					
				echo '<a class="button light" href="' . get_the_permalink() . '">READ THE STORIES</a>'; ?>
			</div>
			
		</div>
		
	</div>

<?php 
endwhile; ?>

</div>

<?php endif; wp_reset_query(); ?>