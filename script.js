// Scroll Animation for smooth transitions
window.addEventListener('scroll', () => {
    const services = document.querySelector('.services-section');
    const windowHeight = window.innerHeight;
    const servicesTop = services.getBoundingClientRect().top;

    if (servicesTop < windowHeight - 100) {
        services.classList.add('reveal');
    }
});
