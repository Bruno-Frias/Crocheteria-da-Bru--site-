"use strict"
const btnMobile = document.getElementById('btn-mobile');
function toggleMenu(Event){
    if (Event.type === 'touchstart') Event.preventDefault();
    const nav_head = document.getElementById('nav-head');
    nav_head.classList.toggle('active');
    Event.currentTarget.getAttribute('aria-expanded', 'true');
}
btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);