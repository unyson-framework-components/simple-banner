<?php if (!defined('FW')) die('Forbidden');
$options = array(
    'title' => array(
        'label' => __('Title text', 'ust'),
        'type' => 'text'
    ),

    'subtitle' => array(
        'label' => __('Subtitle text', 'ust'),
        'type' => 'textarea'
    ),

    'image' => array (
        'label' => __('Background image', 'ust'),
        'type' => 'upload',
        'images_only' => true
    )
);