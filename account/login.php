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
    
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) 
    {
        $user = $result->fetch_assoc();
        $hashed_password_from_db = $user['password'];
        $hashed_password_from_input = hash('sha256', $password);
        if ($hashed_password_from_db === $hashed_password_from_input) 
        {
            $_SESSION['userName'] = $userName;
            header("Location: ../mainPage/mainPage.php");
            exit;
        } 
        else 
        {
            $errors['password'] = '*Password does not correct';
        }
    } 
    else 
    {
        $errors['userName'] = '*Invalid username';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>