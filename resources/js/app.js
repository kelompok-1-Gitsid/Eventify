import './bootstrap';

import 'flowbite';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

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
