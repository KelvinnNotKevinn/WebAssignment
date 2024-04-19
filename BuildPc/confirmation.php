<?php
session_start();
//Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "components";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$case = $caseImg = $motherboard = $processor = $ram = $storage = $gpu = $fullName = "";
$motherboardPrice = $processorPrice = $ramPrice = $storagePrice = $gpuPrice = $total = 0;

//Getting the saved selected components from last page
$selected_components = $_SESSION['selected_components'];

//Get components information from components table
$sql = "SELECT * FROM components";
$results = mysqli_query($conn, $sql);
$components = mysqli_fetch_all($results, MYSQLI_ASSOC);

//This is to identify which components was selected from the database component table
//Get the image,name and price of the components with their id
foreach ($components as $component) {
    if ($selected_components['case'] == $component['id']) {
        $caseImg = $component['img'];
        $case = $component['name'];

    }
    if ($selected_components['motherboard'] == $component['id']) {
        $motherboardPrice = $component['price'];
        $motherboard = $component['name'];
        $total += $component['price'];
    }
    if ($selected_components['processor'] == $component['id']) {
        $processorPrice = $component['price'];
        $processor = $component['name'];
        $total += $component['price'];
    }
    if ($selected_components['ram'] == $component['id']) {
        $ramPrice = $component['price'];
        $ram = $component['name'];
        $total += $component['price'];
    }
    if ($selected_components['storage'] == $component['id']) {
        $storagePrice = $component['price'];
        $storage = $component['name'];
        $total += $component['price'];
    }
    if ($selected_components['gpu'] == $component['id']) {
        $gpuPrice = $component['price'];
        $gpu = $component['name'];
        $total += $component['price'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['addToCart'])) {
        $fullName = $case . " | " .  $motherboard . " | " .  $processor . " | " .  $ram . " | " .  $storage . " | " .  $gpu;
        // Add to cart logic here 
        //name = $fullName , price = $total
        echo '<script>alert("Item successfully added to cart!");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    }elseif (isset($_POST['cancel'])) {
        //Brings user back to previous page
        header("Location: index.php");
        exit(); 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build Your Own PC</title>
    <link rel="stylesheet" href="confirmationStyle.css">
</head>
<body>
<!-- This is to display all the components details for user to confirm-->
<div class="container">
    <div class = "case">
        <div id = "caseimage"><?php echo '<img src="' . $caseImg . '" alt="Case Image" height="250px" width="250px">'; ?> </div>
    </div>
    <div class= "description">
        <div class ="line">
            <div id = "title"> Case: </div>
            <div id = "casename"><?php echo $case ?> </div>
        </div>
        <div class = "line">
            <div id = "title"> Motherboard: </div>
            <div id = "name"> <?php echo $motherboard ?> </div>
            <div id="price"> <?php echo 'RM' . $motherboardPrice; ?> </div>
        </div>
        <div class = "line">
            <div id = "title"> Processor: </div>
            <div id = "name"> <?php echo $processor ?> </div>
            <div id="price"> <?php echo 'RM' . $processorPrice; ?> </div>
        </div>
        <div class = "line">
            <div id = "title"> RAM: </div>
            <div id = "name"> <?php echo $ram ?> </div>
            <div id="price"> <?php echo 'RM' . $ramPrice; ?> </div>
        </div>
        <div class = "line">
            <div id = "title"> Storage: </div>
            <div id = "name"> <?php echo $storage ?> </div>
            <div id="price"> <?php echo 'RM' . $storagePrice; ?> </div>
        </div>
        <div class = "line">
            <div id = "title"> GPU: </div>
            <div id = "name"> <?php echo $gpu ?> </div>
            <div id="price"> <?php echo 'RM' . $gpuPrice; ?> </div>
        </div>
        <div class = "total">
            <div id = "title"> Total :  </div>
            <div id = "totalPrice"> <?php echo ' RM' . $total; ?> </div>
        </div>
    </div>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
        <input type="submit" name="addToCart" value="Add To Cart" id="submit">
        <input type="submit" name="cancel" value="Reset" id="cancel">
    </form>
</div>
</body>
</html>
