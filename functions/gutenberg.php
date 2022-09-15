<?php

/* STYLE GUTENBERG */
function gutenberg_editor_styles() {
	add_theme_support('editor-styles');
	add_editor_style( 'assets/css/gutenberg.css' );
}
add_action('init','gutenberg_editor_styles');

function wpse_editor_styles() {
    // Use our existing main stylesheet for TinyMCE too.
    add_editor_style( 'assets/css/editor-style.css' );
}
add_action( 'after_setup_theme', 'wpse_editor_styles' );

/* ADD BACK EXCERPTS */
function wpse325327_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpse325327_add_excerpts_to_pages' );

// GUTENBURG BACK END STYLES
function legit_block_editor_styles() {
    wp_enqueue_style( 'legit-editor-styles', get_theme_file_uri( 'assets/css/editor-style.css' ), false, null, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'legit_block_editor_styles' );