<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="wrapper" class="hfeed">

        <header id="header" role="banner">
            <?php the_custom_logo(); ?>
            <nav id="menu">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => 'menu-header',
                        'menu_class' => 'menu-list',
                    ]);
                ?>
            </nav>
        </header>

        <div id="container">
            <main id="content" role="main">