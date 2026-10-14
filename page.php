<?php
/**
 * @package DogYochien
 */

get_header(); ?>

<section class="section page-header" style="padding-top: 120px;">
    <div class="container">
        <h1 class="section-title"><?php the_title(); ?></h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <div class="page-content">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="page-featured-image" style="text-align: center; margin-bottom: 2rem;">
                        <?php the_post_thumbnail( 'large' ); ?>
                    </div>
                <?php endif; ?>
                
                <div class="content-wrapper" style="max-width: 800px; margin: 0 auto; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>