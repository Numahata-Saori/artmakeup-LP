<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>medical salon μ</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->

  <!-- Googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Montserrat:wght@400;700;800&family=Noto+Sans+JP:wght@400;700;900&family=Noto+Serif+JP:wght@400;700;900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>
  <!-- headerは常に表示 -->
  <header class="header" id="header">
    <div class="header__wrap">
      <!-- WordPressで店名変更可 -->
      <h1 class="header__wrap__logo">
        <span class="header__wrap__logo__upper">medical salon μ </span>
        <span class="header__wrap__logo__lower">-miuex札幌中央店-</span>
      </h1>

      <!-- LINE追加ボタン -->
      <div class="header__wrap__btn">
        <a href="https://line.me/R/ti/p/@726sxdkz">
          <span>Web予約</span><br>
          <span>お問い合わせ</span>
        </a>
      </div>
    </div>

    <div class="header__menu">
      <!-- メニューボタン、クリックするとnavメニュー表示 -->
      <div class="header__menu__openbtn">
        <div class="header__menu__openbtn__item">
          <span></span>
          <span>MENU</span>
          <span></span>
        </div>
      </div>

      <!-- navメニュー -->
      <nav class="header__menu__nav" id="g-nav">
        <ul class="header__menu__nav__list">
          <li class="header__menu__nav__list__item"><a href="">眉のお悩み</a></li>
          <li class="header__menu__nav__list__item"><a href="">3Dアートメイク</a></li>
          <li class="header__menu__nav__list__item"><a href="">理想の眉</a></li>
          <li class="header__menu__nav__list__item"><a href="">当院の特徴</a></li>
          <li class="header__menu__nav__list__item"><a href="">料金/他社比較</a></li>
          <li class="header__menu__nav__list__item"><a href="">施術の流れ</a></li>
          <li class="header__menu__nav__list__item"><a href="">お問い合わせ</a></li>
          <li class="header__menu__nav__list__item"><a href="">店舗情報</a></li>
        </ul>
      </nav>

    </div>
  </header>