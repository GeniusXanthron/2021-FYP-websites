<!DOCTYPE html> 
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tomb Game</title>
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
			
			body{
				background-color: #0C2D3F;
				font-family: Arial, Helvetica, sans-serif;
				margin: 0;
			}
				
			.content{
				height: 100%;
				display: block;
				color: white;
			}
			
			h1{
				font-family: Engravers MT;
				font-size: 35px;
				font-weight: bold;
				text-align: center;
			}
			
			p{
				font-family: Times Neue Roman;
				font-size: 45px;
				font-weight: bold;
				text-decoration: none; 
			}
			
			img{
				float: right; 
				display: block;
				border: 6px solid #908452;
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
				font-size: 18px;
			}
		</style>
	</head>
	
	<body>
	
		<!--This is for the menu-->
		<div class="menu">
			<div class="submenu"><a href="Tomb_Game.php">Home</a></div>
			<div class="submenu"><a href="about_us_tomb.php">About Us</a></div>
			<div class="submenu"><a href="our_game_tomb.php">Our Game</a></div>
			<div class="submenu"><a href= "contact_us_tomb.php">Contact Us</a></div>
		</div>
		
		<!--This is for the banner-->
		<div class="header">
		<img src="image_tomb/Tomb_Banner_New.png" style="display: block; width: 100%; border: none;"/>
		</div>
		
		<!--This is for the body-->
		<div class="content">
			<div class="main">
		<h1> Welcome to Tomb: The Executer official game website! </h1>
		
		<!--Button-->
		<div class="center">
		<button type="button"><a href="https://scratch.mit.edu/projects/641363726"> PLAY NOW! </a></button>
		</div>
		
		<img src="image_tomb/Home_Ingame.jpeg"/>
		<p>Experience the most unforgettable moment of your life!</p>
	    <p>You can sit back, relax and enjoy!</p>
		<p>Challenge you friend to beat the game!</p>
		
		</div>
		
		<!--This is for the footer-->
		<div class="footer">
		Copyright &copy; FANAD
		</div>
	</body>
</html> 