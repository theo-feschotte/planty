<?php

// Template Name: Accueil
include "variables-accueil.php";

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">

        <section class="c-hero" style="background-color:<?php echo( $hero_background_color ); ?>;">
            <div class="o-wrapper-xl">
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
            <div class="o-wrapper-sm">
                <?php echo( $texts ); ?>
            </div>
        </section>
        
        <section class="c-flavours" style="background-color:<?php echo( $flavours_background_color ); ?>;">
            <div class="o-wrapper-xl">
                <div class="c-flavours__title">
                    <?php echo( $flavours_title ); ?>
                </div>
                <ul class="c-flavours__list">
                    <?php foreach ($flavours_list as $flavour) {
                        echo( '<li class="c-flavours__list-item">' );
                            echo( '<p class="c-flavours__list-name">'.$flavour["name"].'</p>' );
                            echo( '<img class="c-flavours__list-image" src="'.$flavour["image"]["url"].'" alt="'.$flavour["image"]["alt"].'">' );
                        echo( '</li>' );
                    } ?>
                </ul>
                <?php echo( '<a class="c-flavours__link btn-link" href="'.$flavours_link["url"].'" target="'.$flavours_link["target"].'">'.$flavours_link["title"].'</a>' ); ?>
            </div>
        </section>

        <section class="c-testimonials" style="background-color:<?php echo( $testimonials_background_color ); ?>;">
            <div class="o-wrapper-xl">
                <div class="c-testimonials__title">
                    <?php echo( $testimonials_title ); ?>
                </div>
                <ul class="c-testimonials__list">
                    <?php foreach ($testimonials_list as $testimonial) {
                        echo( '<li class="c-testimonials__list-item">' );
                            echo( '<img class="c-testimonials__list-image" src="'.$testimonial["image"]["url"].'" alt="'.$testimonial["image"]["alt"].'">' );
                            echo( '<div class="c-testimonials__list-texts">' );
                                echo( '<p class="c-testimonials__list-texts__name">'.$testimonial["name"].'</p>' );
                                echo( '<p class="c-testimonials__list-texts__text">'.$testimonial["texts"].'</p>' );
                            echo( '</div>' );
                        echo( '</li>' );
                    } ?>
                </ul>
            </div>
        </section>

    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>