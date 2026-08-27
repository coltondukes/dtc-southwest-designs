<?php
/**
 * Template Name: Gallery
 * Description: Photo Gallery - Display all jewelry photos
 */

get_header();
?>

<div class="site-content">
    <section class="gallery-hero">
        <div class="gallery-hero-content">
            <h1>Gallery</h1>
            <p>Explore Our Artistic Jewelry Collection</p>
        </div>
    </section>

    <section class="gallery-section">
        <div class="gallery-container">
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <?php
                \ = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                ) );
                
                if ( \ && ! is_wp_error( \ ) ) {
                    foreach ( \ as \ ) {
                        echo '<button class="filter-btn" data-filter="' . esc_attr( \->slug ) . '">' . esc_html( \->name ) . '</button>';
                    }
                }
                ?>
            </div>

            <div class="gallery-grid">
                <?php
                \ = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                
                \ = new WP_Query( \ );
                
                if ( \->have_posts() ) {
                    while ( \->have_posts() ) {
                        \->the_post();
                        \ = wc_get_product( get_the_ID() );
                        \ = wp_get_post_terms( get_the_ID(), 'product_cat' );
                        \ = wp_list_pluck( \, 'slug' );
                        \ = implode( ' ', \ );
                        \ = wp_get_attachment_image_url( get_post_thumbnail_id(), 'large' );
                        ?>
                        
                        <div class="gallery-item <?php echo esc_attr( \ ); ?>">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="gallery-link">
                                <img src="<?php echo esc_url( \ ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" />
                                <div class="gallery-overlay">
                                    <div class="gallery-info">
                                        <h3><?php echo esc_html( get_the_title() ); ?></h3>
                                        <p class="price"><?php echo \->get_price_html(); ?></p>
                                        <span class="view-text">View</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </section>

    <section class="gallery-cta">
        <div class="cta-content">
            <h2>Ready to Own a Piece?</h2>
            <p>Shop our complete collection</p>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="cta-button">Shop Now</a>
        </div>
    </section>
</div>

<?php
get_footer();
?>
