<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="JAX BIMMERS is Jacksonville's premier independent shop for BMW performance tuning, maintenance, coding, and expert care. We treat your ultimate driving machine with the ultimate attention to detail.">
    <meta name="author" content="JAX BIMMERS">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="header">
    <div class="container header__container">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header__brand">
                <?php 
                $site_name = get_bloginfo('name');
                if ($site_name) {
                    echo 'JAX<span>BIMMERS</span>';
                } else {
                    echo 'JAX<span>BIMMERS</span>';
                }
                ?>
            </a>
        <?php endif; ?>
        
        <button class="header__nav-toggle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="main-nav">
            <span class="icon--menu"></span>
        </button>

        <nav class="header__nav" id="main-nav" aria-hidden="true">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'header__nav-list',
                'container' => false,
                'fallback_cb' => 'wp_bmw_theme_fallback_menu',
                'link_before' => '',
                'link_after' => '',
                'walker' => new WP_BMW_Theme_Walker_Nav_Menu()
            ));
            ?>
            <a href="https://www.bavarianrennsport.com/book-appointment/" class="button type1 button--header">
              <span class="btn-txt">Book Service</span>
            </a>
        </nav>
    </div>
</header>

<main>

<?php
// Fallback menu if no menu is assigned
function wp_bmw_theme_fallback_menu() {
    echo '<ul class="header__nav-list">';
    echo '<li><a href="https://www.bavarianrennsport.com/car-brands/bmw/" class="header__nav-link">Services</a></li>';
    echo '<li><a href="#about" class="header__nav-link">About</a></li>';
    echo '<li><a href="#contact" class="header__nav-link">Contact</a></li>';
    echo '</ul>';
}

// Custom walker for navigation menu
class WP_BMW_Theme_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';

        $item_output = $args->link_before ?? '';
        $item_output .= '<a class="header__nav-link"' . $attributes .'>';
        $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
        $item_output .= '</a>';
        $item_output .= $args->link_after ?? '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}
?>
