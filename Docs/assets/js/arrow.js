function scrollToNextSection() {
    // Get the current scroll position
    var currentScrollPosition = window.scrollY;

    // Find all sections
    var sections = document.querySelectorAll('section');

    // Find the next section
    var nextSection = null;
    for (var i = 0; i < sections.length; i++) {
        if (sections[i].offsetTop > currentScrollPosition) {
            nextSection = sections[i];
            break;
        }
    }

    if (nextSection) {
        // Get the offsetTop of the next section
        var offsetTop = nextSection.offsetTop;

        // Scroll to the next section smoothly
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
}