<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="dark">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="theme-color" content="#0a0e17">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;600;700&family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('neon-body'); ?>>
    <canvas id="webgl-background"></canvas>
    <div class="noise-overlay"></div>
    
    <header class="neon-header">
        <div class="header-grid">
            <div class="logo-container">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <h1 class="site-title glow-text"><?php bloginfo('name'); 1?></h1>
                <?php endif; ?>
            </div>
            
            <nav class="neon-nav">
                <button id="hamburger" aria-label="Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'container' => false
                )); ?>
            </nav> <!-- Primary navigation, you can make it prettier than me -->
        </div>
    </header>
    
    <main id="content" class="neon-content">
