<?php
/*
Template Name: BBQレンタルパック
*/
?>


<?php get_header(); ?>

<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

<div id="visualImgSub">
	<picture>
	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/feature.webp" alt="BBQレンタルパックのメイン画像" width="1700" height="436"  type="image/webp">
	  <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/feature.jpg" alt="BBQレンタルパックのメイン画像" width="1700" height="436" >
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

	<div class="title01">
			<picture>			  
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title03.webp" alt="Rental Pack" width=" 600" height="50"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title03.png" alt="Rental Pack" width="600" height="50" >
			</picture>
	</div>
	<p class="title02 mB10">大人気BBQレンタルパック</p>
	<p class="txtC mB30">できる限りお客様のご要望に合うよう、豊富なレンタルパックをご用意しております。
		<br />機材のみのレンタルでも良いですし、手ぶらで楽しみたい方は食材付きパックがおすすめです。</p>
	<div class="columnBox3 type1 mB30">
		<div class="columnBoxInner designBox02">
			<div class="imgPic"><a href="<?php echo esc_url(home_url('')); ?>/plan/food-itself">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.webp" alt="食材付きレンタルパック" width="310" height="260"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_05_2.jpg" alt="食材付きレンタルパック" width="310" height="260" >
				</picture>
			<span>食材付きレンタルパック<br />から選ぶ</span></a></div>
			<p>手ぶらでバーベキューがしたい！という方は食材付きレンタルパックからお選び下さい。</p>
		</div>
		<div class="columnBoxInner designBox02">
			<div class="imgPic"><a href="<?php echo esc_url(home_url('')); ?>/plan/equipment_rental">
				<picture>
			 	  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.webp" alt="BBQ機材レンタルパック" width="310" height="260"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_06_2.jpg" alt="BBQ機材レンタルパック" width="310" height="260" >
				</picture>
				<span>BBQ機材レンタルパック<br />から選ぶ</span></a></div>
			<p>BBQ機材レンタルパックは業界最安値！ご利用人数に応じて必要な機材が揃ったレンタルパック</p>
		</div>

	</div>

<?php if (!is_mobile()): ?>	
		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>
<?php endif; ?>
	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>
