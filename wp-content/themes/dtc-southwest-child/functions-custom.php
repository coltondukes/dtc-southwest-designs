<?php
/**
 * DTC Southwest Custom Functions
 * Add site-specific customizations here
 */

// Customize WooCommerce
if ( class_exists( 'WooCommerce' ) ) {
    // Remove default product image
    remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
    
    // Add custom product styling
    add_action( 'wp_head', 'dtc_southwest_custom_css' );
}

function dtc_southwest_custom_css() {
    ?>
    <style>
        /* Product Grid */
        .woocommerce-LoopProduct-link {
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .woocommerce-LoopProduct-link:hover {
            border-color: #20B2AA;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        
        .woocommerce-loop-product__title {
            color: #1a1a1a;
            font-weight: 600;
        }
        
        .woocommerce-loop-product__price {
            color: #20B2AA;
            font-weight: 700;
        }
    </style>
    <?php
}
