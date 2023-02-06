<?php
/*
Template Name: プラン詳細
*/
?>
<?php get_header(); ?>
<!-- page-plan-sub.php -->
<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

<div id="visualImgSub">
	<img src="<?php echo get_template_directory_uri(); ?>/images/plan/visual.jpg" />
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

		<div class="planWrap mB50">
			<div class="planInner mB30">
				<div class="planImg mB20">
					<ul class="planList">
						<?php if( get_field('img_01') ) { ?><li><img src="<?php the_field('img_01'); ?>" /></li><?php } ?>
						<?php if( get_field('img_02') ) { ?><li><img src="<?php the_field('img_02'); ?>" /></li><?php } ?>
						<?php if( get_field('img_03') ) { ?><li><img src="<?php the_field('img_03'); ?>" /></li><?php } ?>
						<?php if( get_field('img_04') ) { ?><li><img src="<?php the_field('img_04'); ?>" /></li><?php } ?>
						<?php if( get_field('img_05') ) { ?><li><img src="<?php the_field('img_05'); ?>" /></li><?php } ?>
						<?php if( get_field('img_06') ) { ?><li><img src="<?php the_field('img_06'); ?>" /></li><?php } ?>
						<?php if( get_field('img_07') ) { ?><li><img src="<?php the_field('img_07'); ?>" /></li><?php } ?>
						<?php if( get_field('img_08') ) { ?><li><img src="<?php the_field('img_08'); ?>" /></li><?php } ?>
					</ul>
					<div class="custom-thumb planListThumb">
						<?php if( get_field('img_01') ) { ?><a data-slide-index="0" href=""><img src="<?php the_field('img_01'); ?>" /></a><?php } ?>
						<?php if( get_field('img_02') ) { ?><a data-slide-index="1" href=""><img src="<?php the_field('img_02'); ?>" /></a><?php } ?>
						<?php if( get_field('img_03') ) { ?><a data-slide-index="2" href=""><img src="<?php the_field('img_03'); ?>" /></a><?php } ?>
						<?php if( get_field('img_04') ) { ?><a data-slide-index="3" href=""><img src="<?php the_field('img_04'); ?>" /></a><?php } ?>
						<?php if( get_field('img_05') ) { ?><a data-slide-index="4" href=""><img src="<?php the_field('img_05'); ?>" /></a><?php } ?>
						<?php if( get_field('img_06') ) { ?><a data-slide-index="5" href=""><img src="<?php the_field('img_06'); ?>" /></a><?php } ?>
						<?php if( get_field('img_07') ) { ?><a data-slide-index="6" href=""><img src="<?php the_field('img_07'); ?>" /></a><?php } ?>
						<?php if( get_field('img_08') ) { ?><a data-slide-index="7" href=""><img src="<?php the_field('img_08'); ?>" /></a><?php } ?>
					</div>
				</div>
				<div class="planInfo">
					<div class="priceBox mB20">
						<p class="boxPrice"><?php the_field('title'); ?><br /><span><?php the_field('price'); ?></span>円(税込)～</ br> </p>
					</div>
					<?php
						$ua=$_SERVER['HTTP_USER_AGENT'];
						$browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
							if ($browser == true){
							$browser = 'sp';
						}
						if($browser == 'sp'){
					?>

					  <?php include(TEMPLATEPATH.'/include/estimate2.php') ?>


					<?php }else{ ?>


					<?php } ?>
					<div class="plan_menu_more mB20">
						<?php if( get_field('sub_title_01') ) { ?><h3><?php the_field('sub_title_01'); ?></h3><?php } ?>
						<?php if( get_field('th_01_01') ) { ?>
						<table class="">
							<thead>
								<tr>
									<th class="plan_th"></th>
									<th></th>
									<th><?php the_field('th_01_02'); ?></th>
									<th><?php the_field('th_01_03'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php if( get_field('default_01_01') ) { ?>
								<tr>
									<th rowspan="10">器材</th>

								</tr>
								<?php } ?>
								<?php if( get_field('default_01_01') ) { ?>
								<tr>
									<td><?php the_field('default_01_01'); ?></td>
									<td class="taR"><?php the_field('etc1_01_01'); ?></td>
									<td class="taR"><?php the_field('etc2_01_01'); ?></td>
								</tr>
								<?php } ?>

								<?php if( get_field('default_01_02') ) { ?>
								<tr>
									<td><?php the_field('default_01_02'); ?></td>
									<td class="taR"><?php the_field('etc1_01_02'); ?></td>
									<td class="taR"><?php the_field('etc2_01_02'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_03') ) { ?>
								<tr>
									<td><?php the_field('default_01_03'); ?></td>
									<td class="taR"><?php the_field('etc1_01_03'); ?></td>
									<td class="taR"><?php the_field('etc2_01_03'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_04') ) { ?>
								<tr>
									<td><?php the_field('default_01_04'); ?></td>
									<td class="taR"><?php the_field('etc1_01_04'); ?></td>
									<td class="taR"><?php the_field('etc2_01_04'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_05') ) { ?>
								<tr>
									<td><?php the_field('default_01_05'); ?></td>
									<td class="taR"><?php the_field('etc1_01_05'); ?></td>
									<td class="taR"><?php the_field('etc2_01_05'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_06') ) { ?>
								<tr>
									<td><?php the_field('default_01_06'); ?></td>
									<td class="taR"><?php the_field('etc1_01_06'); ?></td>
									<td class="taR"><?php the_field('etc2_01_06'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_07') ) { ?>
								<tr>
									<td><?php the_field('default_01_07'); ?></td>
									<td class="taR"><?php the_field('etc1_01_07'); ?></td>
									<td class="taR"><?php the_field('etc2_01_07'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_08') ) { ?>
								<tr>
									<td><?php the_field('default_01_08'); ?></td>
									<td class="taR"><?php the_field('etc1_01_08'); ?></td>
									<td class="taR"><?php the_field('etc2_01_08'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_09') ) { ?>
								<tr>
									<td><?php the_field('default_01_09'); ?></td>
									<td class="taR"><?php the_field('etc1_01_09'); ?></td>
									<td class="taR"><?php the_field('etc2_01_09'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_01_10') ) { ?>
								<tr>
									<td><?php the_field('default_01_10'); ?></td>
									<td class="taR"><?php the_field('etc1_01_10'); ?></td>
									<td class="taR"><?php the_field('etc2_01_10'); ?></td>
								</tr>
								<?php } ?>

							</tbody>

						</table>
						<span class="mB50" style="display: inline-block;">※テントはオプション別途料金。1張り1,870円(税込)
							<br>※鉄板(ヘラ付)はオプション別途料金。1セット1,100円(税込)
							<br>※まな板・包丁セットはオプション別途料金。1セット550円(税込)
							<br>※クーラーボックスの個数追加は、１個1,100円(税込)</span>
						<?php } ?>

						<?php if( get_field('sub_title_02') ) { ?><h3><?php the_field('sub_title_02'); ?></h3><?php } ?>
						<?php if( get_field('th_02_01') ) { ?>

						<table>
							<thead>
								<tr>
									<th colspan="2"></th>
									<th rowspan="2"><?php the_field('th_02_02'); ?></th>
									<th rowspan="2"><?php the_field('th_02_03'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php if( get_field('default_02_01') ) { ?>
								<tr>
									<th rowspan="10">食材</th>
									<td><?php the_field('default_02_01'); ?></td>
									<td class="taR"><?php the_field('etc1_02_01'); ?></td>
									<td class="taR"><?php the_field('etc2_02_01'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_02') ) { ?>
								<tr>
									<td><?php the_field('default_02_02'); ?></td>
									<td class="taR"><?php the_field('etc1_02_02'); ?></td>
									<td class="taR"><?php the_field('etc2_02_02'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_03') ) { ?>
								<tr>
									<td><?php the_field('default_02_03'); ?></td>
									<td class="taR"><?php the_field('etc1_02_03'); ?></td>
									<td class="taR"><?php the_field('etc2_02_03'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_04') ) { ?>
								<tr>
									<td><?php the_field('default_02_04'); ?></td>
									<td class="taR"><?php the_field('etc1_02_04'); ?></td>
									<td class="taR"><?php the_field('etc2_02_04'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_05') ) { ?>
								<tr>
									<td><?php the_field('default_02_05'); ?></td>
									<td class="taR"><?php the_field('etc1_02_05'); ?></td>
									<td class="taR"><?php the_field('etc2_02_05'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_06') ) { ?>
								<tr>
									<td><?php the_field('default_02_06'); ?></td>
									<td class="taR"><?php the_field('etc1_02_06'); ?></td>
									<td class="taR"><?php the_field('etc2_02_06'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_07') ) { ?>
								<tr>
									<td><?php the_field('default_02_07'); ?></td>
									<td class="taR"><?php the_field('etc1_02_07'); ?></td>
									<td class="taR"><?php the_field('etc2_02_07'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_08') ) { ?>
								<tr>
									<td><?php the_field('default_02_08'); ?></td>
									<td class="taR"><?php the_field('etc1_02_08'); ?></td>
									<td class="taR"><?php the_field('etc2_02_08'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_09') ) { ?>
								<tr>
									<td><?php the_field('default_02_09'); ?></td>
									<td class="taR"><?php the_field('etc1_02_09'); ?></td>
									<td class="taR"><?php the_field('etc2_02_09'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_02_10') ) { ?>
								<tr>
									<td><?php the_field('default_02_10'); ?></td>
									<td class="taR"><?php the_field('etc1_02_10'); ?></td>
									<td class="taR"><?php the_field('etc2_02_10'); ?></td>
								</tr>
								<?php } ?>
							</tbody>

						</table>
<span class="mB50" style="display: inline-block;">※ドリンク冷やし氷(5kg)はオプション別途料金。1セット880円(税込)</span>

						<?php } ?>


<?php if( is_page( array('131','5436') ) ) : ?>
					<h3>料金表</h3>
	<table class="plan_price_table">
				<tbody>
								<tr>
									<th >ご利用人数</th>
									<th>ご料金(税込)</th>
								</tr>
								<tr>
									<td>4〜19名</td>
									<td><?php the_field('50名未満料金'); ?></td>
								</tr>
								<tr>
									<td>20名以上</td>
									<td><?php the_field('50~100名未満：料金'); ?></td>
								</tr>


							</tbody>
						</table>
						<span class="mB50" style="display: inline-block;">※4名様（大人のみ）よりのサービスになります。<br />
						（3名様以下利用の場合、別途追加料金が発生します。）</span>
<?php else: ?>
<?php endif; ?>






						<?php if( get_field('sub_title_03') ) { ?><h3><?php the_field('sub_title_03'); ?></h3><?php } ?>
						<?php if( get_field('th_03_01') ) { ?>
						<table class="mB50">
							<thead>
								<tr>
									<th colspan="3"><?php the_field('th_03_01'); ?></th>
								</tr>
								<tr>
									<th>人数</th>
									<th><?php the_field('th_03_02'); ?></th>
									<th><?php the_field('th_03_03'); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php if( get_field('default_03_01') ) { ?>
								<tr>
									<th><?php the_field('default_03_01'); ?></th>
									<td class="taR"><?php the_field('etc1_03_01'); ?></td>
									<td class="taR"><?php the_field('etc2_03_01'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_03_02') ) { ?>
								<tr>
									<th><?php the_field('default_03_02'); ?></th>
									<td class="taR"><?php the_field('etc1_03_02'); ?></td>
									<td class="taR"><?php the_field('etc2_03_02'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_03_03') ) { ?>
								<tr>
									<th><?php the_field('default_03_03'); ?></th>
									<td class="taR"><?php the_field('etc1_03_03'); ?></td>
									<td class="taR"><?php the_field('etc2_03_03'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_03_04') ) { ?>
								<tr>
									<th><?php the_field('default_03_04'); ?></th>
									<td class="taR"><?php the_field('etc1_03_04'); ?></td>
									<td class="taR"><?php the_field('etc2_03_04'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_03_05') ) { ?>
								<tr>
									<th><?php the_field('default_03_05'); ?></th>
									<td class="taR"><?php the_field('etc1_03_05'); ?></td>
									<td class="taR"><?php the_field('etc2_03_05'); ?></td>
								</tr>
								<?php } ?>
								<?php if( get_field('default_03_06') ) { ?>
								<tr>
									<th><?php the_field('default_03_06'); ?></th>
									<td class="taR"><?php the_field('etc1_03_06'); ?></td>
									<td class="taR"><?php the_field('etc2_03_06'); ?></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						<?php } ?>

					</div>
				</div>
			</div>
		</div>


	<?php
	$ua=$_SERVER['HTTP_USER_AGENT'];
	$browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
		if ($browser == true){
		$browser = 'sp';
	}
	if($browser == 'sp'){
?>
  		<div class="btnWrap01 red mt30 mb30" style="text-align: right; margin-right: 20px; width:100%;"><a href="#estimate"><span>注文へ進む<i class="far fa-angle-right"></i></span></a>
		</div>





<?php }else{ ?>

		<?php include(TEMPLATEPATH.'/include/estimate.php') ?>

<?php } ?>



		<section id="rental">
			<div class="title01">
					<picture>
					  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title03.webp" alt="Rental Pack" width=" 600" height="50"  type="image/webp">
					  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title03.png" alt="Rental Pack" width="600" height="50" >
					</picture>
			</div>
			<p class="title02 mB10">大人気BBQレンタルパック</p>
			<div class="columnBox3 type1 mB30">
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><a href="<?php echo esc_url(home_url('')); ?>/plan/food-itself">
						<picture>
						  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.webp" alt="食材付きレンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.jpg" alt="食材付きレンタルパック" width="310" height="260" >
						</picture>
					<span>食材付きレンタルパック<br />から選ぶ</span></a></div>
				</div>
				<div class="columnBoxInner designBox02">
					<div class="imgPic"><a href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">
						<picture>
					 	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.webp" alt="BBQ機材レンタルパック" width="310" height="260"  type="image/webp">
						  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.jpg" alt="BBQ機材レンタルパック" width="310" height="260" >
						</picture>
						<span>BBQ機材レンタルパック<br />から選ぶ</span></a></div>
				</div>
			</div>
		</section>
		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>


<?php get_footer(); ?>
