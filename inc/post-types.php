<?php
/**
 * Register Custom Post Types and Taxonomies for Core16
 *
 * @package Core16
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Profile and Resource Post Types and Taxonomies
 */
function core16_register_post_types_and_taxonomies() {
	// ==========================================
	// 1. TAXONOMY: Cognitive Domain (for Profiles)
	// ==========================================
	$domain_labels = array(
		'name'              => _x( 'Cognitive Domains', 'taxonomy general name', 'core16' ),
		'singular_name'     => _x( 'Cognitive Domain', 'taxonomy singular name', 'core16' ),
		'search_items'      => __( 'Search Cognitive Domains', 'core16' ),
		'all_items'         => __( 'All Cognitive Domains', 'core16' ),
		'parent_item'       => __( 'Parent Cognitive Domain', 'core16' ),
		'parent_item_colon' => __( 'Parent Cognitive Domain:', 'core16' ),
		'edit_item'         => __( 'Edit Cognitive Domain', 'core16' ),
		'update_item'       => __( 'Update Cognitive Domain', 'core16' ),
		'add_new_item'      => __( 'Add New Cognitive Domain', 'core16' ),
		'new_item_name'     => __( 'New Cognitive Domain Name', 'core16' ),
		'menu_name'         => __( 'Cognitive Domains', 'core16' ),
	);

	register_taxonomy(
		'cognitive_domain',
		array( 'profile' ),
		array(
			'hierarchical'      => true,
			'labels'            => $domain_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'cognitive-domain' ),
			'show_in_rest'      => true,
		)
	);

	// ==========================================
	// 2. CUSTOM POST TYPE: Profile (Archetypes)
	// ==========================================
	$profile_labels = array(
		'name'                  => _x( 'Profiles', 'Post Type General Name', 'core16' ),
		'singular_name'         => _x( 'Profile', 'Post Type Singular Name', 'core16' ),
		'menu_name'             => __( 'Profiles (16)', 'core16' ),
		'name_admin_bar'        => __( 'Profile', 'core16' ),
		'archives'              => __( 'Profile Archives', 'core16' ),
		'attributes'            => __( 'Profile Attributes', 'core16' ),
		'all_items'             => __( 'All Profiles', 'core16' ),
		'add_new_item'          => __( 'Add New Profile', 'core16' ),
		'add_new'               => __( 'Add New', 'core16' ),
		'new_item'              => __( 'New Profile', 'core16' ),
		'edit_item'             => __( 'Edit Profile', 'core16' ),
		'update_item'           => __( 'Update Profile', 'core16' ),
		'view_item'             => __( 'View Profile', 'core16' ),
		'view_items'            => __( 'View Profiles', 'core16' ),
		'search_items'          => __( 'Search Profiles', 'core16' ),
		'not_found'             => __( 'No profiles found', 'core16' ),
		'not_found_in_trash'    => __( 'No profiles found in Trash', 'core16' ),
	);

	$profile_args = array(
		'label'                 => __( 'Profile', 'core16' ),
		'description'           => __( 'Core16 Psychometric Archetype Profiles', 'core16' ),
		'labels'                => $profile_labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'taxonomies'            => array( 'cognitive_domain' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'profiles',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rewrite'               => array( 'slug' => 'profile' ),
	);

	register_post_type( 'profile', $profile_args );

	// ==========================================
	// 3. TAXONOMY: Resource Category (for Publications)
	// ==========================================
	$res_cat_labels = array(
		'name'              => _x( 'Resource Categories', 'taxonomy general name', 'core16' ),
		'singular_name'     => _x( 'Resource Category', 'taxonomy singular name', 'core16' ),
		'search_items'      => __( 'Search Resource Categories', 'core16' ),
		'all_items'         => __( 'All Resource Categories', 'core16' ),
		'parent_item'       => __( 'Parent Category', 'core16' ),
		'edit_item'         => __( 'Edit Resource Category', 'core16' ),
		'update_item'       => __( 'Update Resource Category', 'core16' ),
		'add_new_item'      => __( 'Add New Resource Category', 'core16' ),
		'new_item_name'     => __( 'New Resource Category Name', 'core16' ),
		'menu_name'         => __( 'Resource Categories', 'core16' ),
	);

	register_taxonomy(
		'resource_category',
		array( 'resource' ),
		array(
			'hierarchical'      => true,
			'labels'            => $res_cat_labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'resource-category' ),
			'show_in_rest'      => true,
		)
	);

	// ==========================================
	// 4. CUSTOM POST TYPE: Resource (The Core16 Review)
	// ==========================================
	$resource_labels = array(
		'name'                  => _x( 'Resources', 'Post Type General Name', 'core16' ),
		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'core16' ),
		'menu_name'             => __( 'The Core16 Review', 'core16' ),
		'name_admin_bar'        => __( 'Resource', 'core16' ),
		'archives'              => __( 'Publication Archives', 'core16' ),
		'all_items'             => __( 'All Publications', 'core16' ),
		'add_new_item'          => __( 'Add New Publication', 'core16' ),
		'add_new'               => __( 'Add New', 'core16' ),
		'new_item'              => __( 'New Publication', 'core16' ),
		'edit_item'             => __( 'Edit Publication', 'core16' ),
		'update_item'           => __( 'Update Publication', 'core16' ),
		'view_item'             => __( 'View Publication', 'core16' ),
		'search_items'          => __( 'Search Publications', 'core16' ),
	);

	$resource_args = array(
		'label'                 => __( 'Resource', 'core16' ),
		'description'           => __( 'Core16 Journal Publications, Essays & Whitepapers', 'core16' ),
		'labels'                => $resource_labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'custom-fields' ),
		'taxonomies'            => array( 'resource_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 21,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'resources',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
		'rewrite'               => array( 'slug' => 'resource' ),
	);

	register_post_type( 'resource', $resource_args );
}
add_action( 'init', 'core16_register_post_types_and_taxonomies' );
