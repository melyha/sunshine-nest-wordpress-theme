php<?php

// Enqueue CSS/JS
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('sunshine-style', get_stylesheet_uri());
  wp_enqueue_script('sunshine-script', get_theme_file_uri('scripts/main.js'), [], null, true);
});