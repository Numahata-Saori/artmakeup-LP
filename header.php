<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name') ?></title>

  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

  <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->

  <!-- Googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Montserrat:wght@400;700;800&family=Noto+Sans+JP:wght@400;700;900&family=Noto+Serif+JP:wght@400;700;900&family=Sawarabi+Gothic&display=swap" rel="stylesheet">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

  <!-- swiper -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- animate -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class() ?>>
  <!-- headerは常に表示 -->
  <header class="header" id="header">
    <div class="header__wrap">

      <?php
        $args = array(
          'post_type' => 'post', // 投稿タイプ
          'category_name' => 'storeinfo-setup', //カテゴリ
        );
        $the_query = new WP_Query($args); // カスタムフィールドを取得
        if($the_query->have_posts()) : // 1件以上存在するかどうか
      ?>
      <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

      <h1 class="header__wrap__logo">
        <span class="header__wrap__logo__upper"><?php bloginfo('name') ?></span>
        <span class="header__wrap__logo__lower">-<?php the_field('store_name'); ?>-</span>
      </h1>

      <?php endwhile; // 投稿のループ終了 ?>
      <?php endif; // 投稿の条件分岐を終了 ?>
      <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

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
          <li class="header__menu__nav__list__item"><a href="#worries">眉のお悩み</a></li>
          <li class="header__menu__nav__list__item"><a href="#art-make">3Dアートメイク</a></li>
          <li class="header__menu__nav__list__item"><a href="#ideal-eyeblow">理想の眉</a></li>
          <li class="header__menu__nav__list__item"><a href="#strength">当院の特徴</a></li>
          <li class="header__menu__nav__list__item"><a href="#price">料金/他社比較</a></li>
          <li class="header__menu__nav__list__item"><a href="#flow">施術の流れ</a></li>
          <li class="header__menu__nav__list__item"><a href="#contact">お問い合わせ</a></li>
          <li class="header__menu__nav__list__item"><a href="#store-info">店舗情報</a></li>
        </ul>
      </nav>

    </div>
  </header>
