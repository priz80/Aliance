const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const button = document.querySelector(".navbar-button");
window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo"
    navbar-button.classList.add('navbar-button-s');
    navbar-button.classList.remove('navbar-button');
  } else {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo-light"
    
    navbar-button.classList.add('navbar-button');
    navbar-button.classList.remove('navbar-button-s');
  }
});
