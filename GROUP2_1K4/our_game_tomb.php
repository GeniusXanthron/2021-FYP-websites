<!DOCTIME html>
<html lang="eng">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Our Game</title>
			
		<style>
			.menu{
				font-family: Arial;
				font-weight: bold;
				background-color: black;
				border-style: solid;
			}
			
			.submenu{
				display: inline-block;
				width: 22%;
				vertical-align: top;
				text-align: center;
				margin: 10px 5px 10px;
				color: white;
			}
			
			body {
				margin: 0;
				background-color: #0C2D3F;
				font-family: Arial, Helvetica, sans-serif;
				margin: 0;
			}
			
			.game-description{
				text-align: center;
				color: white;
				font-weight: bold;
				font-type: Arial;
				font-size: 30px;
			}
				
			.center {
				display: flex;
				justify-content: center;
				align-items: center;
				height: 200px; 
				}
				
			button{
				background-color: #2AA11E;
				padding: 25px 50px;
				font-type: Times Neue Roman;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				border: #2AA11E;
				color: white;
				cursor: pointer;
				}
			
			a{
				color: white;
				text-decoration: none;
				font-family: Engravers MT;
				font-weight: bold;
				font-size: 18px
			}
			
			h1{
				color: white;
				font-family: Engravers MT; 
				font-weight:bold; 
				font-size:50px; 
				text-align:center;
			}
			
			h3{
				color: white;
				font-family: Imprint MT Shadow;
				font-size; 28px;
				font-weight:bold;
			}
			
			* {
				box-sizing: border-box;
			}
			
			.row {
				display: flex;
			}
			
			.column {
				flex: 33.33%;
				padding: 5px;
			}
			
			p{
				font-family: Imprint MT Shadow;
				font-weight: bold;
				font-size: 25px;
				color: white;
				text-align: center;
			}
			.footer{
				display: inline-block;
				width: 100%;
				height: 20px;
				vertical-align: top;
				text-align: center;
				margin: 10px 5px 10px;
				color: white;
				background-color: black;
				left: 0;
				bottom: 0;
				font-family: Engravers MT;
			}
		</style>
	</head>
	
		<body>
		<!--This is for menu-->
			<div class="menu">
				<div class="submenu"><a href="Tomb_Game.php">Home</a></div>
				<div class="submenu"><a href="about_us_tomb.php">About Us</a></div>
				<div class="submenu"><a href="our_game_tomb.php">Our Game</a></div>
				<div class="submenu"><a href= "contact_us_tomb.php">Contact Us</a></div>
			</div>
			
		<!--This is for the header-->
			<div class="description">
				<div class="game-description">
				<h3>An adventurer is trying to locate a treasure that is hidden inside a tomb. 
				He needs to fight with all the monsters along the way before he reach to the treasure guard.
				He has to defeat the treasure guard and only then he is able to get the treasure. </h3>
                <h3>Are you brave enough to take the challenge?</h3>
				</div>
		<!--Button-->
		<div class="center">
			<button type="button"><a href="https://scratch.mit.edu/projects/641363726"> PLAY NOW! </a></button>
		</div>
		
		<!--Gameplay-->
		<h1> Ingame Gameplay </h1>
		<div class="row">
			<div class="column">
			<img src="image_tomb/ingame_gameplay.jpeg" style="display: block"/>
			<p style="text-align: left"> Zombie chasing the adventurer! </p>
			</div>
			<div class="column">
			<img src="image_tomb/ingame_gameplay2.jpeg" style="display: block; width: 95%"/>
			<p> What happens if you lose! </p>
			</div>
			<div class="column">
			<img src="image_tomb/ingame_gameplay3.jpeg" style="display: block; width: 93%"/>
			<p> The Final Boss! </p>
			</div>
		</div>
			
		<!--Footer-->
		<div class="Footer">
		Copyright &copy; FANAD
		</div>
		</body>
</html>