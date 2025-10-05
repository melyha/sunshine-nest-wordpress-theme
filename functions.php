<?php


// Theme Setup

function mytheme_setup() {
// Enable Featured Images
add_theme_support( 'post-thumbnails' );
// Enable custom logo
 add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
// Enable title tag support
add_theme_support('title-tag');
// Register navigation menus
register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue Styles and Scripts
function mytheme_scripts() {
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_style('mytheme-main', get_template_directory_uri() . '/styles/main.css');
    wp_enqueue_script('mytheme-main', get_template_directory_uri() . '/scripts/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');



// Customizer Settings 
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

 // Homepage Images
     $wp_customize->add_section('mytheme_homepage_images', array(
        'title'    => 'Homepage Images',
        'priority' => 30,
    ));

    // Hero Background Image
    $wp_customize->add_setting('hero_background_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label'    => 'Hero Background Image',
        'section'  => 'mytheme_homepage_images',
    )));


     // Special Section Image
   $wp_customize->add_setting('about_section_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_section_image', array(
        'label'    => 'About Image',
        'section'  => 'mytheme_homepage_images',
    )));

// Programs Section Background Image
$wp_customize->add_setting('programs_background_image', array(
    'default'   => '',
    'transport' => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'programs_background_image', array(
    'label'    => 'Programs Background Image',
    'section'  => 'mytheme_homepage_images',
)));

// Program Section Images
    $wp_customize->add_section('mytheme_program_images', array(
        'title'    => 'Program Images',
        'priority' => 31,
    ));

// Program 1 
    $wp_customize->add_setting('program_1_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'program_1_image', array(
        'label'    => 'Daycare Center Image',
        'section'  => 'mytheme_program_images',
    )));

     // Program 2 
    $wp_customize->add_setting('program_2_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'program_2_image', array(
        'label'    => 'Children\'s Programs Image',
        'section'  => 'mytheme_program_images',
    )));

    
    // Program 3 
    $wp_customize->add_setting('program_3_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'program_3_image', array(
        'label'    => 'Out of School Care Image',
        'section'  => 'mytheme_program_images',
    )));

 // Gallery Section Background Image
    $wp_customize->add_setting('gallery_background_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_background_image', array(
        'label'    => 'Gallery Section Background',
        'section'  => 'mytheme_homepage_images',
    )));


// Gallery Images Section
$wp_customize->add_section('mytheme_gallery_images', array(
    'title'    => 'Gallery Images',
    'priority' => 32,
));

// Gallery Images (8 images)
for ($i = 1; $i <= 8; $i++) {
    $wp_customize->add_setting('gallery_image_' . $i, array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image_' . $i, array(
        'label'    => 'Gallery Image ' . $i,
        'section'  => 'mytheme_gallery_images',
    )));
}
}
add_action( 'customize_register', 'mytheme_customize_register' );
