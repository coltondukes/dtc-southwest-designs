<?php
?>
    </div><!-- .site-content -->
    
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-footer-inner">
            <div class="site-footer-content">
                <p>&copy; <?php echo date( 'Y' ); ?> DTC Southwest Designs. All rights reserved.</p>
                <nav class="footer-nav">
                    <a href="<?php echo home_url( '/' ); ?>">Home</a> |
                    <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Shop</a> |
                    <a href="<?php echo home_url( '/about-us' ); ?>">About Us</a> |
                    <a href="<?php echo home_url( '/contact-us' ); ?>">Contact Us</a>
                </nav>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
