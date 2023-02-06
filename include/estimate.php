<?php

	$p = get_post();
	$planId = get_post_meta($p->ID, "product_id", true);
	$kidsPlanId = get_post_meta($p->ID, "product_kids_id", true);
	$toritukePlanId = get_post_meta($p->ID, "product_torituke_id", true);
	$tentPlanId = get_post_meta($p->ID, "product_tent_id", true);
	$teppanPlanId = get_post_meta($p->ID, "product_teppan_id", true);
	$icePlanId = get_post_meta($p->ID, "product_ice_id", true);

//	var_dump($p);
?>
<div id="estimate" class="Bg08">

	<form action="<?php echo site_url() ?>/temp-form.php" target="price_table" method="post" class="self mB20" id="selfplan">

		<div class="Bg01 mB50">
			<input type="hidden" name="post_title" value="<?php echo esc_html($p->post_title) ?>">
			<div class="columnBox2">
				<div class="columnBoxInner">
					<div class="designBox10 mB20">
						<p class="boxStep mB10">Step01</p>
						<p class="boxTitle mB30">人数を数字で入力してください(半角) </p>
						<table class="mB20">
							<tr>
								<th>人数</th>
							</tr>
							<tr>
								<td><input class="plist_cnt plist_cnt_link" type="number" id="pcnt-<?php echo $planId ?>" name="cnt[<?php echo $planId ?>]" step="1"  value="0"/><span>人</span></td>
							<!--	 <td><input class="plist_cnt" type="number" id="pcnt-<?php echo $kidsPlanId ?>" name="cnt[<?php echo $kidsPlanId ?>]" step="1" /><span>人</td>  -->
							</tr>
						</table>
					    <input type="hidden" name="pid[]" value="<?php echo $planId ?>">

					    <input type="hidden" name="member" id="member" value="1">

						<?php if($toritukePlanId){ ?>


						<table class="mB20">
							<tr>
								<th style="width:65%">オプション氷5kg /880円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-<?php echo $icePlanId ?>" name="cnt[<?php echo $icePlanId ?>]" step="1" /><span>個</span></td>
							</tr>
							<tr>
								<th style="width:65%">オプションテント /1,870円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-<?php echo $tentPlanId ?>" name="cnt[<?php echo $tentPlanId ?>]" step="1" /><span>張</span></td>
							</tr>
							<tr>
								<th style="width:65%">オプション鉄板(ヘラ付) /1,100円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-<?php echo $teppanPlanId ?>" name="cnt[<?php echo $teppanPlanId ?>]" step="1" /><span>個</span></td>
							</tr>
							<tr>
								<th style="width:65%">チェアアップグレード<span class="red" style="vertical-align: super; font-size: 0.7em;"><b>※1</b></span> /330円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-7310" name="cnt[7310]" step="1" /><span>人</span></td>
							</tr>

							<tr>
								<th style="width:65%">クーラーボックス(31L)<span class="red" style="vertical-align: super; font-size: 0.7em;"></span> /1,100円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-7460" name="cnt[7460]" step="1" /><span>個</span></td>
							</tr>
							<tr>
								<th style="width:65%">包丁・まな板セット<span class="red" style="vertical-align: super; font-size: 0.7em;"></span> /550円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-7459" name="cnt[7459]" step="1" /><span>個</span></td>
							</tr>


						<?php if( get_field('th_02_01') ) { ?>
							<tr>
								<th style="width:65%">肉量2倍<span class="red" style="vertical-align: super; font-size: 0.7em;"><b>※2</b></span> /990円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-7311" name="cnt[7311]" step="1" /><span>人</span></td>
							</tr>
							<tr>
								<th style="width:65%">お肉アップグレード<span class="red" style="vertical-align: super; font-size: 0.7em;"><b>※3</b></span> /880円</th>
								<td><input class="plist_cnt" type="number" id="pcnt-7312" name="cnt[7312]" step="1" /><span>人</span></td>
							</tr>
						<?php } ?>
						</table>

					    <input type="hidden" name="pid[]" value="<?php echo $toritukePlanId ?>">
					    <input type="hidden" name="pid[]" value="<?php echo $icePlanId ?>">
					    <input type="hidden" name="pid[]" value="<?php echo $tentPlanId ?>">
					    <input type="hidden" name="pid[]" value="<?php echo $teppanPlanId ?>">
					    <input type="hidden" name="pid[]" value="7310">
					    <input type="hidden" name="pid[]" value="7311">
					    <input type="hidden" name="pid[]" value="7312">
							<input type="hidden" name="pid[]" value="7460">
							<input type="hidden" name="pid[]" value="7459">
						<?php } ?>
					</div>



				</div>

				<div class="columnBoxInner">
					<iframe name="price_table" id="price_table" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" style="height:0;width:100%;margin:0;padding:0;border:0;"></iframe>
				</div>

			</div>

						<p class="mT10">※1 チェアアップグレードは1人掛けチェアへの変更です。<span class="red">グループ単位でのご注文になります。プランの人数分入力してください。</span></p>
						<?php if( get_field('th_02_01') ) { ?>
						<p class="mT10">※2 <span class="red">グループ単位でのご注文になります。プランの人数分入力してください。</span></p>
						<p class="mT10">※3 お肉が国産黒毛和牛100g、イベリコ豚バニコカルビ100g、鶏肉100g、フランクフルト１本に変更です。<span class="red">グループ単位でのご注文になります。プランの人数分入力してください。</span></p>
						<?php } ?>
		</div>
	</form>

</div>


<script>
//jQuery(function($){
document.addEventListener('DOMContentLoaded', function() {

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
				myH = myH + 150;
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

		if($(this).hasClass("plist_cnt_link")){
		  $(".plist_radio_1").val(num_var);
		  $('#member').val(num_var);
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
