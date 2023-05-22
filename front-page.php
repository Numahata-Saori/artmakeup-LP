<?php get_header(); ?>

<main>
  <section class="mv">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'mv-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="mv__text">
      <div class="mv__text__catch">
        <h2 class="mv__text__catch__main"><?php the_field('mv_catch_main'); ?></h2>
        <h3 class="mv__text__catch__sub"><?php the_field('mv_catch_sub'); ?></h3>
      </div>

      <div class="mv__text__strength">
        <div class="mv__text__strength__fix">医療アートメイク</div>

        <ul class="mv__text__strength__list">
          <li class="mv__text__strength__list__item">眉の黄金比に<br>基づいた施術</li>
          <li class="mv__text__strength__list__item">仕事終わりに<br>22時まで営業！</li>
          <li class="mv__text__strength__list__item">LINEで24H<br>質問受付可能！</li>
        </ul>
      </div>
    </div>

    <div class="mv__img">
      <img class="pc" src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_mv_pc' ,true)); ?>" alt="">
      <img class="sp" src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_mv_sp' ,true)); ?>" alt="">

    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="coupon">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'coupon-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="coupon__inner">
      <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_coupon' ,true)); ?>" alt="">
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="worries" id="worries">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'worries-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">WORRIES</h4>
      <div class="sec-title__sub">眉のこんなお悩みありませんか？</div>

      <ul class="worries__wrap">
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img dark-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries1' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">眉メイクが苦手</div>
        </li>
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img dark-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries2' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">自分に合う<br>眉デザインが<br>わからない</div>
        </li>
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img dark-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries3' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">すっぴんに<br>自身が持てない…</div>
        </li>
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img dark-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries4' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">温泉やプールが<br>おっくう…</div>
        </li>
      </ul>

      <div class="worries__title">医療アートメイクなら…</div>

      <ul class="worries__wrap">
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img bright-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries_solving1' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">朝メイクの<br>時短に</div>
        </li>
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img bright-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries_solving2' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">メイク直しが<br>簡単に！</div>
        </li>
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img bright-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries_solving3' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">すっぴんに<br>自身！</div>
        </li>
        <li class="worries__wrap__item">
          <div class="worries__wrap__item__img bright-img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_worries_solving4' ,true)); ?>" alt="">
          </div>
          <div class="worries__wrap__item__text">汗をかいても<br>落ちない</div>
        </li>
      </ul>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="art-make">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'artmake-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">ABOUT ART MAKE</h4>
      <div class="sec-title__sub">3D眉アートメイク</div>

      <div class="art-make__technique">
        <!-- <h5 class="art-make__technique__title">Technique</h5> -->
        <ul class="art-make__technique__wrap">
          <li class="art-make__technique__wrap__item">
            <div class="art-make__technique__wrap__item__title">2D</div>
            <div class="art-make__technique__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_artmake_2d' ,true)); ?>" alt="">
            </div>
            <div class="art-make__technique__wrap__item__text">
              現代の技法は昔のように海苔を貼ったような仕上がりにはならず、メイクで描いたような仕上がりになります。
            </div>
          </li>

          <li class="art-make__technique__wrap__item">
            <div class="art-make__technique__wrap__item__title">3D</div>
            <div class="art-make__technique__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_artmake_3d' ,true)); ?>" alt="">
            </div>
            <div class="art-make__technique__wrap__item__text">
              値段は少々高めだが、眉毛を一本一本丁寧に描いていく今主流の毛並み眉。<br>まるで本物の眉毛を再現できます。
            </div>
          </li>

          <li class="art-make__technique__wrap__item">
            <div class="art-make__technique__wrap__item__title">4D</div>
            <div class="art-make__technique__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_artmake_4d' ,true)); ?>" alt="">
            </div>
            <div class="art-make__technique__wrap__item__text">
              3D+パウダー技法<br>毛並みのみよりメイク感も出て、より白眉毛と馴染んだ仕上がりになります。
            </div>
          </li>
        </ul>
      </div>

      <div>
        <div class="art-make__wrap">
          <div class="art-make__wrap__img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_artmake_info1' ,true)); ?>" alt="">
          </div>

          <div class="art-make__wrap__text">
            <div class="art-make__wrap__text__title">3D眉アートメイクとは？</div>
            <div class="art-make__wrap__text__info">
              人により、自眉の濃さや毛量は様々。<br>
              3D眉アートメイクは、一本一本丁寧に自眉を活かしながら施術を行うアートメイクの基本となる施術方法です。<br>
              どれが本当の眉で、どれがアートメイク眉かわからないほど自然な仕上がりが特徴です。
            </div>
          </div>
        </div>

        <div class="art-make__wrap">
          <div class="art-make__wrap__text">
            <div class="art-make__wrap__text__title">医療アートメイクってどんなもの？</div>
            <div class="art-make__wrap__text__info">
              専用の針を用い、色素を注入してメイクを施す技法を医療アートメイクといいます。<br>
              医師による事前診断を受け、その指示のもと美容看護師が施術を行います。<br>
              medical salon μ では医療機関であるM&Mクリニックと提供し、医療アートメイクを提供しています。
            </div>
          </div>

          <div class="art-make__wrap__img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_artmake_info2' ,true)); ?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="ideal-eyeblow" id="ideal-eyeblow">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'eyeblow-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">IDEAL EYEBLOW</h4>
      <div class="sec-title__sub">理想の眉</div>

      <ul class="ideal-eyeblow__wrap">
        <li class="ideal-eyeblow__wrap__item">
          <div class="ideal-eyeblow__wrap__item__title">ナチュラル眉</div>
          <div class="ideal-eyeblow__wrap__item__img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_eyeblow_natural' ,true)); ?>" alt="">
          </div>
          <div class="ideal-eyeblow__wrap__item__text">
            ご自身の自眉を生かして、自然な眉ラインを再現したデザインです。<br>女性らしい柔らかな印象を与えます。
          </div>
        </li>

        <li class="ideal-eyeblow__wrap__item">
          <div class="ideal-eyeblow__wrap__item__title">アーチ眉</div>
          <div class="ideal-eyeblow__wrap__item__img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_eyeblow_arch' ,true)); ?>" alt="">
          </div>
          <div class="ideal-eyeblow__wrap__item__text">
            眉山を黒目の中心にもってきて目尻を長めにしたアーチ型のデザインです。<br>優しくフェミニンな印象に。
          </div>
        </li>

        <li class="ideal-eyeblow__wrap__item">
          <div class="ideal-eyeblow__wrap__item__title">ストレート眉</div>
          <div class="ideal-eyeblow__wrap__item__img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_eyeblow_straight' ,true)); ?>" alt="">
          </div>
          <div class="ideal-eyeblow__wrap__item__text">
            まるで韓流スターのような太いストレートな眉デザインです。<br>幼く凜々しい印象を与え、小顔効果も期待できます。
          </div>
        </li>

        <li class="ideal-eyeblow__wrap__item">
          <div class="ideal-eyeblow__wrap__item__title">ハンサム眉</div>
          <div class="ideal-eyeblow__wrap__item__img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_eyeblow_handsome' ,true)); ?>" alt="">
          </div>
          <div class="ideal-eyeblow__wrap__item__text">
            眉山を黒目の外側高めにもってきて、目尻は細く短めのデザインです。<br>キリッとしたクールな印象を与えます。
          </div>
        </li>
      </ul>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="strength" id="strength">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'strength-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div>
      <div class="ly-cont">
        <h4 class="sec-title">OUR STRENGTH</h4>
        <div class="sec-title__sub">当院の特徴</div>
      </div>

      <div class="strength__inner swiper-container">
        <ul class="strength__wrap swiper-wrapper">
          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img odd-img org-01">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength1' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text odd-text strength-long odd-text-first">
              <i class="strength__wrap__item__text__num">01</i>
              <h5 class="strength__wrap__item__text__title">眉の黄金比に基づいたハイクラスな施術</h5>
              <p>
                「黄金比」と呼ばれる言葉をご存知でしょうか？<br>
                ひとが無意識に美しいと感じるデザイン比のことです。<br>
                眉のアートメイクを施す際、この黄金比に加え、骨格、肌色、眉の生え方などに配慮しながら理想的なデザインを作り上げます。
              </p>
            </div>
          </li>

          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img even-img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength2' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text even-text strength-short">
              <i class="strength__wrap__item__text__num">02</i>
              <h5 class="strength__wrap__item__text__title">丁寧なヒアリングとカウンセリング</h5>
              <p>
                当サロンは、丁寧なヒアリング・カウンセリングを実施し、お客様の要望や悩みに寄り添い、最適なアートメイクを提案。安全・効果的な施術と持続的な美しさをサポートします。
              </p>
            </div>
          </li>

          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img odd-img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength3' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text odd-text strength-short">
              <i class="strength__wrap__item__text__num">03</i>
              <h5 class="strength__wrap__item__text__title">オシャレでアットホームなサロン</h5>
              <p>
                当サロンは、アートメイクをクリニックではなくオシャレでアットホームなサロンで提供しています。<br>
                医療行為ではありますが、気軽に来店いただける雰囲気を大切にし、お客様にリラックスしていただける空間を提供しています。
              </p>
            </div>
          </li>

          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img even-img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength4' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text even-text strength-short">
              <i class="strength__wrap__item__text__num">04</i>
              <h5 class="strength__wrap__item__text__title">22時まで営業</h5>
              <p>
                営業時間が10時から22時までの12時間営業で、他のクリニックと比べて営業時間が長いのが強みです。<br>
                仕事帰りの主婦層や働く女性にもアクセスしやすく、忙しい方々のニーズにも柔軟に対応しています。
              </p>
            </div>
          </li>

          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img odd-img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength5' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text odd-text strength-short">
              <i class="strength__wrap__item__text__num">05</i>
              <h5 class="strength__wrap__item__text__title">予約が取りやすい</h5>
              <p>
                他のクリニックと比べて予約が取りやすいのが当サロンの魅力です。<br>
                スケジュールの調整が容易であり、お客様の都合に合わせた施術が受けられます。
              </p>
            </div>
          </li>

          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img even-img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength6' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text even-text strength-short">
              <i class="strength__wrap__item__text__num">06</i>
              <h5 class="strength__wrap__item__text__title">診療のカウンセリングがオンラインで可能</h5>
              <p>
                診療のカウンセリングはオンラインで自宅から受けることができます。<br>
                これにより、来店する手間や時間を節約し、リラックスした状態で相談が可能となっています。
              </p>
            </div>
          </li>

          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img odd-img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength7' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text odd-text strength-short">
              <i class="strength__wrap__item__text__num">07</i>
              <h5 class="strength__wrap__item__text__title">真心のこもったサービスと丁寧なサポート</h5>
              <p>
                フリーランスの看護師が、真心を込めたサービスと丁寧なサポートを提供します。<br>
                施術後の肌のトラブルにも、LINEで24時間体制で質問受付が可能であり、安心して施術を受けられます。
              </p>
            </div>
          </li>

          <li class="strength__wrap__item swiper-slide">
            <div class="strength__wrap__item__img even-img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_strength8' ,true)); ?>" alt="">
            </div>
            <div class="strength__wrap__item__text even-text strength-short">
              <i class="strength__wrap__item__text__num">08</i>
              <h5 class="strength__wrap__item__text__title">アートメイクスクール</h5>
              <p>
                全国でも有数のアートメイクを学べるサロンです。<br>
                研修生によるモニター募集も行われており、安価な価格でアートメイクに挑戦できるプランもあります。
              </p>
            </div>
          </li>

        </ul>

        <div class="swiper-pagination"></div>
      </div>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="coupon">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'coupon-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="coupon__inner">
      <div class="coupon__inner__img">
        <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_coupon' ,true)); ?>" alt="">
      </div>

      <div class="coupon__inner__content">
        <div class="coupon__inner__content__headline">
          <span><?php the_field('coupon_headline'); ?></span>
        </div>

        <div class="coupon__inner__content__detail">
          <div class="period">
            <span><?php the_field('coupon_period'); ?>までに</span>
            <span>ご予約の方限定</span>
          </div>
          <div class="coupon__inner__content__detail__discount">
            <span class="price"><?php the_field('coupon_discount'); ?></span>
            <span class="coupon__inner__content__detail__discount__fix">OFF</span>
          </div>
        </div>

        <div class="coupon__inner__content__code">
          <span class="coupon__inner__content__code__fix">クーボンコード：</span>
          <span class="code"><?php the_field('coupon_code'); ?></span>
        </div>

        <div class="coupon__inner__content__lead">
          <span>申込時にこのクーポン番号を入力してください。</span>
        </div>
      </div>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="price" id="price">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'price-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">PEICE</h4>
      <div class="sec-title__sub">料金表</div>

      <div class="price__text">
        <p>アートメイクは通常2回以上で完成する施術になります。</p>
        <p>1回めは土台作りで定着率は50％前後です。</p>
        <p>2回めの施術の際にデザインや色の変更、長さや足りない箇所の修正をさせていただきます。</p>
      </div>

      <div class="price__table01">
        <h5 class="price__table01__title">ハイクラスアーティスト</h5>

        <table class="price__table01__headline">
          <thead>
            <th colspan="4">デザイン・料金(税込)</th>
          </thead>
        </table>

        <table class="price__table01__item teble-default">
          <tbody>
            <tr class="kinds">
              <td rowspan="3">
                <p>eyeblow 2D/3D</p>
              </td>
            </tr>
            <tr class="course">
              <th>1回コース</th>
              <th>2回コース</th>
              <th>修正(1回)</th>
            </tr>
            <tr class="num">
              <td>¥<?php the_field('pro_3d_1time'); ?></td>
              <td>¥<?php the_field('pro_3d_2time'); ?></td>
              <td>¥<?php the_field('pro_3d_retouch'); ?></td>
            </tr>
          </tbody>
        </table>

        <table class="price__table01__item teble-default">
          <tbody>
            <tr class="kinds">
              <td rowspan="3">
                <p>eyeblow 4</p>
              </td>
            </tr>
            <tr class="course">
              <th>1回コース</th>
              <th>2回コース</th>
              <th>修正(1回)</th>
            </tr>
            <tr class="num">
              <td>¥<?php the_field('pro_4d_1time'); ?></td>
              <td>¥<?php the_field('pro_4d_2time'); ?></td>
              <td>¥<?php the_field('pro_4d_retouch'); ?></td>
            </tr>
          </tbody>
        </table>

        <div class="price__table01__text">
          <p>※2回コースの方が1回コースに比べ¥<?php the_field('pro_notes1_price'); ?>お得になっております。</p>
          <p>※2Dと3Dは同一料金です。</p>
        </div>
      </div>

      <div class="price__table02">
        <div class="price__table02__title">
          <h5 class="price__table02__title__trainee">トレーニープラン～eyeblow 3D～</h5>
          <p class="price__table02__title__text">※施術事例が50名未満のアーティストの価格です</p>
        </div>

        <table class="price__table02__headline">
          <thead>
            <th colspan="4">コース・料金(税込)</th>
          </thead>
        </table>

        <table class="price__table02__item teble-default">
          <tbody>
            <tr class="kinds">
              <td rowspan="3">
                <p>松</p>
                <span>eyeblow 3D</span>
              </td>
            </tr>
            <tr class="course">
              <th>1回コース</th>
              <th>2回コース</th>
              <th>3回コース</th>
            </tr>
            <tr class="num">
              <td>¥<?php the_field('trainee_pine_1time'); ?></td>
              <td>¥<?php the_field('trainee_pine_2time'); ?></td>
              <td>¥<?php the_field('trainee_pine_3time'); ?></td>
            </tr>
          </tbody>
        </table>

        <table class="price__table02__item teble-default">
          <tbody>
            <tr class="kinds">
              <td rowspan="3">
                <p>竹</p>
                <span>eyeblow 3D</span>
              </td>
            </tr>
            <tr class="course">
              <th>1回コース</th>
              <th>2回コース</th>
              <th>3回コース</th>
            </tr>
            <tr class="num">
              <td>¥<?php the_field('trainee_bamboo_1time'); ?></td>
              <td>¥<?php the_field('trainee_bamboo_2time'); ?></td>
              <td>¥<?php the_field('trainee_bamboo_3time'); ?></td>
            </tr>
          </tbody>
        </table>

        <table class="price__table02__item teble-default">
          <tbody>
            <tr class="kinds">
              <td rowspan="3">
                <p>梅</p>
                <span>eyeblow 3D</span>
              </td>
            </tr>
            <tr class="course">
              <th>1回コース</th>
              <th>2回コース</th>
              <th>3回コース</th>
            </tr>
            <tr class="num">
              <td>¥<?php the_field('trainee_plum_1time'); ?></td>
              <td>¥<?php the_field('trainee_plum_2time'); ?></td>
              <td>¥<?php the_field('trainee_plum_3time'); ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="price__table03">
        <div class="price__table03__title">
          <h5 class="price__table03__title__trainee">他店との比較</h5>
          <div class="price__table03__title__text">
            <p>アートメイクは定着させる為に2回以上の施術が必要と言われています。</p>
            <p>せっかく綺麗になった眉毛の維持をする為にリタッチを行うことをお勧めします。</p>
            <p>他店で行ったアートメイクをリタッチする場合は高い技術が必要ですので、<br>受け入れをしないところも多くみられます。</p>
          </div>
        </div>

        <div class="price__table03__wrap">
          <table class="price__table03__item01">
            <tbody>
              <tr class="headline">
                <td></td>
                <th>A社</th>
                <th>B社</th>
              </tr>

              <tr class="num">
                <th>1回</th>
                <td>¥72,000</td>
                <td>-</td>
              </tr>

              <tr class="num">
                <th>2回</th>
                <td>¥120,000</td>
                <td>
                  <p>¥98,000</p>
                  <p class="sub-text">※2年以内に2回消化</p>
                </td>
              </tr>

              <tr class="num">
                <th>3回</th>
                <td>
                  <p class="sub-text">¥48,000(追加)<br>※施術1年以内に限る</p>
                  <p>¥168,000</p>
                </td>
                <td>-</td>
              </tr>

              <tr class="num">
                <th>4回</th>
                <td>
                  <p class="sub-text">¥48,000(追加)<br>※施術1年以内に限る</p>
                  <p>¥216,000</p>
                </td>
                <td>-</td>
              </tr>
            </tbody>
          </table>

          <table class="price__table03__item02">
            <tbody>
              <tr class="headline-upper">
                <th colspan="2">mieux札幌店</th>
              </tr>
              <tr class="headline-under">
                <th>ハイクラスアーティスト</th>
                <th>トレーニープラン</th>
              </tr>

              <tr class="num">
                <td>¥<?php the_field('pro_3d_1time'); ?></td>
                <td>
                  <p><span>梅</span>¥<?php the_field('trainee_plum_1time'); ?></p>
                  <p><span>竹</span>¥<?php the_field('trainee_bamboo_1time'); ?></p>
                  <p><span>松</span>¥<?php the_field('trainee_pine_1time'); ?></p>
                </td>
              </tr>

              <tr class="num">
                <td>¥<?php the_field('pro_3d_2time'); ?></td>
                <td>
                  <p><span>梅</span>¥<?php the_field('trainee_plum_2time'); ?></p>
                  <p><span>竹</span>¥<?php the_field('trainee_bamboo_2time'); ?></p>
                  <p><span>松</span>¥<?php the_field('trainee_pine_2time'); ?></p>
                </td>
              </tr>

              <tr class="num">
                <td>
                  <p>¥<?php the_field('pro_3d_3time'); ?></p>
                  <p class="sub-text">※ご紹介をした方のみ</p>
                </td>
                <td>
                  <p><span>梅</span>¥<?php the_field('trainee_plum_3time'); ?></p>
                  <p><span>竹</span>¥<?php the_field('trainee_bamboo_3time'); ?></p>
                  <p><span>松</span>¥<?php the_field('trainee_pine_3time'); ?></p>
                </td>
              </tr>

              <tr class="num">
                <td>
                  <p class="sub-text">★アートメイクし放題★<br>当店オリジナル</p>
                  <p>¥<?php the_field('pro_3d_unlimited'); ?></p>
                  <p class="sub-text">※有効期限2年</p>
                </td>
                <td class="empty"></td>
              </tr>

            </tbody>
          </table>
        </div>

        <div class="price__table03__text">
          <p>※全国のアートメイクの相場は、1回￥66,000円です。</p>
          <p>※トレーニープランとは、施術事例が50名未満のアーティストの価格です</p>
        </div>
      </div>

    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="flow" id="flow">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'flow-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">TREATMENT FLOW</h4>
      <div class="sec-title__sub">施術の流れ</div>

      <div class="swiper-container">
        <ul class="flow__wrap swiper-wrapper">
          <li class="flow__wrap__item swiper-slide wow animate__animated animate__fadeInLeft">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow1' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="01"><span>事前問診票記入</span></h5>
              <p>メディカルサロンミュー公式LINEより、事前問診表の記入をしていただきます。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow2' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="02"><span>オンライン診療</span></h5>
              <p>メディカルサロンミュー提携のドクターとオンライン診療を行います。</p>
              <p>アートメイクに関する説明などが行われます。</p>
              <p>※スマホ、タブレット、パソコンなどから簡単にオンライン診療可能です。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow3' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="03"><span>来店特約</span></h5>
              <p>あなたのスケジュールに合わせて来店予約が可能です。</p>
              <p>※来店予約もLINE公式アカウントより簡単にご利用いただけます。</p>
              <p>※1〜3まではLINEで簡単に手続き可能です。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow4' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="04"><span>来店</span></h5>
              <p>店舗にご来店いただきます。</p>
              <p>予約制となっておりますので、お時間に遅れないよう、お気をつけてお越しくださいませ。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow5' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="05"><span>カウンセリング</span></h5>
              <p>専門のアートメイクナースがあなたのご希望を伺い、理想の眉・リップになるためのカウンセリングを行います。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow6' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="06"><span>デザインカラー決め</span></h5>
              <p>ご要望に合わせて最適なデザイン・カラーを決定します。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow7' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="07"><span>麻酔</span></h5>
              <p>アートメイクナースが安全にクリームタイプの麻酔を塗布します。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow8' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="08"><span>施術</span></h5>
              <p>アートメイクの施術を行います。</p>
              <p>施術時間は眉2時間30分程度、アイライン2時間程度、リップ3時間程度です。</p>
              <p>※個人差があります。</p>
            </div>
          </li>

          <li class="flow__wrap__item swiper-slide">
            <div class="flow__wrap__item__img">
              <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_flow9' ,true)); ?>" alt="">
            </div>
            <div class="flow__wrap__item__text">
              <h5 class="flow__wrap__item__text__title" data-number="09"><span>アフターケア</span></h5>
              <p>施術当日、施術後の注意点などについてご説明します。</p>
            </div>
          </li>
        </ul>

        <div class="swiper-pagination"></div>
      </div>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="gallery">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'gallery-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">GALLERY</h4>
      <div class="sec-title__sub">施術例</div>

      <div class="gallery__inner swiper-container">
        <ul class="gallery__wrap swiper-wrapper">
          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery1' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery2' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery3' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery4' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery5' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery6' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery7' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery8' ,true)); ?>" alt="">
              </span>
            </a>
          </li>

          <li class="gallery__wrap__item swiper-slide zoomIn">
            <a href="https://www.instagram.com/mieux.sapporo_casephoto/">
              <span class="mask">
                <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_gallery9' ,true)); ?>" alt="">
              </span>
            </a>
          </li>
        </ul>

        <div class="swiper-pagination"></div>
      </div>

    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="contact" id="contact">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'contact-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">CONTACT</h4>
      <div class="sec-title__sub">お問い合わせ</div>

      <div class="contact__info">
        <div class="contact__info__text">
          <p><span class="emphasis">まずは気軽にお問い合わせください！</span></p>
          <p>↓<span class="emphasis">LINE追加はこちら</span>↓</p>

        </div>

        <div class="contact__info__btn flipY">
          <a href="https://line.me/R/ti/p/@726sxdkz">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_line' ,true)); ?>" alt="">
            <span class="cap">LINE追加</span>
          </a>
        </div>
      </div>

      <a class="contact__hp-btn bgcentery" href="https://miuexbeautymedical.jp/"><span>公式HPはこちら</span></a>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>

  <section class="store-info" id="store-info">

    <?php
      $args = array(
        'post_type' => 'post', // 投稿タイプ
        'category_name' => 'storeinfo-setup', //カテゴリ
      );
      $the_query = new WP_Query($args); // カスタムフィールドを取得
      if($the_query->have_posts()) : // 1件以上存在するかどうか
    ?>
    <?php while($the_query->have_posts()) : $the_query->the_post(); //投稿のループ開始 ?>

    <div class="ly-cont">
      <h4 class="sec-title">STORE INFORMATION</h4>
      <div class="sec-title__sub">店舗情報</div>

      <div class="store-info__wrap">
        <h5 class="store-info__wrap__title"><?php the_field('store_name'); ?></h5>
        <div class="store-info__wrap__info">
          <div class="store-info__wrap__info__img">
            <img src="<?php echo wp_get_attachment_url(get_post_meta($post->ID , 'img_store' ,true)); ?>" alt="">
          </div>

          <div class="store-info__wrap__info__text">
            <div class="address">
              <p><span>住所：</span></p>
              <p>〒060-0062</p>
              <p>北海道札幌市中央区南2条西6丁目5土肥ビル3階</p>
              <p>Fmedical beauty salon IDO内</p>
              <p>(miuex札幌中央)</p>
            </div>

            <div class="tel">
              <p><span>電話番号：</p>
              <p>050-3160-6810</p>
            </div>

            <div class="time">
              <p><span>営業時間：</span></p>
              <p>10：00～22：00</p>
              <p>土日・祝日営業</p>
            </div>

            <div class="access">
              <p><span>アクセス方法：</span></p>
              <p>南北線/東西線/東豊線 大通り駅 徒歩5分</p>
              <p>バス停「北1条西7丁目」徒歩7分</p>
            </div>
          </div>
        </div>
      </div>

      <div class="store-info__map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.255706194112!2d141.34615547627257!3d43.05708929078106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b298529441193%3A0x3b6cf756452ecc15!2z44CSMDYwLTAwNjIg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65Y2X77yS5p2h6KW_77yW5LiB55uu77yVIOWcn-iCpeODk-ODqw!5e0!3m2!1sja!2sjp!4v1683131686561!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2915.255892541824!2d141.34615547618898!3d43.05708537113655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b298529441193%3A0x3b6cf756452ecc15!2z44CSMDYwLTAwNjIg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65Y2X77yS5p2h6KW_77yW5LiB55uu77yVIOWcn-iCpeODk-ODqw!5e0!3m2!1sja!2sjp!4v1684596819874!5m2!1sja!2sjp" width="1024" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <?php endwhile; // 投稿のループ終了 ?>
    <?php endif; // 投稿の条件分岐を終了 ?>
    <?php wp_reset_postdata(); // 使用した投稿データをリセット ?>

  </section>
</main>

<?php get_footer(); ?>
