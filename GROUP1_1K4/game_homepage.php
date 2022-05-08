<!-- Images are not available, so the website looks broken -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
		<title>Hedge Maze Game</title>
		<style>
			.menu{
				font-family: Comic Neue;
				background-color: #2c56a3;
			}
			
			.submenu{
				display: inline-block;
				width: 22%;
				vertical-align: top;
				text-align: center;
				color: white;
				margin: 10px 10px 10px;
			}
			
			.img{
				max_width: 100%;
			}
			
			.image{
				flex-basis: 100%;
			}
			
			.right_bar{
				font-family: Comic Neue;
				font-size: 20px;
				padding-left: 20px;
				align-text: left;
				margin-right: 100px;
			}
			
			.container{
				font-family: Comic Neue;
				display: flex;
				justify-content: center;
				margin-top: 30px;
			}
			
			.play{
				margin-right: 15px;
			}
			
			.bottombanner{
				margin-top: 30px;
				margin-left: 200px;
			}
			
			a{
				text-decoration: none;
				color: white;
			}
		</style>
	</head>
	
	<body style="background-color:#44E0C4"> 
		<!--This is the banner-->
		<div class="header">
		<img src="image/banner_placeholder.jpg" style="width: 100%; display: block;"></img>
		</div>
		
		<!--This is the menu-->
		<div class="menu">
			<div class="submenu"><a href="game_homepage.php"><u>Home</u></a></div>
			<div class="submenu"><a href="our_game.php">Our Game</a></div>
			<div class="submenu"><a href="Game_details_webpage.php">Game Details</a></div>
			<div class="submenu"><a href="About_us_webpage.php">About Us</a></div>
		</div>
		
		<!--This is the body-->
		<div class="container">
			<div class="image">
			<img src="image/game_image_2.jpg" style="width: 80%"></img>
			</div>
			
			<div class="right_bar">
				<h1 style="text-align:center">INTRODUCTION⠀⠀</h1>
				<h2> Guide Perry the Parrot through an exciting labyrinth made of hedges! </h2>
				<div class="play">
					<a href="https://scratch.mit.edu/projects/644702759/" target="_blank">
						<img src="image/PLAY_NOW_3.jpg" style="width: 90%; border: 4px solid black; border-radius: 20px;"></img>
					</a>
				</div>
				
				<div class="details">
					<a href="our_game.php">
						<p style="text-align:left; color: black; font-family: Comic Neue;"><u> Details </u></p>
					</a>
				</div>
			</div>
		</div>
	
				<br>
				<br>
				<center>
				<h1 style="font-size: 35px; font-family: Comic Neue;">IN-GAME PICTURES</h1>
				<img src="image/ingame_pic2.png" style="width: 50%"></img>
				<img src="image/ingame_pic1.jpg" style="width: 50%"></img>
				<img src="image/game_image_3.jpg" style="width: 50%"></img>
				</center>
		</div>
		
		<div class="bottombanner">
			<img src="image/hedge_maze_title_long.jpg" style="width: 80%"></img>
		</div>

		<!--This is the footer-->
		<div class="footer">
		Copyright &copy; PerryMaze
		</div>
	</body>
</html>