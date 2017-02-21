<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
    'demo_text' => array(

		
		'type'  => 'wp-editor',
		'value' => 'default',
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Label', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
		'size' => 'small', // small, large
		'editor_height' => 400,
		'wpautop' => true,
		'editor_type' => false, // tinymce, html

),
	'demo_img'=> array(
		'type'  => 'upload',
		'label' => __( 'Choose Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	)

);
?>