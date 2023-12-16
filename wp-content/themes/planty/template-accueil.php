<?php

// Template Name: Accueil
include "variables-accueil.php";

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">

        <section class="c-hero" style="background-color:<?php echo( $hero_background_color ); ?>;">
            <div class="o-wrapper-md">
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
                    <?php $delay = 0; ?>
                    <?php foreach ($testimonials_list as $key=>$testimonial) {
                        $delay = ($key / 7);
                        echo( '<li class="c-testimonials__list-item">' );
                            echo( '
                                <div class="c-testimonials__list-image" style="animation-delay:calc(0.5s + '.$delay.'s)">
                                    <svg viewBox="0 0 127 140" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <clipPath id="p-shape">
                                                <path d="M121,22.4c-3.8-7-9-12.5-15.7-16.4C98.7,2,91,0,82.3,0H0.4v139h44.6V94.1h37.3c8.6,0,16.2-2,22.8-5.9 c6.7-3.9,12-9.4,15.7-16.4c3.9-7.1,5.8-15.5,5.8-25.1C126.6,37.6,124.8,29.4,121,22.4z M77.8,58c-2.3,2.4-5.8,3.6-10.5,3.6H44.9 V32.9h22.4c3.2,0,5.9,0.5,7.9,1.6c2.2,1.1,3.7,2.7,4.6,4.8c1.1,2,1.6,4.6,1.6,7.9C81.5,52,80.2,55.6,77.8,58z"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <img style="clip-path:url(#p-shape)" src="'.$testimonial["image"]["url"].'" alt="'.$testimonial["image"]["alt"].'"/>
                                </div>
                            ' );
                            echo( '<div class="c-testimonials__list-texts">' );
                                echo( '<h3 class="c-testimonials__list-texts__name">'.$testimonial["name"].'</h3>' );
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