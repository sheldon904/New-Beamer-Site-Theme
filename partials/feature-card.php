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
            <!-- 
                This is a placeholder for an icon. 
                In a real project, you might use an SVG sprite, an icon font, or inline SVGs.
                For now, we'll use a simple text representation.
            -->
            <?php 
                $icon_map = ['tune' => '??', 'service' => '??', 'diag' => '??'];
                echo e($icon_map[$feature['icon']] ?? '??');
            ?>
        </div>
    <?php endif; ?>
    <h3 class="feature-card__title"><?= e($feature['title']) ?></h3>
    <p class="feature-card__text"><?= e($feature['text']) ?></p>
</div>
