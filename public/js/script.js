const btnNav = document.querySelector(".navbar-toggler");
const navbarNav = document.querySelector(".navbar-nav");
const btns = document.querySelectorAll(".button-card-carosel ");
const wakuk = document.querySelector(".carousel-card");

btns.forEach((btn) => {
  btn.addEventListener("click", function () {
    if (btn.getAttribute("data-name-slide") == "next") {
      wakuk.scrollLeft += 200;
    } else {
      wakuk.scrollLeft -= 200;
    }
  });
});

btnNav.addEventListener("click", function () {
  navbarNav.classList.toggle("show-nav");
});
