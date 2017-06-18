<?php

function graham_default_function(){
	
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-header');
	
	load_theme_textdomain('lang_trans',get_template_directory_uri().'/languages');
	
	// Top slider
	register_post_type('top_slider', array(
		'labels' 	=> array(
			'name' => __('Top Slider', 'lang_trans'),
			'add_new_item' => __('Add New Slider', 'lang_trans')
		),
		'public' 	=> true,
		'supports'	=> array('title','editor', 'thumbnail'),
		'menu_position'=> 7,
		'menu_icon'	=> 'dashicons-welcome-view-site'
	));
	
	// Bottome Slider
	register_post_type('bottom_slider', array(
		'labels'	=> array(
			'name'	=> __('Bottom Slider', 'lang_trans'),
			'add_new_item'=> __('Add New Slider', 'lang_trans')
		),
		'public'	=> true,
		'supports'	=> array('title', 'editor', 'thumbnail'),
		'menu_position'=> 8,
		'menu_icon'	=> 'dashicons-welcome-view-site'
	));
	
	// Register Custom Navigation Walker
	require_once ('wp_bootstrap_navwalker.php');
	// For menu
	register_nav_menus(array(
		'primary' => __('Add Primary Menu', 'lang_trans')
	));
}
add_action( 'init', 'register_my_menus' );

}
add_action('after_setup_theme','graham_default_function');




// All css and js link

function graham_css_js_link(){
	wp_register_style('normalize', get_template_directory_uri().'/css/normalize.min.css');
	wp_register_style('bootstrap', get_template_directory_uri().'/css/dist/bootstrap.min.css');
	wp_register_style('hover', get_template_directory_uri().'/css/dist/hover.min.css');
	
	wp_register_script('modernizr', get_template_directory_uri().'/js/vendor/modernizr-2.8.3.min.js');
	wp_register_script('jquery-2.2.0', get_template_directory_uri().'/js/vendor/libs/jquery-2.2.0.min.js');
	wp_register_script('jquery-2.1.4', get_template_directory_uri().'/js/vendor/libs/jquery-2.1.4.min.js');
	wp_register_script('jquery v1.11.2', get_template_directory_uri().'/js/vendor/libs/jquery v1.11.2.min.js');
	wp_register_script('bootstrap.min', get_template_directory_uri().'/js/bootstrap.min.js');
	wp_register_script('nicescroll', get_template_directory_uri().'/js/vendor/jquery.nicescroll.js');
	wp_register_script('stellar', get_template_directory_uri().'/js/vendor/jquery.stellar.js');
	wp_register_script('main', get_template_directory_uri().'/js/main.js');
	
	wp_enqueue_style('normalize');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('hover');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('jquery-2.2.0');
	wp_enqueue_script('jquery-2.1.4');
	wp_enqueue_script('jquery v1.11.2');
	wp_enqueue_script('bootstrap.min');
	wp_enqueue_script('nicescroll');
	wp_enqueue_script('stellar');
	wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'graham_css_js_link');

function load_google_fonts() {
wp_register_style('googleWebFonts', 'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz');
wp_enqueue_style('googleWebFonts');
}
add_action('wp_print_styles', 'load_google_fonts');

function font_awesome_icon(){
	wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('font-awesome');
}
add_action('admin_enqueue_scripts','font_awesome_icon');
add_action('wp_enqueue_scripts','font_awesome_icon');

//for framework
require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/theme-option.php');





































?>