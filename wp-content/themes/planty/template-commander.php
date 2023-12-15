<?php

// Template Name: Commander
include "variables-commander.php";

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
            </div>
        </section>

        <section class="c-summary" style="background-color:<?php echo( $summary_background_color ); ?>;">
            <div class="o-wrapper-xl">
                <div class="c-summary__title">
                    <?php echo( $summary_title ); ?>
                </div>
                <ul class="c-summary__list">
                    <?php foreach ($summary_list as $flavour) {
                        echo( '<li class="c-summary__list-item">' );
                            echo( '<p class="c-summary__list-name">'.$flavour["name"].'</p>' );
                            echo( '<img class="c-summary__list-image" src="'.$flavour["image"]["url"].'" alt="'.$flavour["image"]["alt"].'">' );
                            echo( '<input class="c-summary__list-button" type="numer" value="0"></input>' );
                        echo( '</li>' );
                    } ?>
                </ul>
            </div>
        </section>

        <section class="c-forms" style="background-color:<?php echo( $form_background_color ); ?>;">
            <div class="o-wrapper-sm">
                <div class="c-forms__title">
                    <?php echo( $form_title ); ?>
                </div>
                <div class="c-forms__form-container">
                    <?php echo( $form_shortcode ); ?>
                </div>
            </div>
        </section>

    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>