<?php
get_header();
?>

<div class="site-content">
    <section class="about-hero">
        <div class="about-hero-content">
            <h1>About DTC Southwest Designs</h1>
            <p>Handcrafted Jewelry Since 2017</p>
        </div>
    </section>

    <section class="about-story">
        <div class="about-container">
            <h2>Our Story</h2>
            <p>Founded in 2017 by Diane Castillo, DTC Southwest Designs specializes in creating unique, artistic jewelry pieces that tell a story. Each piece is meticulously hand-designed to ensure you own something truly special and one-of-a-kind.</p>
            <p>Our passion for quality craftsmanship and innovation drives us to create jewelry that makes a statement and tells your story.</p>
        </div>
    </section>

    <section class="about-mission">
        <div class="about-container">
            <h2>Our Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <h3>Artistic Designs</h3>
                    <p>Each piece of jewelry is meticulously crafted to reflect individuality and style, ensuring that you find something truly special for your collection.</p>
                </div>
                <div class="value-card">
                    <h3>Timeless Elegance</h3>
                    <p>Our collection features timeless designs that blend classic elegance with modern artistry, perfect for any occasion or personal style.</p>
                </div>
                <div class="value-card">
                    <h3>Sustainable Materials</h3>
                    <p>We prioritize sustainability by using ethically sourced materials, allowing you to wear your jewelry with pride and confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-designer">
        <div class="about-container">
            <h2>Meet Diane Castillo</h2>
            <p>Diane is the creative force behind DTC Southwest Designs. Her passion for wire-wrapped jewelry and gemstone artistry has resulted in stunning, unique pieces that celebrate the beauty of handcrafted work.</p>
            <p>With years of experience and dedication to her craft, Diane creates jewelry that elevates your collection and tells your unique story.</p>
            <p><strong>Location:</strong> Yucca Art Gallery, Old Town, Albuquerque, NM</p>
        </div>
    </section>

    <section class="about-cta">
        <div class="cta-content">
            <h2>Ready to Discover Your Perfect Piece?</h2>
            <p>Explore our complete collection of handcrafted jewelry</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button">Shop Now</a>
        </div>
    </section>
</div>

<?php
get_footer();
?>
