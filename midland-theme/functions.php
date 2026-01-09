<?php
function midland_assets() {

  wp_enqueue_style(
    'bootstrap-css',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
  );

  wp_enqueue_style(
    'main-style',
    get_stylesheet_uri()
  );

  wp_enqueue_script(
    'bootstrap-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
    array(),
    null,
    true
  );
}

add_action('wp_enqueue_scripts', 'midland_assets');
