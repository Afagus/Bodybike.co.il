<?php

use it_hive\THEME;

/** Display ALL Errors */
//ini_set( 'error_reporting', E_ALL );
//ini_set( 'display_errors', 1 );
//ini_set( 'display_startup_errors', 1 );

require_once 'it-hive/loader.php';

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


/** Pages */
THEME::loadMetaBox('pages');
/** PostType */
THEME::addOptionsPage('main');

THEME::addOptionsPage('team');



THEME::addTaxonomy('team_category', 'category', 'Categories', 'team', [], ['rewrite' => ['slug' => 'team-category']]);

THEME::addPostType('team', 'team', [], ['supports' => ['title', 'editor', 'thumbnail', 'revisions'], 'query_var' => false]);
