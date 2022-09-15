<?php

/* REGISTER ACF BLOCKS */
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'three-col-links',
			'title'				=> __('Three columns with links'),
			'description'		=> __('Display titles and links to pages'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'titles', 'page links' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'video',
			'title'				=> __('Block: Video'),
			'description'		=> __('Video with featured image overlaid'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'video-alt2',
			'keywords'			=> array( 'video', 'YouTube embed' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'hero',
			'title'				=> __('Hero Block'),
			'description'		=> __('Background carousel with text overlay'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background carousel', 'intro', 'landing page' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register splash block
		acf_register_block(array(
			'name'				=> 'feature',
			'title'				=> __('Feature Section'),
			'description'		=> __('Background image with text and button'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'background image', 'content', 'CTA' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register product boxes
		acf_register_block(array(
			'name'				=> 'product-boxes',
			'title'				=> __('Product Boxes'),
			'description'		=> __('Repeatable product box features'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'products', 'content', 'repeatable' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register download boxes
		acf_register_block(array(
			'name'				=> 'download-boxes',
			'title'				=> __('Download Boxes'),
			'description'		=> __('Repeatable file download links in boxes'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'downloads', 'content', 'repeatable' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register full span img text left block
		acf_register_block(array(
			'name'				=> 'two-third-one-third',
			'title'				=> __('Two Third One Third Block'),
			'description'		=> __('Two third one third block with options'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'flex layout', 'content' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register 50/50 colour overlay text block
		acf_register_block(array(
			'name'				=> 'coloured-bg',
			'title'				=> __('Coloured Background Block'),
			'description'		=> __('Coloured background with text and variable columns'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'variable columns', 'layout' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register three column layout block
		acf_register_block(array(
			'name'				=> 'half-and-half-img-text',
			'title'				=> __('Two Column 50/50'),
			'description'		=> __('Two column row with content and background image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'two columns', 'row' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register three column layout block
		acf_register_block(array(
			'name'				=> 'two-column',
			'title'				=> __('Two Column'),
			'description'		=> __('Two column block with flexible content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'align-pull-right',
			'keywords'			=> array( 'two columns', 'flexible content' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register cta block
		acf_register_block(array(
			'name'				=> 'variable-columns',
			'title'				=> __('Variable Columns Block'),
			'description'		=> __('Two, three and four column layouts'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'grid layout', 'columns' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register events block
		acf_register_block(array(
			'name'				=> 'promo-box',
			'title'				=> __('Promotional Box'),
			'description'		=> __('Boxed row with content and featured image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'image', 'promotional' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register two third one third block
		acf_register_block(array(
			'name'				=> 'two-col-full-span',
			'title'				=> __('Two Column Full Span Block'),
			'description'		=> __('A full width two column block'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'full width', 'columns' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register flexbox block
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel Block'),
			'description'		=> __('Displays image carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'photo gallery' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register content block
		acf_register_block(array(
			'name'				=> 'boxed-columns',
			'title'				=> __('Boxed Columns Block'),
			'description'		=> __('Variable columns wrapped in boxes'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'boxed items', 'columns' ),
			'mode'				=> 'edit',
			'supports'			=> array( 'mode' => false ),
		));
		
		// register image grid
		acf_register_block(array(
			'name'				=> 'shortcode',
			'title'				=> __('Shortcode Block'),
			'description'		=> __('Display shortcode with page anchor link'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'shortcode', 'page anchor link' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register column block
		acf_register_block(array(
			'name'				=> 'columns',
			'title'				=> __('Variable Columns Section'),
			'description'		=> __('Displays variable column layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'columns', 'variable' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register single testimonial block
		acf_register_block(array(
			'name'				=> 'testimonial-single',
			'title'				=> __('Testimonial Carousel Section'),
			'description'		=> __('Displays testimonials in a carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'testimonial', 'quote' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register home page slider block
		acf_register_block(array(
			'name'				=> 'slider',
			'title'				=> __('Partners Slider Section'),
			'description'		=> __('Displays a logos in carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'carousel', 'logos' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register content block
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content Section'),
			'description'		=> __('Displays a WYSIWYG editor with various design options'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'editor' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register product block
		acf_register_block(array(
			'name'				=> 'archive',
			'title'				=> __('Archive Block'),
			'description'		=> __('Displays selected post type results'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'layout', 'editor' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register accordion block
		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion Block'),
			'description'		=> __('Displays collapsable tabs for titles and content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'tabs', 'accordion' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));
		
		// register brand grid / carousel
		acf_register_block(array(
			'name'				=> 'brand',
			'title'				=> __('Brands Block'),
			'description'		=> __('Displays brands in either grid or carousel'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'image grid', 'carousel' ),
			'supports'			=> [
				'align' => false,
				'anchor' => true,
				'customClassName' => true,
			]
		));

	}
}

add_action('acf/init', 'my_acf_init');

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/templates/blocks/block-{$slug}.php") ) ) {
		include( get_theme_file_path("/templates/blocks/block-{$slug}.php") );
	}
	
	// Create id attribute allowing for custom "anchor" value.
	$id = 'testimonial-' . $block['id'];
	if( !empty($block['anchor']) ) {
		$id = $block['anchor'];
	}
	
	// Create class attribute allowing for custom "className" and "align" values.
	$className = 'testimonial';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
	    $className .= ' align' . $block['align'];
	}
}

// OPTIONS PAGE
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page( 'Theme Settings' );
	
}