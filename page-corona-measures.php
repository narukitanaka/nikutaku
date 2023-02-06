<?php get_header(); ?>

<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

<div id="visualImgSub">
		<picture>
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/feature/feature.webp" alt="コロナウィルス感染症対策のメイン画像" width="1700" height="436"  type="image/webp">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/feature/feature.jpg" alt="コロナウィルス感染症対策のメイン画像" width="1700" height="436" >
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
		<h2 id="measures" class="mB50">にくたくのコロナウィルス感染症対策</h2>
		<h3 class="title03 mB20">対策①　スタッフのマスク着用</h3>
		<div class="designBox08 mB40">
			
			<div class="boxWrap">
				<p class="mB20">作業中、接客中にスタッフはマスクを着用します｡</p>
				
			</div>
		</div>

		<h3 class="title03 mB20">対策②　スタッフの手の消毒</h3>
		<div class="designBox09 mB40">
			
			<div class="boxWrap none_b">				
				<p class="mB20">スタッフは作業前に手の消毒を実施しております｡</p>
			</div>
		</div>

		<h3 class="title03 mB20">対策③　提供機材の消毒</h3>
		<div class="designBox08 mB40">
			
			<div class="boxWrap">
				<p class="mB20">準備、セッティング時に機材のアルコール消毒を行っております｡</p>
				
			</div>
		</div>

		<h3 class="title03 mB20">対策④　お客様への手の消毒のお願い</h3>
		<div class="designBox09 mB40">
			<div class="boxWrap none_b">				
				<p class="mB20">お客様ご到着時に手のアルコール消毒をご協力いただいております。</p>
				
			</div>
		</div>

		<h3 class="title03 mB20">対策⑤　使用備品は使い捨て</h3>
		<div class="designBox08 mB80">
			
			<div class="boxWrap">
				<p class="mB20">備品は使い捨てで使用しております｡</p>
				
			</div>
		</div>

		<div class="attention mt50 mb80">
			<h2 id="area_news" class="mb20">その他の対策事項</h2>
					<h3>バーベキュー利用の可能な会場では、下記の行政の指示を守っています。（5月23日現在）</h3>
				<ul>
					<li>・マスク会食のご案内</li>
					<li>・コンロ周辺で密にならないようご案内</li>
				</ul>

				<div class="youtube mT30 mB10">

				<span style="border: solid #b31a08 2px; padding: 10px;"><a href="<?php echo esc_url(home_url('')); ?>/bbq" style="font-size: 20px; font-weight: bold; color: #b31a08;">最新バーベキュー場 情報</a></span>
				</div>

		</div>


		<div class="youtube mB50 mT50">
			<h2 class="mb20">コロナウィルス感染症対策について<br />動画で解説</h2>
				<a class="pc_youtube" href="https://www.youtube.com/watch?v=QfN8tSxW7Vk&feature=emb_title" target="new" rel="noopener">
				<img src="//i.ytimg.com/vi/QfN8tSxW7Vk/mqdefault.jpg" alt="" width="100%"></a>

				<a class="sp_youtube" href="https://www.youtube.com/watch?v=QfN8tSxW7Vk&feature=emb_title" target="new" rel="noopener"><img  src="//i.ytimg.com/vi/QfN8tSxW7Vk/mqdefault.jpg" alt="" width="100%"></a>


		</div>

			<h2 class="title03 faq mB20">バーベキュー利用に関するQ&A</h2>
				        <div class="faqList mB30">
						<article class="faqListBox">
							<h3>バーベキューをする際、どんなことに気を付ければよいですか？</h3>
							<div class="Txt"><p>大声×　マスク会食○ 至近距離× 回し飲み×　イスの固定利用○<br />バーベキュー会場、公園のコロナ対策利用注意事項をお守りください。</p></div>
						</article>
						<article class="faqListBox">
							<h3>まん延防止等重点措置が発出された場合、キャンセルにできますか？</h3>
							<div class="Txt"><p>発出情報をもとにお早めにお電話にてご連絡ください。<br />
            				当社のキャンセル規約に基づき、下記のキャンセル料が発生します。<br />
							<span class="red"><strong>4日前まで：無料／3日前：30％／2日前：50％／前日：100％／当日：100％</strong></span></p></div>
						</article>
						<article class="faqListBox">
							<h3>密の回避を推奨されていますが、利用人数の制限はあるのでしょうか？</h3>
							<div class="Txt"><p>１テーブル２名以下でのご提供になります。</p></div>
						</article>
						<article class="faqListBox">
							<h3>３人以上の利用の場合、利用はできないのですか？</h3>
							<div class="Txt"><p>１テーブル２名以下のお席を複数ご準備させていただきます。<br />テーブル同士は、密を避けて一定の間隔を空けさせていただいております。</p></div>
						</article>
						<article class="faqListBox">
							<h3>利用予定だった公園が感染症対策で利用できなくなった場合、キャンセルにできますか？</h3>
							<div class="Txt"><p>禁止情報をもとにお早めにお電話にてご連絡ください。<br />
            				当社のキャンセル規約に基づき下記のキャンセル料が発生します。<br />
							<span class="red"><strong>4日前まで：無料／3日前：30％／2日前：50％／前日：100％／当日：100％</strong></span></div>
						</article>

						<div class="btnWrap01" style="margin-top: 30px;">
							<a href="/faq"><span>その他のよくある質問はこちら<i class="far fa-angle-right"></i></span></a>
						</div>

						</div>


		<?php include(TEMPLATEPATH.'/include/rental-pack.php'); ?>


		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>