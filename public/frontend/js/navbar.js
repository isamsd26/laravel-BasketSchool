window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    const stickyPoint = 50;

    if (window.pageYOffset > stickyPoint) {
        navbar.classList.remove("navbar-transparent");
        navbar.classList.add("navbar-solid");
    } else {
        navbar.classList.remove("navbar-solid");
        navbar.classList.add("navbar-transparent");
    }
});
