<?php get_header(); ?>

<div id="visualImgSub">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/bbq/visual.webp" alt="お役立ちコラムのメイン画像" width="1700" height="436"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/bbq/visual.jpg" alt="お役立ちコラムのメイン画像" width="1700" height="436" >
				</picture>
	<div class="container">
		<h1 class="visualSubTitle">お役立ちコラム</h1>
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

		<ul class="faqCatList mB50">
			<?php
			  $terms = get_terms('colum_cat');
			  foreach ( $terms as $term ) {
			    echo '<li><a href="'.get_term_link($term).'"><span>'.$term->name.'<i class="far fa-angle-right"></i></span></a></li>';
			  }
			?>
		</ul>

		<div class="columCatList">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="columListBox">
				<div class="imgPic imgLink"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>
				<div class="columArea">
					<p class="columDate"><?php the_time('Y/m/d') ?></p>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="columCate"><span><?php $terms = get_the_terms($post->ID, 'colum_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></span></p>
				</div>
			</article>

			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>

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