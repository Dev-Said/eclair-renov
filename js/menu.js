// Récupération du bouton et du menu
const hamburgerBtn = document.getElementById('hamburger-btn');
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
    } else {
        mobileMenu.style.transform = 'translateX(-100%)';
        menuVisible = false;
    }

    // Réinitialisation du menuVisible après la transition
    setTimeout(() => {
        mobileMenu.classList.toggle('menu-transition');
    }, 500); // Réinitialisation après 0.5 seconde (correspondant à la durée de la transition)
});


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

