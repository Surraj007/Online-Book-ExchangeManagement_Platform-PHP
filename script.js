document.addEventListener('DOMContentLoaded', () => {
    // smooth scroll to navigation links
    document.querySelectorAll('nav ul li a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // animation for hero text
    const heroText = document.querySelector('.hero h1');
    heroText.style.opacity = 0;
    heroText.style.transform = 'translateY(-20px)';

    setTimeout(() => {
        heroText.style.opacity = 1;
        heroText.style.transform = 'translateY(0)';
        heroText.style.transition = 'all 1s ease-out';
    }, 500);
});
