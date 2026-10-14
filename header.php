<?php
/**
 * @package DogYochien
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        <nav class="main-nav" id="mainNav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => '',
                'fallback_cb'    => function() {
                    ?><ul>
                        <li><a href="<?php echo esc_url( home_url( '/#about' ) ); ?>">ようちえんについて</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#features' ) ); ?>">3つの特徴</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/programs/' ) ); ?>">年齢別プログラム</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#schedule' ) ); ?>">一日の流れ</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/diary/' ) ); ?>">あしあと日記</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#admission' ) ); ?>">入園案内</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
                    </ul><?php
                },
            ) );
            ?>
        </nav>
        <button class="menu-toggle" id="menuToggle" aria-label="メニュー">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<main id="main">