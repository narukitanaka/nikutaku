<?php get_header(); ?>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
    {
    "@type": "ListItem",
    "position": 1,
    "item": {
	"@id": "https://nikutaku.com/",
			"name": "西中島の格安BBQレンタル｜にくたく"
    }
  },
    {
    "@type": "ListItem",
    "position": 2,
    "item": {
      "@id": "https://nikutaku.com/faq",
      "name": "よくある質問"
    }
  }
      ]
}
</script>
<div id="visualImgSub">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/faq/visual.webp" alt="よくある質問のメイン画像" width="1700" height="436"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/faq/visual.jpg" alt="よくある質問のメイン画像" width="1700" height="436" >
				</picture>
	<div class="container">
		<h1 class="visualSubTitle">よくある質問</h1>
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
			  $terms = get_terms('faq_cat');
			  foreach ( $terms as $term ) {
			    echo  '<li><a href="#'.$term->slug.'"><span>'.esc_html($term->name).'<i class="far fa-angle-down"></i></span></a></li>';
			  }
			?>
		</ul>

		<div class="mB80">
			<?php
			    $postTypeName = 'faq';//投稿タイプの名前
			    $taxonomy = 'faq_cat';//タクソノミー名
			    $num = -1;//表示する投稿の数 -1で全部
			    $terms = get_terms($taxonomy);
			    foreach ( $terms as $term ){
			        $args = array(
			            'posts_per_page' => $num,
			            'post_type' => $postTypeName,
			            'tax_query' => array(
			                array(
			                    'taxonomy' => $taxonomy,
			                    'field' => 'slug',
			                    'terms' => $term->slug,
			                )
			            )
			        );
			        $myPost = get_posts($args);
			        if($myPost):
			        echo '<h2 id="'.$term->slug.'" class="title03 faq mB20">'.$term->name.'</h2>';
			        echo '<div class="faqList mB30">';
			            foreach($myPost as $post) : setup_postdata( $post );
			            ?>
						<article id="<?php the_field('link_id'); ?>" class="faqListBox">
							<h3><?php $title = get_the_title( ); echo $title; ?></h3>
							<div class="Txt"><?php the_content('続きを読む'); ?></div>
						</article>
			            <?php
			            endforeach;
			        endif;
			        echo '</div>';
			        wp_reset_postdata();
			    }
			?>
		</div>



	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>