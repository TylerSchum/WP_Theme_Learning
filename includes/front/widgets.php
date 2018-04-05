<?php

function ts_widgets() {
  register_sidebar( array(
    'name' => __('Main Sidebar', 'Udemy'),
    'id' => 'ts_sidebar',
    'description' => 'sidebar for the theme Udemy',
    'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
  ));
};

?>