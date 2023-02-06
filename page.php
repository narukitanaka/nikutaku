<?php get_header(); ?>
<!-- page.php -->

<div id="main">

	<div id="contentsBox">
	<?php if ( is_page(array('contact','ask','plan','confirm','thanks')) ) :  ?>
	<?php else: ?>	
		<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
	<?php endif; ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php remove_filter ('the_content', 'wpautop'); ?>
		<?php the_content('続きを読む'); ?>
		<?php endwhile; endif; ?>
	</div>

    <?php if ( is_page('contact') ) :  ?>
    <?php else: ?>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>