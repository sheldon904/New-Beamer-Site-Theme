<?php
// partials/header.php

/**
 * Renders the site header.
 * Expects $config array to be in scope from config.php
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e(SITE_TITLE) ?></title>
    <meta name="description" content="<?= e(SITE_DESCRIPTION) ?>">
    <meta name="author" content="<?= e(SITE_AUTHOR) ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); // Cache busting ?>">
</head>
<body>

<header class="header">
    <div class="container header__container">
        <a href="#" class="header__brand">JAX<span>BEAMERS</span></a>
        
        <button class="header__nav-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="main-nav">
            <span class="icon--menu"></span>
        </button>

        <nav class="header__nav" id="main-nav" aria-hidden="true">
            <ul class="header__nav-list">
                <?php foreach ($config['navigation'] as $name => $link) : ?>
                    <li><a href="<?= e($link) ?>" class="header__nav-link"><?= e($name) ?></a></li>
                <?php endforeach; ?>
            </ul>
            <a href="#contact" class="button type1 button--header">
              <span class="btn-txt">Book Service</span>
            </a>
        </nav>
    </div>
</header>

<main>
