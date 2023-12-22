<?php

// Nous rencontrer -- HERO
$hero_title = get_field( "rencontrer__hero_title" );
$hero_image = get_field( "rencontrer__hero_image" );
$hero_background_color = get_field( "rencontrer__hero_background_color" );


// Nous rencontrer -- LISTE EQUIPE
$team_title = get_field( "rencontrer__team_title" );
$team_background_image = get_field( "rencontrer__team_background_image" );
$team_background_color = get_field( "rencontrer__team_background_color" );
$team_list = [
    [
        "name" => get_field( "rencontrer__team_profil_name_first" ),
        "occupation" => get_field( "rencontrer__team_profil_occupation_first" ),
        "image" => get_field( "rencontrer__team_profil_image_first" ),
    ],
    [
        "name" => get_field( "rencontrer__team_profil_name_second" ),
        "occupation" => get_field( "rencontrer__team_profil_occupation_second" ),
        "image" => get_field( "rencontrer__team_profil_image_second" ),
    ],
    [
        "name" => get_field( "rencontrer__team_profil_name_third" ),
        "occupation" => get_field( "rencontrer__team_profil_occupation_third" ),
        "image" => get_field( "rencontrer__team_profil_image_third" ),
    ],
];


// Nous rencontrer -- FORMULAIRE
$form_title = get_field( "rencontrer__form_title" );
$form_shortcode = do_shortcode( get_field( "rencontrer__form_shortcode" ) );
$form_background_image = get_field( "rencontrer__form_background_image" );
$form_background_color = get_field( "rencontrer__form_background_color" );