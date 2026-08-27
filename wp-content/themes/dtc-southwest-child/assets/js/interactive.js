// DTC Southwest Designs - Interactive Features

document.addEventListener('DOMContentLoaded', function() {
    // Product quantity spinner
    const quantityInputs = document.querySelectorAll('input.qty');
    quantityInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.value < 1) this.value = 1;
        });
    });
    
    // Product image hover zoom
    const productImages = document.querySelectorAll('.woocommerce-product-gallery__image img');
    productImages.forEach(img => {
        img.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.1)';
        });
        
        img.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Add to cart feedback
    const addToCartButtons = document.querySelectorAll('.single_add_to_cart_button');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const originalText = this.textContent;
            this.textContent = 'Added to cart!';
            setTimeout(() => {
                this.textContent = originalText;
            }, 2000);
        });
    });
});
