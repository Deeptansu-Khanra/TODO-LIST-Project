burger = document.querySelector('.burger');
navbar = document.querySelector('.navbar');
navList = document.querySelector('.nav-list');
rightNav = document.querySelector('.rightNav');
navbarnav = document.querySelector('.navbar-nav');
navitem = document.querySelector('.navbar-nav');
navitem = document.querySelector('.navbar-nav');

burger.addEventListener('click', ()=>{
    rightNav.classList.toggle('v-class-resp');
    navList.classList.toggle('v-class-resp');
    navbar.classList.toggle('h-nav-resp');
    navbarnav.classList.toggle('v-nav-resp');
    navitem.classList.toggle('v-class-resp');
    navitem.classList.toggle('v-class-resp');
})