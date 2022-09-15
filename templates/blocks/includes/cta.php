<?php
if ( have_rows('call_to_action') ) {
	while ( have_rows('call_to_action') ) { 
		the_row();
		$link = get_sub_field('link');
		$label = get_sub_field('label');
		if ( $link && $label || $link ): ?>
		<a style="color: #fff;" href="<?php echo $link ?>" class="button<?php if ( $bgcolor === 'blue' ): echo ' light'; endif; ?>"><?php if ( $label ): echo $label; else: echo esc_html_e('Learn more'); endif; ?></a>
		<?php endif; ?>
	<?php 
	}
}