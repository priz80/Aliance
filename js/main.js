const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const button = document.querySelector(".navbar-button");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.href.baseVal = "img/sprite.svg#logo-light";
};

const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add('close-menu');
  document.body.style.overflow = "hidden";
  lightModeOn();
};
const closeMenu = (event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove('close-menu');
  document.body.style.overflow = "";
  lightModeOff();
};

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar - button.classList.add("navbar-button-s");
    navbar - button.classList.remove("navbar-button");
  } else {
    navbar - button.classList.add("navbar-button");
    navbar - button.classList.remove("navbar-button-s");
  }
});
window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
