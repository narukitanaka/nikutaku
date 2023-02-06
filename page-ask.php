<?php
/*
Template Name: お問合せ確認
*/
?>
<?php get_header(); ?>
<!-- page.php -->

<div id="main">
		<h1 class="mimgTitleSub">お問合せフォーム</h1>
	<div id="contentsBox">
		<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php remove_filter ('the_content', 'wpautop'); ?>
		<?php the_content('続きを読む'); ?>
		<?php endwhile; endif; ?>
	</div>



</div>

<?php get_footer(); ?>