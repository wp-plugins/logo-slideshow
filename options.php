<?php
$location = $options_page; // Form Action URI
?>

<div class="wrap">
	<h2>Logo Slideshow</h2>
	<p>Use these fields below to specify your Links and Images for the Logo Slideshow. Allways use direct Path to Images <br>like <b>http://www.iwebix.de/wp-content/uploads/img1.gif</b>
	Best Image Height is: 70px </p>
	
    <div style="margin-left:0px;">
    <form method="post" action="options.php"><?php wp_nonce_field('update-options'); ?>
		<fieldset name="general_options" class="options">
        
        1. Logo:<br />
	  <div style="margin:0;padding:0;">
        URL: <input name="logo-url1" id="logo-url1" size="25" value="<?php echo get_option('logo-url1'); ?>"></input> Picture: <input name="logo-img1" id="logo-img1" size="25" value="<?php echo get_option('logo-img1'); ?>"></input>    
        </div><br />
        
        2. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url2" id="logo-url2" size="25" value="<?php echo get_option('logo-url2'); ?>"></input> Picture: <input name="logo-img2" id="logo-img2" size="25" value="<?php echo get_option('logo-img2'); ?>"></input>    
        </div><br />

        3. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url3" id="logo-url3" size="25" value="<?php echo get_option('logo-url3'); ?>"></input> Picture: <input name="logo-img3" id="logo-img3" size="25" value="<?php echo get_option('logo-img3'); ?>"></input>    
        </div><br />

        4. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url4" id="logo-url4" size="25" value="<?php echo get_option('logo-url4'); ?>"></input> Picture: <input name="logo-img4" id="logo-img4" size="25" value="<?php echo get_option('logo-img4'); ?>"></input>    
        </div><br />

        5. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url5" id="logo-url5" size="25" value="<?php echo get_option('logo-url5'); ?>"></input> Picture: <input name="logo-img5" id="logo-img5" size="25" value="<?php echo get_option('logo-img5'); ?>"></input>    
        </div><br />

        6. Logo:<br />
		<div style="margin:0;padding:0;">
        URL: <input name="logo-url6" id="logo-url6" size="25" value="<?php echo get_option('logo-url6'); ?>"></input> Picture: <input name="logo-img6" id="logo-img6" size="25" value="<?php echo get_option('logo-img6'); ?>"></input>    
        </div><br />
                
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="logo-url1, logo-img1, logo-url2, logo-img2, logo-url3, logo-img3, logo-url4, logo-img4, logo-url5, logo-img5, logo-url6, logo-img6" />

		</fieldset>
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options') ?>" /></p>
	</form>      
</div>