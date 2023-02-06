<?php get_header(); ?>

<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

<div id="visualImgSub">
	<picture>
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/visual.webp" alt="ご利用方法のメイン画像" width="1700" height="436"  type="image/webp">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/visual.jpg" alt="ご利用方法のメイン画像" width="1700" height="436" >
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

		<h2 class="title03 step1 mB20">ご注文＆お問い合わせ<span>ご利用者様</span></h2>
		<div class="designBox08 mB40">
			<div class="imgPic">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/flow/img_01.webp" alt="ご注文＆お問い合わせ" width="340" height="270"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/flow/img_01.jpg" alt="ご注文＆お問い合わせ" width="340" height="270" >
				</picture>
			</div>
			<div class="boxWrap">
				<p class="mB20">まずはHPからご注文ください。お電話での注文も承っておりますのでお気軽にご連絡ください。
					<br />また、どのBBQ場がおすすめなのか？プランにオプションで追加したいなど、ご要望も弊社専任スタッフがお答えしますので、お気軽にご相談くださいませ。</p>
				<ul>
					<li><a href="<?php echo esc_url(home_url('')); ?>/faq#cancel">キャンセル料について</a></li>
					<li><a href="<?php echo esc_url(home_url('')); ?>/faq#faqAria">宅配エリアについて</a></li>
					<li><a href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">機材パックを選ぶ</a></li>
					<li><a href="<?php echo esc_url(home_url('')); ?>/plan/food-itself">食材付きパックを選ぶ</a></li>
				</ul>
			</div>
		</div>

		<h2 class="title03 step2 mB20">バーベキュー会場の場所取り＆設置</h2>
		<div class="designBox09 mB40">
			<div class="imgPic">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/flow/img_03.webp" alt="バーベキュー会場の場所取り＆設置" width="406" height="267"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/flow/img_03.jpg" alt="バーベキュー会場の場所取り＆設置" width="406" height="267" >
				</picture>
			</div>
			<div class="boxWrap none_b">
				<p>当日は、弊社スタッフが責任を持って会場の場所取りから設置まで対応いたします。幹事様の手間は全てこちらで代行いたしますのでご安心ください。会場によっては木の下でBBQがしたいなど要望に応えれる可能性がございますのでご相談ください。</p>
			</div>
		</div>

		<h2 class="title03 step3 mB20">BBQスタート<span>ご利用者様</span></h2>
		<div class="designBox08 mB40">
			<div class="imgPic">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/flow/img_04.webp" alt="BBQスタート" width="340" height="270"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/flow/img_04.jpg" alt="BBQスタート" width="340" height="270" >
				</picture>
			</div>
			<div class="boxWrap">
				<p class="mB20">オプション追加した場合は、開始時間までに会場へ来て頂き、受け渡しさせて頂きます。会場に到着しましたら、お電話ください。基本的にはBBQ会場入り口からご案内いたしますので、安心してお越しくださいませ。また、開始前にご利用料金を頂戴いたしますので、ご準備のほど宜しくお願いいたします。その後、一通りの説明をさせて頂き、お時間までバーベキューをお楽しみください。</p>
				<ul>
					<li><a href="<?php echo esc_url(home_url('')); ?>/faq#faqPay">お支払について</a></li>
				</ul>
			</div>
		</div>

		<h2 class="title03 step4 mB20">片付け＆撤去</h2>
		<div class="designBox09 mB80">
				<div class="imgPic">
					<picture>
					  <source srcset="<?php echo get_template_directory_uri(); ?>/images/flow/img_06.webp" alt="片付け＆撤去" width="407" height="265"  type="image/webp">
					  <img src="<?php echo get_template_directory_uri(); ?>/images/flow/img_06.jpg" alt="片付け＆撤去" width="407" height="265" >
					</picture>
				</div>
				<div class="boxWrap none_b">
				<p class="mB20">終了時刻になりましたら、弊社スタッフがお声がけさせて頂きます。その後、弊社スタッフが片付けから撤去まで代行いたしますので、お客様はそのままおかえり頂けます。ただし、ゴミの撤去料を1袋300円頂戴しておりますのでご了承ください。ご自身でゴミを持ち帰られる場合はゴミの撤去料は不要です。</p>
				<ul>
					<li><a href="<?php echo esc_url(home_url('')); ?>/faq#faqTrash">ゴミ処理について</a></li>
				</ul>
			</div>
		</div>

		<?php include(TEMPLATEPATH.'/include/rental-pack.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bbQ-best10.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>