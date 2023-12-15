<?php

// Template Name: Nous rencontrer
include "variables-rencontrer.php";

?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">

        <section class="c-hero <?php echo( $hero_image ? 'c-hero--bg-img' : '' ); ?>" style="background-image:url('<?php echo( $hero_image["url"] ); ?>'); background-color:<?php echo( $hero_background_color ); ?>;">
            <div class="o-wrapper-md">
                <div class="c-hero__title">
                    <?php echo( $hero_title ? $hero_title : the_title() ); ?>
                </div>
            </div>
        </section>

        <section class="c-teams" style="background-image:url('<?php echo( $team_background_image["url"] ); ?>'); background-color:<?php echo( $team_background_color ); ?>;">
            <div class="o-wrapper-xl">
                <div class="c-teams__title">
                    <?php echo( $team_title ); ?>
                </div>
                <ul class="c-teams__list">
                    <?php foreach ($team_list as $profil) {
                        echo( '<li class="c-teams__list-item">' );
                            echo( '<div class="c-teams__list-image">' );
                                echo( '<img src="'.$profil["image"]["url"].'" alt="'.$profil["image"]["alt"].'"/>' );
                            echo( '</div>' );
                            echo( '<div class="c-teams__list-texts">' );
                                echo( '<h4 class="c-teams__list-texts__name">'.$profil["name"].'</h4>' );
                                echo( '<p class="c-teams__list-texts__occupation o-h4">'.$profil["occupation"].'</p>' );
                            echo( '</div>' );
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
            </div>
            <div class="o-wrapper-md">
                <div class="c-forms__form-container" style="background-image:url('<?php echo( $form_background_image["url"] ); ?>');">
                    <?php echo( $form_shortcode ); ?>
                </div>
            </div>
        </section>

    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>