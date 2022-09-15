<?php if ( have_rows('module_margins') ): while ( have_rows('module_margins') ): the_row();

$topmargin = get_sub_field('top_margin');
$rightmargin = get_sub_field('right_margin');
$bottommargin = get_sub_field('bottom_margin');
$leftmargin = get_sub_field('left_margin'); ?>
				
<div class="module-margins"<?php if ($topmargin || $rightmargin || $bottommargin || $leftmargin): echo ' style="margin: '; if ($topmargin): echo $topmargin; echo ' '; else: echo '0 '; endif; if ($rightmargin): echo $rightmargin; echo ' '; else: echo '0 '; endif; if ($bottommargin): echo $bottommargin; echo ' '; else: echo '0 '; endif; if ($leftmargin): echo $leftmargin; else: echo '0'; endif; echo ';"'; endif; ?>>
				
<?php endwhile; endif; ?>