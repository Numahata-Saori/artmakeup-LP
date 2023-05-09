<?php

add_theme_support( 'post-thumbnails' );

// add_theme_support( 'menus' );

// function my_custom_base_color() {
//     global $post;
//     // $post_id = get_queried_object_id();
//     $base_color = get_post_meta($post->ID, 'base_color', true);
//     if (!empty($base_color)) {
//         echo '<style>
//         /* 以下のセレクターは、対象となる要素を指定してください。 */
//         body {
//           background-color: ' . $base_color . ' ;
//         }
//         .header {
//           background-color: ' . $base_color . ' ;
//         }
//         </style>';
//     }
// }
// add_action('wp_head', 'my_custom_base_color');

function custom_color_base() {
    $base_color = get_field('base_color', 'option');
    if ($base_color) {
        echo '<style type="text/css">
          .header {
              background-color: ' . $base_color . ';
          }
        </style>';
    }
}
add_action('wp_head', 'custom_color_base');

// function custom_color_base() {
//     // 投稿タイプ 'custom' とカテゴリ 'color-setup' の投稿を取得
//     $args = array(
//         'post_type' => 'custom',
//         'category_name' => 'color-setup',
//     );
//     $query = new WP_Query($args);

//     if ($query->have_posts()) {
//         echo '<style type="text/css">';

//         // 各投稿に対して基本色を適用
//         while ($query->have_posts()) {
//             $query->the_post();
//             $base_color = get_field('base_color');
//             if ($base_color) {
//                 echo '
//                 .header-' . get_the_ID() . ' {
//                     background-color: ' . $base_color . ';
//                 }
//                 ';
//             }
//         }

//         echo '</style>';
//     }

//     wp_reset_postdata();
// }
// add_action('wp_head', 'custom_color_base');

// funciton.phpの動作確認
// function test() {
//     echo '<script>alert(\'function.phpは効いています！\')</script>';
// }
// add_action('wp_head', 'test');

?>
