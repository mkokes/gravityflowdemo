<?php
function gfd_register_my_cpts() {

	/**
	 * Post Type: Snacks.
	 */

	$labels = array(
		"name" => __( 'Snacks', 'digital-pro' ),
		"singular_name" => __( 'snack', 'digital-pro' ),
	);

	$args = array(
		"label" => __( 'Snacks', 'digital-pro' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "snack", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-carrot",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "snack", $args );
}

add_action( 'init', 'gfd_register_my_cpts' );
