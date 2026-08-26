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

    <!-- PRODUCT CATEGORIES -->
    <section class="categories-section">
        <div class="section-container">
            <h2>Explore Our Collections</h2>
            <div class="categories-grid">
                <?php
                $categories = get_terms( array(
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => false,
                    'number'     => 6,
                ) );
                
                if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                    foreach ( $categories as $category ) {
                        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );
                        $image_url = wp_get_attachment_url( $thumbnail_id );
                        ?>
                        <div class="category-card">
                            <?php if ( $image_url ) : ?>
                                <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $category->name ); ?>">
                            <?php endif; ?>
                            <h3><?php echo esc_html( $category->name ); ?></h3>
                            <a href="<?php echo esc_url( get_term_link( $category ) ); ?>" class="explore-link">Explore</a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <!-- FEATURED PRODUCTS -->
    <section class="featured-products-section">
        <div class="section-container">
            <h2>Featured Collections</h2>
            <div class="products-grid">
                <?php
                $featured_products = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => 6,
                    'meta_query'     => array(
                        array(
                            'key'   => '_featured',
                            'value' => 'yes',
                        ),
                    ),
                ) );
                
                if ( $featured_products->have_posts() ) {
                    while ( $featured_products->have_posts() ) {
                        $featured_products->the_post();
                        ?>
                        <div class="product-card">
                            <div class="product-image">
                                <?php woocommerce_template_loop_product_thumbnail(); ?>
                            </div>
                            <div class="product-content">
                                <h3><?php the_title(); ?></h3>
                                <div class="product-price">
                                    <?php woocommerce_template_loop_price(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="view-button">View Details</a>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
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
                <p>Our passion for quality craftsmanship and innovation drives us to create jewelry that makes a statement and tells your story.</p>
                <a href="<?php echo esc_url( get_page_link( get_page_by_title( 'About Us' )->ID ) ); ?>" class="learn-more-btn">Learn More</a>
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
