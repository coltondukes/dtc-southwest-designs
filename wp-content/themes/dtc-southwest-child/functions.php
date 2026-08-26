<?php
/**
 * DTC Southwest Child Theme Functions
 */

// Enqueue parent theme stylesheet
function dtc_southwest_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'dtc_southwest_enqueue_styles' );

// Add custom theme support
function dtc_southwest_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'dtc_southwest_setup' );
