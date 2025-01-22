import "@fortawesome/fontawesome-free/js/solid.js";
import "@fortawesome/fontawesome-free/js/fontawesome.js";
import "./tailwind.css";

document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM Loaded");
});


document.addEventListener('DOMContentLoaded', function() {
  const mobileToggleButton = document.querySelector('.header__mobile-toggle');
  const headerNav = document.querySelector('.header__nav');

  mobileToggleButton.addEventListener('click', function() {
    headerNav.classList.toggle('active');
    mobileToggleButton.classList.toggle('active');
  });
});


