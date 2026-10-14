<?php
/**
 * Template Name: Secret Main
 * Description: 犬幼稚園 x メイドインアビス x FF のシークレットメインページ
 */

$pageTitle = "Secret Main Page";
$eyebrow   = "Abyssal Gateway";
$subtitle  = "犬の温もり、深淵の神秘、そして冒険の記憶が交差する場所";

$sections = [
    [
        "id"     => "dog-kindergarten",
        "layer"  => "Layer 01",
        "title"  => "園長",
        "text"   => "小さな命が集まる、ぬくもりの庭。犬たちが走り回る庭先には、ボールと骨と無邪気な声があふれる。ここは深淵とは違う、もうひとつの小さな世界。",
        "tags"   => ["わんわん", "園庭", "小さな冒険"],
    ],
    [
        "id"     => "miabyss",
        "layer"  => "Layer 02",
        "title"  => "冒険者（男）",
        "text"   => "巨大な縦穴「アビス」は、美しさと恐怖が同居する世界。降りれば降りるほど、人を狂わせる呪いが待ち受ける。それでも探索者たちは、底知れぬ謎に惹かれて歩みを止められない。",
        "tags"   => ["奈落の探検", "上昇負荷", "レlics"],
    ],
    [
        "id"     => "ff",
        "layer"  => "Layer 03",
        "title"  => "光の戦士（おっちゃん）",
        "text"   => "クリスタルと幻想が織りなす物語。何度終わりを迎えても、新たな世界が生まれる。剣と魔法、旅と別、そして希望。プレイヤーは永遠に旅人であり続ける。",
        "tags"   => ["クリスタル", "冒険", "幻想"],
    ],
];
?><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo esc_html($pageTitle); ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Noto+Serif+JP:wght@400;700&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
<style>
:root {
  --abyss-deep: #0b1020;
  --abyss-mid: #162040;
  --abyss-light: #243868;
  --gold: #c9a84c;
  --gold-dim: #8f7a3a;
  --warm-brown: #6b4c2d;
  --soft-cream: #f5f0e6;
  --parchment: #e8e0d0;
  --muted-text: #a09888;
  --accent-warm: #c97e4a;
  --surface: rgba(255,255,255,0.03);
  --line: rgba(201,168,76,0.18);
  --step-0: clamp(0.95rem, 0.9rem + 0.25vw, 1.05rem);
  --step-1: clamp(1.1rem, 1rem + 0.5vw, 1.35rem);
  --step-2: clamp(1.5rem, 1.2rem + 1.2vw, 2.2rem);
  --step-3: clamp(2.2rem, 1.6rem + 2.5vw, 3.8rem);
  --space: clamp(1.2rem, 1rem + 0.8vw, 2rem);
  --radius: 10px;
  --shadow: 0 1px 2px rgba(0,0,0,0.15), 0 10px 30px -10px rgba(0,0,0,0.5);
}
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }
body {
  background: var(--abyss-deep);
  color: var(--soft-cream);
  font-family: "Zen Maru Gothic", "Hiragino Sans", "Yu Gothic", "Noto Sans JP", sans-serif;
  font-size: var(--step-0);
  line-height: 1.85;
  min-height: 100vh;
  overflow-x: hidden;
}
body::before {
  content: "";
  position: fixed;
  inset: 0;
  background:
    radial-gradient(ellipse at 50% 0%, rgba(22,32,64,0.9) 0%, transparent 60%),
    radial-gradient(ellipse at 80% 90%, rgba(201,168,76,0.06) 0%, transparent 50%),
    radial-gradient(circle at 20% 30%, rgba(255,255,255,0.03) 0%, transparent 1px),
    radial-gradient(circle at 70% 20%, rgba(255,255,255,0.04) 0%, transparent 1.5px),
    radial-gradient(circle at 40% 70%, rgba(255,255,255,0.025) 0%, transparent 1px),
    radial-gradient(circle at 90% 60%, rgba(255,255,255,0.035) 0%, transparent 1.2px);
  pointer-events: none;
  z-index: 0;
}
.abyss-line {
  position: fixed;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 1px;
  background: linear-gradient(to bottom, transparent 0%, var(--gold) 20%, var(--gold) 80%, transparent 100%);
  opacity: 0.12;
  transform: translateX(-50%);
  z-index: 0;
  pointer-events: none;
}
header {
  position: relative;
  z-index: 1;
  min-height: 70vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: calc(var(--space) * 3) var(--space);
}
header .eyebrow {
  font-family: "Cinzel", "Hiragino Sans", serif;
  color: var(--gold);
  font-size: 0.85rem;
  letter-spacing: 0.35em;
  text-transform: uppercase;
  margin-bottom: 1.2rem;
  opacity: 0;
  animation: fadeUp 1s ease 0.2s forwards;
}
header h1 {
  font-family: "Cinzel", "Noto Serif JP", "Hiragino Sans", serif;
  font-size: var(--step-3);
  font-weight: 700;
  color: var(--soft-cream);
  letter-spacing: 0.08em;
  line-height: 1.15;
  margin-bottom: 1rem;
  text-shadow: 0 2px 20px rgba(0,0,0,0.6);
  opacity: 0;
  animation: fadeUp 1.2s ease 0.5s forwards;
}
header .subtitle {
  color: var(--muted-text);
  font-size: var(--step-1);
  max-width: 36ch;
  opacity: 0;
  animation: fadeUp 1s ease 0.9s forwards;
}
.crest {
  width: 80px;
  height: 80px;
  margin-bottom: 1.5rem;
  opacity: 0;
  animation: fadeUp 1s ease 0.1s forwards;
}
nav {
  position: sticky;
  top: 0;
  z-index: 10;
  background: rgba(11,16,32,0.85);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid var(--line);
}
nav ul {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
  list-style: none;
  padding: 0.8rem var(--space);
  flex-wrap: wrap;
}
nav a {
  display: block;
  padding: 0.5rem 1.2rem;
  color: var(--muted-text);
  text-decoration: none;
  font-size: 0.9rem;
  letter-spacing: 0.05em;
  border-radius: var(--radius);
  transition: color 0.3s, background 0.3s;
  position: relative;
}
nav a::after {
  content: "";
  position: absolute;
  bottom: 4px;
  left: 50%;
  width: 0;
  height: 1px;
  background: var(--gold);
  transition: width 0.3s, left 0.3s;
}
nav a:hover, nav a:focus-visible {
  color: var(--gold);
  background: rgba(201,168,76,0.08);
  outline: none;
}
nav a:hover::after, nav a:focus-visible::after {
  width: 60%;
  left: 20%;
}
main {
  position: relative;
  z-index: 1;
  max-width: 960px;
  margin: 0 auto;
  padding: calc(var(--space) * 2) var(--space);
}
section {
  margin-bottom: calc(var(--space) * 3);
  padding: calc(var(--space) * 1.5);
  background: var(--surface);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  position: relative;
  overflow: hidden;
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.8s ease, transform 0.8s ease;
}
section.is-visible {
  opacity: 1;
  transform: translateY(0);
}
section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, transparent, var(--gold), transparent);
  opacity: 0.4;
}
.section-number {
  font-family: "Cinzel", serif;
  color: var(--gold);
  font-size: 0.8rem;
  letter-spacing: 0.2em;
  margin-bottom: 0.6rem;
  display: flex;
  align-items: center;
  gap: 0.6rem;
}
.section-number::after {
  content: "";
  flex: 1;
  height: 1px;
  background: var(--line);
}
section h2 {
  font-family: "Cinzel", "Noto Serif JP", serif;
  font-size: var(--step-2);
  color: var(--soft-cream);
  margin-bottom: 1rem;
  letter-spacing: 0.04em;
  line-height: 1.25;
}
section p {
  color: var(--muted-text);
  max-width: 60ch;
}
.illust-wrap {
  width: 100%;
  display: flex;
  justify-content: center;
  margin: 1.5rem 0;
}
.illust-wrap svg {
  width: 100%;
  max-width: 340px;
  height: auto;
  filter: drop-shadow(0 4px 12px rgba(0,0,0,0.4));
}
.theme-icons {
  display: flex;
  gap: 1rem;
  margin-top: 1.2rem;
  flex-wrap: wrap;
}
.icon-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.4rem;
  padding: 0.35rem 0.9rem;
  background: rgba(201,168,76,0.08);
  border: 1px solid var(--line);
  border-radius: 999px;
  font-size: 0.85rem;
  color: var(--gold-dim);
  letter-spacing: 0.03em;
}
footer {
  position: relative;
  z-index: 1;
  text-align: center;
  padding: calc(var(--space) * 2) var(--space);
  color: var(--muted-text);
  font-size: 0.8rem;
  border-top: 1px solid var(--line);
}

/* ナビゲーション内のホームボタンを少し装飾する場合（お好みで） */
nav a.btn-home {
  border: 1px solid var(--gold);
  color: var(--gold);
}
nav a.btn-home:hover {
  background: rgba(201, 168, 76, 0.2);
}

@keyframes fadeUp {
  from { opacity: 0; transform: translateY(16px); }
  to   { opacity: 1; transform: translateY(0); }
}
@media (prefers-reduced-motion: reduce) {
  html { scroll-behavior: auto; }
  *, *::before, *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
  section { opacity: 1; transform: none; }
}
@media print {
  body { background: #fff; color: #222; }
  .abyss-line, body::before { display: none; }
  section { background: #fff; border-color: #ccc; box-shadow: none; }
  header h1, section h2 { color: #111; }
}
@page { size: A4; margin: 18mm; }
@media (max-width: 480px) {
  header { min-height: 55vh; }
  nav ul { gap: 0.3rem; }
  nav a { padding: 0.4rem 0.8rem; font-size: 0.8rem; }
  .illust-wrap svg { max-width: 240px; }
}
</style>
</head>
<body>

<div class="abyss-line" aria-hidden="true"></div>

<header>
  <svg class="crest" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <circle cx="40" cy="40" r="38" stroke="#c9a84c" stroke-width="1" opacity="0.4"/>
    <circle cx="40" cy="40" r="30" stroke="#c9a84c" stroke-width="0.5" opacity="0.25"/>
    <path d="M40 8 L40 72 M8 40 L72 40" stroke="#c9a84c" stroke-width="0.5" opacity="0.3"/>
    <path d="M20 20 L60 60 M60 20 L20 60" stroke="#c9a84c" stroke-width="0.5" opacity="0.2"/>
    <circle cx="40" cy="40" r="3" fill="#c9a84c" opacity="0.6"/>
  </svg>
  <div class="eyebrow"><?php echo esc_html($eyebrow); ?></div>
  <h1><?php echo esc_html($pageTitle); ?></h1>
  <p class="subtitle"><?php echo esc_html($subtitle); ?></p>
</header>

<nav>
  <ul>
    <!-- ここにホームに戻るを追加 -->
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-home">戻るときはコチラ</a></li>

    <?php foreach ($sections as $sec) : ?>
    <li><a href="#<?php echo esc_attr($sec['id']); ?>"><?php echo esc_html($sec['title']); ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>

<main>

<?php foreach ($sections as $sec) : ?>
  <section id="<?php echo esc_attr($sec['id']); ?>">
    <div class="section-number"><?php echo esc_html($sec['layer']); ?></div>
    <h2><?php echo esc_html($sec['title']); ?></h2>

    <div class="illust-wrap" aria-hidden="true">
      <?php if ($sec['id'] === 'dog-kindergarten') : ?>
      <svg viewBox="0 0 340 260" xmlns="http://www.w3.org/2000/svg">
        <defs><radialGradient id="yardGlow" cx="50%" cy="70%" r="60%"><stop offset="0%" stop-color="#c9a84c" stop-opacity="0.12"/><stop offset="100%" stop-color="#c9a84c" stop-opacity="0"/></radialGradient></defs>
        <ellipse cx="170" cy="210" rx="140" ry="35" fill="url(#yardGlow)"/>
        <path d="M120,140 L170,100 L220,140 L220,200 L120,200 Z" fill="none" stroke="#e8e0d0" stroke-width="1.8" opacity="0.85"/>
        <path d="M110,140 L170,95 L230,140" fill="none" stroke="#c9a84c" stroke-width="1.5" opacity="0.7"/>
        <rect x="155" y="165" width="30" height="35" rx="14" fill="none" stroke="#e8e0d0" stroke-width="1.2" opacity="0.7"/>
        <circle cx="178" cy="183" r="2" fill="#c9a84c" opacity="0.7"/>
        <rect x="132" y="155" width="16" height="16" rx="3" fill="none" stroke="#e8e0d0" stroke-width="1" opacity="0.6"/>
        <line x1="140" y1="155" x2="140" y2="171" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/>
        <line x1="132" y1="163" x2="148" y2="163" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/>
        <rect x="192" y="155" width="16" height="16" rx="3" fill="none" stroke="#e8e0d0" stroke-width="1" opacity="0.6"/>
        <line x1="200" y1="155" x2="200" y2="171" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/>
        <line x1="192" y1="163" x2="208" y2="163" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/>
        <rect x="230" y="170" width="38" height="22" rx="4" fill="none" stroke="#c9a84c" stroke-width="1" opacity="0.7"/>
        <line x1="240" y1="192" x2="240" y2="210" stroke="#c9a84c" stroke-width="1" opacity="0.6"/>
        <line x1="258" y1="192" x2="258" y2="210" stroke="#c9a84c" stroke-width="1" opacity="0.6"/>
        <circle cx="249" cy="178" r="3" fill="#c9a84c" opacity="0.6"/>
        <circle cx="244" cy="183" r="1.5" fill="#c9a84c" opacity="0.5"/>
        <circle cx="249" cy="185" r="1.5" fill="#c9a84c" opacity="0.5"/>
        <circle cx="254" cy="183" r="1.5" fill="#c9a84c" opacity="0.5"/>
        <path d="M70,195 C60,190 55,175 60,165 C63,158 72,155 80,158 C82,150 85,145 90,145 C95,145 98,150 100,158 C108,160 115,165 115,175 C115,185 105,190 95,192 L95,205 C95,212 88,215 82,215 C76,215 72,210 72,205 L72,195 Z" fill="none" stroke="#e8e0d0" stroke-width="1.8" opacity="0.9"/>
        <ellipse cx="78" cy="168" rx="2.5" ry="3" fill="#c9a84c" opacity="0.8"/>
        <ellipse cx="92" cy="168" rx="2.5" ry="3" fill="#c9a84c" opacity="0.8"/>
        <path d="M85,175 L82,180 L88,180 Z" fill="#c9a84c" opacity="0.7"/>
        <path d="M260,200 C252,196 248,185 252,178 C255,173 262,171 268,173 C270,167 272,163 276,163 C280,163 282,167 284,173 C290,175 295,180 295,187 C295,194 288,198 280,199 L280,208 C280,213 275,215 270,215 C265,215 262,212 262,208 L262,200 Z" fill="none" stroke="#e8e0d0" stroke-width="1.5" opacity="0.85"/>
        <ellipse cx="266" cy="180" rx="2" ry="2.5" fill="#c9a84c" opacity="0.8"/>
        <ellipse cx="278" cy="180" rx="2" ry="2.5" fill="#c9a84c" opacity="0.8"/>
        <circle cx="140" cy="225" r="7" fill="none" stroke="#c9a84c" stroke-width="1" opacity="0.7"/>
        <path d="M135,222 Q140,225 145,222" fill="none" stroke="#c9a84c" stroke-width="0.8" opacity="0.5"/>
        <g opacity="0.6"><rect x="200" y="228" width="22" height="5" rx="2" fill="none" stroke="#e8e0d0" stroke-width="1"/><circle cx="200" cy="227" r="3" fill="none" stroke="#e8e0d0" stroke-width="1"/><circle cx="200" cy="234" r="3" fill="none" stroke="#e8e0d0" stroke-width="1"/><circle cx="222" cy="227" r="3" fill="none" stroke="#e8e0d0" stroke-width="1"/><circle cx="222" cy="234" r="3" fill="none" stroke="#e8e0d0" stroke-width="1"/></g>
        <circle cx="50" cy="50" r="1.2" fill="#c9a84c" opacity="0.4"/><circle cx="300" cy="40" r="1" fill="#c9a84c" opacity="0.3"/><circle cx="280" cy="120" r="0.8" fill="#c9a84c" opacity="0.35"/>
      </svg>
      <?php elseif ($sec['id'] === 'miabyss') : ?>
      <svg viewBox="0 0 320 280" xmlns="http://www.w3.org/2000/svg">
        <defs><linearGradient id="abyssGrad" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#c9a84c" stop-opacity="0.3"/><stop offset="100%" stop-color="#0b1020" stop-opacity="0"/></linearGradient><linearGradient id="holeGrad" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#243868" stop-opacity="0.6"/><stop offset="60%" stop-color="#0b1020" stop-opacity="0.9"/><stop offset="100%" stop-color="#0b1020" stop-opacity="1"/></linearGradient></defs>
        <rect x="0" y="0" width="320" height="280" fill="url(#abyssGrad)" opacity="0.4"/>
        <ellipse cx="160" cy="60" rx="90" ry="25" fill="#162040" stroke="#c9a84c" stroke-width="1.5" opacity="0.7"/>
        <path d="M70,60 C70,120 80,180 110,240 C130,280 190,280 210,240 C240,180 250,120 250,60" fill="url(#holeGrad)" stroke="#c9a84c" stroke-width="1" opacity="0.6"/>
        <path d="M75,90 Q160,110 245,90" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.4"/><path d="M85,130 Q160,150 235,130" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.35"/><path d="M100,170 Q160,190 220,170" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.3"/><path d="M120,210 Q160,225 200,210" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.25"/>
        <line x1="130" y1="60" x2="125" y2="250" stroke="#8f7a3a" stroke-width="1.5" opacity="0.5"/><line x1="190" y1="60" x2="195" y2="250" stroke="#8f7a3a" stroke-width="1" opacity="0.4"/>
        <circle cx="140" cy="120" r="2" fill="#c9a84c" opacity="0.6"><animate attributeName="opacity" values="0.6;0.2;0.6" dur="3s" repeatCount="indefinite"/></circle>
        <circle cx="180" cy="160" r="1.5" fill="#c9a84c" opacity="0.5"><animate attributeName="opacity" values="0.5;0.1;0.5" dur="4s" repeatCount="indefinite"/></circle>
        <circle cx="150" cy="200" r="1.8" fill="#c9a84c" opacity="0.4"><animate attributeName="opacity" values="0.4;0.1;0.4" dur="3.5s" repeatCount="indefinite"/></circle>
        <path d="M0,200 Q40,180 60,220 L60,280 L0,280 Z" fill="#0b1020" stroke="#c9a84c" stroke-width="0.5" opacity="0.5"/><path d="M320,180 Q280,160 260,200 L260,280 L320,280 Z" fill="#0b1020" stroke="#c9a84c" stroke-width="0.5" opacity="0.5"/>
      </svg>
      <?php elseif ($sec['id'] === 'ff') : ?>
      <svg viewBox="0 0 320 260" xmlns="http://www.w3.org/2000/svg">
        <defs><linearGradient id="crystalGrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#e8e0d0" stop-opacity="0.9"/><stop offset="50%" stop-color="#c9a84c" stop-opacity="0.7"/><stop offset="100%" stop-color="#243868" stop-opacity="0.5"/></linearGradient><filter id="crystalGlow"><feGaussianBlur stdDeviation="3" result="blur"/><feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>
        <circle cx="160" cy="140" r="100" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.25"/><circle cx="160" cy="140" r="75" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.3"/><circle cx="160" cy="140" r="50" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.35"/>
        <path d="M160,40 L220,210 L100,210 Z" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.2"/><path d="M70,100 L250,100 L160,240 Z" fill="none" stroke="#c9a84c" stroke-width="0.5" opacity="0.2"/>
        <g filter="url(#crystalGlow)"><path d="M160,50 L210,110 L160,140 L110,110 Z" fill="url(#crystalGrad)" opacity="0.9"/><path d="M160,140 L210,110 L190,200 L160,230 L130,200 L110,110 Z" fill="url(#crystalGrad)" opacity="0.7"/><line x1="160" y1="50" x2="160" y2="230" stroke="#e8e0d0" stroke-width="1" opacity="0.6"/><line x1="110" y1="110" x2="160" y2="140" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/><line x1="210" y1="110" x2="160" y2="140" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/><line x1="110" y1="110" x2="130" y2="200" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/><line x1="210" y1="110" x2="190" y2="200" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/><line x1="130" y1="200" x2="160" y2="230" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/><line x1="190" y1="200" x2="160" y2="230" stroke="#e8e0d0" stroke-width="0.8" opacity="0.5"/></g>
        <g opacity="0.25"><path d="M160,20 L165,130 L160,140 L155,130 Z" fill="#e8e0d0"/><rect x="152" y="140" width="16" height="6" rx="2" fill="#c9a84c"/><rect x="157" y="146" width="6" height="25" fill="#8f7a3a"/></g>
        <circle cx="120" cy="80" r="1.5" fill="#c9a84c" opacity="0.6"><animate attributeName="opacity" values="0.6;0.2;0.6" dur="2.5s" repeatCount="indefinite"/></circle>
        <circle cx="220" cy="90" r="1.2" fill="#c9a84c" opacity="0.5"><animate attributeName="opacity" values="0.5;0.1;0.5" dur="3s" repeatCount="indefinite"/></circle>
        <circle cx="100" cy="180" r="1" fill="#c9a84c" opacity="0.4"><animate attributeName="opacity" values="0.4;0.1;0.4" dur="2s" repeatCount="indefinite"/></circle>
        <circle cx="240" cy="170" r="1.3" fill="#c9a84c" opacity="0.5"><animate attributeName="opacity" values="0.5;0.2;0.5" dur="3.2s" repeatCount="indefinite"/></circle>
      </svg>
      <?php endif; ?>
    </div>

    <p><?php echo esc_html($sec['text']); ?></p>
    <div class="theme-icons">
      <?php foreach ($sec['tags'] as $tag) : ?>
      <span class="icon-pill"><?php echo esc_html($tag); ?></span>
      <?php endforeach; ?>
    </div>
  </section>
<?php endforeach; ?>

<nav>
  <ul>
    <!-- ここにホームに戻るを追加 -->
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-home">戻るときはコチラ</a></li>
  </ul>
</nav>

</main>

<footer>
  <p>Secret Main Page — 深の底でまた会おう</p>
</footer>

<script>
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) entry.target.classList.add('is-visible');
  });
}, { threshold: 0.1 });
document.querySelectorAll('section').forEach(section => observer.observe(section));
</script>

</body>
</html>