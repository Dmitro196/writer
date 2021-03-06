﻿<?php
if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(

	'header_text' =>array(
		'type'  => 'text',
		
		'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
		'label' => __('Поле ввода', '{domain}'),
		'desc'  => __('Description', '{domain}'),
		'help'  => __('Help tip', '{domain}'),
),
	'footer_Text'=>array(
    'type'  => 'wp-editor',
    'value' => 'default value',
    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
    'label' => __('Label', '{domain}'),
    'desc'  => __('Description', '{domain}'),
    'help'  => __('Help tip', '{domain}'),
    'size' => 'small', // small, large
    'editor_height' => 400,
    'wpautop' => true,
    'editor_type' => false, // tinymce, html

    /**
     * Also available
     * https://github.com/WordPress/WordPress/blob/4.4.2/wp-includes/class-wp-editor.php#L80-L94
     */
)



);