<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if (!empty ($atts['demo_text'])){?>
	
<p><?php echo $atts['demo_text'];  ?></p>
<?php  }
if (!empty ($atts['demo_img'])){?>
	
<img src="<?php echo fw_resize($atts['demo_img']['url'],100,100,true);  ?>" alt="Alt">
<?php  }