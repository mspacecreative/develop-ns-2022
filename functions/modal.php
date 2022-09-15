<?php
function load_video_by_ajax_callback() {
    check_ajax_referer('open_modal', 'security');
    $args = array(
        'post_type' => array(
        	'video',
        	'page',
        ),
        'post_status' => 'publish',
        'p' => $_POST['id'],
    );
 
    $posts = new WP_Query( $args );
 
    $arr_response = array();
    if ($posts->have_posts()) {
 
        while($posts->have_posts()) {
 
            $posts->the_post();
            //$modal_content = apply_filters( 'the_content', get_the_content() );
            
            $arr_response = array(
                //'title' => get_the_title(),
                //'content' => $modal_content,
                'video' => get_field('embed_link'),
                'issuu' => get_field('issuu_link'),
                'featured-video' => get_field('featured_video'),
            );
        }
        wp_reset_postdata();
    }
 
    echo json_encode($arr_response);
 
    wp_die();
}

add_action('wp_ajax_load_video_by_ajax', 'load_video_by_ajax_callback');
add_action('wp_ajax_nopriv_load_video_by_ajax', 'load_video_by_ajax_callback');

// MODAL
function openModal() {
	ob_start();
		get_template_part('templates/modal');
	return ob_get_clean();
}
add_shortcode( 'modal', 'openModal' );