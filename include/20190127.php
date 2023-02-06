<?php

	$p = get_post();
	$planId = get_post_meta($p->ID, "product_id", true);
	$kidsPlanId = get_post_meta($p->ID, "product_kids_id", true);
	$toritukePlanId = get_post_meta($p->ID, "product_torituke_id", true);
//	var_dump($p);
?>
<div id="estimate" class="Bg08">

	<form action="<?php echo site_url() ?>/temp-form.php" target="price_table" method="post" class="self mB20" id="selfplan">
			
		<div class="Bg01 mB50">
			<h2 class="imgPic mB20"><img src="<?php echo get_template_directory_uri(); ?>/images/common/estimate/title_01.png" alt="人数別の最適料金プランをお調べします" /></h2>
			<input type="hidden" name="post_title" value="<?php echo esc_html($p->post_title) ?>">
			<div class="columnBox2">
				<div class="columnBoxInner">
					<div class="designBox10 mB20">
						<p class="boxStep mB10">Step01</p>
						<p class="boxTitle mB30">人数を数字で入力してください(半角) </p>
						<table class="mB20">
							<tr>
								<th>大人</th>
								<th>小人</th>
							</tr>
							<tr>
								<td><input class="plist_cnt" type="number" id="pcnt-<?php echo $planId ?>" name="cnt[<?php echo $planId ?>]" step="1" /><span>人</span></td>
								<td><input class="plist_cnt" type="number" id="pcnt-<?php echo $kidsPlanId ?>" name="cnt[<?php echo $kidsPlanId ?>]" step="1" /><span>人</td>
							</tr>
						</table>
					<input type="hidden" name="pid[]" value="<?php echo $planId ?>">
					<input type="hidden" name="pid[]" value="<?php echo $kidsPlanId ?>">
						
						<?php if($toritukePlanId){ ?>
						<table>
							<tr>
								<th>取り付け作業</th>
								<td>
						<label for="pcnt-<?php echo $toritukePlanId ?>_1"><input class="plist_radio" id="pcnt-<?php echo $toritukePlanId ?>_1" type="radio" name="cnt[<?php echo $toritukePlanId ?>]" value="1">する</label>
								</td>
								<td>
						<label for="pcnt-<?php echo $toritukePlanId ?>_0"><input class="plist_radio" id="pcnt-<?php echo $toritukePlanId ?>_0" type="radio" name="cnt[<?php echo $toritukePlanId ?>]" value="0">しない</label>
								</td>
							</tr>
						</table>

						<table class="mB20">
							<tr>
								<th>オプションテント</th>
							</tr>
							<tr>
								<td><input class="plist_cnt" type="number" id="pcnt-<?php echo $planId ?>" name="cnt[<?php echo $planId ?>]" step="1" /><span>人</span></td>
							</tr>
						</table>
					    <input type="hidden" name="pid[]" value="<?php echo $toritukePlanId ?>">
						<?php } ?>
					</div>


	
<div class="designBox10">
						<p class="boxStep mB10">Step02</p>
						<p class="boxTitle mB30">オプションメニュー(追加してカスタマイズ)</p>
			
						<dl class="accordion prodct_list">
							<?php
							$catargs = array(
								'taxonomy' => 'prdctcat',
								'child_of' => '21',
								'orderby' => 'term_order'
							);
							$catlists = get_categories($catargs);
							$i = 0;
							foreach($catlists as $cat):
							?>
							<dt><?php echo $cat->name; ?></dt>

							<dd>
								<div class="cont">
									<?php
									$args = array(
										'post_type' => 'prdct',
										'prdctcat' => $cat->slug,
										'orderby' => 'term_order',
										'posts_per_page' => -1
									);
									$my_posts = get_posts($args);
									if($my_posts){ $ii = 0;
										foreach($my_posts as $post):
											setup_postdata( $post );
											$HL = floor($ii/4);
											?>


											<div class="prodct">
												<div class="thumb">
													<?php
													$pict_id = get_field('画像');
													$thumb = wp_get_attachment_image_src($pict_id, 'item_thumb');
													?>
													<img src="<?php echo $thumb[0]; ?>" alt="<?php the_title(); ?>">
												</div>
												<div class="ttl heightLine-ttl<?php echo $HL.$i; ?>"><?php the_title(); ?></div>
												<div class="txt heightLine-tx<?php echo $HL.$i; ?>"><?php the_field('説明'); ?></div>
												<div class="price heightLine-price<?php echo $HL.$i; ?>"><?php the_field('単位'); ?> <span class="renum"><?php the_field('価格'); ?></span>円</div>
												<div class="count">
													<div class="hd">数量</div>
													<input type="hidden" name="pid[]" value="<?php echo $post->ID; ?>">
												<div class="input"><input type="number" name="cnt[<?php echo $post->ID; ?>]" value="0" step="1" id="pcnt-<?php echo $post->ID; ?>" class="plist_cnt"></div>
												</div>

											</div>

											<?php $ii++;
										endforeach;
									}else{ ?>

										<div class="prodct">
											<div class="thumb">
												<img src="<?php echo $thumb[0]; ?>">
											</div>
											<div class="ttl">表示できる記事がありません</div>
											<div class="tx">ただいま準備中です。しばらくお待ち下さい。</div>
											<div class="price">0000円</div>
										</div>
									<?php } wp_reset_postdata(); ?>
								</div>
							</dd>
							<?php if($cat->description){echo $cat->description;}; ?>
							<?php $i++; endforeach; ?>
							<input type="hidden" name="member" class="men" value="" id="member">
						</dl>
					</div>

				</div>

				<div class="columnBoxInner">
					<iframe name="price_table" id="price_table" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" style="height:0;width:100%;margin:0;padding:0;border:0;"></iframe>
				</div>

			</div>


		</div>
	</form>

</div>


<script>
jQuery(function($){

	function adjust_frame_css(F){
		if(document.getElementById(F)) {
			var myF = document.getElementById(F);
			var myC = myF.contentWindow.document.documentElement;
			var myH = 0;
			if(document.all) {
			myH  = myC.scrollHeight;
			} else {
			myH = myC.offsetHeight;
			}
			if(myH > 0){
				myH = myH + 200;
				myF.style.height = myH+"px";
			}
			console.log(myH);
		}
	}


	$(".plist_cnt").on("change",function(){
        console.log("onChange", this);
		num_var = $(this).val();
		num_var = num_var.replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
		return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
		});
		$(this).val(num_var);
		if(!num_var.match(/^[0-9]+$/)){
			alert('数量は半角数字を入力してください');
			$(this).val(1);
		}
		$("#selfplan").submit();
        adjust_frame_css("price_table");
        
	});
	$('.plist_radio').on("click",function(){
		$('#selfplan').submit();
	});

	$('a[href^=#].smt, .smt a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});

    adjust_frame_css("price_table");
    setInterval(function(){
		adjust_frame_css("price_table");
	}, 3000);
})
</script>


<?php /*
<div class="Bg01 mB50">
	<h2 class="imgPic mB20"><img src="<?php echo get_template_directory_uri(); ?>/images/common/estimate/title_01.png" alt="人数別の最適料金プランをお調べします" /></h2>
	<div class="columnBox2">
		<div class="columnBoxInner">
			<div class="designBox10 mB20">
				<p class="boxStep mB10">Step01</p>
				<p class="boxTitle mB30">人数を数字で入力してください(半角) </p>
				<table>
					<tr>
						<th>大人</th>
						<th>小人</th>
					</tr>
					<tr>
						<td><input type="number" name="" step="1" /><span>人</span></td>
						<td><input type="number" name="" step="1" /><span>人</span></td>
					</tr>
				</table>
			</div>
			<div class="designBox10">
				<p class="boxStep mB10">Step02</p>
				<p class="boxTitle mB30">オプションメニュー(追加してカスタマイズ)</p>
				<dl class="accordion">
				    <dt>機材をセレクト</dt>
				    <dd>サンプルテキスト</dd>
				    <dt>食材をセレクト</dt>
				    <dd>サンプルテキスト</dd>
				    <dt>アラカルト・アクティビティ</dt>
				    <dd>サンプルテキスト</dd>
				    <dt>ドリンクメニューをセレクト</dt>
				    <dd>サンプルテキスト</dd>
				</dl>
			</div>
		</div>
		<div class="columnBoxInner">
			<div class="designBox11">
				<p class="boxTitle">料金お見積りはこちら</p>

<table class="Tbl02 mB20">
<th>項目</th>
<th>金額</th>
<th>取り付け作業選択</th>
					<tr>
						<td>取り付け作業</td>
						<td class="txtR">1,700円</td>
<td class="txtR"><p><label for="siryo_dw1"><input id="siryo_dw1" type="radio" name="siryo_dw" value="1"><span>する</span></label></p></td>
<td class="txtR"><p><label for="siryo_dw2"><input id="siryo_dw2" type="radio" name="siryo_dw" value="2"><span>しない</span></label></p></td>
					</tr>
</table>

				<table class="Tbl02 mB20">
					<tr>
						<th>項目</th>
						<th>金額</th>
						<th>数量</th>
					</tr>
					
					<tr>
						<td>飲み放題プラン</td>
						<td class="txtR">5,000円</td>
						<td colspan="2" class="txtC">2</td>
					</tr>
					<tr>
						<td>キッズプラン</td>
						<td class="txtR">5,000円</td>
						<td colspan="2" class="txtC">2</td>
					</tr>
					<tr>
						<th class="gray">小計</th>
						<td colspan="2" class="txtR">0円</td>
					</tr>
					<tr>
						<th class="gray">消費税</th>
						<td colspan="2" class="txtR">0円</td>
					</tr>
					<tr>
						<th class="gray">合計金額</th>
						<td colspan="2" class="txtR">0円</td>
					</tr>
					<tr>
						<th class="gray">一人当たりの金額</th>
						<th class="gray">人数人</th>
						<th class="gray txtR">0円</th>
					</tr>
				</table>
				<div class="btnWrap01 mB20"><a href="<?php echo esc_url(home_url('')); ?>/"><span>お見積もりフォームへ進む<i class="far fa-angle-right"></i></span></a></div>
			</div>
		</div>
	</div>
</div>
*/?>