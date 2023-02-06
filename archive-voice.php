<?php get_header(); ?>

<!-- archive-voice.php -->


<div id="visualImgSub">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/voice/34878932.webp" alt="ご利用の様子のメイン画像" width="1700" height="436"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/voice/34878932.jpg" alt="ご利用の様子のメイン画像" width="1700" height="436" >
				</picture>
	<div class="container">
		<h1 class="visualSubTitle">ご利用の様子<?php single_term_title(); ?></h1>
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
				<?php // var_dump($post) ?>
				<article class="bbqListBox">
					<div class="imgPic imgLink"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>

					<a href="<?php the_permalink(); ?>"><h3><?php echo date('Y/m/d', strtotime( $post->post_date )) ?><br><?php the_title(); ?></h3></a>
					<?php
						if ($terms = get_the_terms($post->ID, 'bbq_cat')) {
							foreach ( $terms as $term ) {
								$term_slug = $term -> slug;
					?>
						<p class="Cate">
							<span class="<?php echo esc_html($term_slug) ?>"><?php echo esc_html($term->name)  ?></span>
					    </p>
					<?php 
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