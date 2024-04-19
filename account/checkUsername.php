<?php

    include('../database/connection.php');

	$checkQuery = "SELECT * FROM user WHERE userName = '$newUserName'";
	$checkResult = mysqli_query($conn, $checkQuery);

	if (mysqli_num_rows($checkResult) > 0) 
	{
		$errors['newUserName'] = '*Username already exists';
	}
    mysqli_close($conn);
    return $errors;
?>