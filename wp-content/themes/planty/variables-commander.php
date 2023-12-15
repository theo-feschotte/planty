<?php

// Commander -- HERO
$hero_title = get_field( "commander__hero_title" );
$hero_background_color = get_field( "commander__hero_background_color" );


// Commander -- SUMMARY
$summary_title = get_field( "commander__summary_title" );
$summary_background_color = get_field( "commander__summary_background_color" );
$summary_list = [
    [
        "name" => get_field( "commander__summary_flavour_title_first" ),
        "image" => get_field( "commander__summary_flavour_image_first" ),
    ],
    [
        "name" => get_field( "commander__summary_flavour_title_second" ),
        "image" => get_field( "commander__summary_flavour_image_second" ),
    ],
    [
        "name" => get_field( "commander__summary_flavour_title_third" ),
        "image" => get_field( "commander__summary_flavour_image_third" ),
    ],
    [
        "name" => get_field( "commander__summary_flavour_title_fourth" ),
        "image" => get_field( "commander__summary_flavour_image_fourth" ),
    ],
];


// Commander -- FORMULAIRE
$form_title = get_field( "commander__form_title" );
$form_shortcode = do_shortcode( get_field( "commander__form_shortcode" ) );
$form_background_color = get_field( "commander__form_background_color" );