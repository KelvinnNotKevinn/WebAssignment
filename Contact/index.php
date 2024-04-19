<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
	include("../Includes/header.php");
	
    include('../database/connection.php');

    $name = $email = $phone = $type = $description = $errorMessage = "";
    $tempName = $tempEmail = $tempPhone = "";
  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $tempEmail = input_data($_POST['email']); 
        $tempName = input_data($_POST['name']); 
        $tempPhone = input_data($_POST['phone']); 
        //Description validation	
        if (empty(trim($_POST['description']))) {
            $errorMessage = 'Enter A Brief Description.<br/><br/>';
        } else {
            $description = input_data($_POST['description']);
        }
        //Type Validation  
        if (!isset($_POST['type'])){  
            $errorMessage = "Choose What This Contact Is About";  
        } else {  
            $type = input_data($_POST['type']);  
        }
        //Phone Number Validation  
        if (empty(trim($_POST["phone"]))) {  
            $errorMessage = "Phone No Is Required";  
        }else if(!preg_match ("/^[0-9]*$/", $tempPhone) ) {  
            $errorMessage = "Invalid Phone Number Format";  
        }else if(strlen ($tempPhone) != 10) {  
            $errorMessage = "Phone No. Must Contain 10 Digits.";  
        }else{
            $phone = input_data($_POST['phone']);
        }               
        //Email Validation   
        if (empty(trim($_POST["email"]))) {  
            $errorMessage = "Email Is Required";  
        }else if(!filter_var($tempEmail, FILTER_VALIDATE_EMAIL)) {  
            $errorMessage = "Invalid Email Format";  
        }else{  
            $email = input_data($_POST["email"]);     
        }
        //Name Validation  
        if (empty(trim($_POST["name"]))) {  
            $errorMessage = "Please Fill In Your Name.";  
        } else if (!preg_match("/^[a-zA-Z ]*$/",$tempName)) {  
            $errorMessage = "Only Alphabets And White Space Are Allowed";  
        }else{  
            $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace   
        }  
    }
    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
    }  
    ?>
    <div class="container">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > 
            <h1>Contact Us </h1>
            <input type="text" id = "name" name="name" placeholder="Name" ><br>
            <input type="text" id = "phone" name="phone" placeholder="Mobile +6">
            <input type="email" id = "email" name="email" placeholder="Email" ><br><br>
            <div class="selection">
                <input type="radio" id = "enquiry" name="type" value="enquiry">
                <label for="enquiry">Enquiry</label>
                <input type="radio" id = "feedback" name="type" value="feedback">
                <label for="feedback">Feedback</label><br> 
            </div>
            <br><h4>Type Your Message Here...</h4>
            <textarea name ="description"></textarea>  
            <input type="submit" name = "submit" value="Submit" id="button">
            <?php echo '<span class="error"><div style="color:red;">' . $errorMessage . '</div></span>'; ?>
            </form>
    </div>
    <?php

    if(isset($_POST['submit'])){
        if($errorMessage == "") {  
            $query = "INSERT INTO enquiry Values ('', '$name', '$phone', '$email','$type','$description')";
            mysqli_query($conn, $query);
            echo '<script>alert("Successfull, we will get back to you shortly."); </script>';
        }
    }
    ?> 
</body>
</html>