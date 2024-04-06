<?php
	$username = $_GET["username"];
	$password = $_GET["password"];

	//create connection to database
	$serverName = "localhost";
	$dbName = "user";
	$dbUsername = "Admin";
	$dbPassword = "Sun030904";

	$conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}

	//retrieve the login user from database
	$search = "SELECT * from user WHERE username = ?";

	$getLoginUser = mysqli_prepare($conn, $search);

	mysqli_stmt_bind_param($getLoginUser,"s",$username);

	$retrieveUser = mysqli_stmt_execute($getLoginUser);
	
	if($retrieveUser)
	{
		$loginUserResult = mysqli_stmt_get_result($getLoginUser);

		$loginUserInfoArray = mysqli_fetch_assoc($loginUserResult);
		
		if(mysqli_num_rows($loginUserResult) > 0) //put query result, not the array
		{
			echo "retrieve successfully \n";
			echo $loginUserInfoArray["username"];
		}
		else
		{
			echo "no record!";
		}
	}
	else
	{
		echo "Retrieve data fail".mysqli_error($conn);
	}

	//start comparing the username with password


?>