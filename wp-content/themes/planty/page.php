<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail(
                    'full',
                    [
                        'itemprop' => 'image',
                    ],
                );
            }
        ?>
        <?php the_content(); ?>
    </div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>