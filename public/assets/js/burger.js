const burger = document.querySelector('.burger-icon');
const menu = document.querySelector('header .menu');

burger.addEventListener('click', (e) => {
    burger.classList.toggle('open');
    menu.classList.toggle('open');
});
