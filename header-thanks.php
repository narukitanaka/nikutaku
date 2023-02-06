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
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" >
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_ext.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Cabin:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
<script defer src="/static/fontawesome/fontawesome-all.js"></script>
<?php wp_head(); ?>


<!-- Global site tag (gtag.js) - Google Ads: 760722361 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-760722361"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-760722361');
</script>

<!-- Yahoo Code for your Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var yahoo_conversion_id = 1001067738;
    var yahoo_conversion_label = "7mlbCIvZvJcBEOih2ecC";
    var yahoo_conversion_value = 0;
    /* ]]> */
</script>
<script type="text/javascript" src="https://s.yimg.jp/images/listing/tool/cv/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://b91.yahoo.co.jp/pagead/conversion/1001067738/?value=0&label=7mlbCIvZvJcBEOih2ecC&guid=ON&script=0&disvt=true"/>
    </div>
</noscript>

<!-- Event snippet for CV conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-760722361/82CyCM-PxZcBELnn3uoC',
      'transaction_id': ''
  });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-75720595-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-75720595-5');
</script>

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
			<div id="headerInfo">
				<div id="telBtn">
<a href="tel:0665859488"onclick=”ga(‘send’,‘event’,‘click’,‘tel-cv’);” onclick="yahoo_report_conversion('tel:0665859488')"><i class="fal fa-phone-office"></i>06-6585-9488</a><span>受付時間 9:00～18:00 　年中無休</span></div>
				<div id="contactBtn">24時間受付中<a href="<?php echo esc_url(home_url('')); ?>/ask"><i class="fal fa-envelope"></i>お問い合わせ</a></div>
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