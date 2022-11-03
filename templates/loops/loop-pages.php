<?php
$args = array(
	'post__in' => array( 172, 174, 176 ),
	'post_type' => 'page',
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>

<div class="homePagePagesFeedContainer">

<?php while ( $loop->have_posts() ) : $loop->the_post();

$pagetitle = get_the_title($loop->ID);
//$featuredimg = get_the_post_thumbnail($post->ID, 'large' );
$featuredimg = get_field('home_page_featured_image', $loop->ID);
$featuredimgsize = 'anamorphic';
$themecolour = get_field('theme_colour', $loop->ID);
$excerpt = get_the_excerpt($loop->ID) . __('...');
$icon = get_field('icon', $loop->ID);
$mainheading = get_field('main_heading', $loop->ID);
$subheading = get_field('sub_heading', $loop->ID);
$featvideo = get_field('featured_video', $loop->ID);
$featimgpositioning = get_field('featured_image_positioning', $loop->ID);
$tapeoverlay = get_field('tape_overlay', $loop->ID);
$tapeoverlaypositioning = get_field('tape_overlay_positioning', $loop->ID);
$size = 'icon';

switch ($tapeoverlaypositioning) {
	case 'top-left':
		$tapeoverlaypositioning = ' tape-overlay-left tape-overlay-left__top';
		break;
	case 'top-right':
		$tapeoverlaypositioning = ' tape-overlay-right tape-overlay-right__top';
		break;
	case 'bottom-left':
		$tapeoverlaypositioning = ' tape-overlay-left tape-overlay-left__bottom';
		break;
	case 'bottom-right':
		$tapeoverlaypositioning = ' tape-overlay-right tape-overlay-right__bottom';
		break;
	default:
		$tapeoverlaypositioning = '';
		break;
}

switch ($featimgpositioning) {
	case 'top':
		$featimgpositioning = ' top-lg top-md top-sm top-xs';
		break;
	case 'middle':
		$featimgpositioning = ' middle-lg middle-md middle-sm middle-xs';
		break;
	case 'bottom':
		$featimgpositioning = ' bottom-lg bottom-md bottom-sm bottom-xs';
		break;
	default:
		$featimgpositioning = ' middle-lg middle-md middle-sm middle-xs';
		break;
}

switch ($themecolour) {
	case 'blue':
		$theme = ' blue_bg';
		break;
	case 'orange':
		$theme = ' orange_bg';
		break;
	case 'navy':
		$theme = ' navy_bg';
		break;
	default:
		$theme = ' orange_bg';
} ?>

	<div class="row half_half_section homePagePagesFeed verticalStitch">
		
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 who_we_are checker-board-content<?php if ($themecolour == 'blue'): echo ' blue-arrow'; elseif ($themecolour == 'orange'): echo ' orange-arrow'; elseif ($themecolour == 'navy'): echo ' navy-arrow'; endif; ?>">
			<div class="col-inner">
			<?php 
			if ( $pagetitle ) {
			echo 
			'<h2>' . $pagetitle . '</h2>';
			}
			if ( $mainheading ) {
			echo 
			'<h3><strong>' . $mainheading . '</strong></h3>';
			}
			if (have_rows('article_links')) {
			echo
			'<ul class="article-links">';
			while (have_rows('article_links')) {
				the_row();
				$label = get_sub_field('article_title');
				$link = get_sub_field('article_link');
				echo 
				'<li>
					<a href="' . $link . '">
						<h3>
							<span style="position: relative;">' 
								. $label . 
								'<span class="downArrowContainer">
									<span class="downArrow">&nbsp;</span>
								</span>
							</span>
						</h3>
					</a>
				</li>';
			}
			echo
			'</ul>';
			}
			if ( $excerpt ) {
				echo 
				'<p>' . $excerpt . '</p>';
			} ?>
			
			<a class="button<?php if ($theme): echo $theme; endif; ?>" href="<?php echo the_permalink(); ?>"><?php echo __('READ ALL THE STORIES'); ?></a>
			</div>
		</div>
		
		<div class="col col-lg-6 col-md-6 col-sm-12 col-xs-12 no-right-padding checker-board-img<?php if ($theme): echo $theme; endif; ?>">
			
			<div class="col-inner">
			<?php
			if ( $icon ) {
				echo 
				'<div class="imgContainer">' .  wp_get_attachment_image( $icon, $size ) . '</div>';
			} ?>
			</div>
			
		</div>
		
		<?php if ($featuredimg): ?>
		<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 home-featured-img<?php echo $tapeoverlaypositioning ?>">
			
			<div class="feature-image-container<?php echo $featimgpositioning ?>">	
				<?php echo wp_get_attachment_image( $featuredimg, $featuredimgsize ); ?>
			</div>
			
		</div>
		<?php endif; ?>
		
	</div>

<?php 
endwhile; ?>

</div>

<?php endif; wp_reset_query(); ?>