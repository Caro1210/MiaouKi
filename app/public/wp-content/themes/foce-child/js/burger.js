//test
console.log("C'est l'heure du burger!");

// "burger" DOM selection
const burger = document.querySelector(".burger");

// elements 
const elementsToToggle = [
  document.querySelector(".nav_menu"),
  document.querySelector(".logo_menu"),
  document.querySelector(".flowers_menu"),
  document.querySelector(".cats_menu"),
  document.querySelector(".copyr_menu"),
];

// event listener
burger.addEventListener("click", toggleMenu);

// menu activated
function toggleMenu() {
  burger.classList.toggle("active");
  elementsToToggle.forEach((element) => element.classList.toggle("active"));
}

// nav link selection
const navLinks = document.querySelectorAll(".nav_link");

// click on links
navLinks.forEach((link) => link.addEventListener("click", closeMenu));

// close menu
function closeMenu() {
  burger.classList.remove("active");
  elementsToToggle.forEach((element) => element.classList.remove("active"));
}
