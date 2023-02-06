<?php get_header(); ?>
<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>
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
      "@id": "https://nikutaku.com/voice",
      "name": "ご利用の様子"
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
	<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $slug; ?>/voice/34878932.jpg" />
	<div class="container">
		<div class="breadcrumbs">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
	</div>
</div>

<div id="main">

	<div id="contentsBox" class="voice_title">

		<h1 class="visualSubTitle"><span class="inner"><?php the_title(); ?></span></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<p class="date"><?php the_time('Y.m.d') ?></p>
		<?php the_content('続きを読む'); ?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>
		<?php include(TEMPLATEPATH.'/include/rental-pack.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bbQ-best10.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>