<?php
$columns = get_field('columns');
$rowheading = get_field('row_heading');
$rowsubheading = get_field('row_sub_heading');
$bgcolor = get_field('background_colour');
$textcolor = get_field('text_colour');
$boxedcontent = get_field('boxed_content');
$blockanchor = get_field('block_anchor');
$narrow = get_field('narrow');
$centeredtext = get_field('center_align_text');
$roundedcorners = get_field('rounded_corners');
$centeredheading = get_field('centered_heading');
$gutters = get_field('gutter_space');
$icon = get_sub_field('icon');

if ( $columns == 'two' ):

if ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">
<?php elseif ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php elseif ( $bgcolor == 'light' ): ?>
<div class="section lightbg">
<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkbg light">
<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php else : ?>
<div class="section lightbg">
<?php endif;

 	if ( $narrow ): ?>
	<div class="innerContainer no-top-bottom-padding maxWidth850">
	<?php else : ?>
	<div class="innerContainer no-top-bottom-padding">
	<?php endif; ?>
	
		<?php if ( $rowheading && $rowsubheading && $centeredheading ) {
			echo '
				<div class="text-align-center">
					<h2>' . $rowheading . '</h2>
					<h3 class="bottom-margin">' . $rowsubheading . '</h3>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading ) {
			echo '
				<h2>' . $rowheading . '</h2>
				<h3 class="bottom-padding">' . $rowsubheading . '</h3>
				';
		} elseif ( $rowheading && $centeredheading ) {
			echo '<h2 class="text-align-center bottom-margin"">' . $rowheading . '</h2>';
		} elseif ( $rowheading ) {
			echo '<h2 class="bottom-margin">' . $rowheading . '</h2>';
		}
		
		if( have_rows('columns_grid') ):
		
		if ( $centeredtext && $icon && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'none' ): ?>
		<div class="row gutter_space_0 bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'default' ): ?>
		<div class="row gutter_space_1 bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $icon ): ?>
		<div class="row gutter_space_2 icons-visible bullet-points extra-col-spacing">
		<?php else : ?>
		<div class="row gutter_space_2 bullet-points extra-col-spacing">
		<?php endif; ?>
			
			<?php while( have_rows('columns_grid') ): the_row();
			
			$inlinelinks = get_sub_field('inline_links');
			
			if ( $inlinelinks ):
			
			if ( $boxedcontent && $roundedcorners && $bgcolor == 'dark' ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed light dark roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners && $bgcolor == 'light' ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-inline.php'; ?>
			</div>
			<?php endif;
			
			else :
			
			if ( $boxedcontent && $roundedcorners && $bgcolor == 'dark' ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed light dark roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners && $bgcolor == 'light' ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-stacked.php'; ?>
			</div>
			<?php endif;
			
			endif;
			
			endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>

<?php 
elseif ( $columns == 'three' ):

if ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">
<?php elseif ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php elseif ( $bgcolor == 'light' ): ?>
<div class="section lightbg">
<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkbg light">
<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php else : ?>
<div class="section lightbg">
<?php endif; 
	
	if ( $narrow ): ?>
	<div class="innerContainer no-top-bottom-padding maxWidth850">
	<?php else : ?>
	<div class="innerContainer no-top-bottom-padding">
	<?php endif; ?>
		
		<?php if ( $rowheading && $rowsubheading && $centeredheading ) {
			echo '
				<div class="text-align-center">
					<h2>' . $rowheading . '</h2>
					<h3 class="bottom-padding">' . $rowsubheading . '</h3>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading ) {
			echo '
				<h2>' . $rowheading . '</h2>
				<h3 class="bottom-padding">' . $rowsubheading . '</h3>
				';
		} elseif ( $rowheading && $centeredheading ) {
			echo '<h2 class="text-align-center bottom-margin"">' . $rowheading . '</h2>';
		} elseif ( $rowheading ) {
			echo '<h2 class="bottom-margin">' . $rowheading . '</h2>';
		}
		
		if( have_rows('columns_grid') ):
		
		if ( $centeredtext && $icon && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'none' ): ?>
		<div class="row gutter_space_0 bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'default' ): ?>
		<div class="row gutter_space_1 bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $icon ): ?>
		<div class="row gutter_space_2 icons-visible bullet-points extra-col-spacing">
		<?php else : ?>
		<div class="row gutter_space_2 bullet-points extra-col-spacing">
		<?php endif; ?>
			
			<?php while( have_rows('columns_grid') ): the_row();
			
			$inlinelinks = get_sub_field('inline_links');
			
			if ( $inlinelinks ):
			
			if ( $boxedcontent && $roundedcorners && $bgcolor == 'dark' ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed light dark roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners && $bgcolor == 'light' ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-inline.php'; ?>
			</div>
			<?php endif;
			
			else :
			
			if ( $boxedcontent && $roundedcorners && $bgcolor == 'dark' ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed light dark roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners && $bgcolor == 'light' ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-stacked.php'; ?>
			</div>
			<?php endif;
			
			endif;
			
			endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>

<?php 
elseif ( $columns == 'four' ):

if ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">
<?php elseif ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php elseif ( $bgcolor == 'light' ): ?>
<div class="section lightbg">
<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkbg light">
<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php else : ?>
<div class="section lightbg">
<?php endif; 
	
	if ( $narrow ): ?>
	<div class="innerContainer no-top-bottom-padding maxWidth850">
	<?php else : ?>
	<div class="innerContainer no-top-bottom-padding">
	<?php endif; ?>
		
		<?php if ( $rowheading && $rowsubheading && $centeredheading ) {
			echo '
				<div class="text-align-center">
					<h2>' . $rowheading . '</h2>
					<h3 class="bottom-padding">' . $rowsubheading . '</h3>
				</div>
				';
		} elseif ( $rowheading && $rowsubheading ) {
			echo '
				<h2>' . $rowheading . '</h2>
				<h3 class="bottom-padding">' . $rowsubheading . '</h3>
				';
		} elseif ( $rowheading && $centeredheading ) {
			echo '<h2 class="text-align-center bottom-margin"">' . $rowheading . '</h2>';
		} elseif ( $rowheading ) {
			echo '<h2 class="bottom-margin">' . $rowheading . '</h2>';
		}
		
		if( have_rows('columns_grid') ):
		
		if ( $centeredtext && $icon && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'none' ): ?>
		<div class="row gutter_space_0 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'default' ): ?>
		<div class="row gutter_space_1 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $icon && $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'none' ): ?>
		<div class="row gutter_space_0 bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'default' ): ?>
		<div class="row gutter_space_1 bullet-points extra-col-spacing">
		<?php elseif ( $gutters == 'wide' ): ?>
		<div class="row gutter_space_2 bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext && $icon ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs icons-visible bullet-points extra-col-spacing">
		<?php elseif ( $centeredtext ): ?>
		<div class="row gutter_space_2 center-lg center-md center-sm center-xs bullet-points extra-col-spacing">
		<?php elseif ( $icon ): ?>
		<div class="row gutter_space_2 icons-visible bullet-points extra-col-spacing">
		<?php else : ?>
		<div class="row gutter_space_2 bullet-points extra-col-spacing">
		<?php endif; ?>
			
			<?php while( have_rows('columns_grid') ): the_row();
			
			$inlinelinks = get_sub_field('inline_links');
			
			if ( $inlinelinks ):
			
			if ( $boxedcontent && $roundedcorners && $bgcolor == 'dark' ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed light dark roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners && $bgcolor == 'light' ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-inline.php'; ?>
			</div>
			<?php endif;
			
			else :
			
			if ( $boxedcontent && $roundedcorners && $bgcolor == 'dark' ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed light dark roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners && $bgcolor == 'light' ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent && $roundedcorners ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed roundedCorners">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php elseif ( $boxedcontent ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-stacked.php'; ?>
			</div>
			<?php endif;
			
			endif;
			
			endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>

<?php endif; ?>