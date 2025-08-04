<?php
define('NEON_CORE_VERSION', '1.0.0');

function neon_core_setup() {
    load_theme_textdomain('neon-core', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));
    
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor.css');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'neon-core'),
        'footer' => __('Footer Menu', 'neon-core')
    ));
}
add_action('after_setup_theme', 'neon_core_setup');

function neon_core_scripts() {
    wp_enqueue_style('neon-core-style', get_stylesheet_uri(), array(), NEON_CORE_VERSION);
    wp_enqueue_style('neon-core-main', get_theme_file_uri('/assets/css/main.css'), array(), NEON_CORE_VERSION);
    
    wp_enqueue_script('three-js', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', array(), 'r128', true);
    wp_enqueue_script('neon-core-main', get_theme_file_uri('/assets/js/main.js'), array('three-js'), NEON_CORE_VERSION, true);
    
    wp_localize_script('neon-core-main', 'neonCoreData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('neon_core_nonce'),
        'isFrontPage' => is_front_page(),
        'themeUri' => get_template_directory_uri(),
        'userSettings' => array(
            'prefersDark' => isset($_COOKIE['neon_dark_mode']) ? $_COOKIE['neon_dark_mode'] : 'auto'
        )
    ));
}
add_action('wp_enqueue_scripts', 'neon_core_scripts');

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/ai-integration.php';
