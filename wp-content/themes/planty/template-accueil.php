<?php
// Template Name: Accueil

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

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">

        <section class="c-hero" style="background-color:<?php echo( $hero_background_color ); ?>;">
            <div class="o-wrapper">
                <div class="c-hero__title">
                    <?php echo( $hero_title ? $hero_title : the_title() ); ?>
                </div>
                <div class="c-hero__images">
                    <?php foreach ($hero_images as $image) {
                        echo( '<img class="c-hero__images-img" src="'.$image["image"]["url"].'" alt="'.$image["image"]["alt"].'">' );
                    } ?>
                </div>
            </div>
        </section>

        <section class="c-texts" style="background-color:<?php echo( $texts_background_color ); ?>;">
            <div class="o-wrapper">
                <?php echo( $texts ); ?>
            </div>
        </section>
        
        <section class="c-flavours" style="background-color:<?php echo( $flavours_background_color ); ?>;">
            <div class="o-wrapper">
                <div class="c-flavours__title">
                    <?php echo( $flavours_title ); ?>
                </div>
                <ul class="c-flavours__list">
                    <?php foreach ($flavours_list as $flavour) {
                        echo( '<li class="c-flavours__list-item">' );
                            echo( '<p>'.$flavour["name"].'</p>' );
                            echo( '<img class="c-flavours__list-image" src="'.$flavour["image"]["url"].'" alt="'.$flavour["image"]["alt"].'">' );
                        echo( '</li>' );
                    } ?>
                </ul>
                <?php echo( '<a class="c-flavours__link button-link" href="'.$flavours_link["url"].'" target="'.$flavours_link["target"].'">'.$flavours_link["title"].'</a>' ); ?>
            </div>
        </section>

        <section class="c-testimonials" style="background-color:<?php echo( $testimonials_background_color ); ?>;">
            <div class="o-wrapper">
                <div class="c-testimonials__title">
                    <?php echo( $testimonials_title ); ?>
                </div>
                <ul class="c-testimonials__list">
                    <?php foreach ($testimonials_list as $testimonial) {
                        echo( '<li class="c-testimonials__list-item">' );
                            echo( '<p class="c-testimonials__list-name">'.$testimonial["name"].'</p>' );
                            echo( '<p class="c-testimonials__list-texts">'.$testimonial["texts"].'</p>' );
                            echo( '<img class="c-testimonials__list-image" src="'.$testimonial["image"]["url"].'" alt="'.$testimonial["image"]["alt"].'">' );
                        echo( '</li>' );
                    } ?>
                </ul>
            </div>
        </section>

    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>