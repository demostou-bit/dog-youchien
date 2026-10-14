<?php
/**
 * @package DogYochien
 */

get_header(); ?>

<!-- ページタイトル -->
<section class="section diary-page-title">
    <div class="container">
        <h1 class="section-title">あしあと日記</h1>
    </div>
</section>

<!-- ① 紹介エリア（About風） -->
<section class="section diary-about">
    <div class="container diary-about-inner">
        <div class="diary-about-text">
            <span class="diary-about-label">Diary</span>
            <h2 class="diary-about-title">
                毎日の様子を、<br>
                写真とともにお届け。
            </h2>
            <p class="diary-about-desc">
                お預かり中のわんちゃんの様子を「あしあと日記」として記録しています。<br>
                食事・排泄・遊び・お昼寝の様子など、毎日のことを写真とともにご家族にお伝えします。<br>
                お迎えの際にもご報告させていただきます。
            </p>
        </div>
        <div class="diary-about-image">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/diary-about.jpg" alt="あしあと日記" onerror="this.style.display='none'; this.parentElement.innerHTML='📷 diary-about.jpg を設定'">
        </div>
    </div>
</section>

<!-- ② 記事一覧 -->
<section class="section diary-list" id="diary-list">
    <div class="container">
        <div class="diary-list-wrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="diary-list-item">
                    <time class="diary-list-date"><?php echo get_the_date( 'Y.m.d' ); ?></time>
                    <h3 class="diary-list-title"><?php the_title(); ?></h3>
                    <span class="diary-list-arrow">→</span>
                </a>
            <?php endwhile; else : ?>
                <p style="text-align:center; padding: 2rem 0;">まだ投稿がありません。</p>
            <?php endif; ?>
        </div>

        <!-- ページネーション -->
        <div class="diary-pagination">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 1,
                'prev_text' => '← 前へ',
                'next_text' => '次へ →',
            ) );
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>