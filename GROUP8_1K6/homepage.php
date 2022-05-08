<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mystery Of Magic Murder</title>
<style>

	.menu{
		font-family: cursive;
		font-weight: bold;
		background-color: #9d0208;
	}
	.submenu{
		display: inline-block;
		width: 18%;
		vertical-align: top;
		text-align: center;
		color: white;
		margin: 25px 5px 25px;
	}
			
			a{
				text-decoration: none;
				color: white;
			}
	.tabcontent {
		color: black;
		padding: 100px 20px;
	
		font-family: cursive;
		font-size: 120%;
	}
	
		.bg {
			position: relative;
			top: 0;
			left: 0;
		}
		.button {
			position: absolute;
			top: 130px;
			left: 150px;
		}
		.picture {
			position: absolute;
			top: 30px;
			left: 650px;
		}
	
	
	/* Slideshow container */
	.slideshow-container {
		max-width: 1000px;
		position: relative;
		margin: auto;
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

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover, .next:hover {
		background-color: rgba(0,0,0,0.8);
	}

	/* Caption text */
	.text {
		color: #68040c;
		font-size: 15px;
		padding: 8px 12px;
		position: absolute;
		bottom: 8px;
		width: 100%;
		text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
		color: #f9a205;
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


	form {
		background-color: #f38b04;
		font-family: cursive;
	}
	.column {
		float: left;
		width: 32%;
		padding: 5px;
		text-align: center;
	}
	.row::after {
		content: "";
		clear: both;
		display: table;
	}
	.footer{
			text-align: center;
			background-color: #9d0208;
			color: white;
			margin: 10px 5px 10px;
			width: 100%;
		}
	</style>
	</head>
	<body>


<!--This is for the menu-->
		<div class="menu">
			<div class="submenup"><img src="image/MoMM_logo.png" style="width: 10%; float: left; display: inline-block;"></img></div>
			<div class="submenu"><a href="homepage.php">Home</a></div>
			<div class="submenu"><a href="about_game_gfyp.php">About Game</a></div>
			<div class="submenu"><a href="about_us(2).php">About Us</a></div>
			<div class="submenu"><a href="MOMM_features.php">Features</a></div>
		</div>
		
		<div style="position: relative; left: 0; top: 0;">
			<img src="image/bg9.jpeg" style="width:100%;" class="bg"/>
			<a href="https://scratch.mit.edu/projects/646124451" target="_blank"><img src="image/dw_game4.png" style="width: 25%;"  class="button"/>
			<img src="image/hp_game5.png" style="width: 35%;"  class="picture"/>
		</div>
		
	
		<div class="tabcontent">
		<h1><center>Mystery Of Magic Murder</center></h1>	
		</div>	
		<!-- Slideshow container -->
	<div class="slideshow-container">

		<!-- Full-width images with number and caption text -->
		<div class="mySlides fade">
			<div class="numbertext">1 / 3</div>
				<img src="image/firstpic.jpg" style="width:100%">
			<div class="text">Ethan at the magic show venue</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">2 / 3</div>
				<img src="image/room1.jpg" style="width:100%">
			<div class="text">Ethan's first room</div>
		</div>

		<div class="mySlides fade">
			<div class="numbertext">3 / 3</div>
				<img src="image/room2.jpg" style="width:100%">
			<div class="text">Ethan's second room</div>
		</div>

		<!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

		<!-- The dots/circles -->
		<div style="text-align:center;">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
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
		<br>
		<form><br><br><h1><center>Comments and feedbacks</center></h1>
			<form action="" method="POST"><center>
			Name: <input type="text" maxlength="100"></input><br><br>
			Email Address: <input type="text" maxlength="100"></input><br><br>
			I love playing this game!:
			<select>
				<option>ABSOLUTELY</option>
				<option>YES</option>
				<option>NO</option>
				<option>HATE IT</option>
			</select><br><br>
			Comments:<br>
			<textarea rows="10" cols="30"></textarea>
			<br>
			<br>
			<input type="Submit"></input></center>
			<br>
			<br>
			</form>
			<br>
			<div class="row">
				<div class="column">
					<img src="image/brain.png" alt="brain1" style="width:100%">
					<h3> Game Genre : Puzzle </h3>
				</div>
				
				<div class="column">
					<img src="image/magnifying.png" alt="magnifying" style="width:100%">
					<h3> Experience to be a detective  </h3>
					
				</div>
				<div class="column">
					<img src="image/brain.png" alt="brain" style="width:100%">
					<h3> Combine brain cells </h3>
					
				</div>
			</div>
			
			<!--This is for the footer-->
		<div class="footer">
		<br>
			Copyright &copy; Innovastic
			<br>
			<br>
		</div>


<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html>