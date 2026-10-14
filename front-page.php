<?php

/**
 * @package DogYochien
 */
get_header(); ?>

<section class="hero" id="hero">
    <!-- 画像スライドショー -->
    <div class="hero-slideshow">
        <div class="hero-slide" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/hero-1.jpg');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/hero-2.jpg');"></div>
        <div class="hero-slide" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/images/hero-3.jpg');"></div>
    </div>

    <div class="hero-content">
        <h1 class="hero-concept">
            あしあとようちえん<br>
        </h1>
        <h2 class="hero-concept">ちいさな一歩、ずっと寄り添う。</h2>
        <p class="hero-subtitle">
            パピーからシニアまで、どんな年齢のわんちゃんも大切に預かる、<br>
            在宅型の犬専門ようちえんです。<br>
            自然に囲まれた環境で、それぞれのペースで過ごす毎日を。
        </p>
        <a href="<?php echo esc_url(get_theme_mod('hero_cta_url', '#contact')); ?>" class="btn btn-primary">
            <span>🐾</span> <?php echo esc_html(get_theme_mod('hero_cta_text', '見学のご予約はこちら')); ?>
        </a>
    </div>
</section>

<section class="section about" id="about">
    <div class="container">
        <h2 class="section-title">ようちえんについて</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg" alt="いぬのようちえんの様子">
            </div>
            <div class="about-text">
                <h3>パピーからシニアまで預かる<br>在宅型保育園</h3>
                <p>「いぬのようちえん」は、ご家庭のような温かみのある環境で、愛犬の成長をサポートする在宅型保育園です。少人数制で一人ひとりに寄り添ったケアを大切にしています。</p>
                <p>自然素材の遊具や安全な庭での遊びを通じて、犬たちがのびのびと過ごせる空間をご用意しています。</p>
                <div class="tag-list">
                    <span class="tag">少人数制</span>
                    <span class="tag">送迎サービス</span>
                    <span class="tag">自然素材の遊具</span>
                    <span class="tag">個別ケア</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section features" id="features">
    <div class="container">
        <h2 class="section-title">3つの特徴</h2>
        <div class="features-grid">
            <div class="feature-card feature-card-static">
                <div class="feature-icon">🐕</div>
                <h3>年齢に合わせた個別ケア</h3>
                <p>パピー・アダルト・シニア、それぞれの年齢に合わせた専門的なケアプログラムを提供します。</p>
            </div>
            <div class="feature-card feature-card-static">
                <div class="feature-icon">🌿</div>
                <h3>自然に囲まれた庭遊び</h3>
                <p>広々とした自然素材の庭で、犬たちが思いっきり遊べる環境を整えています。</p>
            </div>
            <a href="<?php echo esc_url(home_url('/diary/')); ?>" class="feature-card feature-card-link">
                <div class="feature-icon">📔</div>
                <h3>毎日の「あしあと日記」</h3>
                <p>お預かり中の様子を写真とともに「あしあと日記」としてお届けします。</p>
                <span class="btn btn-primary">🐾日記はこちら</span>
            </a>
        </div>
    </div>
</section>

<section class="section programs" id="programs">
    <div class="container">
        <h2 class="section-title">年齢別プログラム</h2>
        <div class="programs-grid">
            <?php
            $parent_slug = 'programs';
            $parent_page = get_page_by_path($parent_slug);

            if ($parent_page) {
                $child_pages = get_children(array(
                    'post_parent' => $parent_page->ID,
                    'post_type'   => 'page',
                    'post_status' => 'publish',
                    'orderby'     => 'menu_order',
                    'order'       => 'ASC',
                ));

                if (! empty($child_pages)) {
                    foreach ($child_pages as $child) {
                        $badge_class = '';
                        $title = get_the_title($child->ID);
                        if (strpos($title, 'パピー') !== false) $badge_class = 'badge-puppy';
                        elseif (strpos($title, 'アダルト') !== false) $badge_class = 'badge-adult';
                        elseif (strpos($title, 'シニア') !== false) $badge_class = 'badge-senior';
            ?>
                        <!-- リンク先を親ページに変更 -->
                        <a href="<?php echo esc_url(get_permalink($parent_page->ID)); ?>" class="program-card">
                            <div class="program-image">
                                <?php if (has_post_thumbnail($child->ID)) {
                                    echo get_the_post_thumbnail($child->ID, 'medium');
                                } else {
                                    echo '<span>📷 画像を設定</span>';
                                } ?>
                            </div>
                            <div class="program-info">
                                <span class="program-badge <?php echo esc_attr($badge_class); ?>"><?php echo esc_html($title); ?></span>
                                <p><?php echo get_the_excerpt($child->ID); ?></p>
                            </div>
                        </a>
                    <?php
                    }
                } else {
                    // 子ページ未作成時のフォールバック
                    ?>
                    <a href="<?php echo esc_url(get_permalink($parent_page->ID)); ?>" class="program-card">
                        <div class="program-image"><span>📷 パピークラス画像</span></div>
                        <div class="program-info"><span class="program-badge badge-puppy">パピークラス</span>
                            <p>生後3ヶ月〜1歳未満の子犬向け。社会化・トイレトレーニングなど基礎からサポート。</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(get_permalink($parent_page->ID)); ?>" class="program-card">
                        <div class="program-image"><span>📷 アダルトクラス画像</span></div>
                        <div class="program-info"><span class="program-badge badge-adult">アダルトクラス</span>
                            <p>1歳〜7歳の成犬向け。運動不足解消・社会化の維持・遊びを通じたストレス解消。</p>
                        </div>
                    </a>
                    <a href="<?php echo esc_url(get_permalink($parent_page->ID)); ?>" class="program-card">
                        <div class="program-image"><span>📷 シニアクラス画像</span></div>
                        <div class="program-info"><span class="program-badge badge-senior">シニアクラス</span>
                            <p>7歳以上のシニア犬向け。無理のない運動・健康チェック・リラクゼーションを重視。</p>
                        </div>
                    </a>
                <?php
                }
            } else {
                // 親ページが見つからない場合
                ?>
                <div class="program-card">
                    <div class="program-image"><span>📷 パピークラス画像</span></div>
                    <div class="program-info"><span class="program-badge badge-puppy">パピークラス</span>
                        <p>生後3ヶ月〜1歳未満の子犬向け。社会化・トイレトレーニングなど基礎からサポート。</p>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image"><span>📷 アダルトクラス画像</span></div>
                    <div class="program-info"><span class="program-badge badge-adult">アダルトクラス</span>
                        <p>1歳〜7歳の成犬向け。運動不足解消・社会化の維持・遊びを通じたストレス解消。</p>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image"><span>📷 シニアクラス画像</span></div>
                    <div class="program-info"><span class="program-badge badge-senior">シニアクラス</span>
                        <p>7歳以上のシニア犬向け。無理のない運動・健康チェック・リラクゼーションを重視。</p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <?php if ($parent_page) : ?>
            <div style="text-align: center; margin-top: 2rem;">
                <a href="<?php echo esc_url(get_permalink($parent_page->ID)); ?>" class="btn btn-primary">プログラム一覧を見る <span>🐾</span></a>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="section schedule" id="schedule">
    <div class="container">
        <h2 class="section-title">一日の流れ</h2>
        <div class="schedule-timeline">
            <?php
            $schedule = array(
                array('8:00', 'お迎え・健康チェック', '送迎またはご家族によるお迎え。体温・元気・食欲の確認を行います。'),
                array('9:00', '朝の自由遊び', '庭や室内での自由遊び時間。犬同士の社会化も促進します。'),
                array('10:30', 'プログラム別ケア', '年齢に合わせたトレーニング・運動・リラクゼーションを実施します。'),
                array('12:00', 'ランチ・おやつタイム', 'ご家庭からの食事に合わせて給餌。食後の休息も大切にします。'),
                array('13:30', '午後のお昼寝・休息', '静かな環境でお昼寝。必要に応じて個別ケアも行います。'),
                array('15:00', '午後の遊び・散歩', '庭での遊びや近隣の散歩。天候に合わせて室内遊びも行います。'),
                array('17:00', '夕方の自由時間', 'のんびり過ごす時間。あしあと日記の準備も行います。'),
                array('18:00', 'お帰り・送迎', 'ご家族のお迎えまたは送迎サービスでお帰りになります。'),
            );
            foreach ($schedule as $item) : ?>
                <div class="schedule-item">
                    <div class="schedule-time"><?php echo esc_html($item[0]); ?></div>
                    <div class="schedule-content">
                        <h4><?php echo esc_html($item[1]); ?></h4>
                        <p><?php echo esc_html($item[2]); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section admission" id="admission">
    <div class="container">
        <h2 class="section-title">入園案内</h2>
        <div class="price-table-wrap">
            <table class="price-table">
                <thead>
                    <tr>
                        <th>項目</th>
                        <th>料金（税込）</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>入会金</td>
                        <td><?php echo esc_html(get_theme_mod('price_item_1_price', '15,000円')); ?></td>
                    </tr>
                    <tr>
                        <td>月会費（パピー/アダルト）</td>
                        <td><?php echo esc_html(get_theme_mod('price_item_2_price', '55,000円')); ?></td>
                    </tr>
                    <tr>
                        <td>月会費（シニア）</td>
                        <td><?php echo esc_html(get_theme_mod('price_item_3_price', '48,000円')); ?></td>
                    </tr>
                    <tr>
                        <td>送迎サービス（往復）</td>
                        <td><?php echo esc_html(get_theme_mod('price_item_4_price', '3,000円〜')); ?></td>
                    </tr>
                </tbody>
            </table>
            <p class="price-note">※ 詳細な料金やオプションについてはお問い合わせください。</p>
        </div>
    </div>
</section>

<section class="section contact" id="contact">
    <div class="container">
        <h2 class="section-title">お問い合わせ</h2>
        <div class="contact-grid">
            <div class="contact-form-wrap">
                <h3 style="font-family: var(--font-heading); color: var(--color-primary); margin-bottom: var(--space-sm);">見学予約フォーム</h3>
                <?php if (shortcode_exists('contact-form-7')) {
                    echo do_shortcode('[contact-form-7 title="見学予約"]');
                } else { ?>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>お名前 <span style="color: var(--color-highlight);">*</span></label>
                            <input type="text" name="name" required placeholder="山田 太郎">
                        </div>
                        <div class="form-group">
                            <label>メールアドレス <span style="color: var(--color-highlight);">*</span></label>
                            <input type="email" name="email" required placeholder="example@email.com">
                        </div>
                        <div class="form-group">
                            <label>電話番号</label>
                            <input type="tel" name="phone" placeholder="03-1234-5678">
                        </div>
                        <div class="form-group">
                            <label>愛犬の名前・年齢</label>
                            <input type="text" name="dog_name" placeholder="ポチ・2歳">
                        </div>
                        <div class="form-group">
                            <label>メッセージ</label>
                            <textarea name="message" placeholder="見学希望日時やご質問など"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">送信する <span>🐾</span></button>
                    </form>
                    <p style="margin-top: var(--space-sm); font-size: 0.85rem; color: var(--color-text-light);">※ 実際の運用時は Contact Form 7 などのプラグインをご利用ください。</p>
                <?php } ?>
            </div>
            <div class="contact-info">
                <div class="info-card">
                    <h3>📞 お電話でのお問い合わせ</h3>
                    <p class="phone-number"><?php echo esc_html(get_theme_mod('contact_phone', '017-7xx-4321')); ?></p>
                    <p style="font-size: 0.9rem; color: var(--color-text-light);">受付時間：平日 8:00〜18:00</p>
                </div>
                <div class="info-card">
                    <h3>📍 アクセス</h3>
                    <p><?php echo esc_html(get_theme_mod('contact_address', '〒030-0921 青森県青森市原別下海原xxx')); ?></p>
                    <div class="map-container" style="margin-top: var(--space-xs); overflow: hidden; border-radius: var(--radius-sm);">
                        <iframe
                            src="https://maps.google.com/maps?q=%E3%80%92030-0921%20%E9%9D%92%E6%A3%AE%E7%9C%8C%E9%9D%92%E6%A3%AE%E5%B8%82%E5%8E%9F%E5%88%A5%E4%B8%8B%E6%B5%B7%E5%8E%9F%EF%BC%92%EF%BC%91%EF%BC%91&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            width="100%"
                            height="250"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>