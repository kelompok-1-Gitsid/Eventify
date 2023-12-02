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
