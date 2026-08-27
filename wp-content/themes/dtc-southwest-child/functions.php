<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
} );

add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

add_filter( 'loop_shop_per_page', function() {
    return 12;
} );

add_filter( 'woocommerce_enqueue_styles', function( \ ) {
    unset( \['woocommerce-general'] );
    unset( \['woocommerce-layout'] );
    unset( \['woocommerce-smallscreen'] );
    return \;
}, 999 );

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
