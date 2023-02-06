<?php get_header(); ?>

<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>

<div id="sub_mimg">
	<div class="inner">
		<h2><?php echo $cat_name; ?></h2>
		<img src="<?php echo get_template_directory_uri(); ?>/images/works/mimg_sekou-jirei.jpg" alt="<?php echo $cat_name; ?>" />
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
			<div class="blog_list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="blog_list_box">
					<div class="img"><a href="<?php echo substr(the_permalink(), 0, -1);?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>
					<div class="txt">
						<p class="date"><?php the_time('Y/n/j') ?></p>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p><?php echo mb_substr(strip_tags($post-> post_content),0,70) . '･･･'; ?></p>
					</div>
				</article>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<div id="pagenav" class="wow fadeInUpZoom">
				<p><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></p>
			</div>
		</div>

		<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

	</div>

<?php get_footer(); ?>