<?php
/**
 * DTC Southwest Designs - Custom Homepage
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Discover Unique Artistic Jewelry</h1>
            <p>Handcrafted jewelry pieces that elevate your style and express your individuality</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button">Shop Now</a>
        </div>
    </section>

    <!-- CATEGORIES SECTION -->
    <section class="categories-section">
        <div class="section-container">
            <h2>Explore Our Collections</h2>
            <p>Our jewelry categories</p>
        </div>
    </section>

    <!-- FEATURED PRODUCTS -->
    <section class="featured-products-section">
        <div class="section-container">
            <h2>Featured Collections</h2>
            <p>Our most popular pieces</p>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about-section">
        <div class="section-container">
            <h2>About DTC Southwest Designs</h2>
            <p>We specialize in crafting unique, artistic jewelry pieces that elevate your collection.</p>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials-section">
        <div class="section-container">
            <h2>What Our Customers Say</h2>
            <p>Our customers love our work</p>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <div class="section-container">
            <h2>Ready to Find Your Perfect Piece?</h2>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button-large">Browse All Products</a>
        </div>
    </section>

</main>
