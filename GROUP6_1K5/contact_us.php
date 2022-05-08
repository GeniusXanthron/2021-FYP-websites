<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">
		
		<title>Contact Us</title>
		<style>	
			body {
				display: block;
			}
			
			/*Contact Us*/
			.contact_us{
				display: block;
			}
			
			.sub_contact_us{
				align-items: center;
				text-align: center;
			}
			
			.cu_info{
				 font-size: 20px;
			}
		
			.footer{
				font-weight: bold;
				text-align: center;
				align: center;
				min-width: 100%;
			}
			
			a{
				text-decoration: none;
				color: white;
			}
			
			.input-group{
				width: 100%;
				height: 50px;
				margin-bottom: 25px;
			}
			
			input{
				width: 100%;
				height: 100%;
				border: 2px solid #e7e7e7;
				padding: 15px 20px;
				font-size: 1rem;
				border-radius: 30px;
				background: transparent;
				outline: none;
				transition: .3s;
			}
		</style>
	</head>
	
	<body>
		<!--This is for the  menu-->
		<div class="menu">
			<div class="submenu"><a href="homepage.php">Home</a></div>
			<div class="submenu"><a href="about_us.php">About Us</a></div>
			<div class="submenu"><a href="our_game.php">Our Game</a></div>
			<div class="submenu"><a href="contact_us.php">Contact Us</a></div>
		</div>
		<br>
		
		<!--This is for the body-->
		<div class="contact_us" style="justify-content: center; align-items: center">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; margin-top: 5%; text-align: center">Contact us here!<br>We will be glad to answer your questions.</p>
			<br><br>
			<div class="container" style="margin-left: auto; margin-right: auto">
				<form action="insert.php" method="POST" class="comment" style="margin-top: auto; margin-bottom: auto">
					<div class="input-group">
						<input type="text" placeholder="Name" name="name" required>
					</div>
					<div class="input-group">
						<input type="email" placeholder="E-mail" name="email" required>
					</div>
					<div class="input-group">
						<input type="text" placeholder="Your message" name="message" required>
					</div>
					<div class="input-group">
						<button name="submit" class="btn">Submit</button>
					</div>
				</form>
			</div>
		</div>
		
		<div class="faq" style="justify-content: center; align-items: center">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; margin-top: 13%; text-align: center">Frequently Asked Questions (FAQ)</p>
			<br><br>
			<div class="container"  style="margin-left: auto; margin-right: auto; width: 700px; box-shadow: none">
				What is The Coin?<br><br>The Coin is a simple platform game, suitable for players of all ages.
				<br><br><hr size="5" width="635px" color="#dfdfdf"><br>
				Is The Coin free?<br><br>Yes, it is a free online game.
				<br><br><hr size="5" width="635px" color="#dfdfdf"><br>
				Where can I play The Coin?<br><br>You can play it on Scratch or click<a href="our_game.php#game" style="color: #6c5ce7"> here</a>.
				<br><br><hr size="5" width="635px" color="#dfdfdf"><br>
				Why the game is lagging while I was playing?<br><br>If the game is lagging, it may be due to a poor line, low internet connection or your Scratch is having problems.
				Check your line and internet connection. Then, reload the Scratch page.
			</div>
			<br><br><br><br>
		</div>
				
		<!--This is for the footer-->
		<div class="footer">
			Copyright &copy; 2022 The Coin
		</div>
	</body>
</html>