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
      "@id": "https://nikutaku.com/colum",
      "name": "お役立ちコラム"
		}
	},
    {
		"@type": "ListItem",
		"position": 3,
		"item": {
			"@id": "https://nikutaku.com<?php echo $_SERVER["REQUEST_URI"]; ?>",
			"name": "<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
      <?php the_title(); ?>
  <?php endwhile;?>
<?php endif; ?>"
		}
	}
      ]
}
</script>
<script type="application/ld+json">
{
 "@context":"http://schema.org",
 "@type":"LocalBusiness",
 "name":"にくたく",
 "address":{
  "@type":"PostalAddress",
  "streetAddress":"立売堀2-4-5　Dgビルなにわ筋 6F",
  "addressLocality":"大阪市西区",
  "addressRegion":"大阪府",
  "postalCode":"550-0012",
  "addressCountry":"JP"
 },
 "geo":{
  "@type":"GeoCoordinates",
  "latitude":"34.678941",
  "longitude":"135.49288"
 },
 "telephone":"+81-6-6585-9488",
 "openingHoursSpecification":[
  {
   "@type":"OpeningHoursSpecification",
   "dayOfWeek":[
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday"
   ],
   "opens":"10:00",
   "closes":"19:00"
  }
 ],
 "image":"https://nikutaku.com/wp-content/themes/up01/images/top/visual_sp.jpg",
 "url":"https://nikutaku.com/"
}
</script>
<div id="visualImgSub">
	<img src="<?php echo get_template_directory_uri(); ?>/images/bbq/visual.jpg" />
	<div class="container">
		<h1 class="visualSubTitle">お役立ちコラム：<?php single_term_title(); ?></h1>
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