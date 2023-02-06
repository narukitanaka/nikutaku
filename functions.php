<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fifteen 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentyfifteen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyfifteen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}


// ヘッダーで読み込まれるスクリプトをフッターに移動
function my_init_action() {
  remove_action('wp_head','wp_print_head_scripts',9);
  add_action('wp_footer','wp_print_head_scripts',5);
	
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles' );

  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
}
add_action('init','my_init_action');



add_filter( 'wp_resource_hints', 'twentyfifteen_resource_hints', 10, 2 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous && has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css      .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css      .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Fifteen 1.9
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyfifteen_widget_tag_cloud_args( $args ) {
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentyfifteen_widget_tag_cloud_args' );

register_nav_menu('mainmenu', 'メインメニュー');
register_nav_menu('footermenu', 'フッターメニュー');
register_nav_menu('sidemenu', 'サイドメニュー');

// 画像URLを相対パスにする
function replaceImagePath($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
return $content;
}
add_action('the_content', 'replaceImagePath');

// アイキャッチ有効
add_theme_support( 'post-thumbnails', array( 'post','colum','voice','bbq' ) );

// カスタム投稿(を追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
	// コラム
	register_post_type( 'colum', //カスタム投稿タイプ名を指定
		array(
			'labels' => array(
			'name' => __( 'お役立ちコラム' ),
			'singular_name' => __( 'お役立ちコラム' )
		),
		'public' => true,
		'has_archive' => true, //アーカイブページを持つ
		'menu_position' => 4, //管理画面のメニュー順位
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		)
	);
	register_taxonomy(
		'colum_cat', //タクソノミーの名前
		'colum', //使用するカスタム投稿タイプ名
		array(
			'hierarchical' => true, //trueだと親子関係が使用可能。falseで使用不可
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);

	// お客様の声
	register_post_type( 'voice', //カスタム投稿タイプ名を指定
		array(
			'labels' => array(
			'name' => __( 'ご利用の様子' ),
			'singular_name' => __( 'ご利用の様子' )
		),
		'public' => true,
		'has_archive' => true, //アーカイブページを持つ
		'menu_position' => 5, //管理画面のメニュー順位
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		)
	);
	register_taxonomy(
		'voice_cat', //タクソノミーの名前
		'voice', //使用するカスタム投稿タイプ名
		array(
			'hierarchical' => true, //trueだと親子関係が使用可能。falseで使用不可
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);

	// 大阪のBBQ場一覧
	register_post_type( 'bbq', //カスタム投稿タイプ名を指定
		array(
			'labels' => array(
			'name' => __( '大阪のBBQ場一覧' ),
			'singular_name' => __( '大阪のBBQ場一覧' )
		),
		'public' => true,
		'has_archive' => true, //アーカイブページを持つ
		'menu_position' => 6, //管理画面のメニュー順位
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		'show_in_rest' => true,
	)
	);
	register_taxonomy(
		'bbq_cat', //タクソノミーの名前
		'bbq', //使用するカスタム投稿タイプ名
		array(
			'hierarchical' => true, //trueだと親子関係が使用可能。falseで使用不可
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_in_rest' => true, //これが必要

		)
	);
	register_taxonomy(
		'bbq_tag', //タグの名前
		'bbq', //使用するカスタム投稿タイプ名
		array(
			'hierarchical' => false, //trueだと親子関係が使用可能。falseで使用不可
			'update_count_callback' => '_update_post_term_count',
			'label' => 'タグ',
			'singular_label' => 'タグ',
			'public' => true,
			'show_ui' => true
		)
	);

	// よくある質問一覧
	register_post_type( 'faq', //カスタム投稿タイプ名を指定
		array(
			'labels' => array(
			'name' => __( 'よくある質問' ),
			'singular_name' => __( 'よくある質問' )
		),
		'public' => true,
		'has_archive' => true, //アーカイブページを持つ
		'menu_position' => 7, //管理画面のメニュー順位
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		)
	);
	register_taxonomy(
		'faq_cat', //タクソノミーの名前
		'faq', //使用するカスタム投稿タイプ名
		array(
			'hierarchical' => true, //trueだと親子関係が使用可能。falseで使用不可
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true
		)
	);

}

// 商品データ追加
register_post_type('prdct',
				   array(
					   'labels' => array(
						   'name' => __( '商品データ' ),
						   'singular_name' => __( '商品データ' ),
						   'add_new_item' => __( '新規商品データ追加' ),
						   'edit_item' => __( '商品データ編集' )
					   ),
					   'supports' => array('title'),
					   'public' => true,
					   'has_archive' => true,
					   'menu_position' => 9
				   )
				  );


	
/* カスタムタクソノミーを追加 */
add_action('init', 'register_post_cat_custom_post');
function register_post_cat_custom_post() {
	register_taxonomy(
		'area',
		'post',
		array(
			'hierarchical' => true,
			'label' => 'エリア',
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'singular_label' => 'エリア'
		)
	);
	register_taxonomy(
		'prdctcat',
		'prdct',
		array(
			'hierarchical' => true,
			'label' => '商品分類',
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'singular_label' => '商品分類'
		)
	);
}
	


/**
 * 
 */
function my_mwform_value($value, $name){
	if($name == "mitumori"){
		if(isset($_POST["init_mitumori"])){
			return $_POST["init_mitumori"];
		}
	}elseif($name == "men"){
		if(isset($_POST["men"]) && $_POST["men"] > 0){
			return $_POST["men"];
		}
	}elseif($name == "json_mitumori"){
		return $_POST["json_mitumori"];
	}elseif($name == "otona"){
		if(isset($_POST["men"]) && $_POST["men"] > 0){
			return $_POST["men"];
		}
	}elseif($name == "title"){
		if(isset($_POST["post_title"]) && $_POST["post_title"]){
			return $_POST["post_title"];
		}
	}
	return $value;
}
// 管理画面で作成したフォームの場合、フック名の後のフォーム識別子は「mw-wp-form-xxx」
add_filter( 'mwform_value_mw-wp-form-116', 'my_mwform_value', 10, 2 );

/**
 * 
 */
function add_otona($children, $atts){
	if($atts['name'] == 'otona'){


		$MW_WP_Form_Data = MW_WP_Form_Data::getInstance();
		$val = $MW_WP_Form_Data->get( 'men' );
		if(empty($val) && $_POST["men"]){
			$val = $_POST["men"];
		}
		//var_dump($val);
		if($val){
			$children2 = array();
			for($i=0;$i<=$val + 10;$i++){
				$children2[$i] = $i;
			}
			foreach($children as $k=>$v){
				$children2[$k] = $v;
			}
			$children = $children2;
		}
	//	var_dump($children); 
	}
	return $children;
}
add_filter( 'mwform_choices_mw-wp-form-116', 'add_otona', 10, 2 );
//*/
/**
 * カラム名を変更する
 * 
 * @param  array $columns カラム名の配列
 * @return array
 */
function my_mwform_inquiry_data_columns( $columns ) {
    // 基本的にカラム名はフォーム要素の name 属性の値となっている
    // 例えば fullname とすれば fullname
    // これを fullname の場合なら「お名前」に変更する
	$columns = array(
		'title' => 'プラン名',
	   'katakana' => 'フルネーム(カタカナ)',
	   'email' => 'メールアドレス',
	   'tel' => '電話番号',
	   'fax' => 'FAX',
	   'chise' => 'アップグリルのご利用',
	   'kaisai_day' => '開催予定日',
	   'kaisai_basyo' => '開催予定場所',
	   'kaisai_jikoku' => '開催予定時刻',
	   'otona' => '予定人数　大人',
	   'kobito' => '予定人数　小人',
	   'campany_name' => '会社名または団体名',
	   'saiji' => '催事内容',
	   'postcode' => '郵便番号',
	   'add' => '住所',
	   'add2' => '番地、建物名',
	   'yobo' => '要望・質問',
	   'mitumori' => '詳細',
	);



    return $columns;
}
add_filter( 'mwform_inquiry_data_columns-mwf_116', 'my_mwform_inquiry_data_columns' );

//概要（抜粋）の文字数調整
 function my_excerpt_length($length) {
 return 76;
 }
 add_filter('excerpt_length', 'my_excerpt_length');
//概要（抜粋）の省略文字
 function my_excerpt_more($more) {
 return '…';
 }
 add_filter('excerpt_more', 'my_excerpt_more');

 //スマホ表示分岐
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
