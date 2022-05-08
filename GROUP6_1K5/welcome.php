<?php 

	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
	}
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">
		
		<title>Welcome</title>
		<style>
			.container{
				min-height:300px;
			}
		
			.container h1 {
				color: black;
				margin-top: 10%;
				text-align: center;
			}
			
			.container p{
				color: black;
				text-align: center;
			}
			
			.container .btn{
				margin-bottom: 10%;
			}
		</style>
	</head>

	<body style="display: flex; justify-content: center; align-items: center">
		<div class="container">
			<?php echo "<h1>Welcome " . $_SESSION['username'] . " !</h1>"; ?>
			
			<p>It's good to see you again!</p>
			<br>
			<button onclick="window.location.href='homepage1.php';" class="btn">Next</button>
		</div>
	</body>
</html>