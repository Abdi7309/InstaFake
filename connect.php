<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(email, password) values(?, ?)");
		$stmt->bind_param("ss", $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		echo( "<button onclick= \"location.href='home.html'\">home</button>");
		
	}
	$conn->close();
?>

