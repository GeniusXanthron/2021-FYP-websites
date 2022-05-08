<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home Page</title>

		<!-- Fonts setup -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

		<!-- CSS Styling -->
		<style>
			html {
				scrollbar-width: normal;
				scrollbar-color: #777 #555
				overflow: visible;
			}

			* {
				
				margin: 0;
				padding: 0;
			}

			html::-webkit-scrollbar {
				width: 10px;
			}

			html::-webkit-scrollbar-thumb {
				background: #777;
			}

			html::-webkit-scrollbar-track {
				background: #555;
			}

			body {
				background-image: url('images/bg.png');
				margin: 0;
				padding: 0;
			}

			a{
				text-decoration: none;
				color: white;
			}

			a:hover{
				color: #b691ff;
			}

			p {
				font-family: 'Roboto Mono', monospace;
				font-weight: 300;
				font-size: 20px;
				color: white;
			}

			h1 {
				font-family: 'Roboto Mono', monospace;
				font-weight: 700;
				font-size: 32px;
				color: #b691ff;
				text-align: center;

			}
			
			.menu{
				font-family: 'Roboto Mono', monospace;
				font-weight: 300;
				font-size: 26px;
				background-color: rgba(28, 32, 36, 0.4);
			}

			.submenuContainer{
				margin: 0px 0px 0px 0px
				horizontal-align: middle;
			}

			.submenu{
				font font-family: 'Roboto Mono', monospace;
				display: inline-block;
				width: 12%;
				margin: 30px 60px 30px;
				padding: 60px auto;
				text-align: center;
				vertical-align: top;
			}

			/* Slideshow container */
			.slideshow-container {
				max-width: 480px;
				horizontal-align: middle;
				position: relative;
				margin: auto;
			}

			/* Hide tje images by default */
			.mySlides {

				display: none;
				
			}

			.Slide{

				position: absolute;

			}

			.about-game {
				
				margin: 30px 200px 0px 200px;


			}

			/* Next & previous buttons */
			.prev, .next {
				
				cursor: pointer;
				position: absolute;
				top: 50%;
				width: auto;
				margin-top: -22px;
				padding: 16px;
				color: white;
				font-weight: bold;
				font-size: 18px;
				transition: 0.6s ease;
				border-radius: 0 3px 3px 0;
				user-select: none;

			}

			/* Position the "next button" to the right */
			.next {

				right: 0;
				border-radius: 3px 0 0 3px;

			}

			/* On hover, add a black background color with a little bit of see-through */
			.prev:hover, .next:hover {
				background-color: rgba(0, 0, 0, 0.8);
			}

			/* Number text (1/3 etc) */
			.numbertext {
				color: #f2f2f2;
				font-family: 'Roboto Mono', monospace;
				font-weight: 500;
				font-size: 12px;
				padding: 8px 12px;
				position: absolute;
				top: 0;
			}

			/* The dots/bullets/indicators */
			.dot {
				cursor: pointer;
				height: 15px;
				width: 15px;
				margin: 0 2px;
				background-color: #bbb;
				border-radius: 50%;
				display: inline-block;
				transition: background-color 0.6s ease;
			}

			.active, .dot:hover {
				background-color: #717171;
			}

			/* Fading animation */
			.fade {
				-webkit-animation-name: fade;
				-webkit-animation-duration: 1.5s;
				animation-name: fade;
				animation-duration: 1.5s;
			}

			@-webkit-keyframes fade {
				from {opacity: .4}
				to {opacity: 1}
			}

			@keyframes fade {
				from {opacity: .4}
				to {opacity: 1}
			}

			.content {
				margin: 20px 0px 0px 20px;
			}

		</style>
	</head>

	<body>
		<!--This is for the menu-->
		<div class="menu">
			<div class="submenuContainer">	
				<div class="submenu"><a href="index.php">Home</a></div>
				<div class="submenu"><a href="aboutUs.php">About Us</a></div>
				<div class="submenu"><a href="aboutGame.php">About Game</a></div>
				<div class="submenu"><a href="contact.php">Contact</a></div>
			</div>
		</div>

		<!--This is for the body-->
		<div class="content">
			<!-- Slidehow container -->
			<div class="slideshow-container">

				<!-- Full width images wiht number and caption text -->
				<div class="mySlides fade">
					<div class="Slides">
						<div class="numbertext">1 / 3</div>
						<img src="images/slideshowImage1.jpeg">
					</div>
				</div>

				<div class="mySlides fade">
					<div class="Slides">
						<div class="numbertext">2 / 3</div>
						<img src="images/slideshowImage2.jpeg">
					</div>
				</div>

				<div class="mySlides fade">
					<div class="Slides">
						<div class="numbertext">3 / 3</div>
						<img src="images/slideshowImage3.jpeg">
					</div>
				</div>

				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>

			<div class="about-game">
				<h1>
					Just Like Wonderland
				</h1>
				<br>
				<p>
					Just Like Wonderland is a game inspired by the story Alice in Wonderland. The player plays as the main character, Alice, and has to 
					journey through Wonderland to return home. Each segment of Just Like Wonderland plays a minigame, relating to the segment presented. 
					Some minigames in the game include a jumping game, a short quiz, a Whac-a-mole inspired game and a catch game!
				</p>
			</div>

			<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				function plusSlides(n) {
					showSlides(slideIndex += n);
				}

				function currentSlide(n) {
					showSlides(slideIndex = n);
				}

				function showSlides(n) {
					var i;
					var slides = document.getElementsByClassName("mySlides");
					var dots = document.getElementsByClassName("dot");
					if (n > slides.length) {slideIndex = 1}    
					if (n < 1) {slideIndex = slides.length}
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " active";
				}
			</script>

		</div>
	</body>
</html>
