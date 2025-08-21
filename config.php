<?php
// config.php

// Start the session if it's not already started.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// --- SITE CONFIGURATION ---

// Set the timezone
date_default_timezone_set('America/New_York');

// Site Details
define('SITE_TITLE', 'JAX BEAMERS - BMW Performance and Service in Jacksonville');
define('SITE_DESCRIPTION', 'JAX BEAMERS is Jacksonville\'s premier independent shop for BMW performance tuning, maintenance, coding, and expert care. We treat your ultimate driving machine with the ultimate attention to detail.');
define('SITE_AUTHOR', 'JAX BEAMERS');

// Contact Information
$config = [
    'contact' => [
        'phone' => '(904) 270-9390',
        'email' => 'bavarianrennsport@gmail.com',
        'address' => '2027 Mayport Rd, Jacksonville, FL 32233',
        'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=2027+Mayport+Rd+Jacksonville+FL+32233'
    ],
    'hours' => [
        'Weekdays' => '9:00 AM – 7:00 PM',
        'Saturday' => 'CLOSED, call for appointments and emergencies',
        'Sunday' => 'CLOSED to spend time with God and Family'
    ],
    'socials' => [
        'facebook' => 'https://facebook.com',
        'instagram' => 'https://instagram.com',
        'youtube' => 'https://youtube.com'
    ],
    'features' => [
        [
            'icon' => 'tune', // Using a keyword for a potential icon font or SVG
            'title' => 'Performance Tuning',
            'text' => 'Unlock your BMW\'s true potential with our custom ECU tunes.'
        ],
        [
            'icon' => 'service',
            'title' => 'Expert Maintenance',
            'text' => 'From oil changes to complex repairs, we use OEM parts and procedures.'
        ],
        [
            'icon' => 'diag',
            'title' => 'Advanced Diagnostics',
            'text' => 'Dealer-level tools for accurate troubleshooting and coding.'
        ]
    ],
    'services' => [
        'Engine & Transmission Tuning',
        'Suspension Upgrades (Coilovers, Springs)',
        'Performance Exhaust Systems',
        'Big Brake Kits & Upgrades',
        'Scheduled Maintenance (Oil, Filters, Plugs)',
        'Walnut Blasting (Intake Valve Cleaning)',
        'Rod Bearing Replacement',
        'Custom Vehicle Coding (DRL, Seatbelt Chimes)',
        'Pre-Purchase Inspections'
    ],
    'navigation' => [
        'Services' => '#services',
        'About' => '#about',
        'Contact' => '#contact'
    ]
];

// --- FORM HANDLING & SECURITY ---

// Generate a CSRF token if one doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Helper function for sanitizing output
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>