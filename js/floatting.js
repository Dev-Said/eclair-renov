// Ajout d'une classe à l'élément pour activer l'animation
let elem1 = document.getElementById('floatingElement1');
let elem2 = document.getElementById('floatingElement2');
let elem3 = document.getElementById('floatingElement3');

elem1.classList.add('floating');

setTimeout(() => {
    elem2.classList.add('floating');
}, 300);

setTimeout(() => {
    elem3.classList.add('floating');
}, 150);



