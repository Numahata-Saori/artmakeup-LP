<?php

add_theme_support( 'post-thumbnails' );

add_theme_support( 'menus' );

// ウィジェットの登録
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバー', //ウィジェットの名前を入力
        'id' => 'sidebar', //ウィジェットに付けるid名を入力
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

#fff
function my_custom_base_color() {
    global $post;
    $base_color = get_post_meta($post->ID, 'base_color', true);
    if (!empty($base_color)) {
        echo '<style>
        /* 以下のセレクターは、対象となる要素を指定してください。 */
        body {
          background-color: ' . $base_color . ' ;
        }
        .header__wrap__btn {
          box-shadow: 0 4px 15px 0 ' . $base_color . ' ;
        }
        .header__wrap__btn a {
          color: ' . $base_color . ' ;
        }
        .header__menu__openbtn__item span {
          color: ' . $base_color . ' ;
        }
        .header__menu__openbtn__item span:nth-of-type(1) {
          background-color: ' . $base_color . ' ;
        }
        .header__menu__openbtn__item span:nth-of-type(3) {
          background-color: ' . $base_color . ' ;
        }
        .header__menu__nav__list__item a {
          color: ' . $base_color . ' ;
        }

        .mv__text__strength__fix {
          color: ' . $base_color . ' ;
        }
        .mv__text__strength__list__item {
          color: ' . $base_color . ' ;
        }
        .worries__wrap__item .dark-img {
          box-shadow: inset 0 0 10px 5px ' . $base_color . ' ;
        }
        .worries__wrap__item .bright-img {
          box-shadow: inset 0 0 10px 5px ' . $base_color . ' ;
        }
        .art-make__technique__wrap__item {
          background-color: ' . $base_color . ' ;
        }
        .art-make__wrap__text {
          background-color: ' . $base_color . ' ;
        }
        .strength__wrap__item__text {
          background-color: ' . $base_color . ' ;
        }
        .price__table01__headline thead {
          color: ' . $base_color . ' ;
        }
        .price__table02__headline thead {
          background-color: ' . $base_color . ' ;
        }
        .price__table02__item .kinds td:first-child {
          background-color: ' . $base_color . ' ;
        }
        .price__table03__item01 {
          border-bottom: 0.4rem solid ' . $base_color . ' ;
        }
        .price__table03__item01 .headline td:first-child {
          background-color: ' . $base_color . ' ;
        }
        .price__table03__item01 .headline th {
          border-right: 0.2rem solid ' . $base_color . ' ;
        }
        .price__table03__item01 .num td {
          background-color: ' . $base_color . ' ;
        }
        .price__table03__item01 .num td:last-child {
          border-right: 0.2rem solid ' . $base_color . ' ;
        }
        .price__table03__item01 .num th {
          color: ' . $base_color . ' ;
        }
        .price__table03__item01 .num .empty {
          background-color: ' . $base_color . ' ;
        }
        .price__table03__item02 .headline-upper th {
          color: ' . $base_color . ' ;
        }
        .price__table03__item02 .num td {
          border-right: 0.2rem solid ' . $base_color . ' ;
          border-bottom: 0.2rem solid ' . $base_color . ' ;
        }
        .price__table03__item02 .num .empty {
          background-color: ' . $base_color . ' ;
        }
        .flow__wrap__item {
          background-color: ' . $base_color . ' ;
        }
        .footer {
          color: ' . $base_color . ' ;
        }
        </style>';
    }
}
add_action('wp_head', 'my_custom_base_color');

// #EAD7CC
function my_custom_main_color() {
    global $post;
    $main_color = get_post_meta($post->ID, 'main_color', true);
    if (!empty($main_color)) {
        echo '<style>
        /* 以下のセレクターは、対象となる要素を指定してください。 */
        .header {
          background-color: ' . $main_color . ' ;
        }
        .mv__text__catch__main {
          text-shadow: 1px 1px 0 ' . $main_color . ' , -1px -1px 0 ' . $main_color . ' , -1px 1px 0 ' . $main_color . ' , 1px -1px 0 ' . $main_color . ' , 0px 1px 0 ' . $main_color . ' , 0 -1px 0 ' . $main_color . ' , -1px 0 0 ' . $main_color . ' , 1px 0 0 ' . $main_color . ' ;
        }
        .mv__text__strength__fix {
          box-shadow: 0 0 10px 2px ' . $main_color . ' inset;
        }
        .mv__text__strength__list__item {
          box-shadow: 0 0 10px 5px ' . $main_color . ' inset;
        }
        .art-make {
          background-color: ' . $main_color . ' ;
        }
        .strength {
          background-color: ' . $main_color . ' ;
        }
        .price__table01__item .kinds td p {
          background-color: ' . $main_color . ' ;
        }
        .price__table03__item01 .headline {
          background-color: ' . $main_color . ' ;
        }
        .price__table03__item01 .num td {
          border-right: 0.2rem solid ' . $main_color . ' ;
          border-bottom: 0.2rem solid ' . $main_color . ' ;
        }
        .price__table03__item01 .num th {
          border-right: 0.2rem solid ' . $main_color . ' ;
          border-bottom: 0.2rem solid ' . $main_color . ' ;
        }
        .flow {
          background-color: ' . $main_color . ' ;
        }
        .contact {
          background-color: ' . $main_color . ' ;
        }

        </style>';
    }
}
add_action('wp_head', 'my_custom_main_color');

// #716A67
function my_custom_sub_color() {
    global $post;
    $sub_color = get_post_meta($post->ID, 'sub_color', true);
    if (!empty($sub_color)) {
        echo '<style>
        /* 以下のセレクターは、対象となる要素を指定してください。 */
        body {
          color: ' . $sub_color . ' ;
        }
        a {
          color: ' . $sub_color . ' ;
        }
        .header__menu__openbtn {
          background-color: ' . $sub_color . ' ;
        }
        .header__menu__nav {
          background-color: ' . $sub_color . ' ;
        }
        .mv__text__catch__sub {
          color: ' . $sub_color . ' ;
        }
        .ideal-eyeblow__wrap__item {
          border: 1px solid ' . $sub_color . ' ;
        }
        .strength__wrap__item__text {
          color: ' . $sub_color . ' ;
        }
        .price__table01__headline thead {
          background-color: ' . $sub_color . ' ;
        }
        .price__table02__headline thead {
          color: ' . $sub_color . ' ;
        }
        .price__table02__headline thead th {
          border-top: 0.2rem solid ' . $sub_color . ' ;
          border-bottom: 0.2rem solid ' . $sub_color . ' ;
        }
        .price__table03__item01 .num td {
          color: ' . $sub_color . ' ;
        }
        .price__table03__item01 .num th {
          background-color: ' . $sub_color . ' ;
        }
        .price__table03__item02 .num td {
          color: ' . $sub_color . ' ;
        }
        .contact .bgcentery:before {
          background-color: ' . $sub_color . ' ;
        }
        .footer {
          background-color: ' . $sub_color . ' ;
        }
        </style>';
    }
}
add_action('wp_head', 'my_custom_sub_color');

// #CF9F96
function my_custom_accent_color() {
    global $post;
    $accent_color = get_post_meta($post->ID, 'accent_color', true);
    if (!empty($accent_color)) {
        echo '<style>
        /* 以下のセレクターは、対象となる要素を指定してください。 */
        .header__wrap__btn {
          background-color: ' . $accent_color . ' ;
        }
        .price__table03__item02 {
          border-left: 0.4rem solid ' . $accent_color . ' ;
          border-right: 0.4rem solid ' . $accent_color . ' ;
          border-bottom: 0.4rem solid ' . $accent_color . ' ;
        }
        .price__table03__item02 .headline-upper th {
          background-color: ' . $accent_color . ' ;
        }
        .contact__info__text .emphasis {
          background-image: linear-gradient(rgba(0, 0, 0, 0) 70%, ' . $accent_color . ' 70%);
        }
        .contact__info__btn img {
          box-shadow: 0 4px 15px 0 ' . $accent_color . ' ;
        }
        </style>';
    }
}
add_action('wp_head', 'my_custom_accent_color');

// #f1e5de
function my_custom_main_sub_color() {
    global $post;
    $main_sub_color = get_post_meta($post->ID, 'main_sub_color', true);
    if (!empty($main_sub_color)) {
        echo '<style>
        /* 以下のセレクターは、対象となる要素を指定してください。 */
        .price__table01__item .kinds td:first-child {
          background-color: ' . $main_sub_color . ' ;
        }
        .price__table01__item .course th:nth-child(odd) {
          background-color: ' . $main_sub_color . ' ;
        }
        .price__table01__item .course th:nth-child(even) {
          border-top: 0.2rem solid ' . $main_sub_color . ' ;
          border-bottom: 0.2rem solid ' . $main_sub_color . ' ;
        }
        .price__table02__item .kinds td {
          border-top: 0.2rem solid ' . $main_sub_color . ' ;
        }
        .price__table02__item .kinds td p {
          background-color: ' . $main_sub_color . ' ;
        }
        .price__table02__item .course th:nth-child(odd) {
          border-top: 0.2rem solid ' . $main_sub_color . ' ;
          border-bottom: 0.2rem solid ' . $main_sub_color . ' ;
        }
        .price__table02__item .course th:nth-child(even) {
          background-color: ' . $main_sub_color . ' ;
        }
        .flow__wrap__item__text__title::before {
          color: ' . $main_sub_color . ' ;
        }
        </style>';
    }
}
add_action('wp_head', 'my_custom_main_sub_color');

// #efdfdc
function my_custom_accent_sub_color() {
    global $post;
    $accent_sub_color = get_post_meta($post->ID, 'accent_sub_color', true);
    if (!empty($accent_sub_color)) {
        echo '<style>
        /* 以下のセレクターは、対象となる要素を指定してください。 */
        .price__table03__item02 .headline-under th {
          border-right: 0.2rem solid ' . $accent_sub_color . ' ;
        }
        .price__table03__item02 .num td {
          background-color: ' . $accent_sub_color . ' ;
        }
        </style>';
    }
}
add_action('wp_head', 'my_custom_accent_sub_color');

// #c78f85
function my_custom_accent_sub2_color() {
    global $post;
    $accent_sub2_color = get_post_meta($post->ID, 'accent_sub2_color', true);
    if (!empty($accent_sub2_color)) {
        echo '<style>
        /* 以下のセレクターは、対象となる要素を指定してください。 */
        .mv__text__catch__main {
          color: ' . $accent_sub2_color . ' ;
        }
        </style>';
    }
}
add_action('wp_head', 'my_custom_accent_sub2_color');


// .mv__text__strength__fix {
//   background-image: linear-gradient(to right, #dfbfb9, #CF9F96, #c78f85, #dbbba8);
// }
// .mv__text__strength__list__item {
//   background-image: linear-gradient(to right, #dfbfb9, #CF9F96, #c78f85, #dbbba8);
// }
// .contact .bgcentery {
//   background-image: linear-gradient(to right, #dfbfb9, #CF9F96, #bf7f73, #dbbba8);
// }

?>
