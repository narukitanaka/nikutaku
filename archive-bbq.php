<?php get_header(); ?>

<div id="visualImgSub">
				<picture>
				  <source srcset="<?php echo get_template_directory_uri(); ?>/images/bbq/visual.webp" alt="大阪府BBQ会場" width="1700" height="436"  type="image/webp">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/bbq/visual.jpg" alt="大阪府BBQ会場" width="1700" height="436" >
				</picture>
	<div class="container">
		<h1 class="visualSubTitle">大阪のバーベキュー会場</h1>
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

<!--
		<ul class="bbqCatList mB50">
			<li class="osaka-all"><a href="<?php echo esc_url(home_url('')); ?>/bbq">大阪府一覧<i class="far fa-angle-down"></i></a></li>
			<?php
				$terms = get_terms('bbq_cat','hide_empty=0');
				foreach ( $terms as $term ) {
					echo '<li class="'.$term->slug.'"><a href="'.get_term_link($term).'">'.$term->name.'<i class="far fa-angle-down"></i></a></li>';
				}
			?>
		</ul>

-->
		<div class="attention mT20 mB80">
			<h2 id="area_news" class="mb20"><span class="red b">最新バーベキュー場情報<br class="br-sp">（5月28日現在）</span></h2>
			<h3 class="mT20">下記のバーベキュー場は、<br class="br-sp"><span class="red b">2022年4月22日から再開！！</span></h3>
				<ul>
					<li>・淀川河川公園 西中島地区　→ <a href="https://www.yodogawa-park.jp/bbq/nisinakabbq202204-11/?doing_wp_cron=1648431734.6121110916137695312500">公園HP</a></li>
				</ul>

			<h3 class="mT20">下記のバーベキュー場は、<br class="br-sp"><span class="red b">2022年5月23日から利用可能</span>です。</h3>
				<ul>
					<li>・大泉緑地　→ <a href="https://www.osaka-park.or.jp/nanbu/oizumi/oizumi-bbq.html">公園HP</a></li>
					<li>・服部緑地　→ <a href="http://hattori.osaka-park.or.jp/">公園HP</a></li>
					<li>・浜寺公園　→ <a href="http://hamadera.osaka-park.or.jp/">公園HP</a></li>
				</ul>

				<h3 class="mT20">下記のバーベキュー場は、<br class="br-sp"><span class="red b">2022年5月28日から利用可能</span>です。</h3>
				<ul>
					<li>・淀川河川公園 太子橋地区　→ <a href="https://www.yodogawa-park.go.jp/bbq/taishibashi/">公園HP</a></li>
					<li>・鳥飼下地区、鳥飼上地区(上流、下流)、大塚地区、三島江地区を除く、その他の淀川河川公園　→ <a href="https://www.yodogawa-park.go.jp/">公園HP</a></li>
				</ul>

				<h3 class="mT20">下記のバーベキュー場は、<br class="br-sp"><span class="red b">2022年5月30日から利用可能</span>です。</h3>
				<ul>
					<li>・淀川河川公園 鳥飼下地区</li>
					<li>・淀川河川公園 鳥飼上地区(上流、下流)</li>
				</ul>

				<h3 class="mT50">バーベキュー利用の可能な会場では、下記の行政の指示を守っています。</h3>
				<ul>
					<li>・マスク会食のご案内</li>
					<li>・コンロ周辺で密にならないようご案内</li>
				</ul>
				<div class="youtube mT30 mB10">

				<span style="border: solid #b31a08 2px; padding: 10px;"><a href="<?php echo esc_url(home_url('')); ?>/corona-measures" style="font-size: 20px; font-weight: bold; color: #b31a08;">にくたくのコロナ対策</a></span>
				</div>

		</div>

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
					<p class="areaTxt mT10"><a href="<?php the_permalink(); ?>"><?php echo mb_substr(strip_tags($post-> post_content),0,90) . '...'; ?></a></p>
				</article>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<div id="pagenav" class="mB80">
				<p><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></p>
			</div>
		</div>




		<?php include(TEMPLATEPATH.'/include/rental-pack.php'); ?>

		<?php include(TEMPLATEPATH.'/include/bnr.php'); ?>

	</div>

	<?php include(TEMPLATEPATH.'/sidebar.php'); ?>

</div>

<?php get_footer(); ?>