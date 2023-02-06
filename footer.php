<div class="container">

<?php if ( is_page(array('contact','ask','plan','food-itself','equipment_rental','confirm','thanks')) ) :  ?>
<?php else: ?>
	<div id="infoBox" class="mB80">
		<p class="infoTitle">バーベキューに関することは<br />お気軽にご相談ください</p>
		<div class="innerBox">
			<div class="telBtn"><a href="tel:0665859488" onclick=”ga(‘send’,‘event’,‘click’,‘tel-cv’);” onclick="yahoo_report_conversion('tel:0665859488')"><i class="fal fa-phone-office"></i>06-6585-9488</a><span>受付時間/9:00～18:00 　年中無休</span></div>
			<div class="infoBtn"><a href="<?php echo esc_url(home_url('')); ?>/plan"><span><i class="fal fa-clipboard-list"></i>プランのご注文はこちら</span></a></div>
			<div class="contactBtn"><a href="<?php echo esc_url(home_url('')); ?>/ask"><span><i class="fal fa-envelope"></i>お問い合わせ</span></a></div>
		</div>
		<div class="picImg">
			<picture>
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/customer.webp" alt="コールセンター" width="280" height="280"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/common/customer.png" alt="コールセンター" width="280" height="280" >
			</picture>
		</div>
	</div>

	<?php if ( is_home() || is_front_page() ) : ?>
		<div id="snsBox" class="mB80">
		<div class="snsBtn fb">
			<div class="snsView"><a href="https://www.facebook.com/bbqnikutaku" target="new"><i class="fab fa-facebook"></i></a></div>
		</div>
		<div class="snsBtn inst">
		<div class="snsView"><a href="https://www.instagram.com/nikutaku2929?ref=badge" target="new"><i class="fab fa-instagram"></i></a></div>
		</div>
		<div class="snsBtn tw">
			<div class="snsView"><a href="https://twitter.com/nikutaku2929?ref_src=twsrc%5Etfw" target="new"><i class="fab fa-twitter-square"></i></a></div>
		</div>
		<div class="snsBtn line"><a href="https://line.me/R/ti/p/%40gya1712d" target="new">
			<picture>
			  <source srcset="/wp-content/themes/up01/images/common/line.webp" alt="LINEロゴ2" width="500" height="103"  type="image/webp">
			  <img src="/wp-content/themes/up01/images/common/line.png" alt="LINEロゴ2" width="500" height="103" >
			</picture>
		</a></div>
	</div>
	<?php endif; ?>
<!--
	<div id="snsBox" class="mB80">
		<div class="snsBtn fb">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="snsView"><a href="https://www.facebook.com/bbqnikutaku" target="new"><i class="fab fa-facebook"></i></a></div>
			<div class="fb-like" data-href="<?php echo esc_url(home_url('')); ?>/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
		</div>
		<div class="snsBtn inst">
		<div class="snsView"><a href="https://www.instagram.com/nikutaku2929?ref=badge" target="new"><i class="fab fa-instagram"></i></a></div>
			<div class="instBnr"><a href="https://www.instagram.com/nikutaku2929?ref=badge" target="new">
			<picture>
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/ig-badge-view.webp" alt="Instagram" width="137" height="24"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ig-badge-view.png" alt="Instagram" width="137" height="24" >
			</picture>
			</a></div>

		</div>
		<div class="snsBtn tw">
			<div class="snsView"><a href="https://twitter.com/nikutaku2929?ref_src=twsrc%5Etfw" target="new"><i class="fab fa-twitter-square"></i></a></div>
			<div class="tw-follow">
				<a href="https://twitter.com/nikutaku2929?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-lang="ja" data-show-count="false">Follow @nikutaku2929</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
		<div class="snsBtn line"><a href="https://line.me/R/ti/p/%40gya1712d" target="new">
			<picture>
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/line.webp" alt="LINEロゴ2" width="500" height="103"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/common/line.png" alt="LINEロゴ2" width="500" height="103" >
			</picture>
		</a></div>
	</div>
-->
</div>


<div id="pageTop"><a href="#top"><span>PageTop</span></a></div>
<div id="SPInfo" class="sp_img">
	<div id="contactBtn_sp"><a href="/plan"><i class="fal fa-clipboard"></i></a></div>
	<div id="telBtn_sp"><a href="tel:0665859488"onclick=”ga(‘send’,‘event’,‘click’,‘tel-cv’);” onclick="yahoo_report_conversion('tel:0665859488')"><i class="fal fa-phone-office"></i></a><span></span></div>
	<div id="line_contact_sp"><a href="https://line.me/R/ti/p/%40gya1712d" target="new">
		<picture>
	  		<source srcset="/wp-content/themes/up01/images/common/line2.webp" alt="LINEロゴ" width="30" height="30"  type="image/webp">
	  		<img src="/wp-content/themes/up01/images/common/line2.png" alt="LINEロゴ" width="30" height="30" />
		</picture>
	<i class="fal">
	<picture>
  		<source srcset="/wp-content/themes/up01/images/common/line2.webp" alt="LINEロゴ" width="30" height="30"  type="image/webp">
  		<img src="/wp-content/themes/up01/images/common/line2.png" alt="LINEロゴ" width="30" height="30" />
	</picture>
	</i></a></div>
</div>

<?php endif; ?>

<footer id="footerWrap">
	<?php if ( is_page(array('contact','ask','confirm','thanks')) ) :  ?>
	<?php else: ?>
	<div id="footerInfo">
		<div class="container">
			<?php wp_nav_menu( array(
				'theme_location'=>'footermenu', 
				'container'     =>'', 
				'menu_class'    =>'',
				'items_wrap'    =>'<ul>%3$s</ul>'));
			?>
		</div>
	</div>
	<?php endif; ?>
	<div id="copyright">Copyright (C) 2023 NIKUTAKU All Rights Reserved.</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>
  // スライダー
  var windowWidth = $(window).width();
  var windowSm = 1299;
  if (windowWidth <= windowSm) {
    $(function() {
      $('.planList').bxSlider({
        pagerCustom: '.custom-thumb',
        controls: false,
      });
      $('.bbqSlider').bxSlider({
        pagerCustom: '.custom-thumb',
        controls: true,
      });
      $('.areaList').bxSlider({
        pager: false,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        slideWidth: 300,
        slideMargin: 10,
      });
      $('.areaListSlider').bxSlider({
        minSlides: 2,
        maxSlides: 2,
        moveSlides: 1,
        slideWidth: 300,
        slideMargin: 10,
      });
      $('.columList').bxSlider({
        pager: false,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        slideWidth: 300,
        slideMargin: 10,
      });
    });
  } else {
    $(function() {
      $('.planList').bxSlider({
        pagerCustom: '.custom-thumb',
        controls: false,
      });
      $('.bbqSlider').bxSlider({
        pagerCustom: '.custom-thumb',
        controls: true,
      });
      $('.areaList').bxSlider({
        pager: false,
        minSlides: 1,
        maxSlides: 4,
        moveSlides: 1,
        slideWidth: 220,
        slideMargin: 10,
      });
      $('.columList').bxSlider({
        pager: false,
        minSlides: 1,
        maxSlides: 3,
        moveSlides: 1,
        slideWidth: 295,
        slideMargin: 10,
      });
    });
}
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/form.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bbq_confirm.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-custom.js" type="text/javascript"></script>

<script type='text/javascript' src='https://nikutaku.com/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='https://nikutaku.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>

<?php wp_footer(); ?>
</body>
<!--[if lt IE 9]>
<script src="https://www.ut-ec.co.jp/common/_lib/js/html5shiv.js"></script>
<script src="https://www.ut-ec.co.jp/common/js/ie.js"></script>
<![endif]-->

</html>
<!-- kagoya -->