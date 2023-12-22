function scrollToNextSection() {
    var currentScrollPosition = window.scrollY;
    var sections = document.querySelectorAll('section');
    var nextSection = null;
    for (var i = 0; i < sections.length; i++) {
        if (sections[i].offsetTop > currentScrollPosition) {
            nextSection = sections[i];
            break;
        }
    }
    if (nextSection) {
        var offsetTop = nextSection.offsetTop;
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
}