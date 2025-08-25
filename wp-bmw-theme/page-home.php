<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<!-- HERO SECTION -->
<section class="hero" id="home">
    <div class="hero__stripes-container">
        <div class="hero__stripe" style="background-color: #20aeec;"></div>
        <div class="hero__stripe" style="background-color: #0a4d88;"></div>
        <div class="hero__stripe" style="background-color: #db1d24;"></div>
    </div>
    <div class="container hero__container">
        <div class="hero__content">
            <h1 class="hero__headline">Jacksonville's BMW Specialists</h1>
            <p class="hero__subhead">Performance, Service, Repair, Engine Rebuilds and More</p>
            <div class="hero__actions">
                <a href="#contact" class="button type1">
                  <span class="btn-txt">Book Service</span>
                </a>
                <a href="#services" class="button type1">
                  <span class="btn-txt">Our Services</span>
                </a>
            </div>
        </div>
        <div class="hero__image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bmw-transparent.png" alt="Bavarian Rennsport hero image" class="hero__image">
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="section" id="features">
    <div class="container">
        <div class="features__grid">
            <?php 
            $features = array(
                array(
                    'icon' => 'tune',
                    'title' => 'Performance Tuning',
                    'text' => 'Unlock your BMW\'s true potential with our custom ECU tunes.'
                ),
                array(
                    'icon' => 'service',
                    'title' => 'Expert Maintenance',
                    'text' => 'From oil changes to complex repairs, we use OEM parts and procedures.'
                ),
                array(
                    'icon' => 'diag',
                    'title' => 'Advanced Diagnostics',
                    'text' => 'Dealer-level tools for accurate troubleshooting and coding.'
                )
            );
            
            foreach ($features as $feature) : 
                get_template_part('template-parts/feature-card', null, $feature);
            endforeach; 
            ?>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="section section--bg-gray" id="about">
    <div class="container about__container">
        <div class="about__image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/jax-skyline.png" alt="Jacksonville skyline silhouette" class="about__image about__image--transparent">
        </div>
        <div class="about__content">
            <h2 class="section__title" style="text-align: left;">The Ultimate Care for Your Ultimate Driving Machine</h2>
            <p>BMW service in Jacksonville, by enthusiasts for enthusiasts. JAX Beamers is your independent specialist, staffed by BMW Master Technicians who handle everything from oil changes and inspections to complex brake, suspension, engine, electrical, and transmission repairs. We pair dealer-level tools with clear diagnostics and straight talk, and our work typically costs 20 to 30 percent less than the dealer. At each visit we check condition and safety, explain what is next, and help you plan maintenance around how you drive. Book an oil change, diagnostic, or pre-purchase inspection today.</p>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section class="section services" id="services">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Performance & Maintenance</h2>
            <p class="section__subtitle">From the street to the track, we provide a full suite of services to keep your BMW at its peak.</p>
        </div>
        <ul class="services__list">
            <?php 
            $services = array(
                'Engine & Transmission Service (Flushes, Rebuilds, Valve Adjust)',
                'Tires, Wheels & Balancing',
                'Exhaust & Emissions Repair',
                'Brake Service & Upgrades (Pads, Rotors, Sensors)',
                'Scheduled Maintenance (Oil, Filters, Plugs)',
                'Intake Valve Carbon Cleaning (Walnut Blasting)',
                'Cooling & HVAC System Service',
                'Electrical & Coding (Modules, Option Programming)',
                'Inspections & Diagnostics (Pre-Purchase, CEL)'
            );
            
            foreach ($services as $service) : ?>
                <li class="services__list-item"><?php echo esc_html($service); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="section" id="contact">
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
        </div>
    </div>
</section>

<?php get_footer(); ?>