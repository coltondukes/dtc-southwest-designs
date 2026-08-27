<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <div class="site-title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>
            
            <button class="menu-toggle" id="menu-toggle" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <nav class="site-nav" id="site-nav">
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Shop</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="site-content">
