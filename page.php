<?php 
get_template_part('templates/page-header');

if ( have_posts() ) {
 	while ( have_posts() ) { 
 	the_post();
	the_content();
	}
}

get_footer();
?>
