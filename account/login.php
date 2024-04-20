<?php
    include('../database/connection.php');
    
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) 
    {
        $user = $result->fetch_assoc();
        $hashed_password_from_db = $user['password'];
        $hashed_password_from_input = hash('sha256', $userPassword);
        if ($hashed_password_from_db === $hashed_password_from_input) 
        {
            $_SESSION['userName'] = $userName;
            header("Location: ../mainPage/mainPage.php");
            exit;
        } 
        else 
        {
            $errors['userPassword'] = '*Password does not correct';
        }
    } 
    else 
    {
        $errors['userName'] = '*Invalid username';
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>