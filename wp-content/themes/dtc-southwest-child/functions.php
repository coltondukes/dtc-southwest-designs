<?php
// Enqueue parent theme styles
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
} );

// WooCommerce support
add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

// Products per page
add_filter( 'loop_shop_per_page', function() {
    return 12;
} );

// Remove default WooCommerce styles
add_filter( 'woocommerce_enqueue_styles', function( \ ) {
    unset( \['woocommerce-general'] );
    unset( \['woocommerce-layout'] );
    unset( \['woocommerce-smallscreen'] );
    return \;
}, 999 );

// Lightbox library
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/lightbox.min.js', array( 'jquery' ), '2.11.4', true );
    wp_enqueue_style( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', array(), '2.11.4' );
} );

// Mobile menu toggle
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
?>
