<?php
// area for variables

// include files
include( get_template_direction() . '/includes/front/enqueue.php');
include( get_template_directory() . '/includes/setup.php');
include( get_template_directory() . '/includes/front/widgets.php');
// any filter and action hooks
add_action('wp_enqueue_scripts', 'ts_enqueue');
add_action('after_setup_theme', 'ts_setup_theme');
add_action('widgets_init', 'ts_widgets');
// short codes

?>