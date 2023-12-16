<?php

// Commander -- HERO
$hero_title = get_field( "precommander__hero_title" );
$hero_background_color = get_field( "precommander__hero_background_color" );

// Commander -- FORMULAIRE
$form_summary_title = get_field( "precommander__form_summary_title" );
$form_informations_title = get_field( "precommander__form_informations_title" );
$form_address_title = get_field( "precommander__form_address_title" );
$form_shortcode = do_shortcode( get_field( "precommander__form_shortcode" ) );
$form_background_color = get_field( "precommander__form_background_color" );

// $summary_title = get_field( "precommander__summary_title" );
// $summary_background_color = get_field( "precommander__summary_background_color" );
// $summary_list = [
//     [
//         "name" => get_field( "precommander__summary_flavour_title_first" ),
//         "image" => get_field( "precommander__summary_flavour_image_first" ),
//     ],
//     [
//         "name" => get_field( "precommander__summary_flavour_title_second" ),
//         "image" => get_field( "precommander__summary_flavour_image_second" ),
//     ],
//     [
//         "name" => get_field( "precommander__summary_flavour_title_third" ),
//         "image" => get_field( "precommander__summary_flavour_image_third" ),
//     ],
//     [
//         "name" => get_field( "precommander__summary_flavour_title_fourth" ),
//         "image" => get_field( "precommander__summary_flavour_image_fourth" ),
//     ],
// ];