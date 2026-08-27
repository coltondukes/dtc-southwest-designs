<?php
/**
 * Template Name: Home
 * Description: DTC Southwest Designs Homepage
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- HERO SECTION -->
    <section class="hero-section hero-luxury">
        <div class="hero-content">
            <h1><?php esc_html_e( 'DTC Southwest Designs', 'dtc-southwest-child' ); ?></h1>
            <p><?php esc_html_e( 'Handcrafted Artistic Jewelry', 'dtc-southwest-child' ); ?></p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button"><?php esc_html_e( 'Shop Collection', 'dtc-southwest-child' ); ?></a>
        </div>
    </section>

    <!-- EXPLORE COLLECTIONS SECTION -->
    <section class="explore-collections">
        <div class="section-container">
            <h2><?php esc_html_e( 'Explore Our Collections', 'dtc-southwest-child' ); ?></h2>
            <div class="categories-grid">
                <?php
                \ = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'number' => 6,
                ) );

                if ( \ && ! is_wp_error( \ ) ) {
                    foreach ( \ as \ ) {
                        \ = get_term_meta( \->term_id, 'thumbnail_id', true );
                        \ = \ ? wp_get_attachment_image_url( \, 'large' ) : '';
                        \ = get_term_link( \ );
                        ?>
                        <div class="category-card">
                            <?php if ( \ ) : ?>
                                <img src="<?php echo esc_url( \ ); ?>" alt="<?php echo esc_attr( \->name ); ?>" />
                            <?php else : ?>
                                <div class="category-placeholder"></div>
                            <?php endif; ?>
                            <div class="category-info">
                                <h3><?php echo esc_html( \->name ); ?></h3>
                                <a href="<?php echo esc_url( \ ); ?>" class="explore-link"><?php esc_html_e( 'Explore', 'dtc-southwest-child' ); ?></a>
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
    <section class="about-homepage">
        <div class="section-container">
            <div class="about-grid">
                <div class="about-text">
                    <h2><?php esc_html_e( 'About DTC Southwest Designs', 'dtc-southwest-child' ); ?></h2>
                    <p><?php esc_html_e( 'We specialize in crafting unique, artistic jewelry pieces that tell a story. Founded in 2017, each piece is meticulously designed to ensure you own something truly special and one-of-a-kind.', 'dtc-southwest-child' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="cta-button"><?php esc_html_e( 'Learn More', 'dtc-southwest-child' ); ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="testimonials-section">
        <div class="section-container">
            <h2><?php esc_html_e( 'What Customers Say', 'dtc-southwest-child' ); ?></h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="stars">?????</div>
                    <blockquote>
                        <p><?php esc_html_e( 'I absolutely love the unique pieces I found here. Each one tells a story and adds a special touch to my collection. Highly recommend!', 'dtc-southwest-child' ); ?></p>
                        <footer><?php esc_html_e( '— Sarah M.', 'dtc-southwest-child' ); ?></footer>
                    </blockquote>
                </div>
                <div class="testimonial-card featured">
                    <div class="stars">?????</div>
                    <blockquote>
                        <p><?php esc_html_e( 'The craftsmanship is incredible! I received my order quickly and it exceeded my expectations. Will definitely shop again.', 'dtc-southwest-child' ); ?></p>
                        <footer><?php esc_html_e( '— Jessica K.', 'dtc-southwest-child' ); ?></footer>
                    </blockquote>
                </div>
                <div class="testimonial-card">
                    <div class="stars">?????</div>
                    <blockquote>
                        <p><?php esc_html_e( 'These pieces are not just jewelry, they are works of art! Perfect for someone who appreciates unique, handcrafted items.', 'dtc-southwest-child' ); ?></p>
                        <footer><?php esc_html_e( '— Emily R.', 'dtc-southwest-child' ); ?></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA SECTION -->
    <section class="cta-section">
        <div class="cta-content">
            <h2><?php esc_html_e( 'Ready to Find Your Perfect Piece?', 'dtc-southwest-child' ); ?></h2>
            <p><?php esc_html_e( 'Explore our complete collection of handcrafted jewelry', 'dtc-southwest-child' ); ?></p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button"><?php esc_html_e( 'Browse All Products', 'dtc-southwest-child' ); ?></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
