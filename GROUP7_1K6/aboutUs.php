<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>About Us Page</title>

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

			h2 {
				font-family: 'Roboto Mono', monospace;
				font-weight: 900;
				font-size: 30px;
				color: #b691ff;
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

            .content {
				margin: 20px 0px 0px 20px;
			}

			.peopleContainer {
				font-family: 'Roboto Mono', monospace;
				padding: 20px 0px 0px 20px;
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
			<div class="peopleContainer">
				<div class="">
					<h2>1</h2>
					<p>The creator of chosen game. She also came up with the story for the game and made the storyboard. </p>
				</div>
				<br>
				<br>
				<div class="">
					<h2>2</h2>
					<p>The creator of pseudocode for game. He also helped with the improved version of the game.</p>
				</div>
				<br>
				<br>
				<div class="">
					<h2>3</h2>
					<p>The person who coded the website that you are currently using.</p>
				</div>
				<br>
				<br>
				<div class="">
					<h2>4</h2>
					<p>The creator of the flowchart for the game. He also help the pseudocode of the game.</p>
				</div>
			</div>
        </div>
    </body>
</html>