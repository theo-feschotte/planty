<?php

// Template Name: Nous rencontrer
include "variables-rencontrer.php";

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

    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>