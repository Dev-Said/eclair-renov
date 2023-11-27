
let prevScreenWidth = window.innerWidth;
let imgIndex = document.getElementById('img_index');

function getScreenWidth() {
    let currentWidth = window.innerWidth;
    if (currentWidth !== prevScreenWidth) {
        console.log('La largeur de l\'écran a changé ! Nouvelle largeur : ' + currentWidth);
        if (currentWidth <= 160) {
            imgIndex.src = '/images/cable électrique 2.png';
        } else {
            imgIndex.src = '/images/cable électrique.png';
        }
        prevScreenWidth = currentWidth;
    }
}

window.addEventListener('resize', getScreenWidth);
