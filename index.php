<?php
// index.php
require_once 'config.php';

$form_message = '';
$form_submitted = false;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic CSRF check
    if (!isset($_POST['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        // Handle CSRF error, e.g., by logging it and displaying a generic error.
        $form_message = '<div class="form-message form-message--error">Error: Invalid request. Please try again.</div>';
    } else {
        // Sanitize and validate inputs (basic example)
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
        $vehicle = filter_input(INPUT_POST, 'vehicle', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($message)) {
            // In a real application, you would send an email or save to a database here.
            // For this mock, we just show a success message.
            $form_submitted = true;
            $form_message = '<div class="form-message form-message--success">Thank you, ' . e($name) . '! Your appointment request has been sent. We will contact you shortly.</div>';
        } else {
            $form_message = '<div class="form-message form-message--error">Please fill out all required fields correctly.</div>';
        }
    }
}

// Include header
require_once 'partials/header.php';
?>

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
            <p class="hero__subhead">Performance, maintenance, coding, and care</p>
            <div class="hero__actions">
                <a href="#contact" class="btn btn--primary">Book Service</a>
                <a href="#services" class="btn btn--secondary">Our Services</a>
            </div>
        </div>
        <div class="hero__image-wrapper">
            <img src="assets/img/bmw-transparent.png" alt="Bavarian Rennsport hero image" class="hero__image">
        </div>
    </div>
</section>

<!-- FEATURES SECTION -->
<section class="section" id="features">
    <div class="container">
        <div class="features__grid">
            <?php foreach ($config['features'] as $feature) : ?>
                <?php include 'partials/feature-card.php'; // Pass $feature to the partial ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="section section--bg-gray" id="about">
    <div class="container about__container">
        <div class="about__image-wrapper">
            <img src="assets/img/jax-skyline.png" alt="Jacksonville skyline silhouette" class="about__image about__image--transparent">
        </div>
        <div class="about__content">
            <h2 class="section__title" style="text-align: left;">The Ultimate Care for Your Ultimate Driving Machine</h2>
            <p>JAX BEAMERS was founded by enthusiasts, for enthusiasts. We got tired of the dealership runaround and the corner shops that didn't understand the precision engineering of a BMW. We combine a passion for the brand with dealer-level equipment and a commitment to transparent, honest service. Whether you're here for a routine oil change or a full performance build, we treat every car as if it were our own.</p>
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
            <?php foreach ($config['services'] as $service) : ?>
                <li class="services__list-item"><?= e($service) ?></li>
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
            <div class="contact__info-item">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.5 17.5S15.5 21 12 21 6.5 17.5 6.5 17.5 4.5 14 4.5 12 6.5 6.5 6.5 6.5s2-3.5 5.5-3.5 5.5 3.5 5.5 3.5S19.5 10 19.5 12s-2 5.5-2 5.5z"></path><circle cx="12" cy="12" r="2.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle></svg>
                <div><strong>Address:</strong><br><a href="<?= e($config['contact']['google_maps_link']) ?>" target="_blank" rel="noopener noreferrer"><?= e($config['contact']['address']) ?></a></div>
            </div>
            <div class="contact__info-item">
                 <svg width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 6.75C4.75 5.64543 5.64543 4.75 6.75 4.75H17.25C18.3546 4.75 19.25 5.64543 19.25 6.75V17.25C19.25 18.3546 18.3546 19.25 17.25 19.25H6.75C5.64543 19.25 4.75 18.3546 4.75 17.25V6.75Z"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 7.5L12 12.5L18.5 7.5"></path></svg>
                <div><strong>Email:</strong><br><a href="mailto:<?= e($config['contact']['email']) ?>"><?= e($config['contact']['email']) ?></a></div>
            </div>
             <div class="contact__info-item">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 16.5L8 15.25L10.5 18L13.5 15.5L16.25 18.25L19.25 16.5"></path><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 8C19.25 8 17.5 4.75 12 4.75S4.75 8 4.75 8"></path></svg>
                <div><strong>Phone:</strong><br><a href="tel:<?= e(preg_replace('/[^0-9+]', '', $config['contact']['phone'])) ?>"><?= e($config['contact']['phone']) ?></a></div>
            </div>
        </div>
        <div class="contact__form-wrapper">
            <h3>Request Appointment</h3>
            <?php if ($form_submitted) {
                echo $form_message;
            } else { 
                if (!empty($form_message)) { echo $form_message; }
            ?>
            <form action="index.php#contact" method="POST" class="contact-form">
                <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="vehicle">Vehicle (Year, Model)</label>
                    <input type="text" id="vehicle" name="vehicle" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">How can we help?</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn--primary">Request Appointment</button>
            </form>
            <?php } ?>
        </div>
    </div>
</section>

<?php
// Include footer
require_once 'partials/footer.php';
?>
