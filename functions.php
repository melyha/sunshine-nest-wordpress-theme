<?php

// Enable Featured Images
add_theme_support( 'post-thumbnails' );
add_theme_support('title-tag');

// Enable Primary Menu
add_action('after_setup_theme', function () {
  register_nav_menus([
    'primary' => 'Primary Menu',
  ]);
});

// Enqueue CSS/JS
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('sunshine-style', get_stylesheet_uri());
  wp_enqueue_script('sunshine-script', get_theme_file_uri('scripts/main.js'), [], null, true);
});


function mytheme_customize_register( $wp_customize ) {
    // Add setting for background color
    $wp_customize->add_setting( 'background_color_setting', array(
        'default'   => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ) );

    // Add control for background color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color_control', array(
        'label'    => __( 'Background Color', 'mytheme' ),
        'section'  => 'colors',
        'settings' => 'background_color_setting',
    ) ) );
}
add_action( 'customize_register', 'mytheme_customize_register' );
