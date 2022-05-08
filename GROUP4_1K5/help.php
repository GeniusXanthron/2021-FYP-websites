<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Hell House</title>
		<style>
			.menu{
				font-family: consolas;
				font-size: 100%;
				font-weight: bold;
				background-color: black;
			}
			.submenu{
				display: inline-block;
				width: 19%;
				vertical-align: top;
				text-align: center;
				margin: 8px 2px;
				background-color:black;
				font-size: 140%;
			}
			.header{
				display: inline-block;
				width: 100%;
				vertical-align: top;
				background-color: darkslategrey;
			}
			.contentforheader{
				display: inline-block;
				width: 100%;
				vertical-align: top;
				display: inline-block;
				text-align: center;
				font-size: 250%;
				background-color: darkslategrey;
				text-decoration: none;
				color: white;
				font-family: segoe ui;
			}
			.content{
				display: inline-block;
				width: 100%;
				vertical-align: top;
				display: inline-block;
				text-align: center;
				font-size: 95%;
				background-color: darkslategrey;
				text-decoration: none;
				color: white;
				font-family: segoe ui;
			}
			.main{
				display: inline-block;
				width: 100%;
				vertical-align: top;
			}
			a{
				text-decoration: none;
				color: white;
			}
			.footer{
				background-color: steelblue;
				color: black;
				width: 100%;
				text-align:left;
				font-size:95%;
				font-family: segoe ui;
			}
			.footerimage{
				background-color: black;
				color: white;
				width: 90%;
				text-align:left;
				font-size:23px;
			}
			.menuimage{
				margin-top:13px;
			}
			.button {
				background-color: #4CAF50;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}

		</style>
		

	</head>

	<body>
		<!--This is for the menu-->
		<div class="menu">
			<div class="submenu" style="margin: 15px 0px 0px 15px"><a href="homepage.php"><img src="img/home_logo.jpg" width="130px"></a></div>
			<div class="submenu"><a href="homepage.php"><img src="img/homepage_logo.jpg" width="60px" class="menuimage"><p>Home</p></a></div>
			<div class="submenu"><a href="about_game.php"><img src="img/about_game_logo.jpg" width="70px" class="menuimage"><p style="margin-top:29px;">About Game</p></a></div>
			<div class="submenu"><a href="about_us.php"><img src="img/about_us_logo.jpg" width="60px" class="menuimage"><p>About Us</p></a></div>
			<div class="submenu"><a href="help.php"><img src="img/help_logo.jpg" width="70px" class="menuimage"><p>Help</p></a></div>
		</div>
		<div class="contentforheader">
			<p><b>QUESTIONS AND ANSWERS</b></p>
		</div>

		<!--This is for the banner-->

	
		<!--This is for the body-->
		<div class="content">
			<div class="main">
			<p style="font-size:120%;">Hello and welcome to the QnA section.</p>
			<div>
			<p style="font-size:120%;">Here, you might find the solution or answers to your problems and questions.</p>
			<div>
			<p style="font-size:120%;">Feel free to post your questions too! We will do our best to answer them one by one.</p>
			<div>
		</div>
		<br>
		<a href="help2.php" class="button">CLICK HERE FOR QNAS</a>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</body>
</html>