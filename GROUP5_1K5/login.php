<!DOCTYPE html>
<html>
<head>
    <title>QWOP Game Website</title>
    <meta name="viewport" content="width:device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <style media="screen">		
		::-webkit-scrollbar{
			width: 0;
		}
      *{
        padding: 0;
        margin: 0;
		font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
      }
      body{
		background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(background.png);
		background-size: cover;
		background-position: center;
      }
	  .logo{
			width: 120px;
			cursor: pointer;
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
      .wave{
        position: fixed;
        height: 100%;
        left: 0;
        bottom: 0;
        z-index: -1;
      }
      .container{
        width: 100vw;
        height: 84vh;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 7rem;
        padding: 0 2rem;
      }
      .img{
        display: flex;
        justify-content: flex-end;
        align-items: center;
      }
      .img img{
        width: 500px;
      }
      .login-container{
        display: flex;
        align-items: center;
        text-align: center;
      }
      form{
        width: 360px;
      }
      .avatar{
        width: 100px;
      }
      form h2{
        font-size: 2.9rem;
        text-transform: uppercase;
        margin: 15px 0;
        color: #fff;
      }
      .input-div{
        position: relative;
        display: grid;
        grid-template-columns: 7% 93%;
        margin: 25px 0;
        padding: 5px 0;
        border-bottom: 2px solid #d9d9d9;
      }
      .input-div: after, .input-div: before{
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0;
        height: 2px;
        background-color: #38d39f;
        transition: .3s;
      }
      .input-div: after{
        right: 50%;
      }
      .input-div: before{
        left: 50%;
      }
      .input-div.focus .i i{
        color: #38d39f;
      }
      .input-div.focus div h5{
        top: -5px;
        font-size: 15px;
      }
      .input-div.focus:after, .input-div.focus:before{
        width: 50%
      }
      .input-div.one{
        margin-top: 0;
      }
      .input-div.two{
        margin-bottom: 4px;
      }
      .i{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .i i{
        color: #d9d9d9;
        transition: .3s;
      }
      .input-div > div{
        position: relative;
        height: 45px;
      }
      .input-div > div h5{
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
      }
      .input{
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border: none;
        outline: none;
        background: none;
        padding: 0.5rem 0.7rem;
        font-size: 1.2rem;
        font-family: 'Poppins', sans-serif;
        color: #555;
      }
      a{
        display: block;
        text-align: right;
        text-decoration: none;
        color: #999;
        font-size: 0.9rem;
        transition: .3s;
      }
      a:hover{
        color: #38d39f;
      }
      .btn{
        display: block;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        margin: 1rem 0;
        font-size: 1.2rem;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        cursor: pointer;
        color: #fff;
        text-transform: uppercase;
        font-family: 'Poppins', sans-serif;
        background-size: 200%;
        transition: .5s;
      }
      .btn:hover{
        background-position: right;
      }
    </style>
</head>
<body>
			<div class="navbar">
				<ul>
					<li><a href="index.php">Back To Home</a></li>
				</ul>
			
			</div>
  <img class="wave" src="img/wave.png">
  <div class="container">
    <div class="img">
        <img src="img/img.svg">
    </div>
    <div class="login-container">
      <form action="index.html">
        <img class="avatar" src="img/avatar.svg">
        <h2>Welcome</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div>
            <h5>Username</h5>
            <input class="input" type="text">
          </div>
        </div>
        <div class="input-div two">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div>
            <h5>Password</h5>
            <input class="input" type="password">
          </div>
        </div>
        <a href="#">Forgot Password?</a>
		<a href="play_the_game.php">
		<button type="button" class="btn">LOGIN</button>
		</a>
      </form>
    </div>
  </div>
</body>
<script>
const inputs = document.querySelectorAll(".input");


function addcl(){
let parent = this.parentNode.parentNode;
parent.classList.add("focus");
}

function remcl(){
let parent = this.parentNode.parentNode;
if(this.value == ""){
  parent.classList.remove("focus");
}
}


inputs.forEach(input => {
input.addEventListener("focus", addcl);
input.addEventListener("blur", remcl);
});
</script>
</html>
