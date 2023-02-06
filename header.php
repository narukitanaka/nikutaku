<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php bloginfo('name');
if ( is_single() ) {
	_e('&raquo; Blog Archive', 'kubrick');
}
wp_title(); ?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

<?php if ( is_post_type_archive('bbq') ) :  ?>
  <meta name="description" content="大阪のバーベキュー会場を紹介しております。公園の基本情報やおすすめポイントを分かりやすくまとめました。バーベキューをしたいけど場所がわからない、どこでするか悩んでいる方はご参考にしてください。">
  <meta name="keywords" content="大阪,バーベキュー,会場,公園" />
<?php elseif ( is_post_type_archive('colum') ) :  ?>
  <meta name="description" content="バーベキューの機材や食材についての、おすすめ情報を更新しています。現場のバーベキューのプロが役立つ記事を掲載中！知らなかったあんな事やこんな事があるかもしれません。">
  <meta name="keywords" content="大阪,バーベキュー,おすすめ情報,記事,手ぶら" />
<?php elseif ( is_post_type_archive('faq') ) :  ?>
  <meta name="description" content="注文方法、キャンセルなどのよくある質問についてご案内しております。手ぶら宅配バーベキューを知らない方にも分かりやすくまとめています。お電話でも、ぜひ、ご質問ください。">
  <meta name="keywords" content="大阪,宅配,バーベキュー,質問,手ぶら" />
<?php else: ?>
<?php endif; ?>
<?php if ( is_home() || is_front_page() ) : ?>
<meta name="description"  content="西中島の格安BBQ宅配なら、にくたくにお任せください。大人数でバーベキューするほどお得な、お一人様1,210円~の機材レンタルプランと食材付きレンタルプランもご用意しております。現地へは手ぶらでOK。場所取りから設置片付けまで行なっております。大阪でバーベキューする際には是非ご利用ください。" />
<meta name="keywords"  content="西中島,バーベキュー,レンタル,大阪,BBQ,送料無料,格安,手ぶら" />
<link rel="canonical" href="https://nikutaku.com">

<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/webfonts/fa-regular-400.ttf" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/webfonts/fa-light-300.ttf" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/webfonts/fa-brands-400.ttf" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/webfonts/fa-light-300.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css" type="text/css" />

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_ext.css" type="text/css" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/common/apple-touch-icon-180x180.png">
<?php else: ?>
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_ext.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Cabin:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<?php endif; ?>

<link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet">

<?php wp_head(); ?>
<?php if ( is_page('contact') ) :  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<?php else: ?>
<?php endif; ?>
<?php if ( is_page('bbq') ) :  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>
<?php endif; ?>


<!-- Global site tag (gtag.js) - Google Ads: 760722361 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-760722361"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-760722361');
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SET8EEFRJ4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SET8EEFRJ4');
</script>


<?php if ( is_home() || is_front_page() ) : ?>
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [ {
		"@type": "ListItem",
		"position": 1,
		"item": {
			"@id": "https://nikutaku.com/",
			"name": "西中島の格安BBQレンタル｜にくたく"
		}
	}


 ]
}</script>

<script type="application/ld+json">
{
 "@context":"http://schema.org",
 "@type":"LocalBusiness",
 "name":"にくたく",
 "address":{
  "@type":"PostalAddress",
  "streetAddress":"立売堀2-4-5　Dgビルなにわ筋 6F",
  "addressLocality":"大阪市西区",
  "addressRegion":"大阪府",
  "postalCode":"550-0012",
  "addressCountry":"JP"
 },
 "geo":{
  "@type":"GeoCoordinates",
  "latitude":"34.678941",
  "longitude":"135.49288"
 },
 "telephone":"+81-6-6585-9488",
 "openingHoursSpecification":[
  {
   "@type":"OpeningHoursSpecification",
   "dayOfWeek":[
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday"
   ],
   "opens":"9:00",
   "closes":"18:00"
  }
 ],
 "image":"https://nikutaku.com/wp-content/themes/up01/images/top/visual_sp.jpg",
 "url":"https://nikutaku.com"
}
</script>
<?php endif; ?>
</head>
<body id="top">

<div id="MenuBk"></div>
<header id="headerWrap">
	<div class="headerMenuWrap">
		<div class="leftWrap">
			<?php $description = get_bloginfo( 'description', 'display' ); ?>
			<p id="topMes"><?php echo $description; ?></p>
			<div id="openBtn"><i class="fal fa-bars"></i></div>
			<div id="logo"><a href="<?php echo esc_url(home_url('')); ?>" rel="home">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo.webp" alt="にくたくのロゴ" width="146" height="86"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="にくたくのロゴ" width="146" height="86" >
				</picture>
			</a></div>
		</div>
		<div class="rightWrap">

			<div id="headerInfo" class="pc_img">
				<div id="telBtn">
					<a href="tel:0665859488"onclick=”ga(‘send’,‘event’,‘click’,‘tel-cv’);” onclick="yahoo_report_conversion('tel:0665859488')"><i class="fal fa-phone-office"></i>06-6585-9488</a><span>受付時間 9:00～18:00 　年中無休</span></div>
				<div id="contactBtn">24時間受付中<a href="<?php echo esc_url(home_url('')); ?>/ask"><i class="fal fa-envelope"></i>お問い合わせ</a></div>
				<div id="line_contact"><a href="https://line.me/R/ti/p/%40gya1712d" target="new">
				<picture>
				  		<source srcset="<?php echo get_template_directory_uri(); ?>/images/common/line2.webp" alt="LINEロゴ" width="30" height="30"  type="image/webp">
				  		<img src="<?php echo get_template_directory_uri(); ?>/images/common/line2.png" alt="LINEロゴ" width="30" height="30" />
					</picture>
				<i class="fal">
				<picture>
			  		<source srcset="<?php echo get_template_directory_uri(); ?>/images/common/line2.webp" alt="LINEロゴ" width="30" height="30"  type="image/webp">
			  		<img src="<?php echo get_template_directory_uri(); ?>/images/common/line2.png" alt="LINEロゴ" width="30" height="30" />
				</picture>
			</i>LINEで見積</a></div>
			</div>
			<div id="headerInfo2" class="sp_img">
			<div id="contactBtn2">24時間受付中<a href="/ask"><i class="fal fa-envelope"></i>お問い合わせ</a></div>
			</div>
			<nav id="spMenu">
				<div id="closeBtn" class="menuClose"><i class="fal fa-times-square"></i></div>
				<?php wp_nav_menu( array(
					'theme_location'=>'mainmenu',
					'container'     =>'',
					'menu_class'    =>'',
					'items_wrap'    =>'<ul class="navMenu">%3$s</ul>'));
				?>
			</nav>
		</div>
	</div>
</header>
