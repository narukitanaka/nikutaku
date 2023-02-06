<?php get_header(); ?>

<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

<div id="visualImgSub">
	<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/feature.jpg" />
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

		<div class="designBox08 type1 mB40">
			<div class="boxWrap">
				<h2 class="feature_title feature_01 mB10">機材レンタル<br>業界最安値でご提供！</h2>
				<p class="mB20">BBQレンタル業界の最安値に挑戦しております！機材レンタルプランなら、BBQで必要な機材が揃ってお一人様1,210円~ご利用いただけます。</p>
				<a class="mB10" href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">→ 格安 機材レンタルパック</a><br />
				<a class="mB10" href="<?php echo esc_url(home_url('')); ?>/flow">→ にくたくのご利用の流れ</a>
			</div>
			<div class="imgPic">
			<picture>
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/feature/feature_01.webp" alt="機材レンタル業界最安値でご提供" width="410" height="300"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/feature/feature_01.jpg" alt="機材レンタル業界最安値でご提供" width="410" height="300" >
			</picture>
			</div>
		</div>

		<div class="feature_point">
			<h3>よくこんな団体様にご利用されます</h3>
			<ul>
				<li>・大学生のサークル新歓</li>
				<li>・会社の歓迎会/懇親会</li>
				<li>・複数の家族でバーベキューする方</li>
				<li>・会社の納涼会</li>
				<li>・婚活イベントなど</li>
			</ul>
		</div>

		<div class="designBox08 type2 mB40">
			<div class="imgPic">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/feature/feature_02.webp" alt="団体には嬉しい!20名以上でレンタル割引" width="410" height="300"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/feature/feature_02.jpg" alt="団体には嬉しい!20名以上でレンタル割引" width="410" height="300" >
				</picture>
			</div>
			<div class="boxWrap">
				<h2 class="feature_title feature_02 mB10">団体には嬉しい！<br>20名様以上で割引料金適用</h2>
				<p class="mB20">20名様以上の団体のお客様には、オトクな特別割引料金にて機材レンタルしていただけます。食材付きプランにも割引料金をご用意しておりますので団体のお客様に人気です！</p>
				<a class="mB10" href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">→ 機材レンタルパック　料金表</a>
			</div>
		</div>

		<div class="designBox08 type3 mB40">
			<div class="boxWrap">
				<h2 class="feature_title feature_03 mB10">新鮮な食材をご提供</h2>
				<p class="mB20">お客様からよく「こんなに安くて大丈夫なの？」と聞かれますが、ご安心ください。食品衛生管理者のもと新鮮な状態で食材を管理しておりますので、安心してお楽しみいただけます。食材付きレンタルプランはおひとり様200gのお肉です！食材はご自身で用意したい場合は、機材プランがおすすめです。</p>
				<a class="mB10" href="<?php echo esc_url(home_url('')); ?>/plan/food-itself">→ 食材付きレンタルパック　商品ページ</a><br />
				<a class="mB10" href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">→ 機材レンタルパック　商品ページ</a>
			</div>
			<div class="imgPic">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/feature/feature_03.webp" alt="新鮮な食材をご提供" width="410" height="300"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/feature/feature_03.jpg" alt="新鮮な食材をご提供" width="410" height="300" >
				</picture>
			</div>
		</div>

		<div class="designBox08 type4 mB40">
			<div class="imgPic">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/feature/feature_04.webp" alt="雨の日キャンセル無料" width="410" height="300"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/feature/feature_04.jpg" alt="雨の日キャンセル無料" width="410" height="300" >
				</picture>
			</div>
			<div class="boxWrap">
				<h2 class="feature_title feature_04 mB10">大阪エリア無料宅配<br>雨の日キャンセル無料</h2>
				<p class="mB20">大阪の淀川西中島地区を中心に大阪エリアは送料無料で対応してます。サービスが安い上に送料を無料で非常にお得なにくたくを是非ご利用ください！バーベキューは天候に左右されやすく、雨が降るとバーベキューができなくなってしまいます。
					<br />お客様のご要望から雨の日はキャンセル料を無料にさせて頂いております。</p>
				<a class="mB10" href="<?php echo esc_url(home_url('')); ?>/faq#cancel">→ キャンセルルールについて</a>
			</div>
		</div>

		<?php include(TEMPLATEPATH.'/include/rental-pack.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bbQ-best10.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>
