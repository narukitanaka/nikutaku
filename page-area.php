<?php get_header(); ?>

<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

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
   "opens":"10:00",
   "closes":"19:00"
  }
 ],
 "image":"https://nikutaku.com/wp-content/themes/up01/images/top/visual_sp.jpg",
 "url":"https://nikutaku.com"
}
</script>

<div id="visualImgSub">
	<picture>
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/visual.webp" alt="宅配エリアのメイン画像" width="1700" height="436"  type="image/webp">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/visual.jpg" alt="宅配エリアのメイン画像" width="1700" height="436" >
	</picture>
	<div class="container">
		<h1 class="visualSubTitle"><?php the_title(); ?></h1>
		<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
	</div>
</div>

<div id="main">
	<div id="contentsBox">
		<div class="designBox07 mB50">
			<div class="imgPic">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/area/img_01.webp" alt="大阪MAP" width="400" height="400"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/area/img_01.jpg" alt="大阪MAP" width="400" height="400" >
				</picture>
			</div>
			<div class="boxWrap">
				<p class="boxTitle">大阪エリア無料宅配！</p>
				<p class="mB10"><span class="red">2万円（税込）以上ご注文の大阪エリアのお客様には、</span>送料無料でご提供しております！バーベキュー場はもちろんご自宅や会社までどこへでもお届けいたします。
					<br />※お客様からご希望頂いた配達先の公園やバーベキュー場はシーズンによっては、利用できない場合がございますのでご確認お願いいたします｡</p>
				<p class="area_map">大阪市、堺市、豊中市、高槻市、枚方市、東大阪市、吹田市、茨木市、岸和田市、寝屋川市、八尾市、池田市、箕面市、豊能郡、能勢町、豊能町、摂津市、三島郡、島本町、泉大津市、和泉市、高石市、泉北郡、忠岡町、貝塚市、泉佐野市、泉南市、阪南市、泉南郡、熊取町、田尻町、岬町、守口市、大東市、門真市、四條畷市、交野市、柏原市、富田林市、河内長野市、松原市、羽曳野市、藤井寺市、大阪狭山市、南河内郡、太子町、河南町、千早赤阪村</p>
			</div>
		</div>
		<div class="nikutaku_column2">
			<h2 class="visualSubTitle">その他の宅配エリア</h2>
			<div class="nikutaku_column2-box">
				<div class="nikutaku_box">
					<p class="title mb10">兵庫県エリア</p>
					<p class="txt">芦屋市・西宮市・伊丹市・尼崎市・神戸市：3,300円～
						<br>明石市より西側：11,000円～<br>淡路島(岩屋)：11,000円～</p>
				</div>
			</div>
			<div class="nikutaku_column2-box">
				<div class="nikutaku_box">
					<p class="title mb10 ">和歌山県エリア</p>
					<p class="txt">和歌山県北部（和歌山市・岩出市・紀の川市）：3,300円～
						　<br>その他のエリア：要相談</p>
				</div>
			</div>
		</div>
		<div class="nikutaku_column2">
			<div class="nikutaku_column2-box">
				<div class="nikutaku_box">
					<p class="title mb10">京都エリア</p>
					<p class="txt">亀岡市・京都市北部・京都市南部より南側全域：3,000円～ 
						<br>南丹市より北側：11,000円～</p>
				</div>
			</div>
			<div class="nikutaku_column2-box">
				<div class="nikutaku_box">
					<p class="title mb10">滋賀エリア</p>
					<p class="txt">全域：3,300円～</p>
				</div>
			</div>
		</div>
		<div class="nikutaku_column2">
			<div class="nikutaku_column2-box">
				<div class="nikutaku_box">
					<p class="title mb10">奈良エリア</p>
					<p class="txt">全域：3,300円～</p>
				</div>
			</div>
		</div>
		<h2 class="title03 area mB20">【<?php echo date('Y'); ?>年最新】大阪BBQ場人気スポット！</h2>
		<div class="columnBox3 type2 txtL mB80">
			<?php query_posts( array(
			    'post_type' => 'bbq', //カスタム投稿名
			    'taxonomy' => 'bbq_tag',
			    'term' => 'popular-2019',
			    'posts_per_page' => 6 //表示件数（ -1 = 全件 ）
			)); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="columnBoxInner designBox06">
				<h3><?php the_title(); ?></h3>
				<div class="imgPic imgLink">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( $size, $attr ); ?>
					</a>
				</div>
				<p><?php the_excerpt(); ?></p>
				<div class="btnWrap01">
					<a href="<?php the_permalink(); ?>"><span>詳しく見る<i class="far fa-angle-right"></i></span></a>
				</div>
			</article>
			<?php endwhile; else: ?>
			<p>記事がありません。</p>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
		<div class="imgPic imgLink mB80">
			<a href="<?php echo esc_url(home_url('')); ?>/bbq">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/area/bnr_01.webp" alt="大阪のバーベキュー場紹介のバナー" width="970" height="200"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/area/bnr_01.jpg" alt="大阪のバーベキュー場紹介のバナー" width="970" height="200" >
				</picture>
			</a>
		</div>
		<?php include(TEMPLATEPATH.'/include/rental-pack.php'); ?>
		<?php include(TEMPLATEPATH.'/include/bbQ-best10.php'); ?>
		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>
	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>