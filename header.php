<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
<header class="site-header">
    <div class="container navbar">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php 
            // Custom Logo Support
            if (function_exists('the_custom_logo') && has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<span class="logo">SN</span>';
            }
            ?>
            <span><?php bloginfo('name'); ?></span>
        </a>
        <button class="nav-toggle">☰</button>
        <nav id="primary-nav" class="nav-wrap">
            <?php wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav',
                'fallback_cb'    => false, // remove to auto-fall back to pages
            ]); ?>
        </nav>
        
    </div>
</header>

<main class="container">

