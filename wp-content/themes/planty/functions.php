<?php

add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );
function wpm_enqueue_styles() {
    // Parent theme stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Components stylesheet - SASS compiled
    wp_enqueue_style( 'sass-style', get_stylesheet_directory_uri() . '/dist/css/styles.css' );
}

add_filter( 'wp_theme_json_data_theme', 'filter_theme_json_theme' );
function filter_theme_json_theme( $theme_json ) {
    $new_colors = [
        'version'  => 1,
        'settings' => [
            'color' => [
                'text' => false,
                'defaultPalette' => false,
                'palette' => [
                    [
                        'slug' => 'dark-pink',
                        'color' => '#D2776a',
                        'name' => __( 'Rose foncé', 'theme-domain' ),
                    ],
                    [
                        'slug' => 'light-pink',
                        'color' => '#e0b9b4',
                        'name' => __( 'Rose clair', 'theme-domain' ),
                    ],
                    [
                        'slug' => 'green',
                        'color' => '#3b8e46',
                        'name' => __( 'Vert', 'theme-domain' ),
                    ],
                    [
                        'slug' => 'cream',
                        'color' => '#ece2da',
                        'name' => __( 'Crème', 'theme-domain' ),
                    ],
                    [
                        'slug' => 'white',
                        'color' => '#ffffff',
                        'name' => __( 'Blanc', 'theme-domain' ),
                    ],
                    [
                        'slug' => 'black',
                        'color' => '#000000',
                        'name' => __( 'Noir', 'theme-domain' ),
                    ],
                ],
            ],
        ],
    ];
    return $theme_json->update_with( $new_colors );
}