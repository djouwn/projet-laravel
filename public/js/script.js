document.addEventListener("DOMContentLoaded", function () {
    const childContainers = document.querySelectorAll('.child-container');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    });

    childContainers.forEach(container => {
        observer.observe(container);
    });
});
