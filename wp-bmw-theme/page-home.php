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
                <a href="https://www.bavarianrennsport.com/book-appointment/" class="button type1">
                  <span class="btn-txt">Book Service</span>
                </a>
                <a href="https://www.bavarianrennsport.com/car-brands/bmw/" class="button type1">
                  <span class="btn-txt">Our Services</span>
                </a>
            </div>
        </div>
        <div class="hero__image-wrapper">
            <img src="https://jaxbimmers.com/wp-content/uploads/2025/08/bmw-transparent-scaled.webp" alt="Bavarian Rennsport hero image" class="hero__image">
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
            <img src="https://jaxbimmers.com/wp-content/uploads/2025/09/fast-bmw-jax.webp" alt="Jacksonville skyline silhouette" class="about__image about__image--transparent">
        </div>
        <div class="about__content">
            <h2 class="section__title" style="text-align: left;">The Ultimate Care for Your Ultimate Driving Machine</h2>
            <p>BMW service in Jacksonville, by enthusiasts for enthusiasts. JAX Bimmers is your independent specialist, staffed by BMW Master Technicians who handle everything from oil changes and inspections to complex brake, suspension, engine, electrical, and transmission repairs.</p><br><p>We pair dealer-level tools with clear diagnostics and straight talk, and our work typically costs 20 to 30 percent less than the dealer. At each visit we check condition and safety, explain what is next, and help you plan maintenance around how you drive.</p><br><p>Book an oil change, diagnostic, or pre-purchase inspection today.</p>
        </div>
    </div>
</section>

<!-- ABOUT THE EXPERT SECTION -->
<section class="section section--bg-gray" id="expert">
    <div class="container">
        <hr class="about-expert__divider">
        <div class="about__content">
            <h2 class="section__title">About the Expert: Shawn Welk</h2>
            <p>If you drive a BMW in Jacksonville, you want someone who knows these cars inside and out. Since the 90s, Shawn has lived the BMW life and turned that passion into practical help for local owners. Jax Bimmers is his way of giving you a smarter path to buy, maintain, and upgrade with confidence.</p><br>
            <p>Shawn’s story starts with weekend wrenching and late-night forum threads in the 90s, then grows into years of meets, road trips, and real problem solving for fellow owners. Along the way he built a trusted network of technicians, alignment specialists, coders, and parts suppliers. Today, that network is your shortcut to the right answers and the right people.</p><br>
            <p>His approach is simple. Protect reliability, unlock performance where it counts, and plan upgrades in the right order. Whether you are eyeing your first BMW or dialing in a modern M car, Shawn maps out a clear plan for inspections, maintenance, and sensible mods so every dollar pushes your build forward.</p><br>
        </div>
        <div style="margin-bottom: 2rem;">
            <center><img src="https://jaxbimmers.com/wp-content/uploads/2025/08/shawn.webp" alt="Shawn Welk - BMW Expert" style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);"></center>
        </div>
        <div class="about__content">
            <p>Thinking about buying. Shawn’s pre-purchase consults help you avoid costly surprises and spot the cars worth chasing. Already own one. He creates staged maintenance roadmaps that focus on fluids, cooling, suspension, and braking so the car feels tight and responsive again. Want better lap times or sharper daily manners. He recommends proven software, suspension, and brake setups that keep reliability in check.</p><br>
            <p>You are never guessing alone. Shawn connects you with independent shops that do it right the first time, alignment pros who understand BMW geometry, and reputable parts sources that stand behind what they sell. It is the difference between hoping for results and knowing what you will get.</p><br>
            <p>Jax Bimmers is also a community. Expect local meets, Q&amp;A sessions, and real feedback from owners who actually drive their cars. If you want straight talk, honest recommendations, and a plan that fits your budget and goals, start with Shawn and make your next BMW decision your best one yet.</p><br>
            <p>Ready to take the next step. Book a quick consult, ask a question, or request a shop referral. If you prefer to explore first, join the newsletter and get notified about upcoming meets and new owner guides tailored to Jacksonville BMW drivers.</p>
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
            <p>On request, we offer pickup and drop off, as well as rental vehicles, to keep your day moving.</p><br>
            <p>Your time matters. We aim to eliminate long waits and hassles, and we often provide same-day service for routine maintenance.</p><br>
            <p>Our team is passionate about keeping your BMW running perfectly. Whether you are in Ponte Vedra, Nocatee, Orange Park, Amelia Island, or anywhere near Jacksonville and Atlantic Beach, you can count on this BMW service near you to go above and beyond the competition.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
