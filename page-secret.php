<?php
// secret.php - シークレットページ（可愛い犬背景Ver.）
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐾 シークレットページ 🐾</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            background: #fff5f7;
            font-family: "Hiragino Maru Gothic ProN", "Quicksand", "Meiryo", sans-serif;
            overflow: hidden;
            position: relative;
            height: 100vh;
            color: #5a3e36;
        }

        /* 背景デコレーション用コンテナ */
        .bg-decorations {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        /* 中央の大きな犬（淡く） */
        .bg-dog-center {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.12;
            width: 60vmin;
            height: 60vmin;
        }

        /* 散りばめられた小さな犬 */
        .small-dog {
            position: absolute;
            opacity: 0.18;
            width: 12vmin;
            height: 12vmin;
        }
        .sd1 { top: 10%; left: 8%; transform: rotate(-15deg); }
        .sd2 { top: 70%; left: 5%; transform: rotate(10deg); }
        .sd3 { top: 20%; right: 10%; transform: rotate(20deg); }
        .sd4 { top: 75%; right: 8%; transform: rotate(-10deg); }
        .sd5 { top: 45%; left: 15%; transform: rotate(5deg); width: 8vmin; height: 8vmin; }
        .sd6 { top: 50%; right: 15%; transform: rotate(-5deg); width: 8vmin; height: 8vmin; }

        /* 肉球 */
        .paw {
            position: absolute;
            opacity: 0.25;
            width: 6vmin;
            height: 6vmin;
        }
        .p1 { top: 15%; left: 25%; transform: rotate(25deg); }
        .p2 { top: 35%; left: 15%; transform: rotate(-20deg); width: 4vmin; height: 4vmin; }
        .p3 { top: 80%; left: 30%; transform: rotate(15deg); width: 5vmin; height: 5vmin; }
        .p4 { top: 25%; right: 25%; transform: rotate(-30deg); }
        .p5 { top: 60%; right: 20%; transform: rotate(10deg); width: 4vmin; height: 4vmin; }
        .p6 { top: 85%; right: 30%; transform: rotate(-15deg); width: 5vmin; height: 5vmin; }
        .p7 { top: 50%; left: 5%; transform: rotate(40deg); width: 3vmin; height: 3vmin; }
        .p8 { top: 10%; right: 5%; transform: rotate(-10deg); width: 4vmin; height: 4vmin; }

        /* メインコンテンツ */
        .content {
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 2rem;
        }

        .card {
            background: rgba(255, 255, 255, 0.92);
            padding: 3rem 4rem;
            border-radius: 2rem;
            box-shadow: 0 10px 40px rgba(210, 105, 30, 0.15);
            max-width: 520px;
            width: 100%;
            border: 3px solid #ffd1dc;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: #d2691e;
            letter-spacing: 0.05em;
        }

        .dog-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            line-height: 1;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #6d4c41;
        }

        .highlight {
            display: inline-block;
            background: #ffe4e1;
            padding: 0.2rem 0.8rem;
            border-radius: 1rem;
            color: #c1440e;
            font-weight: bold;
            margin-top: 0.5rem;
        }

        a.back {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.7rem 2rem;
            background: #f4a460;
            color: #fff;
            text-decoration: none;
            border-radius: 2rem;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 15px rgba(244, 164, 96, 0.3);
        }
        a.back:hover {
            background: #d2691e;
            transform: translateY(-2px);
        }

        .footer-note {
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: #bcaaa4;
        }
    </style>
</head>
<body>

    <!-- 背景の犬＆肉球装飾 -->
    <div class="bg-decorations">
        <!-- 中央の大きな犬 -->
        <svg class="bg-dog-center" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <!-- 耳 -->
            <ellipse cx="55" cy="65" rx="22" ry="32" fill="#d2691e" transform="rotate(-25 55 65)"/>
            <ellipse cx="145" cy="65" rx="22" ry="32" fill="#d2691e" transform="rotate(25 145 65)"/>
            <ellipse cx="60" cy="70" rx="14" ry="24" fill="#ffccaa" transform="rotate(-25 60 70)"/>
            <ellipse cx="140" cy="70" rx="14" ry="24" fill="#ffccaa" transform="rotate(25 140 70)"/>
            <!-- 顔 -->
            <circle cx="100" cy="110" r="58" fill="#f4a460"/>
            <!-- 目のハイライト枠 -->
            <circle cx="78" cy="98" r="10" fill="#fff"/>
            <circle cx="122" cy="98" r="10" fill="#fff"/>
            <!-- 目 -->
            <circle cx="78" cy="100" r="6" fill="#3e2723"/>
            <circle cx="122" cy="100" r="6" fill="#3e2723"/>
            <circle cx="80" cy="98" r="2.5" fill="#fff"/>
            <circle cx="124" cy="98" r="2.5" fill="#fff"/>
            <!-- ほっぺ -->
            <ellipse cx="68" cy="118" rx="9" ry="6" fill="#ffab91" opacity="0.7"/>
            <ellipse cx="132" cy="118" rx="9" ry="6" fill="#ffab91" opacity="0.7"/>
            <!-- 鼻 -->
            <path d="M 92 112 Q 100 108 108 112 Q 100 124 92 112" fill="#3e2723"/>
            <!-- 口 -->
            <path d="M 100 122 Q 92 132 84 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            <path d="M 100 122 Q 108 132 116 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            <!-- 眉 -->
            <path d="M 70 82 Q 78 76 86 82" stroke="#d2691e" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M 114 82 Q 122 76 130 82" stroke="#d2691e" stroke-width="3" fill="none" stroke-linecap="round"/>
        </svg>

        <!-- 小な犬たち -->
        <svg class="small-dog sd1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="55" cy="65" rx="20" ry="28" fill="#d2691e" transform="rotate(-25 55 65)"/>
            <ellipse cx="145" cy="65" rx="20" ry="28" fill="#d2691e" transform="rotate(25 145 65)"/>
            <circle cx="100" cy="110" r="50" fill="#f4a460"/>
            <circle cx="78" cy="98" r="5" fill="#3e2723"/><circle cx="122" cy="98" r="5" fill="#3e2723"/>
            <ellipse cx="68" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <ellipse cx="132" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <path d="M 92 112 Q 100 108 108 112 Q 100 124 92 112" fill="#3e2723"/>
            <path d="M 100 122 Q 92 132 84 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            <path d="M 100 122 Q 108 132 116 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        </svg>

        <svg class="small-dog sd2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="55" cy="65" rx="20" ry="28" fill="#8d6e63" transform="rotate(-25 55 65)"/>
            <ellipse cx="145" cy="65" rx="20" ry="28" fill="#8d6e63" transform="rotate(25 145 65)"/>
            <circle cx="100" cy="110" r="50" fill="#d7ccc8"/>
            <circle cx="78" cy="98" r="5" fill="#3e2723"/><circle cx="122" cy="98" r="5" fill="#3e2723"/>
            <ellipse cx="68" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <ellipse cx="132" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <path d="M 92 112 Q 100 108 108 112 Q 100 124 92 112" fill="#3e2723"/>
            <path d="M 100 122 Q 92 132 84 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            <path d="M 100 122 Q 108 132 116 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        </svg>

        <svg class="small-dog sd3" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="55" cy="65" rx="20" ry="28" fill="#d2691e" transform="rotate(-25 55 65)"/>
            <ellipse cx="145" cy="65" rx="20" ry="28" fill="#d2691e" transform="rotate(25 145 65)"/>
            <circle cx="100" cy="110" r="50" fill="#f4a460"/>
            <circle cx="78" cy="98" r="5" fill="#3e2723"/><circle cx="122" cy="98" r="5" fill="#3e2723"/>
            <ellipse cx="68" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <ellipse cx="132" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <path d="M 92 112 Q 100 108 108 112 Q 100 124 92 112" fill="#3e2723"/>
            <path d="M 100 122 Q 92 132 84 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            <path d="M 100 122 Q 108 132 116 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        </svg>

        <svg class="small-dog sd4" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="55" cy="65" rx="20" ry="28" fill="#a1887f" transform="rotate(-25 55 65)"/>
            <ellipse cx="145" cy="65" rx="20" ry="28" fill="#a1887f" transform="rotate(25 145 65)"/>
            <circle cx="100" cy="110" r="50" fill="#efebe9"/>
            <circle cx="78" cy="98" r="5" fill="#3e2723"/><circle cx="122" cy="98" r="5" fill="#3e2723"/>
            <ellipse cx="68" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <ellipse cx="132" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <path d="M 92 112 Q 100 108 108 112 Q 100 124 92 112" fill="#3e2723"/>
            <path d="M 100 122 Q 92 132 84 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
            <path d="M 100 122 Q 108 132 116 126" stroke="#3e2723" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        </svg>

        <svg class="small-dog sd5" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="55" cy="65" rx="20" ry="28" fill="#d2691e" transform="rotate(-25 55 65)"/>
            <ellipse cx="145" cy="65" rx="20" ry="28" fill="#d2691e" transform="rotate(25 145 65)"/>
            <circle cx="100" cy="110" r="50" fill="#f4a460"/>
            <circle cx="78" cy="98" r="5" fill="#3e2723"/><circle cx="122" cy="98" r="5" fill="#3e2723"/>
            <ellipse cx="68" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <ellipse cx="132" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <path d="M 92 112 Q 100 108 108 112 Q 100 124 92 112" fill="#3e2723"/>
        </svg>

        <svg class="small-dog sd6" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="55" cy="65" rx="20" ry="28" fill="#8d6e63" transform="rotate(-25 55 65)"/>
            <ellipse cx="145" cy="65" rx="20" ry="28" fill="#8d6e63" transform="rotate(25 145 65)"/>
            <circle cx="100" cy="110" r="50" fill="#d7ccc8"/>
            <circle cx="78" cy="98" r="5" fill="#3e2723"/><circle cx="122" cy="98" r="5" fill="#3e2723"/>
            <ellipse cx="68" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <ellipse cx="132" cy="118" rx="8" ry="5" fill="#ffab91" opacity="0.7"/>
            <path d="M 92 112 Q 100 108 108 112 Q 100 124 92 112" fill="#3e2723"/>
        </svg>

        <!-- 肉球たち -->
        <svg class="paw p1" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
        <svg class="paw p2" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
        <svg class="paw p3" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
        <svg class="paw p4" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
        <svg class="paw p5" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
        <svg class="paw p6" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
        <svg class="paw p7" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
        <svg class="paw p8" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="20" cy="23" rx="11" ry="9" fill="#ffab91"/>
            <circle cx="11" cy="12" r="4" fill="#ffab91"/>
            <circle cx="20" cy="8" r="4" fill="#ffab91"/>
            <circle cx="29" cy="12" r="4" fill="#ffab91"/>
        </svg>
    </div>

    <!-- メインコンンツ -->
    <div class="content">
        <div class="card">
            <div class="dog-icon">🐶</div>
            <h1>ようこそ、シークレットページへ！</h1>
            <p>
                君は「押すな」を押したね……<br>
                でも、ここは可愛い犬たちがお出迎えしてくれる<br>
                特別な部屋だよ。
            </p>
            <p>
                <a href="http://dog-yochien.test/secret_main/"> <span class="highlight">🦴 ワン！（ひみつだよ）</span></a>
            </p>
            <a href="http://dog-yochien.test/" class="back">表のページに戻る</a>
            <p class="footer-note">※ このページは footer.php の「押すな」から来ました</p>
        </div>
    </div>

</body>
</html>
