<?php

/**
 * @package DogYochien
 */

get_header(); ?>

<!-- タイトル -->
<section class="section page-header" style="padding-top: 120px;">
    <div class="container">
        <h1 class="section-title"><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?>
            <p class="hero-subtitle" style="text-align: center; margin-top: 1rem;"><?php the_excerpt(); ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- 4ステップ -->
<section class="section programs-intro">
    <div class="container">
        <div class="programs-lead">
            <h2 class="programs-lead-title">
                それぞれの年齢に合わせた<br>
                「のびのび過ごすサイクル」を作ります
            </h2>
            <p class="programs-lead-text">
                1回のお預かりでは変化が見えにくいことも多いため、<br>
                継続的なケアの中で、わんちゃんに合った過ごし方を見つけていきます。
            </p>
        </div>

        <?php $img_path = get_template_directory_uri() . '/images/'; ?>

        <div class="step-grid">
            <div class="step-item">
                <div class="step-image">
                    <img src="<?php echo esc_url($img_path . 'step-01.jpg'); ?>" alt="初回カウンセリング" onerror="this.parentElement.innerHTML='📷 step-01.jpg が見つかりません<br>' + this.src;">
                </div>
                <div class="step-body">
                    <span class="step-number">01</span>
                    <h3 class="step-title">初回カウンセリング</h3>
                    <p class="step-text">初めてのご利用時に、わんちゃんの性格・健康状態・ご家庭の生活リズムをお伺いします。ご家族の希望も含め、個別のケア方針をご提案します。</p>
                </div>
            </div>

            <div class="step-item step-item-reverse">
                <div class="step-image">
                    <img src="<?php echo esc_url($img_path . 'step-02.jpg'); ?>" alt="個別ケアプランの作成" onerror="this.parentElement.innerHTML='📷 step-02.jpg が見つかりません<br>' + this.src;">
                </div>
                <div class="step-body">
                    <span class="step-number">02</span>
                    <h3 class="step-title">個別ケアプランの作成</h3>
                    <p class="step-text">カウンセリングで伺った内容をもとに、年齢・体力・性格に合わせた一日のスケジュールとケア内容を設計します。</p>
                </div>
            </div>

            <div class="step-item">
                <div class="step-image">
                    <img src="<?php echo esc_url($img_path . 'step-03.jpg'); ?>" alt="年齢に合わせた過ごし方" onerror="this.parentElement.innerHTML='📷 step-03.jpg が見つかりません<br>' + this.src;">
                </div>
                <div class="step-body">
                    <span class="step-number">03</span>
                    <h3 class="step-title">年齢に合わせた過ごし方</h3>
                    <p class="step-text">パピー・アダルト・シニア、それぞれの体力と発達段階に合わせた遊び・運動・休息のスケジュールで、無理のない一日を過ごします。</p>
                </div>
            </div>

            <div class="step-item step-item-reverse">
                <div class="step-image">
                    <img src="<?php echo esc_url($img_path . 'step-04.jpg'); ?>" alt="あしあと日記でご報告" onerror="this.parentElement.innerHTML='📷 step-04.jpg が見つかりません<br>' + this.src;">
                </div>
                <div class="step-body">
                    <span class="step-number">04</span>
                    <h3 class="step-title">あしあと日記でご報告</h3>
                    <p class="step-text">お迎え時に「あしあと日記」で食事・排泄・遊び・気になる様子をお伝えします。お家でのケアにも活かせるよう、スタッフからのコメントも添えます。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 年齢別3カード -->
<section class="section programs">
    <div class="container">
        <h2 class="programs-section-title">年齢に合わせた3つのプログラム</h2>
        <div class="programs-grid">
            <?php
            $child_pages = new WP_Query(array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => get_the_ID(),
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ));

            if ($child_pages->have_posts()) :
                while ($child_pages->have_posts()) : $child_pages->the_post();
                    $badge_class = '';
                    $age_text    = '';  // ← 年齢範囲用の変数を追加
                    $title = get_the_title();

                    if (strpos($title, 'パピー') !== false) {
                        $badge_class = 'badge-puppy';
                        $age_text    = '生後3ヶ月〜1歳未満の子犬向けプログラム';
                    } elseif (strpos($title, 'アダルト') !== false) {
                        $badge_class = 'badge-adult';
                        $age_text    = '1歳〜7歳の成犬向けプログラム';
                    } elseif (strpos($title, 'シニア') !== false) {
                        $badge_class = 'badge-senior';
                        $age_text    = '7歳以上のシニア犬向けプログラム';
                    }
            ?>
                    <a href="<?php the_permalink(); ?>" class="program-card program-card-simple">
                        <div class="program-image">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            } else {
                                echo '<span>📷 画像を設定</span>';
                            } ?>
                        </div>
                        <div class="program-info">
                            <span class="program-badge <?php echo esc_attr($badge_class); ?>"><?php the_title(); ?></span>
                            <p class="program-age"><?php echo esc_html($age_text); ?></p>
                        </div>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p style="text-align:center;">プログラムが見つかりませんでした。</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>