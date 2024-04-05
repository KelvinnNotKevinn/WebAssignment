<?php
	$userName = $_POST["newUserName"];
	$email = $_POST["email"];
	$password = $_POST["newPassword"];
	$confirmPassword = $_POST['confirmPassword'];

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "web_assignment";

	$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_errno());
	}

	$newUser = "INSERT INTO user (userName, email, password) VALUES(?,?,?)";

	$input = mysqli_prepare($conn,$newUser);

	mysqli_stmt_bind_param($input, "sss", $userName, $email, $password);

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