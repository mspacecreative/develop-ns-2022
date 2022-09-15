<?php 
if ( have_rows('video_group', 'options') ) :
	while ( have_rows('video_group', 'options') ) : the_row();
		
		// HOME PAGE VIDEO
		if ( have_rows('home_page', 'options') ) :
			while ( have_rows('home_page', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// THRIVING COMMUNITIES
		if ( have_rows('thriving_communities', 'options') ) :
			while ( have_rows('thriving_communities', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// THRIVING COMMUNITIES - SECOND VIDEO
		if ( have_rows('thriving_communities_2', 'options') ) :
			while ( have_rows('thriving_communities_2', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// AUTHENTIC DESTINATIONS
		if ( have_rows('authentic_destinations', 'options') ) :
			while ( have_rows('authentic_destinations', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// WORKING WATERFRONTS
		if ( have_rows('working_waterfronts', 'options') ) :
			while ( have_rows('working_waterfronts', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// WORKING WATERFRONTS 2
		if ( have_rows('working_waterfronts_2', 'options') ) :
			while ( have_rows('working_waterfronts_2', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
		// WORKING WATERFRONTS 3
		if ( have_rows('working_waterfronts_3', 'options') ) :
			while ( have_rows('working_waterfronts_3', 'options') ) : the_row();
			$video = get_sub_field('video', 'options');
			$video_url = get_sub_field('video', false, false);
			$dataattr = get_sub_field('data_attribute', 'options'); ?>
			
			<div data-id="<?php echo $dataattr ?>" class="modal">
				<div class="innerContainer">
					<button class="closeModalButton">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</button>
					<?php 
					if ( $video ) : ?>
					<a class="button light externalLink" href="<?php echo $video_url ?>" target="_blank">Open in new tab
					</a>
					<?php endif; ?>
				</div>
				
				<div class="modalInner">
					<div class="iframeContainer">
						<?php 
						if ( $video ) {
							echo $video;
						} ?>
					</div>
				</div>
			</div>
			
			<?php 
			endwhile;
		endif;
		
	endwhile;
endif; ?>

<?php 
if ( have_rows('issuu_embed', 'options') ) {
	while ( have_rows('issuu_embed', 'options') ) {
		the_row();
		$embed = get_sub_field('embed_code', 'options');
		$embed_url = get_sub_field('embed_url', 'options');
		$dataattr = get_sub_field('data_attribute', 'options'); ?>
		
		<div data-id="<?php echo $dataattr ?>" class="modal">
			<div class="innerContainer">
				<button class="closeModalButton">
					<span>&nbsp;</span>
					<span>&nbsp;</span>
				</button>
				<?php 
				if ( $embed_url ) : ?>
				<a class="button light externalLink" href="<?php echo $embed_url ?>" target="_blank">Open in new tab
				</a>
				<?php endif; ?>
			</div>
			
			<div class="modalInner">
				<div class="iframeContainer">
					<?php 
					if ( $embed ) {
						echo $embed;
					} ?>
				</div>
			</div>
		</div>
		
	<?php 
	}
} ?>