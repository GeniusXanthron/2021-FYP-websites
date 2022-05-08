<!-- Images are not available, so the website looks broken -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
		<title>About Our Game</title>
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
				margin-left: 30px;
			}
			
			.details{
				align-text: center;
				font-family: Comic Neue;
			}
			
			.bottombanner{
				margin-top: 30px;
				margin-left: 300px;
			}
			
			.experience{
				font-family: Comic Neue;
				margin-left: 650px;
			}
			
			.imageexp{
				margin-left: 250px;
			}
		</style>
	</head>
	
	<body style="background-color:#31a0f5">
		<!--This is the banner-->
		<div class="header">
		<img src="image/banner_placeholder.jpg" style="width: 100%; display: block;"></img>
		</div>
		
		<!--This is the menu-->
		<div class="menu">
			<a href="game_homepage.php">
				<div class="submenu">Home</div>
			</a>
			
			<a href="our_game.php">
				<div class="submenu"><u>Our Game</u></div>
			</a>
			
			<a href="Game_details_webpage.php">
				<div class="submenu">Game Details</div>
			</a>
			
			<a href="About_us_webpage.php">
				<div class="submenu">About Us</div>
			</a>
		</div>
		
		<!--This is the body-->
		<div class="container">
			<div class="image">
				<a href="https://scratch.mit.edu/projects/644702759/" target="_blank">
					<img src="image/game_image_2.jpg" style="width: 80%"></img>
					<img src="image/game_image_4.jpg" style="width: 80%"></img>
				</a>
			</div>
			
			<div class="right_bar">
				<h1 style="text-align:center; font-family: Comic Neue;">INTRODUCTION⠀⠀</h1>
				<h2 style="font-family: Comic Neue;"> Guide Perry the Parrot through an exciting labyrinth made of hedges! </h2>
				<div class="play">
					<a href="https://scratch.mit.edu/projects/644702759/" target="_blank">
						<img src="image/PLAY_NOW_2.jpg" style="width: 90%"></img>
					</a>
				</div>
				
				<div class="details">
					<p style=text-align:left> Hi! I am Perry. Can you guide me to my nest? I have to find my way home! </p>
					<a href="http://localhost/dashboard/my_webpage/game_details_webpage.php">	
						<img src="image/my_story.jpg" style="width: 30%"></img>
					</a>
					<a href="https://scratch.mit.edu/projects/644702759/" target="_blank">
						<img src="image/guide_him.jpg" style="width: 30%"></img>
					</a>
				</div>
			</div>
		</div>
		
		<!--These are the levels-->
		<div class="experience">
			<br>
			<u><h1>GAME EXPERIENCE</h1></u>
		</div>
		
		<div class="imageexp">
			<img src="image/levels.jpg" style="width: 80%"></img>
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