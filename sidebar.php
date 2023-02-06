<div id="sideBox">

<?php if ( is_page('plan') ) :  ?> 
	<div class="sideTitle">
		<picture>
		  <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/sideTitle.webp" alt="PICK UP" width="290" height="50"  type="image/webp">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/side/sideTitle.jpg" alt="PICK UP" width="290" height="50" >
		</picture>
	</div>
	<?php wp_nav_menu( array(
		'theme_location'=>'sidemenu', 
		'container'     =>'', 
		'menu_class'    =>'',
		'items_wrap'    =>'<ul class="sideMenu mB30">%3$s</ul>'));
	?>
<?php elseif (!is_mobile()): ?>	
	<div class="sideTitle">
		<picture>
		  <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/sideTitle.webp" alt="PICK UP" width="290" height="50"  type="image/webp">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/side/sideTitle.jpg" alt="PICK UP" width="290" height="50" >
		</picture>
	</div>
	<?php wp_nav_menu( array(
		'theme_location'=>'sidemenu', 
		'container'     =>'', 
		'menu_class'    =>'',
		'items_wrap'    =>'<ul class="sideMenu mB30">%3$s</ul>'));
	?>
<?php else: ?>
	
<?php endif; ?>

<?php if ( is_page('plan') ) :  ?>
<?php else: ?>
	<div class="sideBnr">
		<div class="banner mB30"><a href="https://weather.yahoo.co.jp/weather/27/6200.html" target="new">
			<picture>
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/sideBnr_01.webp" alt="今日の大阪の天気" width="290" height="180"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/side/sideBnr_01.jpg" alt="今日の大阪の天気" width="290" height="180" >
			</picture>
			</a></div>
		<div class="banner mB30"><a href="https://bbq-upgrill.com/" target="new">
			<picture>
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/sideBnr_02_sp.webp" alt="UP GRILL" width="290" height="180"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/side/sideBnr_02_sp.jpg" alt="UP GRILL" width="290" height="180" >
			</picture>
			</a></div>
		<div class="banner mB30"><a href="https://tokyo-bbq-kitchen.com/" target="new">
			<picture>
			  <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/sideBnr_03.webp" alt="TOKYO BBQ KITCHEN" width="290" height="180"  type="image/webp">
			  <img src="<?php echo get_template_directory_uri(); ?>/images/side/sideBnr_03.jpg" alt="TOKYO BBQ KITCHEN" width="290" height="180" >
			</picture>
			</a></div>
		<div class="banner mB30"><a href="https://www.nijiochi.com/" target="new">
				<picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/bnr_sponsorship_sp.webp" media="(max-width: 767px)" alt="虹が落ちる前に 協賛バナーSP" width="788" height="320" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/bnr_sponsorship_sp.jpg" media="(max-width: 767px)"  alt="虹が落ちる前に 協賛バナーSP" width="788" height="320" type="image/jpg">
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/side/bnr_sponsorship.webp"  alt="虹が落ちる前に 協賛バナー" width="878" height="580" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/images/side/bnr_sponsorship.jpeg" alt="虹が落ちる前に 協賛バナー" width="878" height="580" >
        </picture>		 
			</a></div>
		</div>
	</div>
<?php endif; ?>
</div>