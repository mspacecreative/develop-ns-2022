<?php 
get_header();

if ( have_posts() ) {
 	while ( have_posts() ) { 
 	the_post();
	the_content();
	}
}

//get_template_part('templates/front-page-content');

//echo '<div class="feedContainer">';
//echo do_shortcode('[instagram-feed]');
//echo '</div>';

get_footer();
?>