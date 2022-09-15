<?php 
add_action( 'template_redirect', 'innovation_post_redirect' );

function innovation_post_redirect() {
	$queried_post_type = get_query_var('post_type');
	$redirectURL = '/#innovation/?query=' . get_the_ID();
	if ( is_single() && 'innovation' == $queried_post_type ) {
  		wp_redirect( $redirectURL, 301 );
    	exit;
	}
}

add_action( 'template_redirect', 'catalyst_post_redirect' );

function catalyst_post_redirect() {
	$queried_post_type = get_query_var('post_type');
	$redirectURL = '/#catalyst-for-change/?query=' . get_the_ID();
	if ( is_single() && 'catalyst_for_change' == $queried_post_type ) {
		wp_redirect( $redirectURL, 301 );
    	exit;
	}
}

add_action( 'template_redirect', 'stewardship_post_redirect' );

function stewardship_post_redirect() {
	$queried_post_type = get_query_var('post_type');
	$redirectURL = '/#stewardship/?query=' . get_the_ID();
	if ( is_single() && 'stewardship' == $queried_post_type ) {
		wp_redirect( $redirectURL, 301 );
    	exit;
	}
}

add_action( 'template_redirect', 'video_post_redirect' );

function video_post_redirect() {
	$queried_post_type = get_query_var('post_type');
	$redirectURL = '/working-waterfronts/?query=' . get_the_ID();
	if ( is_single() && 'video' == $queried_post_type ) {
		wp_redirect( $redirectURL, 301 );
    	exit;
	}
}