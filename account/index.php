<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKYB PC Build</title>
    <link rel = "stylesheet" href = "index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include ('../includes/header.php') ?>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $userName = $_POST['userName'] ?? '';
        $password = $_POST['password'] ?? '';

        $newUserName = $_POST['newUserName'] ?? '';
        $email = $_POST['email'] ?? '';
        $newPassword = $_POST['newPassword'] ?? '';
        $confirmPassword = $_POST['confirmPassword'] ?? '';

        $errors = [];

        if (isset($_POST['login']))
        {
            if (empty($userName)) 
            {
                $errors['userName'] = '*Please enter your Username';
            }

            if (empty($password))
            {
                $errors['password'] = '*Please enter your password';
            }
            
            if (empty($errors))
            {
                echo '<div id = "container" id = "container">';
                echo "<h2>Create User Successful</h2>";
                echo "UserName: " . htmlspecialchars($userName) . "<br>";
                echo '';
                echo "</div>";
            }
            else
            {
                include ('account.php');
            }
        }
        else if (isset($_POST['register']))
        {
            if (empty($newUserName))
            {
                $errors['newUserName'] = '*Please create a Username for your account';
            }

            if (empty($email))
            {
                $errors['email'] = '*Please enter your email';
            }
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = 'Please enter a valid email';
            }

            if (empty($newPassword))
            {
                $errors['newPassword'] = 'Please create a new password for your account';
            }

            if (empty($confirmPassword))
            {
                $errors['confirmPassword'] = 'Please enter the password again';
            }
            else if ($confirmPassword != $newPassword)
            {
                $errors['confirmPassword'] = 'Passwords do not match';
            }

            if (empty($errors))
            {
                include ('createUser.php');
            }
            else
            {
                include ('account.php');
            }
        } 
    } 
    else
    {
        $userName = $password = '';
        $newUserName = $email = $newPassword = $confirmPassword = '';
        $errors = '';
        include ('account.php');
    }
    
    ?>
    <script src = "index.js"></script>
</body>
</html>