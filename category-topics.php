<?php get_header(); ?>

<div id="visualImgSub">
	<img src="<?php echo get_template_directory_uri(); ?>/images/topics/34878824.jpg" />
	<div class="container">
		<h1 class="visualSubTitle">にくたくの最新情報</h1>
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

		

		<div class="mB80">
			<div class="bbqList mB50">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
	<article class="bbqListBox topics_li">
				<?php the_post_thumbnail( $size, $attr ); ?>
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<?php
						if ($terms = get_the_terms($post->ID, 'bbq_cat')) {
							foreach ( $terms as $term ) {
								$term_slug = $term -> slug;
								echo ('<p class="Cate"><span class="') ;
								echo esc_html($term_slug) ;
								echo ('">') ;
								echo esc_html($term->name)  ;
								echo ('</span></p>') ;
							}
						}
					?>
				</article>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<div id="pagenav" class="mB80">
				<p><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></p>
			</div>
		</div>

		<?php include(TEMPLATEPATH.'/include/rental-pack.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bbQ-best10.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>