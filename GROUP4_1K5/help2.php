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
			.content{
				display: inline-block;
				width: 100%;
				vertical-align: top;
				display: inline-block;
				text-align: left;
				font-size: 95%;
				background-color: darkslategrey;
				text-decoration: none;
				color: white;
				font-family: segoe ui;
				text-indent: 50px;
			}
			.contenttitle{
				display: inline-block;
				width: 100%;
				vertical-align: top;
				display: inline-block;
				text-align: left;
				font-size: 95%;
				background-color: darkslategrey;
				text-decoration: none;
				color: white;
				font-family: segoe ui;
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
			.header{
				display: inline-block;
				width: 100%;
				vertical-align: top;
				background-color: darkslategrey;
			}
			.main{
				display: inline-block;
				width: 70%;
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
		<!--This is for the body-->
		<div class="contentforheader">
			<p style=text-align:center;><b>QUESTIONS AND ANSWERS</b></p>
		</div>
		<div class="content">
			<p>Q: Is the game free?</p>
			<p>A: Yes, the game is totally free.</p>
			<br>
			<p>Q: Why is your studio called Pew Pew Studio?</p>
			<p>A: It's because most of the games produced are shooter-based games.</p>
			<br>
			<p>Q: Why is the main character an apple?</p>
			<p>A: It's because it is the leader's mascot.</p>
			<br>
			<p>Q: Why is the game called "Hell House"? It sounds violent.</p>
			<p>A: It's because the game is hard and you'll have to try over and over again to fight all the demons, which feels like hell.</p>
			<br>
			<p>Q: What game engine is being used?</p>
			<p>A: We used Scratch as the coding platform.</p>
			<br>
			<p>Q: How were you able to make a website at such a young age?</p>
			<p>A: It's because we learned a lot from the mentors.</p>
			<br>
			<p>Q: How did you create this website?</p>
			<p>A: We used Notepad++ as our script editor and XAMPP as website host.</p>
			<br>
			<p>Q: Can we reuse the materials in your game?</p>
			<p>A: You can have the rights to use them, but you have to credit us.</p>
			<br>
			<p>Q: Do we have to log in to open the website?</p>
			<p>A: It is not necessary.</p>
		</div>
		
		<!--This is for the footer-->
		<div class="footer" style="margin:0px 0px;">
		<br>
		Created in 2022
		<br>
		Copyright &copy; pew_pew_studio
		<br>
		<br>
		<img src="img/footer_banner.jpg" class="footerimage" style="display: block; width: 100%;"/>
		</div>
	</body>
</html>