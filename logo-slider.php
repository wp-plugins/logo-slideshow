<?php
$direct_paths =  get_bloginfo('wpurl')."/wp-content/plugins/logo-slideshow/";
?>
<div id="dhtmlgoodies_slideshow">
	<div id="galleryContainer" align="center">
		<div id="arrow_left"><img src="<?php echo $direct_paths; ?>scripts/img/arrow_left.gif"></div>
		<div id="arrow_right"><img src="<?php echo $direct_paths; ?>scripts/img/arrow_right.gif"></div>
		<div id="theImages">
				<!-- Thumbnails -->
			<a href="<?php echo get_option('logo-url1');?>" target="_blank"><img src="<?php echo get_option('logo-img1');?>"></a>
			<a href="<?php echo get_option('logo-url2');?>" target="_blank"><img src="<?php echo get_option('logo-img2');?>"></a>
			<a href="<?php echo get_option('logo-url3');?>" target="_blank"><img src="<?php echo get_option('logo-img3');?>"></a>
			<a href="<?php echo get_option('logo-url4');?>" target="_blank"><img src="<?php echo get_option('logo-img4');?>"></a>
			<a href="<?php echo get_option('logo-url5');?>" target="_blank"><img src="<?php echo get_option('logo-img5');?>"></a>
			<a href="<?php echo get_option('logo-url6');?>" target="_blank"><img src="<?php echo get_option('logo-img6');?>"></a>
		
				<!-- End thumbnails -->
				
				<div id="slideEnd"></div>
		</div>
	</div>
</div>
