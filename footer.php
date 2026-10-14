<?php
/**
 * @package DogYochien
 */
?>
</main>

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-grid">
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-white.png" alt="あしあとようちえん" style="height: 100px; width: auto;">
                </a>
                <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">パピーからシニアまで、愛犬の成長を見守る在宅型保育園</p>
            </div>
            <div>
                <h4 style="font-family: var(--font-heading); margin-bottom: var(--space-xs);">メニュー</h4>
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer', 'container' => false,
                    'fallback_cb' => function() { ?>
                        <nav class="footer-nav"><ul>
                            <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">ようちえんについて</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>">3つの特徴</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">年齢別プログラム</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#schedule' ) ); ?>">一日の流れ</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/diary/' ) ); ?>">あしあと日記</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#admission' ) ); ?>">入園案内</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
                        </ul></nav>
                    <?php },
                ) ); ?>
            </div>
            <div>
                <h4 style="font-family: var(--font-heading); margin-bottom: var(--space-xs);">お問い合わせ</h4>
                <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">
                    📞 <?php echo esc_html( get_theme_mod( 'contact_phone', '017-7xx-4321' ) ); ?><br>
                    📍 <?php echo esc_html( get_theme_mod( 'contact_address', '青森県青森市原別下海原xxx' ) ); ?>
                </p>
            </div>
            <div class="footer-sns" style="margin-top: 15px;">
                <a href="https://line.me/ti/p/YOUR_ID" target="_blank" rel="noopener" aria-label="LINE"><i class="fab fa-line"></i></a>
                <a href="https://x.com/YOUR_ID" target="_blank" rel="noopener" aria-label="X"><i class="fab fa-x-twitter"></i></a>
                <a href="https://instagram.com/YOUR_ID" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://facebook.com/YOUR_ID" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="https://youtube.com/YOUR_ID" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="https://tiktok.com/@YOUR_ID" target="_blank" rel="noopener" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> あしあとようちえん All Rights Reserved.</p>
        </div>
    </div>
</footer>

<div style="text-align: center; margin-top: 2em;">
    <a href="http://dog-yochien.test/secret/" style="font-size: 0.7rem; color: #ccc; text-decoration: none;">押すな</a>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<?php wp_footer(); ?>
</body>
</html>
