<?php
/**
 * Template part for displaying feature cards
 * 
 * @package WP_BMW_Theme
 */

// Get the feature data passed to this template part
$feature = $args ?? array();

if (empty($feature)) {
    return;
}
?>

<div class="feature-card">
    <?php if (!empty($feature['icon'])) : ?>
        <div class="feature-card__icon">
        <?php
            $icon_map = array(
                'tune' => 'Performance Icon.png',
                'service' => 'Expert Maintenance.png',
                'diag' => 'advanced diagnostics.png'
            );
            $icon_file = isset($icon_map[$feature['icon']]) ? $icon_map[$feature['icon']] : '';
            if ($icon_file) {
                echo '<img src="' . get_template_directory_uri() . '/assets/images/icons/' . esc_attr($icon_file) . '" alt="' . esc_attr($feature['title']) . '" class="feature-card__img-icon">';
            }
        ?>
        </div>
    <?php endif; ?>
    <h3 class="feature-card__title"><?php echo esc_html($feature['title']); ?></h3>
    <p class="feature-card__text"><?php echo esc_html($feature['text']); ?></p>
</div>