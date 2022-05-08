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
			.big-image{
				margin: 0px 110px;
				float:left;
				
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
				margin: 4px 650px;
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
			<p><b>HOME</b></p>
		</div>
		<!--This is for the banner-->
		<div class="header">
		<img src="img/banner_1.jpg" class="big-image" style="display: block;"/>
		</div>
	
		<!--This is for the body-->
		
		<div class="content">
		<br>
		<a href="https://scratch.mit.edu/studios/31151974/" class="button">DOWNLOAD HERE</a>
		<br>
		<table width =100% border ="1px" bordercolor="darkgrey" bgcolor="darkslategrey">
			<tr height="40"></tr>
			<tr>
			<td width =25%>
				<video width="360" height="240" controls style="display: block";>
					<source src="img/gamevid_demo.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</td>
			<td>
			<br>
			<b>UPDATE</b>
			<div>
			Beta 1.0 releases today!
			<div>
			"Hell House" is out now. It is a mystery and at the same time, fun game. Here are some photos of it. What are you waiting for? Get it now!
			<div>
			<br>
			</br>
			</td>
			</tr>
			<tr height="30">
			<td width =25%><img src="img/game_1.png" style="display: block; width: 100%" vertical-align:"center"></td>
			<td width =25%><img src="img/game_2.png" style="display: block; width: 100%" vertical-align:"center"></td>
			<td width =25%><img src="img/game_3.png" style="display: block; width: 100%" vertical-align:"center"></td>
			<td width =25%><img src="img/game_4.png" style="display: block; width: 100%" vertical-align:"center"></td>
			</tr>
		</table>
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