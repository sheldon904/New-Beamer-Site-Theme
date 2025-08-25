<?php
/*
Template Name: Services Page
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

    <!-- SERVICES SECTION -->
    <section class="section services" id="services" style="margin-top: 3rem;">
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
</div>

<?php get_footer(); ?>