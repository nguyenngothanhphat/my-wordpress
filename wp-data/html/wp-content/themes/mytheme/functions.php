<?php
function react_ui_enqueue_scripts() {
  if (is_page('home')) {
    wp_enqueue_script(
      'react-app',
      get_template_directory_uri() . '/build/assets/index.js',
      array(),
      null,
      true
    );

    wp_enqueue_style(
      'react-style',
      get_template_directory_uri() . '/build/assets/index.css'
    );
  }
}
add_action('wp_enqueue_scripts', 'react_ui_enqueue_scripts');
