// Scroll-triggered animations using Intersection Observer
(function () {
    document.addEventListener('DOMContentLoaded', function () {
        // Create observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        const animatedElements = document.querySelectorAll('.fade-in-up, .fade-in, .slide-in-left, .slide-in-right');

        animatedElements.forEach(el => {
            observer.observe(el);
        });

        // Stagger animations for grid items
        const grids = document.querySelectorAll('.stagger-grid');
        grids.forEach(grid => {
            const items = grid.querySelectorAll('.stagger-item');
            items.forEach((item, index) => {
                item.style.transitionDelay = `${index * 0.1}s`;
                observer.observe(item);
            });
        });
    });
})();
