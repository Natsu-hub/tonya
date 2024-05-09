<?php

function my_setup()
{
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
	add_theme_support('title-tag'); // タイトルタグ自動生成
	add_theme_support(
		'html5',
		array( // HTML5でマークアップ
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action('after_setup_theme', 'my_setup');

// functions.php で const.php ファイルを読み込む
require_once(get_template_directory() . '/inc/const.php');

/**
 * CSSとJavaScriptの読み込み
 */
function my_script_init()
{
	// Google Fonts(2つ以上ある場合は1つずつ書く)
	wp_enqueue_style('NotoSansJp', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&display=swap');
	wp_enqueue_style('NotoSerifJp', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@600;700;900&display=swap');

    // テーマのJavaScript
    wp_enqueue_script('theme-js', get_theme_file_uri('/assets/js/script.js'), array(), filemtime(get_theme_file_path('/assets/js/script.js')), true);

    // テーマのCSS
    wp_enqueue_style('theme-css', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));
}
add_action('wp_enqueue_scripts', 'my_script_init');


//管理画面の投稿を非表示
function Hide_Post_Type() {
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'Hide_Post_Type');

//SCF出力の画像サイズカスタマイズ
function add_custom_image_sizes() {
    add_image_size('custom-size', 800, 600, true); // 800x600ピクセルで画像を切り抜きます
}

add_action('after_setup_theme', 'add_custom_image_sizes');
