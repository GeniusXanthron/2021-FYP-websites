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
		    .content1{
				display: inline-block;
				width: 100%;
				vertical-align: top;
				display: inline-block;
				font-size: 100%;
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
			.table{
				width: 100%;
				display: inline-block;
				vertical-align: top;
				display: inline-block;
				text-align: left;
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
			.grid-container{
				display: grid;
                grid-template-columns: 30% auto;
                background-color: darkslategrey;
                padding: 15px;    
			}
			.grid-item{
				background-color: darkslategrey;
				border: 3px solid black;
				padding: 30px;
				font-size: 120%
			}
			.image{
			    display:block;
				margin-left:auto;
				margin-right:auto;
				width:50%;
		    }
			.menuimage{
				margin-top:13px;
			}
			.big-image{
				padding-left:50px;
				padding-right:10px;
				float:left;
				
			}
			.txt{
				align:left;
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
			<p><b>ABOUT GAME</b></p>
		</div>
		<div class="content1 header">
		<img src="img/banner_2.jpg" class="big-image" style="margin:0px 60px;"/>
		<div class="content">
			<div class="main">
			<p><b>Story of the Game</b></p>
			<p>The story is about Gappie, a golden apple who saw a sign that said "FREE MONEY". Attracted, he went into the house where the sign was pointing.
			<div>
			Inside, he stole a gun and went inside another room where he saw a note that there were going to be monsters and mobs that were going to kill him.
			<div>
			The door shut, and he had to kill all of them, and if he died, he had to do it all over again with no memories of what happened before.
			<div>
			If he did win, he will go through a portal that would send him somewhere and the end, to be continued.</p>
			</div>
		</div>
		<div class="content">
			<p><b>CHARACTERS</b></p>
		</div>
		<div class="table">
		    <div class="grid-container">
		        <div class="grid-item"><img src="img/gappie.png" class="image"></img></div>
		        <div class="grid-item">Name: Player/Gappie<br>Description: Can shoot, teleport, and is pretty stupid<br>Player</p></div>
				<div class="grid-item"><img src="img/tronkee.png" class="image"></img></div>
				<div class="grid-item">Name: Tronkee<br>Description: The boss, will summon roots to block bullets, summons poison apples that explode on contact<br>Enemy</p></div>
		        <div class="grid-item"><img src="img/boomboy.png" class="image"></img></div>
				<div class="grid-item">Name: Boomboy<br>Description: Will explode when killed, low hp and very fast<br>Enemy</p></div>
				<div class="grid-item"><img src="img/touther.png" class="image"></img></div>
		        <div class="grid-item">Name: Touther<br>Description: High hp, mediocre speed, will spew chompers whenever bouncing, will summon bloothers upon death<br>Enemy</p></div>
		        <div class="grid-item"><img src="img/bloother.png" class="image"></img></div>
				<div class="grid-item">Name: Bloother<br>Description: A bit fast, summoned by touthers, mediocre hp, comes in high numbers<br>Enemy</p></div>
				<div class="grid-item"><img src="img/mrjell.png" class="image"></img></div>
				<div class="grid-item">Name: Mr. Jell<br>Description: Doesn't move except when he will occasionally dash to you, mediocre hp<br>Enemy</p></div>
				<div class="grid-item"><img src="img/creeple.png" class="image"></img></div>
		        <div class="grid-item">Name: Creeple<br>Description: Low hp, gets faster everytime you hit him<br>Enemy</p></div>
		        <div class="grid-item"><img src="img/binboy.png" class="image"></img></div>
				<div class="grid-item">Name: Bin Boy<br>Description: Very fast and mediocre hp, he will spew trash in a random direction when you hit him and spews a lot of trash when dying.<br>Enemy</p></div>
				<div class="grid-item"><img src="img/skullhole.png" class="image"></img></div>
		        <div class="grid-item">Name: Skull Hole<br>Description: Very slow, high hp, will always shoot at you<br>Enemy</p></div>
		    </div>
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