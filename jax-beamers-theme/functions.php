<?php
// functions.php

function jax_beamers_enqueue_assets() {
    // Enqueue the main stylesheet.
    wp_enqueue_style(
        'jax-beamers-style',
        get_stylesheet_uri(),
        [],
        '1.0' // Version number
    );

    // Enqueue the main JavaScript file.
    wp_enqueue_script(
        'jax-beamers-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [], // No dependencies
        '1.0', // Version number
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'jax_beamers_enqueue_assets');

?>