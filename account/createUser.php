<?php

    include('../database/connection.php');

	$newUser = "INSERT INTO user (userName, email, password) VALUES(?,?,?)";

	$hashed_password = hash('sha256', $newPassword);

	$input = mysqli_prepare($conn,$newUser);

	mysqli_stmt_bind_param($input, "sss", $newUserName, $email, $hashed_password);

	if(mysqli_stmt_execute($input))
	{
		$_SESSION['success_message'] = "Create user successfully!";
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