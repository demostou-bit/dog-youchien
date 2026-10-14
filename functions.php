<?php
/**
 * @package DogYochien
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'DOGYOCHIEN_VERSION', '1.0.0' );

function dogyochien_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height' => 60, 'width' => 240, 'flex-height' => true, 'flex-width' => true,
    ) );
    register_nav_menus( array(
        'primary' => 'メインナビゲーション',
        'footer'  => 'フッターナビゲーション',
    ) );
}
add_action( 'after_setup_theme', 'dogyochien_setup' );

// カスタマイザー
function dogyochien_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'dogyochien_hero', array( 'title' => 'ヒーローセクション', 'priority' => 30 ) );

    $wp_customize->add_setting( 'hero_concept', array( 'default' => 'ちいさな一歩、ずっと寄り添う。', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'hero_concept', array( 'label' => 'コンセプトテキスト', 'section' => 'dogyochien_hero', 'type' => 'text' ) );

    $wp_customize->add_setting( 'hero_bg_image', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_bg_image', array( 'label' => '背景画像', 'section' => 'dogyochien_hero' ) ) );

    $wp_customize->add_setting( 'hero_cta_text', array( 'default' => '見学予約はこちら', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'hero_cta_text', array( 'label' => 'CTAボタンテキスト', 'section' => 'dogyochien_hero', 'type' => 'text' ) );

    $wp_customize->add_setting( 'hero_cta_url', array( 'default' => '#contact', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( 'hero_cta_url', array( 'label' => 'CTAボタンリンク', 'section' => 'dogyochien_hero', 'type' => 'url' ) );

    // お問い合わせ
    $wp_customize->add_section( 'dogyochien_contact', array( 'title' => 'お問い合わせ情報', 'priority' => 40 ) );
    $wp_customize->add_setting( 'contact_phone', array( 'default' => '03-1234-5678', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'contact_phone', array( 'label' => '電話番号', 'section' => 'dogyochien_contact', 'type' => 'text' ) );
    $wp_customize->add_setting( 'contact_address', array( 'default' => '東京都〇〇区〇〇1-2-3', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'contact_address', array( 'label' => '住所', 'section' => 'dogyochien_contact', 'type' => 'text' ) );

    // 料金
    $wp_customize->add_section( 'dogyochien_price', array( 'title' => '料金表', 'priority' => 50 ) );
    for ( $i = 1; $i <= 4; $i++ ) {
        $wp_customize->add_setting( "price_item_{$i}_name", array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "price_item_{$i}_name", array( 'label' => "項目 {$i} 名前", 'section' => 'dogyochien_price', 'type' => 'text' ) );
        $wp_customize->add_setting( "price_item_{$i}_price", array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( "price_item_{$i}_price", array( 'label' => "項目 {$i} 料金", 'section' => 'dogyochien_price', 'type' => 'text' ) );
    }
}
add_action( 'customize_register', 'dogyochien_customize_register' );

// カスタム投稿タイプ：プログラム
function dogyochien_register_post_types() {
    register_post_type( 'program', array(
        'labels' => array(
            'name' => 'プログラム', 'singular_name' => 'プログラム',
            'add_new' => '新規追加', 'add_new_item' => '新規プログラム追加',
        ),
        'public' => true, 'has_archive' => false, 'menu_icon' => 'dashicons-pets',
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'rewrite' => array( 'slug' => 'program' ),
    ) );
}
add_action( 'init', 'dogyochien_register_post_types' );

// CSS・JS読み込み処理（統合版）
function dogyochien_enqueue_styles() {
    // 1. Google Fonts の読み込み
    wp_enqueue_style( 'dogyochien-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null );

    // 2. css/styles.css を読み込む
    wp_enqueue_style( 
        'dogyochien-style', 
        get_template_directory_uri() . '/css/styles.css', 
        array('dogyochien-fonts'), 
        '1.0.0' 
    );

    // 3. JavaScript (main.js) を読み込む
    wp_enqueue_script( 
        'dogyochien-main', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array(), 
        '1.0.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'dogyochien_enqueue_styles' );
