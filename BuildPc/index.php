<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Build Your Own PC </title>
    <link rel="stylesheet" href="indexStyles.css">
</head>

<body>
    <?php
    session_start();
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web_assignment";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //Get components information from components table
    $sql = "SELECT * FROM components";
    $results = mysqli_query($conn, $sql);
    $components = mysqli_fetch_all($results, MYSQLI_ASSOC);
    $case = $motherboard = $processor = $ram = $gpu = $storage = $errorMessage = ""; 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
        //Validation for form selection Case
        if (!isset($_POST['case'])){  
            $errorMessage = "Please choose your case";  
        } else {  
            $case = input_data($_POST['case']);  
        }

        //Validation for form selection Motherboard
        if (!isset($_POST['motherboard'])){  
            $errorMessage = "Please choose your motherboard";  
        } else {  
            $motherboard = input_data($_POST['motherboard']);  
        }

        //Validation for form selection Processor
        if (!isset($_POST['processor'])){  
            $errorMessage = "Please choose your processor";  
        } else {  
            $processor = input_data($_POST['processor']);  
        }

        //Validation for form selection RAM
        if (!isset($_POST['ram'])){  
            $errorMessage = "Please choose your ram.";  
        } else {  
            $ram = input_data($_POST['ram']);  
        }

        //Validation for form selection GPU
        if (!isset($_POST['gpu'])){  
            $errorMessage = "Please choose your gpu";  
        } else {  
            $gpu = input_data($_POST['gpu']);  
        }

        //Validation for form selection Storage
        if (!isset($_POST['storage'])){  
            $errorMessage = "Please choose your storage";  
        } else {  
            $storage = input_data($_POST['storage']);  
        }
    }

    if(isset($_POST['submit'] ) && $errorMessage == "") { 
        // Save the selected components using session
        $_SESSION['selected_components'] = [
            'case' => $case,
            'motherboard' => $motherboard,
            'processor' => $processor,
            'ram' => $ram,
            'storage' => $storage,
            'gpu' => $gpu,
        ];
        // Head to confirmation page
        header("Location: confirmation.php");
    }

    //This function is to input data
    function input_data($data) {  
        $data = trim($data);  
        $data = stripslashes($data);  
        $data = htmlspecialchars($data);  
        return $data;  
    }
    ?>  
    <br>
    <!-- This form is for user to choose components-->
    <form method="post" > 
        <div class=table>
            <div class = "section">
                <div class ="wrapper">
                    <div class="title" > Case </div>
                    <div class="box">
                        <input type="radio" name="case" value="1" id ="option-1" >
                        <input type="radio" name="case" value="2" id ="option-2" >
                        <input type="radio" name="case" value="3" id ="option-3" >
                        <label for="option-1" class="option-1">
                            <div class="dot"></div>
                            <div class="text">DAYLIGHT</div>
                        </label>
                        <label for="option-2" class="option-2">
                            <div class="dot"></div>
                            <div class="text">ROSELIA</div>
                        </label>
                        <label for="option-3" class="option-3">
                            <div class="dot"></div>
                            <div class="text">NIGHTWING</div>
                        </label>
                    </div>
                </div>
                <div class ="wrapper">
                    <div class="title" > Motherboard </div>
                    <div class="box">
                        <input type="radio" name="motherboard" value="4" id ="option-4">
                        <input type="radio" name="motherboard" value="5" id ="option-5">
                        <input type="radio" name="motherboard" value="6" id ="option-6">
                        <label for="option-4" class="option-4">
                            <div class="dot"></div>
                            <div class="text">RM425 - AMD B450M GAMING MOTHERBOARD</div>
                        </label>
                        <label for="option-5" class="option-5">
                            <div class="dot"></div>
                            <div class="text">RM483 - ASUS STRIX Z270F GAMING MOTHERBOARD</div>
                        </label>
                        <label for="option-6" class="option-6">
                            <div class="dot"></div>
                            <div class="text">RM628 - ASUS TUF B550M-PLUS GAMING MOTHERBAORD</div>
                        </label>
                    </div>  
                </div>
            </div> <br>
            <div class = "section">
                <div class ="wrapper">
                    <div class="title" > Processor </div>
                    <div class="box">
                        <input type="radio" name="processor" value="7" id ="option-7" >
                        <input type="radio" name="processor" value="8" id ="option-8" >
                        <input type="radio" name="processor" value="9" id ="option-9" >
                        <label for="option-7" class="option-7">
                            <div class="dot"></div>
                            <div class="text">RM399 - AMD RYZEN 5 5500</div>
                        </label>
                        <label for="option-8" class="option-8">
                        <div class="dot"></div>
                        <div class="text">RM619 - Intel® Core™ i5-12400F</div>
                        </label>
                        <label for="option-9" class="option-9">
                            <div class="dot"></div>
                            <div class="text">RM1,199 - Intel® Core™ i7-12700F</div>
                        </label>
                    </div>  
                </div>
                 <div class ="wrapper">
                    <div class="title" > Random Access Memory </div>
                    <div class="box">
                        <input type="radio" name="ram" value="10" id ="option-10">
                        <input type="radio" name="ram" value="11" id ="option-11">
                        <input type="radio" name="ram" value="12" id ="option-12">
                        <label for="option-10" class="option-10">
                            <div class="dot"></div>
                            <div class="text">RM115 - ADATA XPG SPECTRIX 8GB DDR4 3200MHZ</div>
                        </label>
                        <label for="option-11" class="option-11">
                            <div class="dot"></div>
                            <div class="text">RM162 - KINGSTON HYPERX FURY 8GB DDR4 3200MHZ</div>
                        </label>
                        <label for="option-12" class="option-12">
                            <div class="dot"></div>
                            <div class="text">RM235 - ADATA XPG SPECTRIX 16GB DDR4 3600MHZ</div>
                        </label>
                    </div>  
                </div>
            </div><br>
            <div class = "section">
                <div class ="wrapper">
                    <div class="title" > Graphics Processing Unit </div>
                    <div class="box">
                        <input type="radio" name="gpu" value="13" id ="option-13">
                        <input type="radio" name="gpu" value="14" id ="option-14">
                        <input type="radio" name="gpu" value="15" id ="option-15">
                    <label for="option-13" class="option-13">
                        <div class="dot"></div>
                        <div class="text">RM1,159 - GIGABYTE GTX 1650 WINDFORCE 4GB</div>
                    </label>
                    <label for="option-14" class="option-14">
                        <div class="dot"></div>
                        <div class="text">RM1,520 - ZOTAC RTX 4060 TWIN EDGE 8GB</div>
                    </label>
                    <label for="option-15" class="option-15">
                        <div class="dot"></div>
                        <div class="text">RM3,892 - ASUS RTX 4070 DUAL GEFORCE 12GB</div>
                    </label>
                    </div>  
                </div>
                <div class ="wrapper">
                    <div class="title" > Storage </div>
                    <div class="box">
                        <input type="radio" name="storage" value="16" id ="option-16">
                        <input type="radio" name="storage" value="17" id ="option-17">
                        <input type="radio" name="storage" value="18" id ="option-18">
                    <label for="option-16" class="option-16">
                        <div class="dot"></div>
                        <div class="text">RM308 - WD SA510 500GB SATA SSD</div>
                    </label>
                    <label for="option-17" class="option-17">
                        <div class="dot"></div>
                        <div class="text">RM416 - XPG S60 1TB PCIE SSD</div>
                    </label>
                    <label for="option-18" class="option-18">
                        <div class="dot"></div>
                        <div class="text">RM642 - SAMSUNG 980 1TB NVME M.2 SSD</div>
                    </label>
                </div>  
            </div>
        </div> <br>
        <button type="submit" name="submit" value = "submit" >Add To Build</button>
    </div>
    </form>
    <?php  
    // Display error message if there's an error
    if (!empty($errorMessage)) { 
        echo "<div style='color: #ff0000; font-size: 25px;'>$errorMessage</div>";
    }  
    ?>
</body>
</html>