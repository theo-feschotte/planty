<?php

add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
function wpm_enqueue_styles() {
    // Parent theme stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Components stylesheet - SASS compiled
    wp_enqueue_style( 'sass-style', get_stylesheet_directory_uri() . '/dist/css/styles.css' );
}

// Only display 'Admin' link in the menu for logged_in users
add_filter( 'wp_nav_menu_objects', 'custom_filter_menu', 10, 2 );
function custom_filter_menu( $sorted_menu_objects, $args ) {
    if ($args->menu == 'menu_principal') {
        return $sorted_menu_objects;
    };
    foreach ($sorted_menu_objects as $key => $menu_object) {
        if ($menu_object->title == 'Admin') {
            if (! is_user_logged_in()) {
                unset($sorted_menu_objects[$menu_object->menu_order]);
            };
        };
    };
    return $sorted_menu_objects;
};