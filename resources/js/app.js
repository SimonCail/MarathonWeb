import './bootstrap';
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

document.addEventListener('DOMContentLoaded', function() {
    const cityElements = document.querySelectorAll('.city');

    cityElements.forEach(function(city) {
        city.addEventListener('click', function() {
            const cityId = city.dataset.id;
            window.location.href = `/etape/${cityId}`;
        });
    });
});
