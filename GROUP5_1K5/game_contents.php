<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>QWOP Game Website</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
		<style>
		*{
			margin: 0;
			padding: 0;
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
		.content{
			margin: 0;
			padding: 0;
			height: 120vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background: Gray;
		}
		.content1{
			transform: translate(-50,-50);
			text-align: center;
		}
		.content1 h1{
			font-size: 62px;
		}
		.slider{
  width: 800px;
  height: 500px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 500%;
  height: 500px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 800px;
  height: 500px;
}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: -40px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #000;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 460px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}
::-webkit-scrollbar{
	width: 0;
}
#scrollPath{
	position: fixed;
	top: 0;
	right: 0;
	width: 10px;
	height: 100%;
	background: rgba(255, 255, 255, 0.05);
}
#progressbar{
	position: fixed;
	top: 0;
	right: 0;
	width: 10px;
	background: linear-gradient(to top, #008aff,#00ffe7);
	animation: animate 5s linear infinite;
}
@keyframes animate{
	0%,100%{
		filter: hue-rotate(0deg);
	}
	50%{
		filter: hue-rotate(360deg);
	}
}
#progressbar:before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(to top, #008aff,#00ffe7);
	filter: blur(10px);
}
#progressbar:after{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(to top, #008aff,#00ffe7);
	filter: blur(10px);
}

		</style>
	</head>
	<body>
		<div id="progressbar"></div>
		<div id="scrollPath"></div>
		<div class="banner">
			<div class="navbar">
				<img src="logo.png" class="logo">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about_us.php">About Us</a></li>
					<li><a class="active" href="game_contents.php" style="color: Tomato">Game Content</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</div>
		<div class="content">
		<div class="content1">
<br>
			<h1>GAME CODING & CONTENT</h1>
				<p> These pictures are taken by  (Creator of the Game).</p>
				<p>Note: You have to click the buttons below the pictures to move to the next picture :)</p>
				<br>

			 <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="4.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->
    <script type="text/javascript">
    	let progress = document.getElementById('progressbar');
    	let totalHeight = document.body.scrollHeight - window.innerHeight;
    	window.onscroll = function(){
    		let progressHeight = (window.pageYOffset / totalHeight) * 100;
    		progress.style.height = progressHeight + "%";
    	}
    </script>
	<body>
