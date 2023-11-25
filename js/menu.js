// Récupération du bouton et du menu
const hamburgerBtn = document.getElementById('hamburger-btn');
const svgBtn = document.querySelectorAll('#hamburger-btn > svg');
const mobileMenu = document.getElementById('mobile-menu');

// Variable pour suivre l'état du menu
let menuVisible = false;

// Ajout de l'événement clic sur le bouton hamburger
hamburgerBtn.addEventListener('click', () => {
    // Ajout ou suppression de la classe pour gérer la transition
    mobileMenu.classList.toggle('menu-transition');

    if (!menuVisible) {
        mobileMenu.style.transform = 'translateX(0)';
        menuVisible = true;
        svgBtn[1].classList.remove('hidden');
        svgBtn[1].classList.add('block');
        svgBtn[0].classList.remove('block');
        svgBtn[0].classList.add('hidden');
    } else {
        mobileMenu.style.transform = 'translateX(-100%)';
        menuVisible = false;
        svgBtn[0].classList.remove('hidden');
        svgBtn[0].classList.add('block');
        svgBtn[1].classList.remove('block');
        svgBtn[1].classList.add('hidden');
    }

    // Réinitialisation du menuVisible après la transition
    setTimeout(() => {
        mobileMenu.classList.toggle('menu-transition');
    }, 500); // Réinitialisation après 0.5 seconde (correspondant à la durée de la transition)
});


/* menu rétractable au scroll -------------------------------------*/
const nav = document.getElementById('nav');
window.addEventListener('scroll', function() {
    if (window.scrollY > 72) {
        nav.classList.remove('h_transition_24');
        nav.classList.add('h_transition_18');
    } else {
        nav.classList.remove('h_transition_18');
        nav.classList.add('h_transition_24');
    }
});

