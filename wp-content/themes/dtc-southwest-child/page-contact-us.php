<?php
/**
 * DTC Southwest Contact Page Template
 */
get_header();
?>

<main id="primary" class="site-main contact-page">

    <section class="contact-hero">
        <div class="section-container">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you! Reach out with any questions or custom requests.</p>
        </div>
    </section>

    <section class="contact-content">
        <div class="section-container">
            <div class="contact-grid">

                <!-- Contact Info -->
                <div class="contact-info">
                    <h2>Contact Information</h2>

                    <div class="contact-item">
                        <h3>📞 Phone</h3>
                        <p><a href="tel:5055544781">505-554-4781</a></p>
                    </div>

                    <div class="contact-item">
                        <h3>📧 Email</h3>
                        <p><a href="mailto:dtcsouthwestdesigns@gmail.com">dtcsouthwestdesigns@gmail.com</a></p>
                    </div>

                    <div class="contact-item">
                        <h3>📍 Location</h3>
                        <p>Yucca Art Gallery<br>Old Town, Albuquerque, NM</p>
                    </div>

                    <div class="contact-item">
                        <h3>🎪 Visit Us At Shows</h3>
                        <p><strong>2026 Event Schedule:</strong></p>
                        <ul>
                            <li>Santa Fe Fiesta Fine Arts & Crafts Market - 9/5-7</li>
                            <li>Rio Grande Arts & Crafts Balloon Fiesta - 10/3-11</li>
                            <li>Thanksgiving Holiday Show, Expo NM - 11/27-29</li>
                        </ul>
                    </div>

                    <div class="contact-item social">
                        <h3>🔗 Follow Us</h3>
                        <div class="social-links">
                            <a href="https://www.facebook.com/Dianet.Castillo.16" target="_blank">Facebook</a>
                            <a href="https://www.instagram.com/dtcsouthwest_design" target="_blank">Instagram</a>
                            <a href="https://www.pinterest.com/DianeTCastilloJewelry" target="_blank">Pinterest</a>
                            <a href="https://www.youtube.com/@dianecastillo7498" target="_blank">YouTube</a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                            the_content();
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
