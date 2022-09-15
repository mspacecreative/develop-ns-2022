<?php if ( have_rows('channels', 'options') ) {
	echo '<div class="socialMedia">
		  	<ul>';
	while ( have_rows('channels', 'options') ) {
		the_row();
		$link = get_sub_field('link', 'options');
		$icon = get_sub_field('icon', 'options');
							
		echo '<li><a href="' . $link . '" target="_blank"><i class="fa ' . $icon . '"></i></a></li>';
	}
	echo 	'</ul>
		</div>';
}