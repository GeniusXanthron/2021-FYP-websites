<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QWOP Game Website</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
	<style>
	* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.banner{
	width: 100%;
	height: 100vh;
	background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.png);
	background-size: cover;
	background-position: center;
}
.navbar{
	width: 85%;
	margin: auto;
	padding: 35px 0;
	display: flex;
	align-items: center;
	justify-content: space-between;
}
.logo{
	width: 120px;
	cursor: pointer;
}
.navbar ul li{
	list-style: none;
	display: inline-block;
	margin: 0 20px;
	position: relative;
}

.navbar ul li a{
	text-decoration: none;
	color: #fff;
	text-transform: uppercase;
}
.navbar ul li::after{
	content: '';
	height: 2px;
	width: 0%;
	background: #f44336;
	display: block;
	margin: auto;
	transition: 0.5s;
}

.navbar ul li:hover::after{
	width: 100%;
}
.content{
	width: 90%;
	color: #fff;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	text-align: center;
}
.content h1{
	font-size: 62px;
					
}
.content p{
	margin: 10px 0 40px;
	font-size: 14px;
	color: #fff;
}
button{
	width: 200px;
	padding: 15px 0;
	text-align: center;
	margin: 20px 10px;
	border-radius: 25px;
	font-weight: bold;
	border: 2px solid #009688;
	background: transparent;
	color: #fff;
	cursor: pointer;
	position: relative;
	overflow: hidden;
}

span{
	background: #009688;
	height: 100%;
	width: 0%;
	border-radius: 25px;
	position: absolute;
	left: 0;
	bottom: 0;
	z-index: -1;
	transition: 0.5s;
}
button:hover span{
	width: 100%;
}
button:hover{
	border: none;
}
.main{
  width: 100%;
  height: 69vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: SlateBlue;
  background-size: cover;
  background-position: center;
}
.profile-card{
  position: relative;
  width: 200px;
  height: 200px;
  background: #fff;
  padding: 30px;
  border-radius: 50%;
  box-shadow: 0 0 22px #3336;
  transition: .6s;
  margin: 0 25px;
}
.profile-card:hover{
  border-radius: 10px;
  height: 260px;
}
.profile-card .img{
  position: relative;
  width: 100%;
  height: 120%;
  transition: .6s;
  z-index: 99;
}
.profile-card:hover .img{
  transform: translateY(-60px);
}
.img img{
  width: 100%;
  border-radius: 50%;
  box-shadow: 0 0 22px #3336;
  transition: .6s;
}
.profile-card:hover img{
  border-radius: 10px;
}
.caption{
  text-align: center;
  transform: translateY(-110px);
  opacity: 0;
  transition: .6s;
}
.profile-card:hover .caption{
  opacity: 1;
}
.caption h3{
  font-size: 21px;
}
.caption p{
  font-size: 16px;
  color: #0c52a1;
  margin: 2px 0 9px 0;
}
.caption .social-links a{
  color: #333;
  margin-right: 8px;
  font-size: 21px;
  transition: .6s;
}
.social-links a:hover{
  color: #0c52a1;
}
	</style>
</head>

<body>
	<div class="banner">
			<div class="navbar">
				<img src="logo.png" class="logo">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a class="active" href="about_us.php" style="color: Tomato">About Us</a></li>
					<li><a href="game_contents.php">Game Content</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</div>
    <div class="main">
        <div class="profile-card">
            <div class="img">
                <img src=".jpg">
            </div>
            <div class="caption">
                <h3></h3>
                <p>Team Leader</p>
				<p>Game Founder</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src=".jpg">
            </div>
            <div class="caption">
                <h3></h3>
                <p>Website Coder</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src=".jpg">
            </div>
            <div class="caption">
                <h3></h3>
                <p>Game Iterator</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
		<div class="profile-card">
            <div class="img">
                <img src=".jpg">
            </div>
            <div class="caption">
                <h3></h3>
                <p>Assistant Website Coder</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
		<div class="profile-card">
            <div class="img">
                <img src=".jpg">
            </div>
            <div class="caption">
                <h3></h3>
                <p>Game Story Creator</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="./Font-Awesome/all.min.js"></script>
</body>

</html>



