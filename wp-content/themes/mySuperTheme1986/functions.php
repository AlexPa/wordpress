<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style1', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'style2', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'style3', get_template_directory_uri() . '/assets/css/responsive.css');
	wp_enqueue_style( 'style4', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css');
	wp_enqueue_style( 'style5', get_template_directory_uri() . '/assets/css/fix.css');

	//wp_enqueue_script('script1', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1', true);
	wp_enqueue_script('script2', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1', true);
	wp_enqueue_script('script3', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1', true);
	wp_enqueue_script('script4', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array('jquery'), '1', true);
	wp_enqueue_script('script5', get_template_directory_uri() . '/assets/js/plugin.js', array('jquery'), '1', true);
	wp_enqueue_script('script6', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), '1', true);
	wp_enqueue_script('script7', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1', true);
	wp_enqueue_script('script8', 'https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js', array('jquery'), '1', true);

	wp_enqueue_script('script9', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '1', false);
	wp_enqueue_script('script10', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1', false);

	wp_script_add_data( 'script9', 'conditional', 'lt IE 9' );
	wp_script_add_data( 'script10', 'conditional', 'lt IE 9' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('menus');

add_filter( 'upload_mimes', function ( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
});


