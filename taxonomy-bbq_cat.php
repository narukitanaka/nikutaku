<?php get_header(); ?>

<div id="visualImgSub">
	<img src="<?php echo get_template_directory_uri(); ?>/images/bbq/visual.jpg" />
	<div class="container">
		<h1 class="visualSubTitle">大阪府BBQ会場：<?php single_term_title(); ?></h1>
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

		<ul class="bbqCatList mB50">
			<li class="osaka-all"><a href="<?php echo esc_url(home_url('')); ?>/bbq">大阪府一覧<i class="far fa-angle-down"></i></a></li>
			<?php
				$terms = get_terms('bbq_cat','hide_empty=0');
				foreach ( $terms as $term ) {
					echo '<li class="'.$term->slug.'"><a href="'.get_term_link($term).'">'.$term->name.'<i class="far fa-angle-down"></i></a></li>';
				}
			?>
		</ul>

		<div class="mB80">
			<div class="bbqList mB50">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="bbqListBox">
					<div class="imgPic imgLink"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>
					<h3><?php the_title(); ?></h3>
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