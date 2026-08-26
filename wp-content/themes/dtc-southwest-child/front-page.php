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
            <div class="categories-grid">
                <div class="category-card">
                    <img src="https://via.placeholder.com/300x250" alt="Necklaces">
                    <h3>Necklaces</h3>
                    <a href="#" class="explore-link">Explore</a>
                </div>
                <div class="category-card">
                    <img src="https://via.placeholder.com/300x250" alt="Bracelets">
                    <h3>Bracelets</h3>
                    <a href="#" class="explore-link">Explore</a>
                </div>
                <div class="category-card">
                    <img src="https://via.placeholder.com/300x250" alt="Earrings">
                    <h3>Earrings</h3>
                    <a href="#" class="explore-link">Explore</a>
                </div>
                <div class="category-card">
                    <img src="https://via.placeholder.com/300x250" alt="Rings">
                    <h3>Rings</h3>
                    <a href="#" class="explore-link">Explore</a>
                </div>
                <div class="category-card">
                    <img src="https://via.placeholder.com/300x250" alt="Brooches">
                    <h3>Brooches</h3>
                    <a href="#" class="explore-link">Explore</a>
                </div>
                <div class="category-card">
                    <img src="https://via.placeholder.com/300x250" alt="Cuffs">
                    <h3>Cuffs</h3>
                    <a href="#" class="explore-link">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED PRODUCTS SECTION -->
    <section class="featured-products-section">
        <div class="section-container">
            <h2>Featured Collections</h2>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300" alt="Product">
                    </div>
                    <div class="product-content">
                        <h3>Handcrafted Pendant</h3>
                        <div class="product-price">$49.99</div>
                        <a href="#" class="view-button">View Details</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300" alt="Product">
                    </div>
                    <div class="product-content">
                        <h3>Gemstone Ring</h3>
                        <div class="product-price">$79.99</div>
                        <a href="#" class="view-button">View Details</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300" alt="Product">
                    </div>
                    <div class="product-content">
                        <h3>Vintage Necklace</h3>
                        <div class="product-price">$59.99</div>
                        <a href="#" class="view-button">View Details</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300" alt="Product">
                    </div>
                    <div class="product-content">
                        <h3>Silver Bracelet</h3>
                        <div class="product-price">$69.99</div>
                        <a href="#" class="view-button">View Details</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300" alt="Product">
                    </div>
                    <div class="product-content">
                        <h3>Pearl Earrings</h3>
                        <div class="product-price">$89.99</div>
                        <a href="#" class="view-button">View Details</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://via.placeholder.com/300x300" alt="Product">
                    </div>
                    <div class="product-content">
                        <h3>Gold Cuff</h3>
                        <div class="product-price">$99.99</div>
                        <a href="#" class="view-button">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about-section">
        <div class="section-container about-content">
            <div class="about-text">
                <h2>About DTC Southwest Designs</h2>
                <p>We specialize in crafting unique, artistic jewelry pieces that elevate your collection. Each piece is meticulously designed to ensure that you own something truly special and one-of-a-kind.</p>
                <p>Our passion for quality craftsmanship and innovation drives us to create jewelry that makes a statement and tells your story.</p>
                <a href="#" class="learn-more-btn">Learn More</a>
            </div>
            <div class="about-image">
                <img src="https://via.placeholder.com/400x400" alt="DTC Southwest Designs">
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="cta-section">
        <div class="section-container">
            <h2>Ready to Find Your Perfect Piece?</h2>
            <p>Explore our complete collection of handcrafted jewelry</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button-large">Browse All Products</a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
