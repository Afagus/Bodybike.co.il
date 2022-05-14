<?php

add_action( 'wp_enqueue_scripts', function () {

	wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com' );
	wp_enqueue_style( 'font-gstatic', 'https://fonts.gstatic.com' );
	wp_enqueue_style( 'font-Heebo', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&display=swap' );
	wp_enqueue_style( 'font-Antonio', 'https://fonts.googleapis.com/css2?family=Antonio&display=swap' );
	wp_enqueue_style( 'all', get_template_directory_uri() . '/assets/css/all.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '', true );
}
);

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

# Добавляет SVG в список разрешенных для загрузки файлов.
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

function custom_post_type() {


	$labels = array(

		'name' => _x( 'products', 'Post Type General Name', 'text_domain' ),

		'singular_name' => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'     => __( 'Products', 'text_domain' ),

		'parent_item_colon' => __( 'Parent Item:', 'text_domain' ),

		'all_items' => __( 'All Items', 'text_domain' ),

		'view_item' => __( 'View Item', 'text_domain' ),

		'add_new_item' => __( 'Add New Item', 'text_domain' ),

		'add_new' => __( 'Add New', 'text_domain' ),

		'edit_item' => __( 'Edit Item', 'text_domain' ),

		'update_item' => __( 'Update Item', 'text_domain' ),

		'search_items' => __( 'Search Item', 'text_domain' ),

		'not_found' => __( 'Not found', 'text_domain' ),

		'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),

	);

	$args = array(

		'label' => __( 'Products', 'text_domain' ),

		'description' => __( 'Post Type Description', 'text_domain' ),

		'labels' => $labels,

		'supports' => array(),

		'taxonomies' => array( 'category', 'post_tag' ),

		'hierarchical' => false,

		'public' => true,

		'show_ui' => true,

		'show_in_menu' => true,

		'show_in_nav_menus' => true,

		'show_in_admin_bar' => true,

		'menu_position' => 5,

		'menu_icon' => 'dashicons-cart',

		'can_export' => true,

		'has_archive' => true,

		'exclude_from_search' => false,

		'publicly_queryable' => true,

		'capability_type' => 'page',

	);
	register_post_type( 'Products', $args );
}

add_action( 'init', 'custom_post_type', 0 );