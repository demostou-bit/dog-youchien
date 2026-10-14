<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

// WordPressの標準ヘッダーを出力したい場合は、下の行のコメントアウト(//)を解除してください
// get_header();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 Not Found - <?php bloginfo( 'name' ); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=M+PLUS+Rounded+1c:wght@400;700&display=swap" rel="stylesheet">
<style>
:root {
  --bg: #FFF8F0;
  --surface: #FFFFFF;
  --ink: #3D2B1F;
  --muted: #8C7B6B;
  --accent: #D35400;
  --accent-weak: #FAD7A0;
  --paw: rgba(141, 123, 107, 0.12);
  --line: rgba(61, 43, 31, 0.10);
  --step--2: clamp(0.75rem, 0.7rem + 0.25vw, 0.9rem);
  --step--1: clamp(0.9rem, 0.85rem + 0.25vw, 1rem);
  --step-0: clamp(1rem, 0.9rem + 0.5vw, 1.25rem);
  --step-1: clamp(1.5rem, 1.2rem + 1.5vw, 2.5rem);
  --step-2: clamp(4rem, 3rem + 5vw, 8rem);
  --space: clamp(1rem, 0.8rem + 1vw, 1.5rem);
  --radius: 20px;
  --shadow: 0 1px 2px rgba(0,0,0,0.04), 0 12px 32px -8px rgba(61,43,31,0.18);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  font-family: "M PLUS Rounded 1c", "Hiragino Sans", "Yu Gothic", "Noto Sans JP", sans-serif;
  background: var(--bg);
  color: var(--ink);
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: calc(var(--space) * 2);
  position: relative;
  overflow-x: hidden;
}

/* 足跡の背景装飾 */
.paw-bg {
  position: absolute;
  fill: var(--paw);
  pointer-events: none;
  z-index: 0;
}

.paw-1 { top: 8%; left: 8%; width: 64px; transform: rotate(25deg); }
.paw-2 { top: 18%; right: 10%; width: 48px; transform: rotate(-15deg); }
.paw-3 { bottom: 20%; left: 12%; width: 56px; transform: rotate(35deg); }
.paw-4 { bottom: 12%; right: 8%; width: 72px; transform: rotate(-30deg); }
.paw-5 { top: 45%; left: 4%; width: 40px; transform: rotate(10deg); }
.paw-6 { top: 50%; right: 5%; width: 52px; transform: rotate(-40deg); }

.container {
  position: relative;
  z-index: 1;
  max-width: 640px;
  width: 100%;
  text-align: center;
}

/* 404 タイトル */
.title-404 {
  font-family: "Fredoka", "M PLUS Rounded 1c", sans-serif;
  font-size: var(--step-2);
  font-weight: 600;
  color: var(--accent);
  line-height: 1;
  letter-spacing: -0.04em;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 0.8s ease-out 0.2s forwards;
}

/* 犬のイラスト */
.dog-wrap {
  margin: calc(var(--space) * 1.2) 0;
  opacity: 0;
  transform: scale(0.9);
  animation: fadeInScale 0.8s ease-out 0.4s forwards;
}

.dog-svg {
  width: clamp(160px, 40vw, 260px);
  height: auto;
  filter: drop-shadow(0 8px 24px rgba(61,43,31,0.12));
}

/* しっぽを振るアニメーション */
.tail {
  transform-origin: 142px 118px;
  animation: wag 1.2s ease-in-out infinite;
}

@keyframes wag {
  0%, 100% { transform: rotate(0deg); }
  25% { transform: rotate(18deg); }
  75% { transform: rotate(-8deg); }
}

/* 目のパチパチ */
.eye-left, .eye-right {
  transform-origin: center;
  animation: blink 3.5s infinite;
}

@keyframes blink {
  0%, 46%, 50%, 100% { transform: scaleY(1); }
  48% { transform: scaleY(0.1); }
}

/* メッセージ */
.message {
  font-size: var(--step-1);
  font-weight: 700;
  color: var(--ink);
  line-height: 1.5;
  margin-bottom: calc(var(--space) * 0.6);
  opacity: 0;
  transform: translateY(16px);
  animation: fadeInUp 0.7s ease-out 0.6s forwards;
}

.dog-line {
  font-size: var(--step--1);
  color: var(--muted);
  line-height: 1.8;
  margin-bottom: calc(var(--space) * 1.2);
  opacity: 0;
  transform: translateY(12px);
  animation: fadeInUp 0.7s ease-out 0.75s forwards;
}

/* ホームに戻るボタン */
.btn-home {
  display: inline-flex;
  align-items: center;
  gap: 0.5em;
  background: var(--accent);
  color: #fff;
  text-decoration: none;
  font-weight: 700;
  font-size: var(--step--1);
  padding: 0.9em 2em;
  border-radius: 999px;
  box-shadow: var(--shadow);
  transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
  opacity: 0;
  transform: translateY(12px);
  animation: fadeInUp 0.7s ease-out 0.9s forwards;
}

.btn-home:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 36px -8px rgba(211, 84, 0, 0.35);
  background: #BF4B00;
}

.btn-home:focus-visible {
  outline: 3px solid var(--accent-weak);
  outline-offset: 3px;
}

.btn-home svg {
  width: 1.1em;
  height: 1.1em;
  flex-shrink: 0;
}

/* フッター */
.footer-note {
  margin-top: calc(var(--space) * 2);
  font-size: var(--step--2);
  color: var(--muted);
  opacity: 0;
  animation: fadeInUp 0.6s ease-out 1.1s forwards;
}

/* アニメーション定義 */
@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeInScale {
  to {
    opacity: 1;
    transform: scale(1);
  }
}

/* レスポンシブ調整 */
@media (max-width: 420px) {
  .paw-bg { opacity: 0.6; }
}

/* 動きを減らす設定を尊重 */
@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}

/* 印刷 */
@media print {
  body { background: #fff; }
  .paw-bg { display: none; }
}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- 足跡背景 -->
<svg class="paw-bg paw-1" viewBox="0 0 64 64" aria-hidden="true"><path d="M21.5 38c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm21 0c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm-29-18c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zm37 0c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zM32 64c-10 0-18-10-18-22 0-8 5-14 18-14s18 6 18 14c0 12-8 22-18 22z"/></svg>
<svg class="paw-bg paw-2" viewBox="0 0 64 64" aria-hidden="true"><path d="M21.5 38c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm21 0c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm-29-18c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zm37 0c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zM32 64c-10 0-18-10-18-22 0-8 5-14 18-14s18 6 18 14c0 12-8 22-18 22z"/></svg>
<svg class="paw-bg paw-3" viewBox="0 0 64 64" aria-hidden="true"><path d="M21.5 38c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm21 0c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm-29-18c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zm37 0c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zM32 64c-10 0-18-10-18-22 0-8 5-14 18-14s18 6 18 14c0 12-8 22-18 22z"/></svg>
<svg class="paw-bg paw-4" viewBox="0 0 64 64" aria-hidden="true"><path d="M21.5 38c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm21 0c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm-29-18c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zm37 0c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zM32 64c-10 0-18-10-18-22 0-8 5-14 18-14s18 6 18 14c0 12-8 22-18 22z"/></svg>
<svg class="paw-bg paw-5" viewBox="0 0 64 64" aria-hidden="true"><path d="M21.5 38c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm21 0c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm-29-18c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zm37 0c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zM32 64c-10 0-18-10-18-22 0-8 5-14 18-14s18 6 18 14c0 12-8 22-18 22z"/></svg>
<svg class="paw-bg paw-6" viewBox="0 0 64 64" aria-hidden="true"><path d="M21.5 38c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm21 0c-4.5 0-8-5.5-8-12s3.5-10.5 8-10.5 8 4 8 10.5-3.5 12-8 12zm-29-18c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zm37 0c-3.5 0-6-4-6-9s2.5-8 6-8 6 2.5 6 8-2.5 9-6 9zM32 64c-10 0-18-10-18-22 0-8 5-14 18-14s18 6 18 14c0 12-8 22-18 22z"/></svg>

<div class="container">
  <h1 class="title-404">404</h1>

  <div class="dog-wrap">
    <svg class="dog-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-label="ページを探している可愛い柴犬のイラスト">
      <!-- しっぽ -->
      <g class="tail">
        <path d="M142 118c12-4 22 4 24 14s-4 20-16 18-16-12-14-20c2-8 6-12 6-12z" fill="#E67E22"/>
      </g>
      <!-- 体 -->
      <ellipse cx="100" cy="155" rx="48" ry="36" fill="#FFFFFF"/>
      <ellipse cx="100" cy="155" rx="48" ry="36" fill="none" stroke="#3D2B1F" stroke-width="3"/>
      <!-- 茶色の背中パッチ -->
      <path d="M64 148c0-18 16-32 36-32s36 14 36 32c0 6-2 12-6 16H70c-4-4-6-10-6-16z" fill="#E67E22"/>
      <path d="M64 148c0-18 16-32 36-32s36 14 36 32c0 6-2 12-6 16H70c-4-4-6-10-6-16z" fill="none" stroke="#3D2B1F" stroke-width="3"/>
      <!-- 顔 -->
      <ellipse cx="100" cy="95" rx="46" ry="40" fill="#FFFFFF"/>
      <ellipse cx="100" cy="95" rx="46" ry="40" fill="none" stroke="#3D2B1F" stroke-width="3"/>
      <!-- 額の茶色パッチ -->
      <path d="M72 72c8-10 20-14 28-14s20 4 28 14c4 6 4 14 0 20H72c-4-6-4-14 0-20z" fill="#E67E22"/>
      <!-- 左耳 -->
      <path d="M58 62L44 34c-4-6 2-14 10-10l24 14c4 2 4 8 0 10l-20 14z" fill="#E67E22"/>
      <path d="M58 62L44 34c-4-6 2-14 10-10l24 14c4 2 4 8 0 10l-20 14z" fill="none" stroke="#3D2B1F" stroke-width="3" stroke-linejoin="round"/>
      <!-- 右耳 -->
      <path d="M142 62l14-28c4-6-2-14-10-10l-24 14c-4 2-4 8 0 10l20 14z" fill="#E67E22"/>
      <path d="M142 62l14-28c4-6-2-14-10-10l-24 14c-4 2-4 8 0 10l20 14z" fill="none" stroke="#3D2B1F" stroke-width="3" stroke-linejoin="round"/>
      <!-- 目 -->
      <circle class="eye-left" cx="82" cy="92" r="5" fill="#3D2B1F"/>
      <circle class="eye-right" cx="118" cy="92" r="5" fill="#3D2B1F"/>
      <!-- 目のハイライト -->
      <circle cx="84" cy="90" r="1.8" fill="#FFFFFF"/>
      <circle cx="120" cy="90" r="1.8" fill="#FFFFFF"/>
      <!-- 眉毛 -->
      <path d="M74 78q8-4 14 0" fill="none" stroke="#3D2B1F" stroke-width="2.5" stroke-linecap="round"/>
      <path d="M112 78q8-4 14 0" fill="none" stroke="#3D2B1F" stroke-width="2.5" stroke-linecap="round"/>
      <!-- 鼻 -->
      <ellipse cx="100" cy="108" rx="7" ry="5" fill="#3D2B1F"/>
      <ellipse cx="100" cy="106" rx="2.5" ry="1.5" fill="#FFFFFF" opacity="0.6"/>
      <!--  -->
      <path d="M100 113v8" fill="none" stroke="#3D2B1F" stroke-width="2.5" stroke-linecap="round"/>
      <path d="M92 121q8 6 16 0" fill="none" stroke="#3D2B1F" stroke-width="2.5" stroke-linecap="round"/>
      <!-- 舌 -->
      <ellipse cx="104" cy="126" rx="4" ry="5.5" fill="#FF8FA3"/>
      <!-- ほっぺ -->
      <ellipse cx="74" cy="104" rx="5" ry="3" fill="#FF8FA3" opacity="0.35"/>
      <ellipse cx="126" cy="104" rx="5" ry="3" fill="#FF8FA3" opacity="0.35"/>
      <!-- 前足 -->
      <ellipse cx="82" cy="168" rx="9" ry="12" fill="#FFFFFF" stroke="#3D2B1F" stroke-width="3"/>
      <ellipse cx="118" cy="168" rx="9" ry="12" fill="#FFFFFF" stroke="#3D2B1F" stroke-width="3"/>
      <!-- 足先の線 -->
      <path d="M78 176v4" fill="none" stroke="#3D2B1F" stroke-width="2" stroke-linecap="round"/>
      <path d="M82 177v4" fill="none" stroke="#3D2B1F" stroke-width="2" stroke-linecap="round"/>
      <path d="M86 176v4" fill="none" stroke="#3D2B1F" stroke-width="2" stroke-linecap="round"/>
      <path d="M114 176v4" fill="none" stroke="#3D2B1F" stroke-width="2" stroke-linecap="round"/>
      <path d="M118 177v4" fill="none" stroke="#3D2B1F" stroke-width="2" stroke-linecap="round"/>
      <path d="M122 176v4" fill="none" stroke="#3D2B1F" stroke-width="2" stroke-linecap="round"/>
    </svg>
  </div>

  <p class="message">お探しのページは見つかりませんでした</p>
  <p class="dog-line">もしかして、ボクが噛んじゃいました…？ ごめんなさい！</p>

  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-home">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
      <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
      <polyline points="9 22 9 12 15 12 15 22"/>
    </svg>
    ホームに戻る
  </a>

  <p class="footer-note">Error Code: 404 Not Found</p>
</div>

<?php wp_footer(); ?>
</body>
</html>