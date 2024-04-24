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
	// GSAPの本体
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), null, true);

	// ScrollTriggerプラグイン
	wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), null, true);

	// ScrollToPluginプラグイン
	wp_enqueue_script('gsap-scrollto', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js', array('gsap'), null, true);

	// Google Fonts(2つ以上ある場合は1つずつ書く)
	wp_enqueue_style('NotoSerifJp', '//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;500;600&display=swap');
	wp_enqueue_style('NotoSansJp', '//fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
	wp_enqueue_style('Prata', '//fonts.googleapis.com/css2?family=Prata&display=swap');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), null);

    // テーマのJavaScript
    wp_enqueue_script('theme-js', get_theme_file_uri('/assets/js/script.js'), array(), filemtime(get_theme_file_path('/assets/js/script.js')), true);

    // テーマのCSS
    wp_enqueue_style('theme-css', get_theme_file_uri('/assets/css/style.css'), array(), filemtime(get_theme_file_path('/assets/css/style.css')));
}
add_action('wp_enqueue_scripts', 'my_script_init');

//管理画面の投稿名を変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
	}
	function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
	}
	add_action( 'init', 'Change_objectlabel' );
	add_action( 'admin_menu', 'Change_menulabel' );

//タクソノミーをラジオボタンにする
add_action( 'admin_print_footer_scripts', 'select_to_radio_genre' );
function select_to_radio_genre() {
?>
<script type="text/javascript">
jQuery(function($) {
	// 投稿画面
	$('#taxonomy-genre input[type="checkbox"]').each(function() {
	  $(this).replaceWith($('<input type="radio" name="' + $(this).attr('name') + '" value="' + $(this).val() + '">').prop('checked', $(this).is(':checked')));
	});
	// 一覧画面
	var genre_checklist = $('.genrechecklist input[type="checkbox"]');
	genre_checklist.click(function() {
	  genre_checklist.prop('checked', false);
	  $(this).prop('checked', true);
	});
});
</script>
<?php
}
//投稿のカテゴリーもラジオボタンにする
add_action( 'admin_print_footer_scripts', 'select_to_radio_category' );
function select_to_radio_category() {
?>
<script type="text/javascript">
jQuery(function($) {
	// カテゴリーをラジオボタンにする
	$('#category-all input[type="checkbox"]').each(function() {
	  $(this).replaceWith($('<input type="radio" name="' + $(this).attr('name') + '" value="' + $(this).val() + '">').prop('checked', $(this).is(':checked')));
	});
});
</script>
<?php
}



// 検索条件が未入力時にsearch.phpにリダイレクトする
function set_redirect_template(){
	if (isset($_GET['s']) && empty($_GET['s'])) {
	  include(TEMPLATEPATH . '/search.php');
	  exit;
	}
  }
  add_action('template_redirect', 'set_redirect_template');

  //1ページに表示する最大投稿数
  function my_pre_get_posts( $query ) {
	if ( is_admin() || !$query->is_main_query() ) {
	  return;
	}
	if ( $query->is_search() ) {
	  $query->set( 'posts_per_page', 9 );
	}
  }
  add_action('pre_get_posts','my_pre_get_posts');

  // 検索条件のページタイプを指定する(通常投稿とカスタム投稿)
function SearchFilter( $query ) {
	if ( $query -> is_search ) {
	  $query -> set( 'post_type', array('post','blog') );
	}
	return $query;
  }
  add_filter( 'pre_get_posts', 'SearchFilter' );

    //date-blg.phpを機能させる
	function custom_template_redirect() {
		if (is_post_type_archive('blog') && is_date()) {
			include(get_template_directory() . '/date-blog.php');
			exit;
		}
	}
	add_action('template_redirect', 'custom_template_redirect');
	
	function custom_rewrite_rules() {
		add_rewrite_rule(
			'blog/([0-9]{4})/([0-9]{2})/?$', 
			'index.php?post_type=blog&year=$matches[1]&monthnum=$matches[2]', 
			'top'
		);
	}
	add_action('init', 'custom_rewrite_rules');

  // Contact Form7の送信ボタンをクリックした後の遷移先設定
  add_action( 'wp_footer', 'add_origin_thanks_page' );
  function add_origin_thanks_page() {
  $thanks = home_url('/contact-thanks/');
	echo <<< EOC
	  <script>
		var thanksPage = {
		  281: '{$thanks}',
		};
	  document.addEventListener( 'wpcf7mailsent', function( event ) {
		location = thanksPage[event.detail.contactFormId];
	  }, false );
	  </script>
	EOC;
  }


