<?php
/**
 * Template Name: お問い合わせページ
 * Template Post Type: page
 * 
 * @package DogYochien
 */

get_header(); ?>

<main class="site-main">
    <section class="section contact" id="contact">
        <div class="container">
            <h1 class="section-title"><?php the_title(); ?></h1>
            <div class="contact-grid">
                <div class="contact-form-wrap">
                    <h3 style="font-family: var(--font-heading); color: var(--color-primary); margin-bottom: var(--space-sm);">見学予約フォーム</h3>
                    <?php 
                    if (shortcode_exists('contact-form-7')) {
                        echo do_shortcode('[contact-form-7 title="見学予約"]');
                    } else {
                        // Contact Form 7 が未無効時のフォールバック表示
                        the_content(); 
                    }
                    ?>
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
        </div>
    </section>
</main>

<?php get_footer(); ?>