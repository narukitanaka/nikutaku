<?php
/*
Template Name: BBQレンタルパック
*/
?>


<?php get_header(); ?>

<meta name=”robots” content=”noindex” />

<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

<div id="visualImgSub">
	<img src="<?php echo get_template_directory_uri(); ?>/images/plan/feature.jpg" />
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

		<div class="imgPic mB30"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/main_hujin.jpg"></div>

		<h3 class="title03 mB20 area"><span>法人様オリジナルプランはここが違う</span></h3>



		<div class="columnBox3 designBox13 mB50">
			<div class="columnBoxInner boxWrap icon">
				<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/icon_01.svg" /></div>
				<p class="boxTitle">お好きな食材<br />ドリンクをご用意</p>
				<p>お客様のご要望に合わせて、食材のグレードアップやドリンク飲み放題など柔軟に対応しております。お気軽にご相談ください。</p>
			</div>
			<div class="columnBoxInner boxWrap icon">
				<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/icon_02.svg" /></div>
				<p class="boxTitle">屋台やステージなど<br />企画に合わせて<br />BBQ大会開催</p>
				<p>弊社はただのBBQ宅配会社ではございません。お客様のコンセプトに合わせて屋台や音響、ステージなどをご用意しその会が盛り上がるよう一緒に考えて提案いたします。</p>
			</div>
			<div class="columnBoxInner boxWrap icon">
				<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/icon_03.svg" /></div>
				<p class="boxTitle">法人様オリジナル<br />プランの実績多数！<br />最大1,500名</p>
				<p>弊社はただのBBQ宅配会社ではございません。お客様のコンセプトに合わせて屋台や音響、ステージなどをご用意しその会が盛り上がるよう一緒に考えて提案いたします。</p>
			</div>
		</div>


		<h3 class="title03 mB20 area"><span>法人様オリジナルプランの実績を一部ご紹介！</span></h3>

		<div class="designBox12 mB40">
			<h4 class="title04 mB20">大手建設会社様<br><span>参加者：1,550名</span></h4>
			<div class="left">
				<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/oote.jpg"></div>
			</div>
			<div class="right">
				<p>会社の福利厚生として毎年全社員でバーベキュー大会をしている会社様でした。毎年バーベキューを開催しているのですが、
					全社員の家族も含めて楽しんで頂けるようなイベントにしたいということでご相談をいただきました。<br><br></p>
				<p>にくたくとしては、社員や社員の家族まで楽しむことができ、尚且つ一体化が生まれるそんな企画にしたいと考えました。</p>
				<p>結果、ただバーベキューを開催するのではなく、子供たちが遊べるような的屋などを設置し、皆様が楽しめる企画にすることが出来ました。</p>
			</div>
		</div>

		<div class="designBox12 mB40">
			<h4 class="title04 mB20">大阪府立K高校様<br><span>参加者：852名</span></h4>
			<div class="left">
				<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/houjin_osaka.jpg"></div>
			</div>
			<div class="right">
				<p>大阪府立K高校様にて3年生800名のバーベキュー大会を運営させていただきました。にくたくとしては、家族まで楽しむことができた上に一体化が生まれるそんな企画になりました。<br><br></p>
				<p>ステージなども用意し、みなさま大いに盛り上がった会になりました。２０１６年から毎年恒例の会になっております。</p>
			</div>
		</div>

		<div class="designBox12 mB40">
			<h4 class="title04 mB20">大阪K大学様　入学式後の親睦会<br><span>3日間開催で合計参加者：1,200名</span></h4>
			<div class="left">
				<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/houjin_osaka01.jpg"></div>
			</div>
			<div class="right">
				<p>大阪K大学様でバーベキュー大会を実施させていただきました。</p>
				<p>3日間の大掛かりな開催でしたが合計で1000名規模のバーベキュー大会になりました。<br><br></p>
				<p>学生様という事で食事にボリュームが欲しい！というご要望を頂き、色々なプランをご提案させて頂き、内容を決定いたしました。</p>
				<p>学校様には大変ご満足頂き、毎年の行事としてご利用頂いております。</p>
			</div>
		</div>


		<h3 class="title03 mB20 area"><span>ご利用の流れ</span></h3>

		<ul class="List02 mB50">
			<li>
				<div class="step">
					<p>STEP<span>01</span></p>
				</div>
				<div class="boxWrap">
					<div class="Txt">
						<p class="boxTitle">企業様へのご提案</p>
						<p>弊社にて、バーベキューレクリエーションをご提案させて頂きます。関西圏・関東圏であれば弊社社員がお伺いし、ご提案させて頂きます。
						<span style="">※その他エリアのお客様は来社頂く形式になります。</span></p>
					</div>
					<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/img_step_01.jpg" /></div>
				</div>
			</li>
			<li></li>
			<li>
				<div class="step">
					<p>STEP<span>02</span></p>
				</div>
				<div class="boxWrap">
					<div class="Txt">
						<p class="boxTitle">企画内容の確定</p>
						<p>お客様の予算をお伺いし、弊社で企画内容を作成いたします。2社間(貴社、お客様)で最終的な企画内容を確定いたします。</p>
					</div>
					<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/img_step_02.jpg" /></div>
				</div>
			</li>
			<li></li>
			<li>
				<div class="step">
					<p>STEP<span>03</span></p>
				</div>
				<div class="boxWrap">
					<div class="Txt">
						<p class="boxTitle">見積書の提出</p>
						<p>企画内容を基に、見積り書を提出いたします。この段階で、企画内容の精査が可能ですので、お気軽にお申し付け下さいませ。</p>
					</div>
					<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/img_step_03.jpg" /></div>
				</div>
			</li>
			<li></li>
			<li>
				<div class="step">
					<p>STEP<span>04</span></p>
				</div>
				<div class="boxWrap">
					<div class="Txt">
						<p class="boxTitle">バーベキュー前日準備</p>
						<p>弊社スタッフが、バーベキュー会場にて前日準備いたします。器材や食材の運搬や設営まで全て弊社にて実施いたします。</p>
					</div>
					<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/img_step_04.jpg" /></div>
				</div>
			</li>
			<li></li>
			<li>
				<div class="step">
					<p>STEP<span>05</span></p>
				</div>
				<div class="boxWrap">
					<div class="Txt">
						<p class="boxTitle">バーベキュー開催</p>
						<p>バーベキューの当日運営は弊社スタッフにて実施いたします。
							<br />・食材、ドリンクの提供・器材の火付け・テントのメンテナンス・模擬店の運営・撤去、片付け…など</p>
					</div>
					<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/img_step_05.jpg" /></div>
				</div>
			</li>
			<li></li>
			<li>
				<div class="step">
					<p>STEP<span>06</span></p>
				</div>
				<div class="boxWrap">
					<div class="Txt">
						<p class="boxTitle">ご請求</p>
						<p>開催終了後、後日貴社にご請求させて頂きます。</p>
					</div>
					<div class="imgPic"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/img_step_06.jpg" /></div>
				</div>
			</li>
		</ul>

		<div class="imgPic mB30"><img src="<?php echo get_template_directory_uri(); ?>/images/houjinn/youbou.png"></div>





	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>
