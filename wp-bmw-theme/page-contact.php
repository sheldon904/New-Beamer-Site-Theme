<?php
/*
Template Name: Contact Page
*/

get_header(); ?>

<div class="container" style="padding: 5rem 0;">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title section__title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>

    <!-- CONTACT SECTION -->
    <section class="section" id="contact" style="padding-top: 2rem;">
        <div class="container contact__container">
            <div class="contact__info">
                <h3>Get In Touch</h3>
                <p>Ready to schedule a service or have a question for our experts? Reach out and we'll get back to you as soon as possible.</p>
                <?php 
                $config = wp_bmw_theme_get_config();
                $phone = get_theme_mod('wp_bmw_theme_phone', $config['contact']['phone']);
                $email = get_theme_mod('wp_bmw_theme_email', $config['contact']['email']);
                $address = get_theme_mod('wp_bmw_theme_address', $config['contact']['address']);
                ?>
                <div class="contact__info-item">
                    <div><strong>Address:</strong><br><a href="<?php echo esc_url($config['contact']['google_maps_link']); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($address); ?></a></div>
                </div>
                <div class="contact__info-item">
                    <div><strong>Email:</strong><br><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></div>
                </div>
                <div class="contact__info-item">
                    <div><strong>Phone:</strong><br><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></div>
                </div>
            </div>
            <div class="contact__text-wrapper">
                <h3>Premium BMW Care Without the Dealership Price</h3>
                <p>On request, we offer pickup and drop off, as well as rental vehicles, to keep your day moving.</p>
                <p>Your time matters. We aim to eliminate long waits and hassles, and we often provide same-day service for routine maintenance.</p>
                <p>Our team is passionate about keeping your BMW running perfectly. Whether you are in Ponte Vedra, Nocatee, Orange Park, Amelia Island, or anywhere near Jacksonville and Atlantic Beach, you can count on this BMW service near you to go above and beyond the competition.</p>
                
                <div class="hero__actions" style="margin-top: 2rem;">
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="button type1">
                      <span class="btn-txt">Call Now</span>
                    </a>
                    <a href="mailto:<?php echo esc_attr($email); ?>" class="button type1">
                      <span class="btn-txt">Email Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>