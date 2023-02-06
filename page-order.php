<?php get_header(); ?>

<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
?>

<div id="visualImgSub">
	<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/visual.jpg" />
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

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2 class="title03 order mB20">ご注文の詳細はこちら</h2>
		<table class="Tbl01 mB50">
			<tr>
				<th>項目</th>
				<th>金額</th>
				<th>数量</th>
				<th>小計</th>
			</tr>
			<tr>
				<td class="plan">西中島限定お得プラン</td>
				<td>2,980円</td>
				<td>10</td>
				<td>29,800円</td>
			</tr>
			<tr>
				<th>合計金額(税抜)</th>
				<td colspan="3">29,800円</td>
			</tr>
			<tr>
				<th>消費税</th>
				<td colspan="3">2,384円</td>
			</tr>
			<tr>
				<th>合計金額</th>
				<td colspan="3" class="red">32,184円(税込)</td>
			</tr>
			<tr>
				<th>一人当たりの金額</th>
				<th>人数</th>
				<td>10人</td>
				<td class="red">3,219円(税込)</td>
			</tr>
		</table>

		<?php echo do_shortcode('[mwform_formkey key="116"]'); ?>

		<?php endwhile; endif; ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>