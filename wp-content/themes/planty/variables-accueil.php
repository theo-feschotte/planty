<?php

// Accueil -- HERO
$hero_title = get_field( "accueil__hero_title" );
$hero_background_color = get_field( "accueil__hero_background_color" );
$hero_images = [
    [
        "image" => get_field( "accueil__hero_image_first" ),
    ],
    [
        "image" => get_field( "accueil__hero_image_second" ),
    ],
    [
        "image" => get_field( "accueil__hero_image_third" ),
    ],
];


// Accueil -- PARAGRAPHE
$texts = get_field( "accueil__texts" );
$texts_background_color = get_field( "accueil__texts_background_color" );


// Accueil -- LISTE DE SAVEURS
$flavours_title = get_field( "accueil__flavours_title" );
$flavours_link = get_field( "accueil__flavours_link" );
$flavours_background_color = get_field( "accueil__flavours_background_color" );
$flavours_list = [
    [
        "name" => get_field( "accueil__flavours_flavour_title_first" ),
        "image" => get_field( "accueil__flavours_flavour_image_first" ),
    ],
    [
        "name" => get_field( "accueil__flavours_flavour_title_second" ),
        "image" => get_field( "accueil__flavours_flavour_image_second" ),
    ],
    [
        "name" => get_field( "accueil__flavours_flavour_title_third" ),
        "image" => get_field( "accueil__flavours_flavour_image_third" ),
    ],
    [
        "name" => get_field( "accueil__flavours_flavour_title_fourth" ),
        "image" => get_field( "accueil__flavours_flavour_image_fourth" ),
    ],
];


// Accueil -- LISTE DE TEMOIGNAGES
$testimonials_title = get_field( "accueil__testimonials_title" );
$testimonials_background_color = get_field( "accueil__testimonials_background_color" );
$testimonials_list = [
    [
        "name" => get_field( "accueil__testimonials_testimonial_name_first" ),
        "texts" => get_field( "accueil__testimonials_testimonial_texts_first" ),
        "image" => get_field( "accueil__testimonials_testimonial_image_first" ),
    ],
    [
        "name" => get_field( "accueil__testimonials_testimonial_name_second" ),
        "texts" => get_field( "accueil__testimonials_testimonial_texts_second" ),
        "image" => get_field( "accueil__testimonials_testimonial_image_second" ),
    ],
    [
        "name" => get_field( "accueil__testimonials_testimonial_name_third" ),
        "texts" => get_field( "accueil__testimonials_testimonial_texts_third" ),
        "image" => get_field( "accueil__testimonials_testimonial_image_third" ),
    ],
];