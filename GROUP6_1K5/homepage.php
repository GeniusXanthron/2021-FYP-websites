<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">
		
		<title>The Coin</title>
		
		<style>			
			body{
				display: block;
			}
			
			.content{
				display: inline-block;				
				justify-content: center;
				align-items: center;
			}
			
			.main{
				display: inline-block;
				justify-content: center;
				margin-left: auto;
				margin-right: auto;
				margin-top: 0%;
				width: 940px;
				text-align: center;
				vertical-align: top;
			}
			
			.btn{
				display: inline-block;
				width: 100%;
				padding: 15px 20px;
				text-align: center;
				border: none;
				background: #a29bfe;
				outline: none;
				border-radius: 30px;
				font-size: 2rem;
				font-weight: bold;
				color: #FFF;
				cursor: pointer;
				transition: .3s;
			}
			
			.btn:hover{
				transform: translateY(-5px);
				background: #6c5ce7;
			}
			
			/*Login Container*/
			.right_bar{
				display: inline-block;
				width: 50px;
				text-align: center;
				vertical-align: top;
				justify-content: center;
				align-items: center;
				margin-left
			}
			
			.log_btn{
				display: inline-block;
				color: white;
				margin: 10px 5px 10px;
				padding: 50px auto;
			}
			
			.log_btn .logout_btn{
				padding: 5px 10px;
				text-align: center;
				border: none;
				background: #a29bfe;
				outline: none;
				border-radius: 20px;
				font-size: 1.2rem;
				color: #FFF;
				cursor: pointer;
				transition: .3s;
			}
			
			.log_btn .logout_btn:hover {
				transform: translateY(-5px);
				background: #6c5ce7;
			}
			
			.log_btn .login_btn{
				padding: 5px 10px;
				text-align: center;
				border: none;
				background: #a29bfe;
				outline: none;
				border-radius: 20px;
				font-size: 1.2rem;
				color: #FFF;
				cursor: pointer;
				transition: .3s;
			}
			
			.log_btn .login_btn:hover {
				transform: translateY(-5px);
				background: #6c5ce7;
			}
			
			.footer{
				font-weight: bold;
				text-align: center;
				align: center;
			}
			
			a{
				text-decoration: none;
				color: white;
			}
			
			.header{
				display: block;
			}
			
			.stb_update{
				display: inline-block;
				width: 100%;
				
			}
			
			.sub_stb_update{
				display: inline-block;
				width: 48%;
				align: left;
				text-align: center;
			}
		</style>
	</head>
	
	<body>
		<!--This is for the menu-->
		<div class="menu">
			<div class="submenu"><a href="homepage.php">Home</a></div>
			<div class="submenu"><a href="about_us.php">About Us</a></div>
			<div class="submenu"><a href="our_game.php">Our Game</a></div>
			<div class="submenu"><a href="contact_us.php">Contact Us</a></div>
		</div>
		<br>
		
		<!--This is for the banner-->
		<div class="header">
			<img src="image/banner.png" style="width: 100%"></img>
		</div>
		
		<!--This is for the content-->
		<div class="content">
			<div class="main">
				<button onclick="window.location.href='our_game.php#game'" class="btn" width="100%">PLAY NOW!</button>
				<br>
				<p class="login-text" style="font-size: 2rem; font-weight: 800; margin-top: 5%">What is "The Coin"?</p>
				<br>
				<p style="font-size: 1.5rem; width: 80%; margin-left: auto; margin-right: auto">A simple platform game suitable for all ages - play The Coin only on Scratch!<br><br>
				Bring you to the magic world - help coin to find his friend by going through the challenge.
				Be sure to avoid from touching the obstacles.</p>
			</div>
			
			<div class="right_bar">
				<div class="container" style="">					
					<p class="login-text" style="font-size: 2rem; font-weight: 800; margin-top: 13%">Join us by simply clicking the "Login" button below.</p>
					<div class="log_btn">
						<button onclick="window.location.href='login.php';" class="login_btn">Login</button>
					</div>
				</div>
			</div>
		</div>
		
		<br><br><br><br><br><br>
		<!--This is for the Latest Update-->
		<div class="update">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; text-align: center; margin-top: 5%">Latest Update</p>
			<br><br><br><br>
			<div class="stb_update">
				<div class="sub_stb_update">
					<img src="image/stb_preview.png" width="400px" align="center" style="margin-left: 20%"></img>
				</div>
				<div class="sub_stb_update">
					<p  style="font-size: 2rem; font-weight:800">Storyboard</p>
					<a href="our_game.php#stb" style="color: #6c5ce7">See more...</a>
				</div>
			</div>
		</div>
		
		<br><br><br><br>
		<!--This is for the footer-->
		<div class="footer">
			Copyright &copy; 2022 The Coin
		</div>
	</body>
</html>