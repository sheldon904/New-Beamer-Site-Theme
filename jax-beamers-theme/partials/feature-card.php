<?php
// partials/feature-card.php

/**
 * Renders a feature card.
 * Expects $feature array with 'icon', 'title', and 'text' keys.
 */
?>
<div class="feature-card">
    <?php if (!empty($feature['icon'])) : ?>
        <div class="feature-card__icon">
        <?php
            $icon_map = [
                'tune' => 'Performance Icon.png',
                'service' => 'Expert Maintenance.png',
                'diag' => 'advanced diagnostics.png'
            ];
            $icon_file = $icon_map[$feature['icon']] ?? '';
            if ($icon_file) {
                echo '<img src="assets/img/icons/' . e($icon_file) . '" alt="' . e($feature['title']) . '" class="feature-card__img-icon">';
            }
        ?>
    </div>
    <?php endif; ?>
    <h3 class="feature-card__title"><?= e($feature['title']) ?></h3>
    <p class="feature-card__text"><?= e($feature['text']) ?></p>
</div>
