<?php get_header(); ?>
<!-- single-location.php -->
<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
    {
    "@type": "ListItem",
    "position": 1,
    "item": {
	"@id": "https://nikutaku.com/",
			"name": "西中島の格安BBQレンタル｜にくたく"
    }
  },
    {
    "@type": "ListItem",
    "position": 2,
    "item": {
      "@id": "https://nikutaku.com/bbq",
      "name": "大阪府BBQ会場"
		}
	},
    {
		"@type": "ListItem",
		"position": 3,
		"item": {
			"@id": "https://nikutaku.com<?php echo $_SERVER["REQUEST_URI"]; ?>",
			"name": "<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
      <?php the_title(); ?>
  <?php endwhile;?>
<?php endif; ?>"
		}
	}
      ]
}
</script>
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
 "url":"https://nikutaku.com/"
}
</script>

<div id="visualImgSub">
	<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/topics/34878824.jpg" /> -->
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
		<div class="bbqPost">
				<?php if( get_field('冒頭文') ) { ?>
					<?php the_field('冒頭文'); ?>
				<?php } ?>
		</div>
		<div class="bbqPage mB50">

			<div class="bbqLeft">
				<div class="bbqImg">
					<ul class="bbqSlider">
						<?php if( get_field('メイン画像') ) { ?><li><img src="<?php the_field('メイン画像'); ?>" /></li><?php } ?>
						<?php if( get_field('サブ画像01') ) { ?><li><img src="<?php the_field('サブ画像01'); ?>" /></li><?php } ?>
						<?php if( get_field('サブ画像02') ) { ?><li><img src="<?php the_field('サブ画像02'); ?>" /></li><?php } ?>
						<?php if( get_field('サブ画像03') ) { ?><li><img src="<?php the_field('サブ画像03'); ?>" /></li><?php } ?>
					</ul>
					<div class="custom-thumb bbqSliderThumb">
						<?php if( get_field('メイン画像') ) { ?><a data-slide-index="0" href=""><img src="<?php the_field('メイン画像'); ?>" /></a><?php } ?>
						<?php if( get_field('サブ画像01') ) { ?><a data-slide-index="1" href=""><img src="<?php the_field('サブ画像01'); ?>" /></a><?php } ?>
						<?php if( get_field('サブ画像02') ) { ?><a data-slide-index="2" href=""><img src="<?php the_field('サブ画像02'); ?>" /></a><?php } ?>
						<?php if( get_field('サブ画像03') ) { ?><a data-slide-index="3" href=""><img src="<?php the_field('サブ画像03'); ?>" /></a><?php } ?>
					</div>
				</div>
			</div>
			<div class="bbqRight">
				<?php if( get_field('フリー入力') ) { ?>
					<?php the_field('フリー入力'); ?>
				<?php } ?>
			</div>
		</div>
		<div class="bbqPost">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content('続きを読む'); ?>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</div>

		<section id="rental2">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title03.webp" alt="Rental Pack" width="600" height="50"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title03.png" alt="Rental Pack" width="600" height="50" >
				</picture>
			</div>
			<h2 class="title02 mB10">レンタルパック セット内容を紹介</h2>
			<p class="txtC mB30">できる限りお客様のご要望に合うよう、豊富なレンタルパックをご用意しております。
		<br />機材のみのレンタルでも良いですし、手ぶらで楽しみたい方は食材付きパックがおすすめです。</p>
			<div class="columnBox3 type1">
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><h3><a href="https://nikutaku.com/plan/food-itself">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.webp" alt="食材付きレンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.jpg" alt="食材付きレンタルパック" width="310" height="260" >
						</picture>
						<span>食材付きレンタルパック</span></a></h3>
					</div>
					<h4>【機材】</h4>
				　<ul>
						<li>・コンロ（網含む）</li>
						<li>・炭</li>
						<li>・長イス（2名で1脚）</li>
						<li>・テーブル</li>
						<li>・ドリンク用保冷ボックス（容量31L）</li>
						<li>・トング（肉用）	</li>
						<li>・お皿セット（皿、割り箸、コップ、おしぼり）</li>
						<li>・まな板・包丁セット	</li>
						<li>・ゴミ袋</li>
						<li class="red">※テント追加、一人掛けチェアーへ変更のオプションも可能です。</li>
					</ul>
					<h4>【食材】</h4>
					<ul>
						<li>・中落ちカルビ</lli>
						<li>・牛カルビ</li>
						<li>・豚バラ</li>
						<li>・鶏モモ肉</li>
						<li>・ウインナー</li>
						<li>・枝豆</li>
						<li>・焼きそば</li>
						<li>・焼肉のたれ</li>
						<li class="red">※肉量２倍にアップ、国産牛へ変更などのオプションも可能です。</li>
					</ul>	
					<div class="btnWrap01 mB50"><a href="<?php echo esc_url(home_url('')); ?>/plan/food-itself"><span>食材付きレンタルパック<br>ご注文はこちらから<i class="far fa-angle-right"></i></span></a></div>
				</div>

				
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><h3><a href="https://nikutaku.com/plan/equipment_rental">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.webp" alt="BBQ機材レンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.jpg" alt="BBQ機材レンタルパック" width="310" height="260" >
						</picture>
						<span>BBQ機材レンタルパック</span></a></h3>
					</div>
					<h4>【機材】</h4>
					<ul>
							<li>・コンロ（網含む）</li>
							<li>・炭</li>
							<li>・長イス（2名で1脚）</li>
							<li>・テーブル</li>
							<li>・ドリンク用保冷ボックス（容量31L）</li>
							<li>・トング（肉用）	</li>
							<li>・お皿セット（皿、割り箸、コップ、おしぼり）</li>
							<li>・まな板・包丁セット	</li>
							<li>・ゴミ袋</li>
							<li class="red">※テント追加、一人掛けチェアーへ変更のオプションも可能です。</li>
						</ul>
						<div class="btnWrap01"><a href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental"><span>機材レンタルパック<br>ご注文はこちらから<i class="far fa-angle-right"></i></span></a></div>
				</div>
			</div>
			
		</section>



		<?php include(TEMPLATEPATH.'/include/bbQ-best10.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>