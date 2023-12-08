import './bootstrap';

import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Swiper from 'swiper';

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    freeMode: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints:{
        640:{
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1024:{
            slidesPerView: 3,
            spaceBetween: 30,
        }
    }
});

var swiper = new Swiper(".myGalerySwiper",{
    slidesPerView: 1,
    spaceBetween: 40,
    centerInsufficientSlides: false,
    autoplay:{
        delay: 2000,
        disableOnInteraction:false,
    },
    breakpoints:{
        1024:{
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },
});

// Animation On Index
const observer = new IntersectionObserver((entries) =>{
    entries.forEach((entry)=>{
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.gone');
hiddenElements.forEach((el)=> observer.observe(el));

// Animation On About Us
let sections = document.querySelectorAll('section');

window.onscroll = () => {
    sections.forEach(sec =>{
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;

        if(top >= offset && top < offset + height){
            sec.classList.add('show-animate');
        }
        else{
            sec.classList.remove('show-animate');
        }
    });
}

// Midtrans
// For example trigger on button clicked, or any time you need
var payButtons = document.querySelectorAll('.pay-button');
payButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        var token = button.getAttribute('data-token');
        window.snap.pay(token);
        // customer will be redirected after completing payment pop-up
    });
});
