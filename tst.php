<?php
$title = "Électricien 1060 Saint-Gilles";
require 'layouts/header.php';
?>




<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carousel avec Défilement Continu</title>
	<style>
		.carousel-container {
			width: 300px;
			overflow: hidden;
			position: relative;
		}

		.carousel-content {
			display: flex;
			transition: transform 0.3s ease-in-out;
		}

		.carousel-item {
			flex: 0 0 100%;
			max-width: 100%;
			box-sizing: border-box;
		}

		.carousel-button {
			cursor: pointer;
			user-select: none;
		}
	</style>
</head>

<body>

	<div class="carousel-container mt-80">
		<div class="carousel-content">
			<div class="carousel-item"><img src="/images/cuisine.jpg" alt="Image 1"></div>
			<div class="carousel-item"><img src="/images/hero1.jpg" alt="Image 2"></div>
			<div class="carousel-item"><img src="/images/hero2.jpg" alt="Image 3"></div>
		</div>
		<button class="carousel-button" onclick="showSlide(0)">Image 1</button>
		<button class="carousel-button" onclick="showSlide(1)">Image 2</button>
		<button class="carousel-button" onclick="showSlide(2)">Image 3</button>
	</div>

	<script>
		let currentSlide = 0;

		function fadeIn(element) {
			var op = 0.1; // initial opacity
			element.style.display = 'block';
			var timer = setInterval(function() {
				if (op >= 1) {
					clearInterval(timer);
				}
				element.style.opacity = op;
				element.style.filter = 'alpha(opacity=' + op * 100 + ")";
				op += op * 0.1;
			}, 10);
		}

		function fadeOut(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
}

		function showSlide(slideIndex) {
			const content = document.querySelectorAll('.carousel-item');
console.log('content  ', content)
			// setInterval(() => {
				fadeIn(content[0]);
				fadeOut(content[0]);

			// }, 500);
			// content.style.transform = `translateX(-${slideIndex * 100}%)`;
			currentSlide = slideIndex;
		}

		function nextSlide() {
			currentSlide++;
			showSlide(currentSlide);
		}

		function startCarousel() {
			setInterval(nextSlide, 2000); // Défilement automatique toutes les 2 secondes
		}

		startCarousel();
	</script>

</body>

</html>



<script src="/js/slider.js"></script>