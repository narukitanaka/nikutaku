<?php get_header(); ?>

<div id="sub_mimg">
	<div class="inner">
		<h2>404エラー</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg" alt="sample" />
	</div>
</div>

<div id="contents" class="page">

	<div class="container_01 mb50">

		<div class="contents">
			<div class="breadcrumbs">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>
			<h3 class="mb20"><span class="inner">404エラー</span></h3>
			<p class="mb20">お探しの記事・ページは見つかりませんでした。
				<br />以下のフォームから検索して頂くか、各メニューへお進み下さい。</p>
			<div class="search_box mb20">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="検索" />
				</form>
			</div>
			<p>【検索ヒント】
				<br />キーワードに誤字・脱字がないかご確認下さい。
				<br />異なるキーワードを入力して検索して下さい。
				<br />より一般的な言葉を入力して下さい。</p>
		</div>

		<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

	</div>

<?php get_footer(); ?>