const mobileButton = document.querySelector('button#mobile-button');
const mainNav = document.querySelector('.main-nav');
const siteHeader = document.querySelector("#site-header");
const body = document.querySelector('body');
const burgerIcon = document.querySelector('.burger-icon');

mobileButton.addEventListener('click', () => {
  siteHeader.classList.toggle('mobile-nav-open');
  body.classList.toggle('mobile-nav-open');
  burgerIcon.classList.toggle('cross-icon');
});
