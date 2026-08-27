<?php
get_header();
?>

<div class="site-content">
    <section class="hero-section hero-luxury">
        <div class="hero-content">
            <h1>DTC Southwest Designs</h1>
            <p>Handcrafted Artistic Jewelry</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button">Shop Collection</a>
        </div>
    </section>

    <section class="explore-collections">
        <div class="section-container">
            <h2>Explore Our Collections</h2>
            <div class="categories-grid">
                <?php
                $categories = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'number' => 6,
                ) );

                if ( $categories && ! is_wp_error( $categories ) ) {
                    foreach ( $categories as $category ) {
                        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image_url = $thumbnail_id ? wp_get_attachment_image_url( $thumbnail_id, 'large' ) : '';
                        $cat_link = get_term_link( $category );
                        ?>
                        <div class="category-card">
                            <?php if ( $image_url ) : ?>
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $category->name ); ?>" />
                            <?php else : ?>
                                <div class="category-placeholder"></div>
                            <?php endif; ?>
                            <div class="category-info">
                                <h3><?php echo esc_html( $category->name ); ?></h3>
                                <a href="<?php echo esc_url( $cat_link ); ?>" class="explore-link">Explore</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <section class="about-homepage">
        <div class="section-container">
            <h2>About DTC Southwest Designs</h2>
            <p>We specialize in crafting unique, artistic jewelry pieces that tell a story. Founded in 2017, each piece is meticulously designed to ensure you own something truly special and one-of-a-kind.</p>
            <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="cta-button">Learn More</a>
        </div>
    </section>

    <section class="testimonials-section">
        <div class="section-container">
            <h2>What Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars">?????</div>
                    <p>I absolutely love the unique pieces I found here. Highly recommend!</p>
                    <footer>? Sarah M.</footer>
                </div>
                <div class="testimonial-card featured">
                    <div class="stars">?????</div>
                    <p>The craftsmanship is incredible! Will definitely shop again.</p>
                    <footer>? Jessica K.</footer>
                </div>
                <div class="testimonial-card">
                    <div class="stars">?????</div>
                    <p>Perfect for someone who appreciates unique, handcrafted items.</p>
                    <footer>? Emily R.</footer>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="cta-content">
            <h2>Ready to Find Your Perfect Piece?</h2>
            <p>Explore our complete collection of handcrafted jewelry</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button">Browse All Products</a>
        </div>
    </section>
</div>

<?php
get_footer();
?>
