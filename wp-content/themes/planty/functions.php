<?php

add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
function wpm_enqueue_styles() {
    // Parent theme stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Components stylesheet - SASS compiled
    wp_enqueue_style( 'sass-style', get_stylesheet_directory_uri() . '/dist/css/styles.css' );
}