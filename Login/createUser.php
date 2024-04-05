<?php

	$name = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	$servername = "localhost";
	$dbusername = "Admin";
	$dbpassword = "Sun030904";
	$dbname = "user";

	$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_errno());
	}

	$newUser = "INSERT INTO user (username,password,email) VALUES(?,?,?)";

	$input = mysqli_prepare($conn,$newUser);

	mysqli_stmt_bind_param($input, "sss", $name, $password, $email);

	if(mysqli_stmt_execute($input))
	{
		echo "create user successfully!";
	}
	else
	{
		echo"Error inserting record".mysqli_error($conn);
	}

	mysqli_stmt_close($input);
	mysqli_close($conn);

	header("Location: index.php");
	exit;

?>