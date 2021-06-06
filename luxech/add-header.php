<?php
/* ヘッダーに CSS や Javascript 等を追加したい場合は、以下の ?> 以降にに書いてください
 *
 * 記事や固定ページ単位でヘッダーを追加したい場合は、
 * 記事投稿(編集)画面で、カスタムフィールドに addhead という名前を追加し、
 * 値の部分に CSS や Javascript を書くことで、ヘッダーを追加することもできます。
 *
 * To add CSS or Javascript in the header, please write them after the below ?>.
 *
 * If you want to。add elements in header for certain posts or pages,
 * create a customfield with the name of "addhead" and write your own CSS or Javascript.
 * These elements will be added in the header.
*/
$upload_dir = wp_upload_dir();
$media_root = $upload_dir["baseurl"];
$header_imgs = [
    0 => $media_root."/2021/03/jelly_fish_1.png",
    1 => $media_root."/2021/03/jelly_fish_2.png",
    2 => $media_root."/2021/03/jelly_fish_3.png",
    3 => $media_root."/2021/03/jelly_fish_4.png",
    4 => $media_root."/2021/03/jelly_fish_5.png",
    5 => $media_root."/2021/03/jelly_fish_6.png",
    6 => $media_root."/2021/03/jelly_fish_7.png",
    7 => $media_root."/2021/03/jelly_fish_8.png",
    8=> $media_root."/2021/03/jelly_fish_9.png",
    9 => $media_root."/2021/03/jelly_fish_10.png",
    10 => $media_root."/2021/03/jelly_fish_11.png",
    11 => $media_root."/2021/03/jelly_fish_12.png",
    12 => $media_root."/2021/03/jelly_fish_13.png",
    13 => $media_root."/2021/03/jelly_fish_14.png",
]
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Noto+Serif+JP&family=Noto+Sans&family=Playfair+Display&family=El+Messiri&family=Shippori+Mincho&Playfair+Display:ital@1&family=Rochester&family=Fraunces&display=swap" rel="stylesheet">
<script>
    $(function() {
        $("#header").css("background-image", "url(<?= $header_imgs[random_int(0, 13)] ?>)");
    });
</script>
