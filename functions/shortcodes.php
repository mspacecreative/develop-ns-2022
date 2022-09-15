<?php
// LOOP PAGES
function loopPages() {
	ob_start();
		get_template_part('templates/loops/loop-pages');
	return ob_get_clean();
}
add_shortcode( 'loop_pages', 'loopPages' );