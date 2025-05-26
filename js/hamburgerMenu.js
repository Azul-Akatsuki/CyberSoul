const button = document.querySelector('.c-menuBtn');
const hamburger = document.querySelector('.zdo_drawer_button');
const menu = document.querySelector('#p-menu');
const modalLink = document.querySelectorAll('.c-menuLists li a')[2];

modalLink.addEventListener('click', () => {
    hamburger.classList.remove('active');
    menu.classList.remove('active');
});

button.addEventListener('click',()=>{
    hamburger.classList.toggle('active');
    menu.classList.toggle('active');
});



