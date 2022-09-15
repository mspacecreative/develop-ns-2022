<?php
// REMOVE POSTS MENU ITEM FROM SIDEBAR
function post_remove ()
{ 
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove');

// REMOVE NEW POST LINK FROM ADMIN BAR
function remove_wp_nodes() 
{
    global $wp_admin_bar;   
    $wp_admin_bar->remove_node( 'new-post' );
}
add_action( 'admin_bar_menu', 'remove_wp_nodes', 999 );