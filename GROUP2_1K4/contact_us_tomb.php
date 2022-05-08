<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<title>Contact_us</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			body{
				margin: 0;
				padding: 0;
				background-color: #0C2D3F;
				font-family: Arial, Helvetica, sans-serif;
				box-sizing: border-box;
			}
		
			.menu{
				font-family: Arial;
				font-weight: bold;
				background-color: black;
				border-style: solid;
				top: 0;
			}
			
			.submenu{
				display: inline-block;
				width: 22%;
				vertical-align: top;
				text-align: center;
				color: white;
				margin: 10px 5px 10px;
				
			}
			
			a{
				text-decoration: none;
				color: white;
				font-family: Engravers MT;
				font-weight: bold;
				font-size: 18px;
			}
			
			.contact_us{
				width: 90%;
				background: #0C2D3F;
				border-radius: 6px;
				padding: 30px 60px 40px 40px;
				margin-left: 30px;
				margin-right: 50px;
			}
			
			.content{
				display: flex;
				align-items: center;
				justify-content: space-between;
			}
			
			.left-side{
				width: 25%;
				height: 100%;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				margin-top: 15px;
				position: relative;
			}
			
			.left-side::before{
				content: '';
				position: absolute;
				height: 70%;
				width: 2px;
				right: -15px;
				top: 50%;
				transform: translateY(-50%);
				background: #afafb6;
			}
			
			.details{
				margin: 14px;
				text-align: center;
			}
			
			.fa {
			padding: 20px;
			font-size: 30px;
			width: 30px;
		    text-align: center;
			text-decoration: none;
			margin: 5px 2px;
			border-radius: 50%;
			}
			
			.topic{
				font-size: 18px;
				font-weight: 500;
				color: white;
			}
			
			.right-side{
				width: 75%;
				margin-left: 75px;
			}
			
			.right-side h1{
				font-size: 23px;
				font-weight: 600;
				color: #908452;
			}
			
			.right-side label{
				text-transform: uppercase;
				text-align: left;
				font-size: 14px;
				color: white;
			}
			
			.right-side input[type=text], textarea {
				width: 100%;
				border: none;
				font-size: 16px;
				background: #F0F1F8;
				border-radius: 6px;
				padding: 0 15px;
			}
			
			.footer{
				display: inline-block;
				width: 100%;
				height: 20px;
				vertical-align: top;
				text-align: center;
				margin: 10px 5px 10px;
				color: white;
				background-color: black;
				left: 0;
				bottom: 0;
				font-family: Engravers MT;
			}
		</style>
	<head>
	
		<body>
			<!--This is for the menu-->
			<div class="menu">
				<div class="submenu"><a href="Tomb_Game.php">Home</a></div>
				<div class="submenu"><a href="about_us_tomb.php">About Us</a></div>
				<div class="submenu"><a href="our_game_tomb.php">Our Game</a></div>
				<div class="submenu"><a href="contact_us_tomb.php">Contact Us</a></div>	
			</div>
			
			<!--This is for the body-->
			<div class="contact_us">
				<div class="content">
		
				<!--This is for detail-->
				<div class="left-side">
			
				<div class="details">
				<i class="fa fa-phone" style="color: white"></i>
				<div class="topic">Message Us</div>
				<p style="font-size: 16px; color: #afafb6;">+6011-PHONENUM</p><br><br>
				</div>
				
				<div class="details">
				<i class="fa fa-envelope" style="color: white;"></i>
				<div class="topic">Email</div>
				<p style="font-size: 16px; color: #afafb6;">@gmail.com</p><br><br>
				</div>
				
				<div class="details">
				<i class="fa fa-instagram" style="background: #125688; color: white;"></i>
				<i class="fa fa-facebook" style="background: #3B5998; color: white;"></i>
				<div class="topic">Social Media</div>
				<h3 style="color: #afafb6;">Follow us at:</h3>
				<p style="font-size: 16px; color: #afafb6; text-align: left;">Instagram: @</p>
				<p style="font-size: 16px; color: #afafb6; text-align: left;">Facebook: @</p>
				</div>
			</div>
	
			<!--This is for the form-->
			<div class="right-side">
				<h1>Contact Us</h1>
				<p style="font-size: 16px; color: white;">If you have any questions or problem related to our game, you can send us message from here. It's our pleasure to help you.</p><br>
				
				<form action="" method="POST">
				<label>Name:</label> 
				<input type="text" maxlength="100" placeholder="Enter your name"></input><br><br>
				<label>Email Address:</label> 
				<input type="text" maxlength="100" placeholder="Enter your email"></input><br><br>
				<label>Message:<label><br>
				<textarea rows="10" cols="30" placeholder="Write something.." style="height:200px"></textarea><br><br>
				<input type="submit" style="background-color: #908452; font-size: 14px; outline: none; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; text-transform: uppercase; font-weight: bold;"></input><br><br>
				</form
			</div>	
			
			
			</div>
		</div>
	
	
	
	
	
	
	
	
	
		<!--This is for the footer-->
			<div class="footer">
				Copyright &copy;FANAD
			</div>
		<body>
	
<html>