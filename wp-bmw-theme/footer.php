</main>

<footer class="footer">
    <div class="footer__m-stripes">
        <div class="stripe--light-blue"></div>
        <div class="stripe--dark-blue"></div>
        <div class="stripe--red"></div>
    </div>
    <div class="container">
        <div class="footer__grid">
            <div class="footer__col">
                <h4>Contact Us</h4>
                <ul class="footer__list">
                    <?php 
                    $config = wp_bmw_theme_get_config();
                    $phone = get_theme_mod('wp_bmw_theme_phone', $config['contact']['phone']);
                    $email = get_theme_mod('wp_bmw_theme_email', $config['contact']['email']);
                    $address = get_theme_mod('wp_bmw_theme_address', $config['contact']['address']);
                    ?>
                    <li><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></li>
                    <li><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></li>
                    <li><a href="<?php echo esc_url($config['contact']['google_maps_link']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($address); ?></a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Quick Links</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer__list',
                    'container' => false,
                    'fallback_cb' => 'wp_bmw_theme_footer_fallback_menu',
                ));
                ?>
            </div>
            <div class="footer__col">
                <h4>Hours</h4>
                <ul class="footer__list">
                    <?php foreach ($config['hours'] as $day => $time) : ?>
                        <li><strong><?php echo esc_html($day); ?>:</strong> <?php echo esc_html($time); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Follow Us</h4>
                <div class="footer__socials">
                    <?php foreach ($config['socials'] as $name => $link) : ?>
                        <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr(ucfirst($name)); ?>">
                            <?php echo esc_html(strtoupper(substr($name, 0, 1))); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="footer__bottom-bar">
            &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name') ?: 'JAX BEAMERS'; ?>. All rights reserved.
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

<?php
// Fallback footer menu if no menu is assigned
function wp_bmw_theme_footer_fallback_menu() {
    echo '<ul class="footer__list">';
    echo '<li><a href="#services">Services</a></li>';
    echo '<li><a href="#about">About</a></li>';
    echo '<li><a href="#contact">Contact</a></li>';
    echo '<li><a href="#contact">Book Service</a></li>';
    echo '</ul>';
}
?>