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


// ????????????????????????????????????????????????????????????????????????
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

register_nav_menu('mainmenu', '?????????????????????');
register_nav_menu('footermenu', '????????????????????????');
register_nav_menu('sidemenu', '?????????????????????');

// ??????URL????????????????????????
function replaceImagePath($arg) {
$content = str_replace('"images/', '"' . get_bloginfo('template_directory') . '/images/', $arg);
return $content;
}
add_action('the_content', 'replaceImagePath');

// ????????????????????????
add_theme_support( 'post-thumbnails', array( 'post','colum','voice','bbq' ) );

// ??????????????????(?????????
add_action( 'init', 'create_post_type' );
function create_post_type() {
	// ?????????
	register_post_type( 'colum', //???????????????????????????????????????
		array(
			'labels' => array(
			'name' => __( '?????????????????????' ),
			'singular_name' => __( '?????????????????????' )
		),
		'public' => true,
		'has_archive' => true, //?????????????????????????????????
		'menu_position' => 4, //?????????????????????????????????
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		)
	);
	register_taxonomy(
		'colum_cat', //???????????????????????????
		'colum', //??????????????????????????????????????????
		array(
			'hierarchical' => true, //true????????????????????????????????????false???????????????
			'update_count_callback' => '_update_post_term_count',
			'label' => '???????????????',
			'singular_label' => '???????????????',
			'public' => true,
			'show_ui' => true
		)
	);

	// ???????????????
	register_post_type( 'voice', //???????????????????????????????????????
		array(
			'labels' => array(
			'name' => __( '??????????????????' ),
			'singular_name' => __( '??????????????????' )
		),
		'public' => true,
		'has_archive' => true, //?????????????????????????????????
		'menu_position' => 5, //?????????????????????????????????
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		)
	);
	register_taxonomy(
		'voice_cat', //???????????????????????????
		'voice', //??????????????????????????????????????????
		array(
			'hierarchical' => true, //true????????????????????????????????????false???????????????
			'update_count_callback' => '_update_post_term_count',
			'label' => '???????????????',
			'singular_label' => '???????????????',
			'public' => true,
			'show_ui' => true
		)
	);

	// ?????????BBQ?????????
	register_post_type( 'bbq', //???????????????????????????????????????
		array(
			'labels' => array(
			'name' => __( '?????????BBQ?????????' ),
			'singular_name' => __( '?????????BBQ?????????' )
		),
		'public' => true,
		'has_archive' => true, //?????????????????????????????????
		'menu_position' => 6, //?????????????????????????????????
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		'show_in_rest' => true,
	)
	);
	register_taxonomy(
		'bbq_cat', //???????????????????????????
		'bbq', //??????????????????????????????????????????
		array(
			'hierarchical' => true, //true????????????????????????????????????false???????????????
			'update_count_callback' => '_update_post_term_count',
			'label' => '???????????????',
			'singular_label' => '???????????????',
			'public' => true,
			'show_in_rest' => true, //???????????????

		)
	);
	register_taxonomy(
		'bbq_tag', //???????????????
		'bbq', //??????????????????????????????????????????
		array(
			'hierarchical' => false, //true????????????????????????????????????false???????????????
			'update_count_callback' => '_update_post_term_count',
			'label' => '??????',
			'singular_label' => '??????',
			'public' => true,
			'show_ui' => true
		)
	);

	// ????????????????????????
	register_post_type( 'faq', //???????????????????????????????????????
		array(
			'labels' => array(
			'name' => __( '??????????????????' ),
			'singular_name' => __( '??????????????????' )
		),
		'public' => true,
		'has_archive' => true, //?????????????????????????????????
		'menu_position' => 7, //?????????????????????????????????
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'comments'),
		)
	);
	register_taxonomy(
		'faq_cat', //???????????????????????????
		'faq', //??????????????????????????????????????????
		array(
			'hierarchical' => true, //true????????????????????????????????????false???????????????
			'update_count_callback' => '_update_post_term_count',
			'label' => '???????????????',
			'singular_label' => '???????????????',
			'public' => true,
			'show_ui' => true
		)
	);

}

// ?????????????????????
register_post_type('prdct',
				   array(
					   'labels' => array(
						   'name' => __( '???????????????' ),
						   'singular_name' => __( '???????????????' ),
						   'add_new_item' => __( '???????????????????????????' ),
						   'edit_item' => __( '?????????????????????' )
					   ),
					   'supports' => array('title'),
					   'public' => true,
					   'has_archive' => true,
					   'menu_position' => 9
				   )
				  );


	
/* ??????????????????????????????????????? */
add_action('init', 'register_post_cat_custom_post');
function register_post_cat_custom_post() {
	register_taxonomy(
		'area',
		'post',
		array(
			'hierarchical' => true,
			'label' => '?????????',
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'singular_label' => '?????????'
		)
	);
	register_taxonomy(
		'prdctcat',
		'prdct',
		array(
			'hierarchical' => true,
			'label' => '????????????',
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'singular_label' => '????????????'
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
// ???????????????????????????????????????????????????????????????????????????????????????????????????mw-wp-form-xxx???
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
 * ???????????????????????????
 * 
 * @param  array $columns ?????????????????????
 * @return array
 */
function my_mwform_inquiry_data_columns( $columns ) {
    // ???????????????????????????????????????????????? name ??????????????????????????????
    // ????????? fullname ???????????? fullname
    // ????????? fullname ?????????????????????????????????????????????
	$columns = array(
		'title' => '????????????',
	   'katakana' => '???????????????(????????????)',
	   'email' => '?????????????????????',
	   'tel' => '????????????',
	   'fax' => 'FAX',
	   'chise' => '??????????????????????????????',
	   'kaisai_day' => '???????????????',
	   'kaisai_basyo' => '??????????????????',
	   'kaisai_jikoku' => '??????????????????',
	   'otona' => '?????????????????????',
	   'kobito' => '?????????????????????',
	   'campany_name' => '???????????????????????????',
	   'saiji' => '????????????',
	   'postcode' => '????????????',
	   'add' => '??????',
	   'add2' => '??????????????????',
	   'yobo' => '???????????????',
	   'mitumori' => '??????',
	);



    return $columns;
}
add_filter( 'mwform_inquiry_data_columns-mwf_116', 'my_mwform_inquiry_data_columns' );

//????????????????????????????????????
 function my_excerpt_length($length) {
 return 76;
 }
 add_filter('excerpt_length', 'my_excerpt_length');
//?????????????????????????????????
 function my_excerpt_more($more) {
 return '???';
 }
 add_filter('excerpt_more', 'my_excerpt_more');

 //?????????????????????
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
