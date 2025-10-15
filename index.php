<?php 
include 'includes/header.php';
include 'config.php';
?>

<section class="hero">
    <h2>Welcome to KVLAR TEAM</h2>
    <p>We are a passionate team of developers creating innovative digital solutions.</p>
    <a href="<?php echo $base_url; ?>projects" class="button">See Our Projects</a>
</section>

<section class="services-overview">
    <h2 class="section-title">Our Core Services</h2>
    <div class="service-cards-grid">

        <div class="service-card">
            <i class="bi bi-code-slash service-icon"></i>
            <h3>Web Development</h3>
            <p>Building robust and scalable custom web applications using PHP Native, Laravel Framework, CodeIgniter, and other modern technologies.</p>
        </div>

        <div class="service-card">
            <i class="bi bi-phone service-icon"></i>
            <h3>Mobile Application</h3>
            <p>Developing mobile applications (Android) that are fully integrated with your web backend.</p>
        </div>

        <div class="service-card">
            <i class="bi bi-search service-icon"></i>
            <h3>Audit & Consulting</h3>
            <p>Analyzing and optimizing existing code, as well as providing architecture and system security consulting.</p>
        </div>

    </div>
</section>

<section class="why-us">
    <h2 class="section-title">Why Choose KVLAR TEAM?</h2>
    <div class="why-us-items">

        <div class="why-us-item">
            <h4><i class="bi bi-shield-lock"></i> Secure & Clean Code</h4>
            <p>Security is a priority. We write clean, tested PHP code that is resistant to common vulnerabilities.</p>
        </div>

        <div class="why-us-item">
            <h4><i class="bi bi-clock-history"></i> On-Time Commitment</h4>
            <p>We guarantee project completion according to the agreed schedule without compromising final quality.</p>
        </div>

        <div class="why-us-item">
            <h4><i class="bi bi-hand-thumbs-up"></i> Post-Project Support</h4>
            <p>We provide technical support and maintenance to ensure your solutions run smoothly after launch.</p>
        </div>

    </div>
    <a href="<?php echo $base_url; ?>about" class="button secondary-button">Learn More About Us</a>
</section>

<?php include 'includes/footer.php'; ?>