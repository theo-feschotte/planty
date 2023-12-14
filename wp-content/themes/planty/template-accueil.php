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

        <?php echo( $hero_title ); ?><?php echo( "<br><br>" ); ?>
        <?php echo( $hero_background_color ); ?><?php echo( "<br><br>" ); ?>
        <?php foreach ($hero_images as $image) {
            echo( $image["image"]["title"] );
            echo( "<br>" );
            echo( $image["image"]["url"] );
            echo( "<br>" );
            echo( $image["image"]["alt"] );
            echo( "<br><br>" );
        } ?><?php echo( "<br><br>" ); ?>

        <?php echo( $texts ); ?><?php echo( "<br><br>" ); ?>
        <?php echo( $texts_background_color ); ?><?php echo( "<br><br>" ); ?>

        <?php echo( $flavours_title ); ?><?php echo( "<br><br>" ); ?>
        <?php echo( $flavours_link["title"] ); ?><?php echo( "<br><br>" ); ?>
        <?php echo( $flavours_link["url"] ); ?><?php echo( "<br><br>" ); ?>
        <?php echo( $flavours_link["target"] ); ?><?php echo( "valeur_vide<br><br>" ); ?>
        <?php echo( $flavours_background_color ); ?><?php echo( "<br><br>" ); ?>
        <?php foreach ($flavours_list as $flavour) {
            echo( $flavour["name"] );
            echo( "<br>" );
            echo( $flavour["image"]["title"] );
            echo( "<br>" );
            echo( $flavour["image"]["url"] );
            echo( "<br>" );
            echo( $flavour["image"]["alt"] );
            echo( "<br>" );
            echo( "<br><br>" );
        } ?><?php echo( "<br><br>" ); ?>

        <?php echo( $testimonials_title ); ?><?php echo( "<br><br>" ); ?>
        <?php echo( $testimonials_background_color ); ?><?php echo( "<br><br>" ); ?>
        <?php foreach ($testimonials_list as $testimonial) {
            echo( $testimonial["name"] );
            echo( "<br>" );
            echo( $testimonial["texts"] );
            echo( "<br>" );
            echo( $testimonial["image"]["title"] );
            echo( "<br>" );
            echo( $testimonial["image"]["url"] );
            echo( "<br>" );
            echo( $testimonial["image"]["alt"] );
            echo( "<br>" );
            echo( "<br><br>" );
        } ?><?php echo( "<br><br>" ); ?>

    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>