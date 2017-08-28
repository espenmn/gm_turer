<?php

/**
* Plugin Name: GM Turer Plugin
* Plugin URI: https://github.com/espenmn/gm_turer
* Description: Adds content type 'tur' to wordpress
* Version: 1.0
* Author: Espen Moe-Nilssen
* Author URI: http://medialog.no
* License:GPL12
*/



// Register Custom Post Type
function tur_function() {

	$labels = array(
		'name'                  => _x( 'Turer', 'Post Type General Name', 'grieg_medialog' ),
		'singular_name'         => _x( 'Tur', 'Post Type Singular Name', 'grieg_medialog' ),
		'menu_name'             => __( 'Turer', 'grieg_medialog' ),
		'name_admin_bar'        => __( 'Tur', 'grieg_medialog' ),
		'archives'              => __( 'Turarkiv', 'grieg_medialog' ),
		'attributes'            => __( 'Item Attributes', 'grieg_medialog' ),
		'parent_item_colon'     => __( 'Parent Item:', 'grieg_medialog' ),
		'all_items'             => __( 'Alle Turer', 'grieg_medialog' ),
		'add_new_item'          => __( 'Ny tur', 'grieg_medialog' ),
		'add_new'               => __( 'Ny tur', 'grieg_medialog' ),
		'new_item'              => __( 'Ny Tur', 'grieg_medialog' ),
		'edit_item'             => __( 'Rediger Tur', 'grieg_medialog' ),
		'update_item'           => __( 'Oppdater tur', 'grieg_medialog' ),
		'view_item'             => __( 'Vis tur', 'grieg_medialog' ),
		'view_items'            => __( 'vis turer', 'grieg_medialog' ),
		'search_items'          => __( 'search Tur', 'grieg_medialog' ),
		'not_found'             => __( 'Ikke funnet', 'grieg_medialog' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'grieg_medialog' ),
		'featured_image'        => __( 'Featured Image', 'grieg_medialog' ),
		'set_featured_image'    => __( 'Set featured image', 'grieg_medialog' ),
		'remove_featured_image' => __( 'Remove featured image', 'grieg_medialog' ),
		'use_featured_image'    => __( 'Use as featured image', 'grieg_medialog' ),
		'insert_into_item'      => __( 'Insert into item', 'grieg_medialog' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'grieg_medialog' ),
		'items_list'            => __( 'Items list', 'grieg_medialog' ),
		'items_list_navigation' => __( 'Items list navigation', 'grieg_medialog' ),
		'filter_items_list'     => __( 'Filter items list', 'grieg_medialog' ),
	);
	$args = array(
		'label'                 => __( 'Tur', 'grieg_medialog' ),
		'description'           => __( 'Tur', 'grieg_medialog' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-chart-area',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'tur', $args );

}
add_action( 'init', 'tur_function', 0 );

?>
