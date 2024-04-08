<?php

    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "web_assignment";

	$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_errno());
	}

	$checkQuery = "SELECT * FROM user WHERE userName = '$newUserName'";
	$checkResult = mysqli_query($conn, $checkQuery);

	if (mysqli_num_rows($checkResult) > 0) 
	{
		$errors['newUserName'] = '*Username already exists';
	}
    mysqli_close($conn);
    return $errors;
?>