<?php
		if(!isset($_POST['username'])||!isset($_POST['email'])||!isset($_POST['password'])){
			die("Data Error");
		}

		if(!strpos($_POST['email'],"@")){
			die("Invaild email address");
		}
		
		include_once "config.php";
		# Creating and Checking Connection of members
		$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);
		
		if ($conn->connect_error){
			die("Connection Failed :".$conn->connect_error);
		}
		$username = $_POST['username'];

		/*For checking the user name from the database.....

		$stmt = $conn->prepare("SELECT `username` FROM `users` WHERE `username` = ?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		if(!$stmt->get_result()){
			die("Error: username already exists");
		}
		$stmt->close();*/

		$email = $_POST['email'];
		$password = ($_POST['password']);
		
		
		$stmt = $conn->prepare("INSERT INTO `users` (`username`,`email`,`password`) VALUES (?,?,?)");
		$stmt->bind_param("sss",$username,$email,$password);
		$stmt->execute();
		
		$conn->close();
		
		header("Location: ../Myapp2.php");