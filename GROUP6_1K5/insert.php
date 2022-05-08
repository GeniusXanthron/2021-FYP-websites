<?php
	
	$name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$message = filter_input(INPUT_POST, 'message');
	
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "message";
	
	//Create connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	if (mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	} else{
		$sql = "INSERT INTO comments (name, email, message) values ('$name', '$email', '$message')";
		if ($conn->query($sql)){
			echo "<script>alert('Thank you for your message!')</script>";
			sleep (2);
			header("Location: contact_us.php");
		} else{
			echo "Error: ".$sql."<br>".$conn->error;
		}
		$conn->close();
	}
	
?>