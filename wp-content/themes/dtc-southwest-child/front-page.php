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
                <?php
                $args = array(
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => false,
                    'number'     => 6,
                );

                $categories = get_terms( $args );

                if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                    foreach ( $categories as $category ) {
                        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image_url = ! empty( $thumbnail_id ) ? wp_get_attachment_url( $thumbnail_id ) : 'https://via.placeholder.com/300x250';
                        $cat_link = get_term_link( $category );
                        ?>
                        <div class="category-card">
                            <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $category->name ); ?>">
                            <h3><?php echo esc_html( $category->name ); ?></h3>
                            <a href="<?php echo esc_url( $cat_link ); ?>" class="explore-link">Explore</a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- FEATURED PRODUCTS SECTION -->
    <section class="featured-products-section">
        <div class="section-container">
            <h2>Featured Collections</h2>
            <div class="products-grid">
                <?php
                $products = wc_get_products( array(
                    'limit'  => 6,
                    'status' => 'publish',
                    'orderby' => 'date',
                    'order'   => 'DESC',
                ) );

                if ( ! empty( $products ) ) {
                    foreach ( $products as $product ) {
                        $image_url = $product->get_image_id() ? wp_get_attachment_url( $product->get_image_id() ) : 'https://via.placeholder.com/300x300';
                        ?>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $product->get_name() ); ?>">
                            </div>
                            <div class="product-content">
                                <h3><?php echo esc_html( $product->get_name() ); ?></h3>
                                <div class="product-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
                                <a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="view-button">View Details</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section class="about-section">
        <div class="section-container about-content">
            <div class="about-text">
                <h2>About DTC Southwest Designs</h2>
                <p>We specialize in crafting unique, artistic jewelry pieces that elevate your collection. Each piece is meticulously designed to ensure that you own something truly special and one-of-a-kind.</p>
                <p>Our passion for quality craftsmanship and innovation drives us to create jewelry that makes a statement and tells your story. Founded in 2017, we've been dedicated to bringing distinctive wire-wrapped and artistic designs to jewelry lovers everywhere.</p>
                <a href="<?php echo esc_url( get_page_link( get_page_by_title( 'About Us' )->ID ) ); ?>" class="learn-more-btn">Learn More</a>
            </div>
            <div class="about-image">
                <img src="https://via.placeholder.com/400x400" alt="DTC Southwest Designs">
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials-section">
        <div class="section-container">
            <h2>What Our Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"I absolutely love the unique pieces I found here. Each one tells a story and adds a special touch to my collection. Highly recommend!"</p>
                    <p class="testimonial-author">- Sarah M.</p>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"The craftsmanship is incredible! I received my order quickly and it exceeded my expectations. Will definitely shop again."</p>
                    <p class="testimonial-author">- Jessica K.</p>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"These pieces are not just jewelry; they are works of art! Perfect for someone who appreciates unique, handcrafted items."</p>
                    <p class="testimonial-author">- Emily R.</p>
                </div>
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
