<section id="area" class="secBg">
	<div class="title01">
		<picture>			  
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/top/title08.webp" alt="BBQ Best10" width=" 600" height="50"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/top/title08.png" alt="BBQ Best10" width="600" height="50" >
			</picture>
	</div>
	<p class="title02 mB30"><?php echo date('Y'); ?>年大阪おすすめバーベキュー場BEST10</p>
	<div class="area mB30">
		<div class="areaList">
			<?php
				$args = array('post_type' => "bbq", 'posts_per_page' => 10);
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="areaListBox">
				<p class="areaTitle"><?php the_title(); ?></p>
				<div class="areaPic"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>
				<p class="areaTxt"><?php echo mb_substr(strip_tags($post-> post_content),0,80) . '...'; ?></p>
			</div>
			<?php endforeach; wp_reset_postdata();?>
		</div>
	</div>
	<div class="btnWrap01"><a href="<?php echo esc_url(home_url('')); ?>/bbq"><span>バーべキュー場一覧はこちら<i class="far fa-angle-right"></i></span></a></div>
</section>
