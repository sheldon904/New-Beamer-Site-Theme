<?php
// functions.php

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function wp_bmw_theme_setup() {
    // Add theme support
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('customize-selective-refresh-widgets');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style();

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wp-bmw-theme'),
        'footer' => __('Footer Menu', 'wp-bmw-theme'),
    ));
}
add_action('after_setup_theme', 'wp_bmw_theme_setup');

// Enqueue styles and scripts
function wp_bmw_theme_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style(
        'wp-bmw-theme-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap',
        array(),
        null
    );

    // Enqueue main stylesheet
    wp_enqueue_style(
        'wp-bmw-theme-style',
        get_stylesheet_uri(),
        array('wp-bmw-theme-google-fonts'),
        wp_get_theme()->get('Version')
    );

    // Enqueue main JavaScript
    wp_enqueue_script(
        'wp-bmw-theme-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'wp_bmw_theme_scripts');

// Helper function for sanitizing output (similar to the original e() function)
function wp_bmw_theme_esc($string) {
    return esc_html($string);
}

// Site configuration data
function wp_bmw_theme_get_config() {
    return array(
        'contact' => array(
            'phone' => '(904) 270-9390',
            'email' => 'bavarianrennsport@gmail.com',
            'address' => '2027 Mayport Rd, Jacksonville, FL 32233',
            'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=2027+Mayport+Rd+Jacksonville+FL+32233'
        ),
        'hours' => array(
            'Weekdays' => '9:00 AM – 7:00 PM',
            'Saturday' => 'CLOSED, call for appointments and emergencies',
            'Sunday' => 'CLOSED to spend time with God and Family'
        ),
        'socials' => array(
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'youtube' => 'https://youtube.com'
        ),
        'navigation' => array(
            'Services' => '#services',
            'About' => '#about',
            'Contact' => '#contact'
        )
    );
}

// Customizer settings
function wp_bmw_theme_customize_register($wp_customize) {
    // Site Identity Section
    $wp_customize->add_section('wp_bmw_theme_contact', array(
        'title' => __('Contact Information', 'wp-bmw-theme'),
        'priority' => 30,
    ));

    // Phone
    $wp_customize->add_setting('wp_bmw_theme_phone', array(
        'default' => '(904) 270-9390',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('wp_bmw_theme_phone', array(
        'label' => __('Phone Number', 'wp-bmw-theme'),
        'section' => 'wp_bmw_theme_contact',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('wp_bmw_theme_email', array(
        'default' => 'bavarianrennsport@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('wp_bmw_theme_email', array(
        'label' => __('Email Address', 'wp-bmw-theme'),
        'section' => 'wp_bmw_theme_contact',
        'type' => 'email',
    ));

    // Address
    $wp_customize->add_setting('wp_bmw_theme_address', array(
        'default' => '2027 Mayport Rd, Jacksonville, FL 32233',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('wp_bmw_theme_address', array(
        'label' => __('Business Address', 'wp-bmw-theme'),
        'section' => 'wp_bmw_theme_contact',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'wp_bmw_theme_customize_register');

// Custom post types and other theme-specific functionality can be added here

// Security: Remove WordPress version info
remove_action('wp_head', 'wp_generator');

// Clean up wp_head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

// Register custom page templates for WordPress 4.7+
function wp_bmw_theme_add_page_templates($templates) {
    $templates['page-home.php'] = 'Home Page';
    $templates['page-services.php'] = 'Services Page';
    $templates['page-contact.php'] = 'Contact Page';
    return $templates;
}
add_filter('theme_page_templates', 'wp_bmw_theme_add_page_templates');

// Enable template selection in page editor
function wp_bmw_theme_redirect_page_template() {
    $template = get_page_template_slug();
    if ($template) {
        $new_template = locate_template(array($template));
        if ($new_template) {
            return $new_template;
        }
    }
    return null;
}
add_filter('page_template', 'wp_bmw_theme_redirect_page_template');

// Add custom body classes for different templates
function wp_bmw_theme_body_classes($classes) {
    if (is_page_template('page-home.php')) {
        $classes[] = 'home-template';
    }
    if (is_page_template('page-services.php')) {
        $classes[] = 'services-template';
    }
    if (is_page_template('page-contact.php')) {
        $classes[] = 'contact-template';
    }
    return $classes;
}
add_filter('body_class', 'wp_bmw_theme_body_classes');