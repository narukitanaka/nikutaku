<?php get_header('thanks'); ?>
<!-- page.php -->

<div id="main">

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

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>