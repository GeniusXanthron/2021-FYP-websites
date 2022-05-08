<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>About Game Page</title>

		<!-- Fonts setup -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

        <!-- CSS setup -->
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

            .content {
				margin: 20px 30px 20px 30px;
			}

			.aboutGameContainer {
				horizontal-align: middle;
			}

			.aboutGameImage {
				padding: 0;
				margin: 0px 50px 0px 0px;
				width: 480px;
			}

			.center {
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: auto;
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

        <div class="content">
			<div class="aboutGameContainer">
				<h1>
					Game Link
				</h1>
				<br>
				<p>
					<a href="https://drive.google.com/drive/folders/1hWOkOX4gSne6DP1h-CIozGYLZtHfzexh?usp=sharing">Game download Link (Press me to download game)</a>
				</p>
				<br>
				<br>
				<p>
					<a href="https://scratch.mit.edu/projects/631080038/">Press this link to play the online version.</a>
				</p>
				<br>
				<br>
				<h1>
					About Our Game
				</h1>
				<br>
				<br>
				<img src="images/aboutGameImage1.jpeg" class="center">
				<br>
				<br>
				<p>
					Just Like Wonderland is about an Alice who lives a normal life, until they follow a rabbit down a rabbit 
					hole in an attempt to catch it and keep it as a pet. However, doing so caused them to fall down a rabbit 
					hole, which was also an entrance to the world of Wonderland... The Alice needs to return home to return 
					to their rightful home. Wonderland folk are not too fond of humans, therefore the Alice has to team with 
					the rabbit to get to Wonderland's Queen of Hearts to bring her home. She will need to survive any 
					encounter that might cause danger to them... Whether she survives her journey to the queen's castle will 
					determine if she will return home or stay stuck in Wonderland, and that is where the game takes place.
				</p>
				<br>
				<br>
			</div>
			<div class="codeAboutGame">
				<h1>
					Coding process
				</h1>
				<br>
				<br>
				<img src="images/codeAboutGameImage1.jpeg" class="center">
				<br>
				<br>
				<p>
					The minigames are all started using broadcasts, so that the sprites will know when to start the actions.
				</p>
				<br>
				<p>
					The rabbit in the first game is coded to move up and then immediately down when the player presses space, giving it the illusion of jumping. If the rabbit touches all the obstacles or the obstacles touch the rabbit, the variable 'TIME' will decrease by 10. This is repeated until the rabbit touches the rabbit hole sprite or when the player runs out of TIME. 
				</p>
				<br>
				<p>
					The second game has answer boxes that the player can click. Each box is set so that when the player clicks it, a different broadcast will be sent for each.
				</p>
				<br>
				<p>
					The third minigame has the dormouse and the rat randomly choose between an x position and y position (with the help of lists) and show. They will dissapear after a while if the player does not click it. If the player does click it, the player will either receive a hit or a miss depending on if the player clicks the rat or dormouse.
				</p>
				<br>
				<p>
					The fourth game is rather simple. Four different sprites fall down, choosing a random time before making a clone and moving to the bottom of the screen. The sprites (desserts or garbage) will also randomise the speed of falling. The player will receive a 'Dessert' point or 'Garbage' point depending on whichever they touch.
				</p>
			</div>
        </div>
    </body>
</html>