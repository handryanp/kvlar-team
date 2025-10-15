<?php
// Sertakan header dan footer
include 'includes/header.php';
include 'config.php';
?>

<section class="about-section">
    <h2>About KVLAR TEAM</h2>
    <p class="tagline">We are passionate digital architects committed to innovation, functionality, and code aesthetics.</p>

    <div class="mission-vision-grid">
        <div class="card mission-card">
            <h3>Our Mission</h3>
            <p>To create software solutions that are **robust, scalable, and *user-friendly*** to help our clients achieve their business goals efficiently.</p>
        </div>
        <div class="card vision-card">
            <h3>Our Vision</h3>
            <p>To be a **leading** development team known for high code quality standards and innovative approaches to every project challenge.</p>
        </div>
    </div>
</section>

<section class="team-section">
    <h2>Meet Our Team</h2>
    <div class="team-list">

        <div class="team-member-card">
            <i class="bi bi-person team-icon"></i>
            <h4>Handryansyah Purba</h4>
            <p class="role">Lead Developer & Backend Specialist</p>
            <p class="bio">Expert in PHP system architecture and database security. Always seeking efficiency in every line of code.</p>
            <i class="bi bi-instagram"> <a href="#" class="social-link">Instagram</a></i>
        </div>

        <div class="team-member-card">
            <i class="bi bi-person team-icon"></i>
            <h4>Risandy Syahnakri</h4>
            <p class="role">Frontend Engineer & UI/UX Design</p>
            <p class="bio">Focus on creating seamless user experiences and modern interfaces. Ensuring every design is *pixel perfect*.</p>
            <i class="bi bi-instagram"> <a href="#" class="social-link">Instagram</a></i>
        </div>

        <div class="team-member-card">
            <i class="bi bi-person team-icon"></i>
            <h4>Muhammad Rivaldi</h4>
            <p class="role">Project Manager & QA</p>
            <p class="bio">The link between the team and clients, ensuring projects are delivered on time and quality is maintained from start to finish.</p>
            <i class="bi bi-instagram"> <a href="#" class="social-link">Instagram</a></i>
        </div>

    </div>
</section>

<section class="cta-about">
    <h2>Interest to join with us?</h2>
    <p>We are always looking for talented individuals to join our team!</p>
    <a href="<?php echo $base_url; ?>contact" class="button">Start a Discussion</a>
</section>

<?php include 'includes/footer.php'; ?>