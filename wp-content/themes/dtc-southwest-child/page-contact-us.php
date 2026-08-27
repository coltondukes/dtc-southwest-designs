<?php
get_header();
?>

<div class="site-content">
    <section class="contact-hero">
        <div class="contact-hero-content">
            <h1>Contact Us</h1>
            <p>Get In Touch - We'd Love to Hear From You</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>DTC Southwest Designs</h2>
                    
                    <div class="contact-item">
                        <h3>Address</h3>
                        <p>Yucca Art Gallery<br>Old Town<br>Albuquerque, NM</p>
                    </div>

                    <div class="contact-item">
                        <h3>Phone</h3>
                        <p><a href="tel:505-554-4781">505-554-4781</a></p>
                    </div>

                    <div class="contact-item">
                        <h3>Email</h3>
                        <p><a href="mailto:dtcsouthwestdesigns@gmail.com">dtcsouthwestdesigns@gmail.com</a></p>
                    </div>

                    <div class="contact-item">
                        <h3>2026 Event Schedule</h3>
                        <ul>
                            <li>Santa Fe Fiesta Fine Arts & Crafts Market (9/5-7)</li>
                            <li>Rio Grande Arts & Crafts Balloon Fiesta (10/3-11)</li>
                            <li>Thanksgiving Holiday Show, Expo NM (11/27-29)</li>
                        </ul>
                    </div>

                    <div class="contact-item social-links">
                        <h3>Follow Us</h3>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/Dianet.Castillo.16" target="_blank">Facebook</a>
                            <a href="https://www.instagram.com/dtcsouthwest_design" target="_blank">Instagram</a>
                            <a href="https://www.pinterest.com/DianeTCastilloJewelry" target="_blank">Pinterest</a>
                            <a href="https://www.youtube.com/@dianecastillo7498" target="_blank">YouTube</a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <h2>Send Us a Message</h2>
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
get_footer();
?>
