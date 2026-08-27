<?php
/**
 * DTC Southwest Designs Child Theme Functions
 */

// Enqueue parent theme styles
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
} );

// Enqueue custom interactive script
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script( 'dtc-interactive', get_stylesheet_directory_uri() . '/assets/js/interactive.js', array(), '1.0', true );
} );

// Add hamburger menu toggle script
add_action( 'wp_footer', function() {
    ?>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const siteNav = document.getElementById('site-nav');
        
        if (menuToggle && siteNav) {
            menuToggle.addEventListener('click', function() {
                siteNav.classList.toggle('open');
                this.setAttribute('aria-expanded', siteNav.classList.contains('open'));
            });
            
            const links = siteNav.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', function() {
                    siteNav.classList.remove('open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                });
            });
        }
    });
    </script>
    <?php
} );

// WooCommerce Support
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Products per page
add_filter( 'loop_shop_per_page', function() { return 12; } );

// Remove default WooCommerce styles
add_filter( 'woocommerce_enqueue_styles', function( $enqueue_styles ) {
    unset( $enqueue_styles['woocommerce-general'] );
    unset( $enqueue_styles['woocommerce-layout'] );
    unset( $enqueue_styles['woocommerce-smallscreen'] );
    return $enqueue_styles;
}, 999 );

// Related products
add_filter( 'woocommerce_output_related_products_args', function( $args ) {
    $args['posts_per_page'] = 3;
    $args['columns'] = 3;
    return $args;
} );
?>
