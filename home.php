<?php get_header(); ?>

<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>

<div id="main">

	<div id="contentsBox">

		<div id="visualImg">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/visual_sp.webp" media="(max-width: 767px)" alt="メイン画像_sp" width="828" height="828"  type="image/webp">
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/visual_sp.jpg" media="(max-width: 767px)"  alt="メイン画像_sp" width="828" height="828"  type="image/png">
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/visual.webp" alt="メイン画像" width="970" height="444"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/visual.jpg" alt="メイン画像" width="970" height="444" >
				</picture>
		</div>
		<section id="ask" class="mB10">
			<h2 class="title02_top txtC mT50 mB30">「西中島でどこの業者が安いのかなぁ」<br class="br-sp">「安いけど全部揃っててほしいな」と、<br class="br-sp">お悩みの方<br>そのお悩み <span>『にくたく』</span> で<br class="br-sp">解決できます！</h2>
		</section>
		<section id="point" class="secBg">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title02.webp" alt="Osaka BBQ" width="600" height="50"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title02.png" alt="Osaka BBQ" width="600" height="50" >
				</picture>
			</div>
			<h2 class="title02_top mB20"><span>『にくたく』</span>は、機材一式のレンタルと<br>宅配、場所取り、設置、火起こし、<br class="br-sp">片付けまで全て代行します</h2>
			<p class="title02 mB30">にくたくは以下の4つの理由で人気です。</p>
			<div class="columnBox4_top type1 mB30">
				<div class="columnBoxInner designBox01">
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_01.webp" alt="BBQレンタル業界の最安値" width="235" height="205"  type="image/webp">
						  <img src="/<?php echo get_template_directory_uri(); ?>/images/top/img_01.jpg" alt="BBQレンタル業界の最安値" width="235" height="205" >
						</picture>
					</div>
					<h3 class="boxTitle">機材レンタル
						<br />業界最安値でご提供！</h3>
					<p class="mB10">BBQレンタル業界の最安値を実現！機材レンタルプランなら、BBQで必要な機材が揃ってお一人様1,210円～ご利用いただけます。</p>
					<a href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">機材レンタルパックについてもっと詳しく</a>
				</div>
				<div class="columnBoxInner designBox01">
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_02.webp" alt="団体には嬉しい!20名以上でレンタル割引" width="235" height="205"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_02.jpg" alt="団体には嬉しい!20名以上でレンタル割引" width="235" height="205" >
						</picture>
					</div>
					<h3 class="boxTitle">団体には嬉しい！
						<br />20名以上でレンタル割引</h3>
					<p class="mB10">さらに20名様以上の団体のお客様には、オトクな特別割引料金にて機材レンタルいただいけます！食材付きプランにも団体割引あり！</p>
					<a href="<?php echo esc_url(home_url('')); ?>/plan">お得なプランについてもっと詳しく</a>
				</div>
				<div class="columnBoxInner designBox01">
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_03.webp" alt="おひとり様200gのお肉を提供" width="235" height="205"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_03.jpg" alt="おひとり様200gのお肉を提供" width="235" height="205" >
						</picture>
					</div>
					<h3 class="boxTitle">食材付きレンタルには
						<br />1人200gのお肉を提供</h3>
					<p class="mB10">こんなに安いのに、お肉はおひとり様あたり、なんと200g付いているので安心！新鮮な食材をお届けします！</p>
					<a href="<?php echo esc_url(home_url('')); ?>/plan/food-itself">食材付きレンタルパックについてもっと詳しく</a>
				</div>
				<div class="columnBoxInner designBox01">
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_04.webp" alt="雨の日キャンセル無料" width="235" height="205"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_04.jpg" alt="雨の日キャンセル無料" width="235" height="205" >
						</picture>
					</div>
					<h3 class="boxTitle">大阪エリア無料宅配
						<br />雨の日キャンセル無料</h3>
					<p class="mB10">大阪の淀川西中島地区を中心に大阪エリアは2万円以上注文で送料無料で対応してます。サービスが安い上に送料が無料になる、非常にお得な　にくたく　を是非ご利用ください！</p>
					<a href="<?php echo esc_url(home_url('')); ?>/faq#cancel">キャンセルルールついてもっと詳しく</a>
				</div>
			</div>
			<div class="btnWrap01"><a href="<?php echo esc_url(home_url('')); ?>/feature"><span>にくたくの特徴についてもっと詳しく<i class="far fa-angle-right"></i></span></a></div>
		</section>


<section id="bnr">
	<div class="columnBox2">
		<div class="columnBoxInner">
			<div class="imgPic imgLink"><a href="<?php echo esc_url(home_url('')); ?>/plan">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_012.webp" alt="BBQレンタルパック" width="475" height="180"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_012.jpg" alt="BBQレンタルパック" width="475" height="180" >
				</picture>
			</a></div>
		</div>
		<div class="columnBoxInner">
			<div class="imgPic imgLink"><a href="<?php echo esc_url(home_url('')); ?>/flow">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_022.webp" alt="ご利用方法" width="475" height="180"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_022.jpg" alt="ご利用方法" width="475" height="180" >
				</picture>
			</a></div>
		</div>
		<div class="columnBoxInner">
			<div class="imgPic imgLink"><a href="<?php echo esc_url(home_url('')); ?>/area">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_03.webp" alt="送料&対応エリア" width="475" height="180"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_03.jpg" alt="送料&対応エリア" width="475" height="180" >
				</picture>
			</a></div>
		</div>
		<div class="columnBoxInner">
			<div class="imgPic imgLink"><a href="<?php echo esc_url(home_url('')); ?>/faq">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_04.webp" alt="よくある質問" width="475" height="180"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/common/bnr/bnr_04.jpg" alt="よくある質問" width="475" height="180" >
				</picture>
			</a></div>
		</div>
	</div>
</section>

		<section id="voice">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title05.webp" alt="User Voice" width="600" height="50"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title05.png" alt="User Voice" width="600" height="50" >
				</picture>
			</div>
			<h2 class="title02 mB30">ご利用の様子</h2>
			<div class="voiceList mB30">
				<div class="innerBox">
					<?php
						$args = array('post_type' => 'voice', 'posts_per_page' => '5');
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<article class="voiceListBox">
						<div class="imgPic"><?php the_post_thumbnail( $size, $attr ); ?></div>
						<div class="voiceArea">
							<h3 class="voiceTitle"><?php the_title(); ?></h3>
							<div class="voiceTxt"><?php the_content('続きを読む'); ?></div>
						</div>
					</article>
					<?php endforeach; wp_reset_postdata();?>

			</div>
		</section>

		<section id="concept">
			<div class="concept_box">
				<div class="concept_l">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo.webp" media="(max-width: 767px)" alt="にくたくのロゴ" width="146" height="86"  type="image/webp">
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" media="(max-width: 767px)"  alt="にくたくのロゴ" width="146" height="86"  type="image/png">
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo.webp" alt="にくたくのロゴ" width="146" height="86"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="にくたくのロゴ" width="146" height="86" >
							</picture>
				</div>
				<div class="concept_r">
				<h2 class="title02_top">にくたくとは</h2>
				<p>にくたくは、団体様にはお得なレンタル割引にて、業界最安値のレンタルプラン価格！手ぶらBBQのご要望のお客様には食材付きレンタルパック！をご用意。万が一の雨天のキャンセルにも柔軟にご対応！お客様に寄りそったサービスを目指すバーベキュー宅配業者です。</p>
				</div>
			</div>
				<div class="business_info">
					<div class="tel"><a href="tel:0665859488" onclick=”ga(‘send’,‘event’,‘click’,‘tel-cv’);” onclick="yahoo_report_conversion('tel:0665859488')"><i class="fas fa-phone"></i>06-6585-9488</a><span>受付時間 9:00～18:00 　年中無休</span></div>
				</div>
		</section>

		<div class="youtube mB70">

		<span style="border: solid #b31a08 2px; padding: 10px; margin-bottom: 30px;"><a href="<?php echo esc_url(home_url('')); ?>/corona-measures" style="font-size: 20px; font-weight: bold; color: #b31a08;">弊社のコロナ対策</a></span>
		</div>






		<section id="topicsWrap">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title01.webp" alt="2021 Topics" width="245" height="49"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title01.png" alt="2021 Topics" width="245" height="49" >
				</picture>
			</div>
			<h2 class="title02 mB30"><?php echo date('Y'); ?>年にくたく最新情報</h2>


			<div class="topicsList">
				<div class="innerBox">
					<?php
						$args = array('posts_per_page' => '10');
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<article class="topicsListBox">
						<p class="topicsDate"><?php the_time('Y/m/d') ?> </p> 
						<p class="topicsTitle">　<a href="<?php the_permalink(); ?>">　<?php the_title(); ?></a></p>
					</article>
					<?php endforeach; wp_reset_postdata();?>
				</div>
			</div>
		</section>

		<section id="rental">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title03.webp" alt="Rental Pack" width="600" height="50"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title03.png" alt="Rental Pack" width="600" height="50" >
				</picture>
			</div>
			<h2 class="title02 mB10">大人気BBQレンタルパック</h2>
			<p class="txtC mB30">できる限りお客様のご要望に合うよう、豊富なレンタルパックをご用意しております。
				<br />機材のみのレンタルでも良いですし、手ぶらで楽しみたい方は食材付きパックがおすすめです。</p>
			<div class="columnBox3 type1">
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><a href="<?php echo esc_url(home_url('')); ?>/plan/food-itself">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.webp" alt="食材付きレンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.jpg" alt="食材付きレンタルパック" width="310" height="260" >
						</picture>
					<span>食材付きレンタルパック<br />を選ぶ</span></a></div>
					<p>手ぶらでバーベキューがしたい！という方は食材付きレンタルパックからお選び下さい。</p>
				</div>
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><a href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.webp" alt="BBQ機材レンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.jpg" alt="BBQ機材レンタルパック" width="310" height="260" >
						</picture>
						<span>BBQ機材レンタルパック<br />を選ぶ</span></a></div>
					<p>BBQ機材レンタルパックは業界最安値！ご利用人数に応じて必要な機材が揃ったレンタルパック</p>
				</div>
			</div>

		</section>

		<section id="howto">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title04.webp" alt="How To Use" width="600" height="50"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title04.png" alt="How To Use" width="600" height="50" >
				</picture>
			</div>
			<h2 class="title02 mB10">初めてでも安心！ご利用方法</h2>
			<p class="txtC mB30">にくたくは、下記の流れでご利用いただけます</p>

			<div class="columnBox5 type1">

				<div class="columnBoxInner designBox05">
					<p class="boxStep"><span>Step</span>1</p>
					<h3 class="boxTitle">ご注文</h3>
					<p class="boxPosi"><span class="guest">お客様</span></p>
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_08.webp" alt="ご注文" width="190" height="160"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_08.jpg" alt="ご注文" width="190" height="160" >
						</picture>
					</div>
					<p class="flow_txt">お電話、HPにてお問合せください。(LINEも可)</p>
				</div>
				<div class="columnBoxInner designBox05">
					<p class="boxStep"><span>Step</span>2</p>
					<h3 class="boxTitle">配送</h3>
					<p class="boxPosi"><span class="shop">にくたく</span></p>
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_09.webp" alt="配達" width="190" height="160"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_09.jpg" alt="配達" width="190" height="160" >
						</picture>
					</div>
					<p class="flow_txt">会場まで配達いたします。</p>
				</div>
				<div class="columnBoxInner designBox05">
					<p class="boxStep"><span>Step</span>3</p>
					<h3 class="boxTitle">設置</h3>
					<p class="boxPosi"><span class="shop">にくたく</span></p>
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_10.webp" alt="設置" width="186" height="157"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_10.jpg" alt="設置" width="186" height="157" >
						</picture>
					</div>
					<p class="flow_txt">場所取り、機材の設置、火起こしまで行います。</p>
				</div>
				<div class="columnBoxInner designBox05">
					<p class="boxStep"><span>Step</span>4</p>
					<h3 class="boxTitle">BBQスタート</h3>
					<p class="boxPosi"><span class="guest">お客様</span></p>
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_11.webp" alt="BBQ スタート" width="190" height="160"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_11.jpg" alt="BBQ スタート" width="190" height="160" >
						</picture>
					</div>
					<p class="flow_txt">BBQをお楽しみください。(最大4時間制)</p>
				</div>
				<div class="columnBoxInner designBox05">
					<p class="boxStep"><span>Step</span>5</p>
					<h3 class="boxTitle">片付け</h3>
					<p class="boxPosi"><span class="shop">にくたく</span></p>
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_12.webp" alt="片付け" width="190" height="160"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_12.jpg" alt="片付け" width="190" height="160" >
						</picture>
					</div>
					<p class="flow_txt">炭の後始末、機材の片付けはすべて<br class="br-sp">にくたくが行います。<br />(ゴミの片付けはお客様)</p>
				</div>

			</div>

			<div class="btnWrap01" style="margin-top: 30px;">
				<a href="<?php echo esc_url(home_url('')); ?>/flow"><span>ご利用の流れについてもっと詳しく<i class="far fa-angle-right"></i></span></a>
			</div>

		</section>

		<section id="delivery">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title06.webp" alt="Delivery Area" width="600" height="50"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title06.png" alt="Delivery Area" width="600" height="50" >
				</picture>
			</div>
			<h2 class="title02 mB30">宅配エリアも拡大中！</h2>
			<div class="columnBox2 type2 mB30">
				<div class="columnBoxInner designBox03">
					<div class="imgPic">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_13.webp" alt="大阪MAP" width="225" height="297"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_13.jpg" alt="大阪MAP" width="225" height="297" >
						</picture>
					</div>
					<div class="txtArea">
						<h3 class="boxTitle">大阪エリア無料宅配！</h3>
						<p class="mB20"><span class="red">2万円（税込）以上ご注文の大阪エリアのお客様には、</span>大阪エリアは送料無料でご提供しております！その他近隣エリアも一部無料で対応しておりますので、関西でBBQをする方は、是非にくたくにお任せ下さい。</p>
						<p>※お客様からご希望頂いた配達先の公園やバーベキュー場はシーズンによっては利用できない場合がございますのでご確認お願いいたします｡</p>
					</div>
				</div>
				<div class="columnBoxInner designBox04 pc_img">
					<h3 class="boxTitle">こんな場所でご利用されます</h3>
					<div class="boxWrap">
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_14.webp" alt="バーベキュー場や公園" width="122" height="54"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_14.jpg" alt="バーベキュー場や公園" width="122" height="54" >
							</picture>
						</div>
						<p>バーベキュー場や公園</p>
					</div>
					<div class="boxWrap">
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_15.webp" alt="会社敷地で交流会や打ち上げ" width="122" height="54"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_15.jpg" alt="会社敷地で交流会や打ち上げ" width="122" height="54" >
							</picture>
						</div>
						<p>会社敷地で交流会や打ち上げ</p>
					</div>
					<div class="boxWrap">
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_16.webp" alt="ビーチバーベキュー" width="122" height="54"  type="image/webp">
							  <img src="/<?php echo get_template_directory_uri(); ?>/images/top/img_16.jpg" alt="ビーチバーベキュー" width="122" height="54" >
							</picture>
						</div>
						<p>ビーチバーベキュー</p>
					</div>
					<div class="boxWrap">
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_17.webp" alt="お花見や紅葉で楽しめる場所" width="122" height="54"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_17.jpg" alt="お花見や紅葉で楽しめる場所" width="122" height="54" >
							</picture>
						</div>
						<p>お花見や紅葉で楽しめる場所</p>
					</div>
					<div class="boxWrap">
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_18.webp" alt="ご自宅や町内会のイベント" width="122" height="54"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_18.jpg" alt="ご自宅や町内会のイベント" width="122" height="54" >
							</picture>
						</div>
						<p>ご自宅や町内会のイベント</p>
					</div>
				</div>
			</div>
			<div class="btnWrap01 mB30"><a href="<?php echo esc_url(home_url('')); ?>/area"><span>配送についてもっと詳しく<i class="far fa-angle-right"></i></span></a></div>

			<h2 class="title05 mB20">大阪の人気エリア<br class="br-sp">「淀川河川公園 西中島地区 BBQ場」の紹介</h2>
			<div class="designBox14 mB10">
				<div class="imgPic">
					<picture>
					  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_25.webp" alt="淀川西中島地区BBQ場" width="503" height="377"  type="image/webp">
					  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_25.jpg" alt="淀川西中島地区BBQ場" width="503" height="377" >
					</picture>
				</div>
				<p>　大阪で一番人気のBBQエリアと言えば、淀川河川公園西中島地区です！
					<br />　人気の理由は、なんと言ってもそのアクセスの良さです！
					<br />　西中島南方駅から徒歩10分以内の立地であります。また、130台収容できる無料駐車場もあるので、遠方の方でも絶好の立地です。そのほか近くにコンビニやスーパーなども多いことから、買い出しや追加の買い物などもしやすいです。まさにBBQをやるにはとても条件が揃っています。</p>
			</div>
			<p class="red mB30">※現在、新型コロナウィルス感染症対策により、利用者を制限するために、有料BBQ連絡協議会に認められた<a href="https://bbq-upgrill.com/plan/nishinakajima">アップグリル</a>（グループ会社）のようなBBQ宅配サービスの利用が必須になっております。<br />※現在、行政より、隣の席との間を1m以上空けて設置させていただいております。
				<br />西中島BBQ場のご利用の際はお気軽にご相談ください。</p>


				<div class="bbqPost">
				<h3 id="con3" class="location-point-top-ttl">おすすめポイントと注意点</h3>
				<div class="location-point-top">
				<h4 class="location-point">淀川河川公園 西中島地区のおすすめポイント</h4>
				<ul>
				<li>・使いやすくなった無料駐車場やゴミ捨て場、仮設トイレも設置</li>
				<li>・リニューアルされ綺麗になったBBQエリア</li>
				<li>・日本でもトップクラスの”神立地”BBQ場</li>
				</ul>
				</div>
				<div class="location-point-btm">
				<h4 class="location-point">淀川河川公園　西中島地区での注意点</h4>
				<ul>
				<li>・人気スポットなだけに入場制限がかかることがあります</li>
				<li>・BBQ場内に売店がありません</li>
				<li>・すぐに満車。駐車場の利用に注意してください</li>
				<li>・音楽が一切禁止です</li>
				</ul>
				</div>
			</div>
			<h3 class="title06">基本情報</h3>
			<figure class="wp-block-table">
				<table>
					<tr>
						<td>住所</td>
						<td>〒532-0011 大阪市淀川区西中島2丁目</td>
					</tr>
					<tr>
						<td>アクセス</td>
						<td>【電車の場合】<br />地下鉄御堂筋線「西中島南方駅」より徒歩7分<br />阪急「南方駅」より徒歩7分<br />【車の場合】<br />新御堂筋「西中島」降り口から直ぐ</td>
					</tr>
					<tr>
						<td>駐車場</td>
						<td>130台(無料)<br />繁忙期・ハイシーズンには臨時駐車場が100台分ほど開放されます。</td>
					</tr>
					<tr>
						<td>利用料金</td>
						<td>【有料期間】2022年4月22日～11月30日はおひとり様600円<br />上記以外の期間は利用無料</td>
					</tr>
					<tr>
						<td>利用予約</td>
						<td><a href="https://www.yodogawa-park.go.jp/bbq2022nisinaka/">会場予約必要</a>(2022年4月22日～11月30日のみ)<br />
					2022年4月13日より予約入力可能<br />にくたくご利用のお客様は代行します</td>
					</tr>
					<tr>
						<td>収容人数</td>
						<td>およそ2,200〜3,000人収容可能<br><span class="red">※新型コロナウィルス感染症対策により、事前予約制で、一時的に収容人数は制限されます。</span></td>
					</tr>
					<tr>
						<td>利用時間</td>
						<td>6月～8月・9:00～18:30<br />9月～5月・9:00～16:30<br />利用時間以外は駐車場の入出庫も不可となりますので、ご注意ください。</td>
					</tr>
					<tr>
						<td>ゴミ捨て場</td>
						<td>有料期間中はゴミ捨て場、炭捨て場あり<br>※有料期間外はゴミ捨て場が撤去されているためゴミは持ち帰るようにしましょう。</td>
					</tr>
					<tr>
						<td>トイレ</td>
						<td>約２０台</td>
					</tr>
					<tr>
						<td>水道</td>
						<td>あり</td>
					</tr>
					<tr>
						<td>施設内の<br class="br-sp">売店</td>
						<td>ありません</td>
					</tr>
					<tr>
						<td>機材<br class="br-sp">レンタル</td>
						<td>現地レンタルあり<br />※予約不可、数に限りがあるため、<br class="br-sp"><a href="https://nikutaku.com/plan">にくたく</a>での事前予約をオススメします。</td>
					</tr>
					<tr>
						<td>直火</td>
						<td>不可</td>
					</tr>
					<tr>
						<td>花火</td>
						<td>できません</td>
					</tr>
					<tr>
						<td>ペット入場</td>
						<td>可能ですが、必ず引き紐をつけて、糞の処分を徹底してください</td>
					</tr>
				</table>
			</figure>
			<div class="designBox15 mB30">
				<h3 class="title06 mB10">にくたく 	&amp;　西中島のおすすめポイント</h3>
				<ul class="areaListSlider">
					<li>
						<h4 class="red">綺麗な芝でバーベキュー</h4>
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/nikutaku_nisinakajima.webp" alt="西中島BBQ会場の様子" width="354" height="265"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/top/nikutaku_nisinakajima.jpg" alt="西中島BBQ会場の様子" width="354" height="265" >
							</picture>
						</div>
						<p>綺麗に整備されたバーベキューエリア。河川公園が管理する綺麗な芝の上でバーベキューができます。</p>
					</li>
					<li>
						<h4 class="red">満足のセット内容</h4>
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/nikutaku_plan.webp" alt="食材付きレンタルパック" width="354" height="265"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/top/nikutaku_plan.jpg" alt="食材付きレンタルパック" width="354" height="265" >
							</picture>
						</div>
						<p>バーベキュー機材はもちろん♪食材付きレンタルパックはおひとり様200gのお肉が付いています。</p>
					</li>
					<li>
						<h4 class="red">明るい親切なスタッフ</h4>
						<div class="imgPic">
							<picture>
							  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/nikutaku_staff.webp" alt="にくたくスタッフ" width="354" height="265"  type="image/webp">
							  <img src="<?php echo get_template_directory_uri(); ?>/images/top/inikutaku_staff.jpg" alt="にくたくスタッフ" width="354" height="265" >
							</picture>
						</div>
						<p>愛想のいい！元気なスタッフがご準備、ご提供いたします。</p>
					</li>
				</ul>
			</div>
			<h3 class="title06 mB20">ご利用の流れ<br class="br-sp"><span class="small">【有料期間（2022年4月22日～11月30日）の場合】</span></h3>
			<ul class="List03 mB30">
				<li>駐車場横にあるBBQ受付所で600円/人を支払います。</li>
				<li>代金と引き換えに渡されるリストバンドを手首に装着します。※リストバンドを装着している人は出入りが自由です。</li>
				<li>BBQ場内に入り次第、好みの場所を探します。
						<br /><span class="red">※現在、新型コロナウィルス感染症対策により、有料BBQ連絡協議会に認められた<a href="https://bbq-upgrill.com/plan/nishinakajima">アップグリル</a>（グループ会社）のようなBBQ宅配サービスの利用が必須になっております。
						<br />弊社ではアップグリル（グループ会社）が場所取りから撤去まで一括して行なっております。お気軽にご相談ください。</span></li>
				<li>思い切りBBQを楽しんでください（BBQ開始→BBQ終了）</li>
				<li>片付けの時間です。有料化に伴い、ゴミ捨て場と使用済み炭置き場が設置されているため、ゴミを現地に捨てて帰ることができます。</li>
				<li>お帰りの際には入場ゲートでリストバンドをカットして終了です！</li>
			</ul>
			<div class="btnWrap01"><a href="<?php echo esc_url(home_url('')); ?>/bbq/nishinakajima-bbqplace"><span>西中島会場についてもっと詳しく<i class="far fa-angle-right"></i></span></a></div>
		</section>
		<section id="rental2">
			<div class="title01">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title03.webp" alt="Rental Pack" width="600" height="50"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title03.png" alt="Rental Pack" width="600" height="50" >
				</picture>
			</div>
			<h2 class="title02 mB10">レンタルパック セット内容を紹介</h2>
			<div class="columnBox3 type1">
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><h3>
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.webp" alt="食材付きレンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.jpg" alt="食材付きレンタルパック" width="310" height="260" >
						</picture>
						<span>食材付きレンタルパック</span></h3>
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
					</ul>	
				</div>
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><h3>
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.webp" alt="BBQ機材レンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.jpg" alt="BBQ機材レンタルパック" width="310" height="260" >
						</picture>
						<span>BBQ機材レンタルパック</span></h3>
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
						</ul>
				</div>
			</div>
			<div class="btnWrap01"><a href="<?php echo esc_url(home_url('')); ?>/plan"><span>ご注文はこちらから<i class="far fa-angle-right"></i></span></a></div>
		</section>

		<section id="faq">
		<h2 class="title03 faq mB20">よくある質問</h2>
			<div class="mB30">
				<div class="faqList mB30">	
				    <article id="" class="faqListBox">
							<h3>人数が決まってないのですが、予約可能でしょうか？</h3>
							<div class="Txt">
								<p>はい。可能でございます。　開催が決定した時点でご連絡ください。<br>
								弊社は人数単位で料金を頂戴しておりませんので何名さまでもご利用頂けます。<br>
								ご注文内容の変更は、食材パックは3日前まで、機材パックは前日とさせていただいております。<br>
								予めご了承ください。</p>
							</div>
						</article>
				    <article id="" class="faqListBox">
							<h3>予約は何日前まで可能でしょうか？</h3>
							<div class="Txt">
								<p>ご予約は食材付きパックは開催の3日前、機材パックは前日12時までご予約いただけます。<br>
								繁忙期やスケジュールの関係上、対応できかねる場合がございますので、お早めにご予約お願いいたします。</p>
							</div>
						</article>
						<article id="" class="faqListBox">
							<h3>雨予報の場合のキャンセルについて</h3>
							<div class="Txt">
								<p>雨天によるキャンセルは、前日の正午までは無料になります。<br>
									それ以降の場合は、キャンセル料発生の対象となりますのでご了承ください。<br>						当日雨天による場所変更は、ご希望に沿うよう努力いたしますのでご相談ください(こちらから指定させていただく場合もございます)。</p>
							</div>
						</article>
						<article id="" class="faqListBox">
							<h3>利用時間を教えてください。</h3>
							<div class="Txt">
								<p>ご利用時間は最長４時間までご利用いただけます。<br>
								しかし、バーベキュー会場の閉鎖時間１時間前に終了とさせて頂いておりますので、あらかじめBBQ場の利用時間をご確認ください。</p>
							</div>
						</article>
					</div>
				</div>
				<div class="btnWrap01 mB50">
				<a href="<?php echo esc_url(home_url('')); ?>/faq"><span>よくある質問についてもっと詳しく<i class="far fa-angle-right"></i></span></a>
				</div>
			</section>
			



















	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

	
</div>

<?php get_footer(); ?>