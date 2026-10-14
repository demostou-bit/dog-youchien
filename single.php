<?php
/**
 * @package DogYochien
 */

get_header(); ?>

<!-- パンくず -->
<div class="breadcrumb-wrap">
    <div class="container">
        <nav class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップ</a>
            <span class="breadcrumb-sep">＞</span>
            <a href="<?php echo esc_url( home_url( '/diary/' ) ); ?>">あしあと日記</a>
            <span class="breadcrumb-sep">＞</span>
            <span><?php the_title(); ?></span>
        </nav>
    </div>
</div>

<section class="section diary-single-header">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <h1 class="diary-single-title"><?php the_title(); ?></h1>
            <time class="diary-single-date"><?php echo get_the_date( 'Y.m.d' ); ?></time>
        <?php endwhile; ?>
    </div>
</section>

<section class="section diary-single-body">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="diary-single-image">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>
            <div class="diary-single-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>