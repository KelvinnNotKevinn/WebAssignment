<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Login or Sign up</title>
	
	<link rel="stylesheet" href="/assignment/style.css">
	
</head>

<body>
<!-- create a section for create user -->
	<section id="createUserPage">
	
		<!-- a form to input user info -->
		<form method="post" id="userSignUp" action="createUser.php">
			<label for='username'>Username</label>
			<input id='username' name='username' type = "text">
			<br>
			
			<label for='email'>Email</label>
			<input id='email' name="email" type = "email">
			<br>
			
			<label for='password'>Password</label>
			<input id='password' name="password" type = "password">
			<br>
			
			<label for='confirmPassword'>Confirm Password</label>
			<input id='confirmPassword' type = "password">
			<br>
			
			<input type="submit" value="submit"></input>
		</form>
	</section>
	
	<?php

	$name = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	$servername = "localhost";
	$dbusername = "Admin"; //root
	$dbpassword = "Sun030904"; //
	$dbname = "user";

	$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
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
</body>

</html>
		