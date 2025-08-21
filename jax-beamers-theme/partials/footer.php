<?php
// partials/footer.php

/**
 * Renders the site footer.
 * Expects $config array to be in scope from config.php
 */
?>
</main> <?php /* Closes the <main> tag from header.php */ ?>

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
                    <li><a href="tel:<?= e(preg_replace('/[^0-9+]', '', $config['contact']['phone'])) ?>"><?= e($config['contact']['phone']) ?></a></li>
                    <li><a href="mailto:<?= e($config['contact']['email']) ?>"><?= e($config['contact']['email']) ?></a></li>
                    <li><a href="<?= e($config['contact']['google_maps_link']) ?>" target="_blank" rel="noopener noreferrer"><?= e($config['contact']['address']) ?></a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Quick Links</h4>
                <ul class="footer__list">
                    <?php foreach ($config['navigation'] as $name => $link) : ?>
                        <li><a href="<?= e($link) ?>"><?= e($name) ?></a></li>
                    <?php endforeach; ?>
                     <li><a href="#contact">Book Service</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Hours</h4>
                <ul class="footer__list">
                    <?php foreach ($config['hours'] as $day => $time) : ?>
                        <li><strong><?= e($day) ?>:</strong> <?= e($time) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Follow Us</h4>
                <div class="footer__socials">
                    <?php foreach ($config['socials'] as $name => $link) : ?>
                        <a href="<?= e($link) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= e(ucfirst($name)) ?>">
                            <?php 
                                // Placeholder for social icons
                                echo ucfirst(substr($name, 0, 1)); 
                            ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="footer__bottom-bar">
            &copy; <?php echo date('Y'); ?> JAX BEAMERS. All rights reserved.
        </div>
    </div>
</footer>

<script src="assets/js/main.js?v=<?php echo time(); // Cache busting ?>"></script>

</body>
</html>
