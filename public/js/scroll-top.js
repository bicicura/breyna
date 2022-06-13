const btnScrollToTop = document.querySelector('#scrollTopBtn')

btnScrollToTop.addEventListener('click', function () {
    window.scrollTo(
        {
            left: 0,
            top: 0,
            behavior: "smooth"
        },
    );
})