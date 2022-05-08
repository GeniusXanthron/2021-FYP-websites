<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contacts Page</title>

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

			h3 {
				font-family: 'Roboto Mono', monospace;
				font-weight: 400;
				font-size: 28px;
				color: #b691ff;


			}

			h4 {
				font-family: 'Roboto Mono', monospace;
				font-weight: 300;
				font-size: 24px;
				color: white;


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
            <h1>
				Contact Information
			</h1>
			<br>
			<br>
			<h3>
				1
			</h3>
			<h4>
				Email Address: @gmail.com
			</h4>
			<br>
			<h3>
				2
			</h3>
			<h4>
				Email Address: @gmail.com
			</h4>
			<br>
			<h3>
				3
			</h3>
			<h4>
				Email Address: @gmail.com
			</h4>
			<br>
			<h3>
				4
			</h3>
			<h4>
				Email Address: @gmail.com
			</h4>
        </div>
    </body>
</html>