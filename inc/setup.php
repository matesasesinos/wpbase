<?php

function base_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 99,
		'width'       => 585,
		'flex-width' => true,
    ) );
    
    add_theme_support( 'title-tag' );

    $header = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 0,
        'height'                 => 0,
        'flex-height'            => false,
        'flex-width'             => false,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => false,
        'video-active-callback'  => 'is_front_page',
    );
    add_theme_support( 'custom-header', $header );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

}
add_action( 'after_setup_theme', 'base_setup' );

function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );