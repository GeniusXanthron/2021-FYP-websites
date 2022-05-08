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
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
			background: LightGray;
		}
		.content1{
			transform: translate(-50,-50);
			text-align: center;
		}
		.content1 h1{
			font-size: 62px;
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
					<li><a href="game_contents.php">Game Content</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</div>
		<div class="content">
		<iframe src="https://scratch.mit.edu/projects/641304387/embed" allowtransparency="true" width="585" height="502" frameborder="0" scrolling="no" allowfullscreen></iframe>
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
