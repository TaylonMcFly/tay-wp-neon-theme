<?php
function neon_core_customize_register($wp_customize) {
    $wp_customize->add_section('neon_colors', array(
        'title' => __('Neon Colors', 'neon-core'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('neon_primary', array(
        'default' => '#0ff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'neon_primary', array(
        'label' => __('Primary Neon Color', 'neon-core'),
        'section' => 'neon_colors',
    )));
    
    $wp_customize->add_section('webgl_settings', array(
        'title' => __('WebGL Effects', 'neon-core'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('webgl_enabled', array(
        'default' => true,
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('webgl_enabled', array(
        'label' => __('Enable WebGL Background', 'neon-core'),
        'section' => 'webgl_settings',
        'type' => 'checkbox',
    ));
}

add_action('customize_register', 'neon_core_customize_register');
