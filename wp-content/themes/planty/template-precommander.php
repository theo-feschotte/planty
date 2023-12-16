<?php

// Template Name: Precommander
include "variables-precommander.php";

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

        <section class="c-forms c-forms--preorder" style="background-color:<?php echo( $form_background_color ); ?>;">
            <div class="o-wrapper-xl">
                <div class="c-forms__form-container">
                    <?php echo( $form_shortcode ); ?>
                </div>
            </div>
        </section>

    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>