<?php
/**
 * Luxeritas WordPress Theme - free/libre wordpress platform
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @copyright Copyright (C) 2015 Thought is free.
 * @link http://thk.kanzae.net/
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 * @author LunaNuko
 */

/* 以下、好みに応じて子テーマ用の関数をお書きください。
 ( Below here, please write down your own functions for the child theme. ) */

//親テーマと子テーマのCSSとJSを読み込む
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style-child', get_stylesheet_directory_uri() . '/style.css', array( 'style' ) );
    wp_enqueue_style( 'common-child', get_stylesheet_directory_uri() . '/css/common.css' );
    if (is_front_page()) {
        wp_enqueue_style('', get_stylesheet_directory_uri() . '/css/front_page.css');
    } else if (is_single()) {
        wp_enqueue_style('', get_stylesheet_directory_uri() . '/css/single.css');
    }
}