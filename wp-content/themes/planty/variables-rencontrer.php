<?php

// Nous rencontrer -- HERO
$hero_title = get_field( "rencontrer__hero_title" );
$hero_background_color = get_field( "rencontrer__hero_background_color" );
$hero_images = [
    [
        "image" => get_field( "rencontrer__hero_image_first" ),
    ],
    [
        "image" => get_field( "rencontrer__hero_image_second" ),
    ],
    [
        "image" => get_field( "rencontrer__hero_image_third" ),
    ],
];