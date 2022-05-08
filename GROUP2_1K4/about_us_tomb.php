<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			font-family: Arial, Helvetica, sans-serif;
			margin: 0;
			background-color: #0C2D3F;
		}

		.menu{
			font-family: Arial;
			font-weight: bold;
			background-color: black;
			border-style: solid;;
		}
      
		.submenu{
			display: inline-block;
			width: 22%;
			vertical-align: top;
			text-align: center;
			margin: 10px 5px 10px;
			color: white;
		}

		html {
			box-sizing: border-box;
		}

		*, *:before, *:after {
				box-sizing: inherit;
		}

		.column {
			float: left;
			width: 33.3%;
			margin-bottom: 16px;
			padding: 0 8px;
		}

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			margin: 8px;
			background-color: #1C516D;
		}

		.about-section {
			padding: 50px;
			text-align: center;
			background-color: #4A3600;
			color: white;
		}

		.container {
			padding: 0 16px;
			background-color: #2D6988;
		}

		.container::after, .row::after {
			content: "";
			clear: both;
			display: table;
		}

		.title {
			color: white;
		}

		.button {
			border: none;
			outline: 0;
			display: inline-block;
			padding: 8px;
			color: white;
			background-color: #996100;
			text-align: center;
			cursor: pointer;
			width: 100%;
		}

		.button:hover {
			background-color: #555;
		}

		@media screen and (max-width: 650px) {
		.column {
			width: 100%;
			display: block;
		}

		* {
		box-sizing: border-box;
		}

		body, html {
			font-family: Arial;
			font-size: 17px;
		}
	</style>
	</head>
	
	<body>

		<div class="menu">
			<div class="submenu"><a href="Tomb_Game.php" style="color: white; text-decoration: none; font-family: Engravers MT; font-weight: bold; font-size: 18px;">Home</a></div>
			<div class="submenu"><a href="about_us_tomb.php" style="color: white; text-decoration: none; font-family: Engravers MT; font-weight: bold; font-size: 18px">About Us</a></div>
			<div class="submenu"><a href="our_game_tomb.php" style="color: white; text-decoration: none; font-family: Engravers MT; font-weight: bold; font-size: 18px">Our Game</a></div>
			<div class="submenu"><a href="contact_us_tomb.php" style="color: white; text-decoration: none; font-family: Engravers MT; font-weight: bold; font-size: 18px">Contact Us</a></div>
		</div>
	  
		<div class="about-section">
			<image src="image_tomb/OKKKKKKK.jpg" style="float: right"></image>
			<image src="image_tomb/OKKKKKK.jpg" style="float: left"></image>
			<h1 style="font-family: Imprint MT Shadow">About Us Page</h1>
			<p style="font-family: Imprint MT Shadow">Hello everyone, currently we are a group of 5 working on our project and game.</p>
			<p style="font-family: Imprint MT Shadow">Our game and website was made by 5 of us. Our name is F.A.N.A.D</p>
		</div>

		<h2 style="text-align:center; font-family: Engravers MT; font-weight: bold; color: white">Our Team</h2>
		<background-image= src="image/WOOD.jpg"></image>
		<div class="row">
			<div class="column">
				<div class="card">
					<img src="" alt="" style="width:100%;">
		<div class="container">
			<h2></h2>
			<p class="title">GROUP LEADER</p>
			<p>Group leader of the team</p>
			<p>@gmail.com</p>
      </div>
			</div>
				</div>

		<div class="column">
			<div class="card">
				<img src="" alt="" style="width:100%">
			<div class="container">
				<h2></h2>
				<p class="title">Art Director</p>
				<p>Storyboard And Homepage Designer.</p>
				<p>@gmail.com</p>
		</div>
			</div>
				</div>
  
		<div class="column">
			<div class="card">
				<img src="" alt="" style="width:100%" >
		<div class="container">
			<h2></h2>
			<p class="title">Designer</p>
			<p>Contact session</p>
			<p>@gmail.com</p>
      </div>
		</div>
			</div>
				</div>

		<div class="column">
			<div class="card">
				<img src="" alt="" style="width:100%">
		<div class="container">
			<h2></h2>
			<p class="title">Designer</p>
			<p>Submenu "Our Game" designer</p>
			<p>@gmail.com</p>
      </div>
		</div>
			</div>
				</div>
		<div class="column">
			<div class="card">
			<div class="container">
				<h2></h2>
				<p class="title"></p>
				<p></p>
				<p></p>
		</div>
			</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<img src="" alt="" style="width:100%; height: 150%">
			<div class="container">
				<h2 style="font-weight: bold"></h2>
				<p class="title" style="font-weight: bold">Game Developer</p>
				<p style="font-weight: bold">Game Designer and coder</p>
				<p style="font-weight: bold">@gmail.com</p>
        </div>
			</div>
			</div>
		</div>
		
		<div class="footer" style="	display: inline-block; width: 100%; height: 20px; vertical-align: top; text-align: center; margin: 10px 5px 10px; color: white; background-color: black; left: 0; bottom: 0; font-family: Engravers MT;">
		Copyright &copy; FANAD
		</div>
	</body>
</html>