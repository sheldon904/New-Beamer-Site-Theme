<?php get_header(); ?>

<div class="container" style="padding: 5rem 0; text-align: center;">
    <div class="error-404">
        <h1 class="section__title">404 - Page Not Found</h1>
        <p style="font-size: 1.2rem; margin-bottom: 2rem;">Sorry, the page you're looking for doesn't exist.</p>
        
        <div class="hero__actions">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="button type1">
              <span class="btn-txt">Go Home</span>
            </a>
            <a href="#contact" class="button type1">
              <span class="btn-txt">Contact Us</span>
            </a>
        </div>

        <div style="margin-top: 3rem;">
            <h3>Looking for BMW service in Jacksonville?</h3>
            <p>You can still reach out to JAX Bimmers for all your BMW needs!</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>