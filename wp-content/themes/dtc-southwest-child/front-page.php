<?php
/**
 * DTC Southwest Designs - Professional Homepage
 */
get_header();
?>
<main id="primary" class="site-main">
    <!-- HERO -->
    <section class="hero-section hero-luxury">
        <div class="hero-content">
            <h1>DTC Southwest Designs</h1>
            <p>Handcrafted Artistic Jewelry</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button">Shop Collection</a>
        </div>
    </section>

    <!-- CATEGORIES -->
    <section class="categories-section">
        <div class="section-container">
            <h2>Explore Our Collections</h2>
            <div class="categories-grid">
                <?php
                $categories = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'number' => 6,
                ) );

                foreach ( $categories as $cat ) {
                    $img_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                    $img = wp_get_attachment_image_url( $img_id, 'medium' );
                    ?>
                    <div class="category-card">
                        <div class="cat-img"><img src="<?php echo $img ? esc_url( $img ) : 'https://via.placeholder.com/300x250'; ?>" alt="<?php echo esc_attr( $cat->name ); ?>"></div>
                        <h3><?php echo esc_html( $cat->name ); ?></h3>
                        <a href="<?php echo esc_url( get_term_link( $cat ) ); ?>" class="explore-link">Explore</a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <!-- FEATURED PRODUCTS -->
    <section class="featured-products-section">
        <div class="section-container">
            <h2>Featured Designs</h2>
            <div class="products-grid">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );

                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    global $product;
                    $img = wp_get_attachment_image_url( $product->get_image_id(), 'medium' );
                    ?>
                    <div class="product-card">
                        <div class="prod-img"><img src="<?php echo $img ? esc_url( $img ) : 'https://via.placeholder.com/300x300'; ?>" alt="<?php the_title_attribute(); ?>"></div>
                        <div class="product-content">
                            <h3><?php the_title(); ?></h3>
                            <div class="product-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
                            <a href="<?php the_permalink(); ?>" class="view-button">View Details</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about-section">
        <div class="section-container about-content">
            <div class="about-text">
                <h2>About DTC Southwest Designs</h2>
                <p>We specialize in crafting unique, artistic jewelry pieces that elevate your collection. Founded in 2017, each piece is meticulously designed to ensure you own something truly special and one-of-a-kind.</p>
                <p>Our passion for quality craftsmanship and innovation drives us to create jewelry that makes a statement and tells your story.</p>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About Us' ) ) ); ?>" class="learn-more-btn">Learn More</a>
            </div>
            <div class="about-image">
                <img src="https://via.placeholder.com/400x400" alt="DTC Southwest Designs">
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials-section">
        <div class="section-container">
            <h2>What Customers Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"I absolutely love the unique pieces I found here. Each one tells a story and adds a special touch to my collection. Highly recommend!"</p>
                    <p class="author">— Sarah M.</p>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"The craftsmanship is incredible! I received my order quickly and it exceeded my expectations. Will definitely shop again."</p>
                    <p class="author">— Jessica K.</p>
                </div>
                <div class="testimonial-card">
                    <div class="stars">★★★★★</div>
                    <p>"These pieces are not just jewelry; they are works of art! Perfect for someone who appreciates unique, handcrafted items."</p>
                    <p class="author">— Emily R.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <div class="section-container">
            <h2>Ready to Find Your Perfect Piece?</h2>
            <p>Explore our complete collection of handcrafted jewelry</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button-large">Browse All Products</a>
        </div>
    </section>
</main>
<?php get_footer(); ?>

