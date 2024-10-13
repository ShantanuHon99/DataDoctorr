document.addEventListener("DOMContentLoaded", function () {
    const partnerSection = document.querySelector('.partner-companies');
    const partnerItems = document.querySelectorAll('.partner-companies .col-6, .partner-companies .col-md-3, .partner-companies h2');
    const partnerImages = document.querySelectorAll('.partner-companies img');

    // Function to check if an element is in the viewport
    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll and add the appear class
    function handleScroll() {
        if (isInViewport(partnerSection)) {
            partnerItems.forEach(item => {
                item.classList.add('appear');
            });
        }
    }

    // Intersection Observer for images
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('appear'); 
                observer.unobserve(entry.target);
            }
        });
    }, options);

    partnerImages.forEach(image => {
        observer.observe(image);
    });

    window.addEventListener('scroll', handleScroll);
    handleScroll();  
});

