<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
<header class="site-header">
    <div class="container navbar">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            <span class="logo">SN</span>
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

