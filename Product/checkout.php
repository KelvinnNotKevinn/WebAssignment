<?php
session_start();
include('config.php');

// Check if the cart is empty
if (empty($_SESSION['cart'])) 
{
    // Display alert and redirect
    echo "<script>alert('Cart is empty!'); window.location.href = 'shoppingcart.php';</script>";
    exit();
}

// Define variables to empty values
$nameErr = $addressErr = $credit_cardErr = $expMonthErr = $expYearErr = $cvvErr = "";
$name = $address = $credit_card = $expiration_month = $expiration_year = $cvv = "";

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Perform server-side validation

    // Name validation
    if (empty($_POST['name'])) {
        $nameErr = "Please fill in your name.";
    } else {
        $name = input_data($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only alphabets and white space are allowed!";
        }
    }
    
    // Address validation
    if (empty($_POST['address'])) {
        $addressErr = "Please fill in your address.";
    } else {
        $address = input_data($_POST['address']);
    }
    
    // Credit card number validation
    if (empty($_POST['credit_card'])) {
        $credit_cardErr = "Credit Card Number is required";
    } else {
        $credit_card = input_data($_POST['credit_card']);
        
        if (!preg_match ("/^[0-9]*$/", $credit_card)) {
            $credit_cardErr = "Only numeric value is allowed!";
        }
        
        if (strlen($credit_card) != 16) {
            $credit_cardErr = "Credit card number must be 16 digits!";
        }
    }
        
    // Expiration date validation	
    if (empty($_POST['expiration_month']) || empty($_POST['expiration_year'])) {
        $expMonthErr = "Choose month";
        $expYearErr = "Choose year";
    } else {
        $expiration_month = input_data($_POST['expiration_month']);
        $expiration_year = input_data($_POST['expiration_year']);
    }
    
    // CVV validation
    if (empty($_POST['cvv'])) {
        $cvvErr = "CVV is required";
    } else {
        $cvv = input_data($_POST['cvv']);
        
        if (!preg_match('/^\d{3}$/', $cvv)) {
            $cvvErr = "3-digit number!";
        }
    }

    // If there are no errors, save the order and cart items in the database
    if ($nameErr == "" && $addressErr == "" && $credit_cardErr == "" && $expMonthErr == "" && $expYearErr == "" && $cvvErr == "") {
        // Hash sensitive data before storing
        $hashed_credit_card = hash('sha256', $credit_card);
        $hashed_expiration_month = hash('sha256', $expiration_month);
		$hashed_expiration_year = hash('sha256', $expiration_year);
        $hashed_cvv = hash('sha256', $cvv);

        // Insert order into the database
        $sql_order = "INSERT INTO orders (name, address, credit_card, expiration_month, expiration_year, cvv) 
                VALUES ('$name', '$address', '$hashed_credit_card', '$hashed_expiration_month', '$hashed_expiration_year', '$hashed_cvv')";
        
        // Execute the SQL query for order insertion
        if (mysqli_query($conn, $sql_order)) {
            // Get the order ID
            $order_id = mysqli_insert_id($conn);

            // Insert cart items into the orders table
            foreach ($_SESSION['cart'] as $item) 
			{
                $item_name = $item['name'];
                $quantity = $item['quantity'];
                $price = $item['price'];

                // Insert cart item into the orders table
                $sql_cart_item = "INSERT INTO cart_items (order_id, item_name, quantity, price) 
                                  VALUES ('$order_id', '$item_name', '$quantity', '$price')";
								  
                // Execute the SQL query for cart item insertion
                mysqli_query($conn, $sql_cart_item);
            }

            // Clear the cart
            unset($_SESSION['cart']);
			
			// Reset input variables
            $name = $address = $credit_card = $expiration_month = $expiration_year = $cvv = "";
			
			// Display purchase complete alert
            echo "<script>alert('Purchase Successful! Thank you for buying from us!'); window.location.href = 'index.php';</script>";

        } 
		else 
		{
            echo "Error: " . $sql_order . "<br>" . mysqli_error($conn);
        }
    } 
}

function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="stylecheckout.css">
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>
        <h3>Shopping Cart Items</h3>
        <div class="cart-details">
            <ul>
                <?php
                $totalPrice = 0;
                // Display the items in the shopping cart
                if (!empty($_SESSION['cart'])) 
				{
                    foreach ($_SESSION['cart'] as $item) 
					{
                        echo "<div class='item'>";
                        echo "{$item['name']} - Quantity: {$item['quantity']}";
                        echo "</div>";

                        //calculate total price for each item and accumulate
                        $totalPrice += ($item['price'] * $item['quantity']);
                    }
                } else 
				{
                    echo "Cart is empty";
                }
                ?>
            </ul>
        </div>
		<br>
		<br>
		
        <div class="total-price">Total Price: RM 
			<?php echo number_format($totalPrice, 2); ?>
		</div>
		<br>
		
        <div class="checkout-form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Adjust the action attribute to your processing script -->
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="<?php echo $nameErr; ?>" required>
				<br>
				<br>
                
                <label for="address">Address:</label><br>
                <textarea id="address" name="address" placeholder="<?php echo $addressErr; ?>" required></textarea>
				<br>
				<br>
                
                <label for="credit_card">Credit Card Number:</label>
				<br>
				
                <input type="text" id="credit_card" name="credit_card" placeholder="<?php echo $credit_cardErr; ?>"  required>
				<br>
				<br>
                
                <label for="expiration_month">Expiration date:</label>
				<br>
				<select id="expiration_month" name="expiration_month" required>
					<option value="">Select Month</option>
					
					<?php
					// Generate options for months 1 to 12
					for ($i = 1; $i <= 12; $i++) 
					{
						$month = sprintf("%02d", $i); // Add leading zero if necessary
						echo "<option value='$month'>$month</option>";
					}
					?>
				</select>
				
				<label for="expiration_year"></label>
				<br>
				<select id="expiration_year" name="expiration_year" required>
					<option value="">Select Year</option>
					
					<?php
					// Generate options for years 24 to 34
					for ($i = 24; $i <= 34; $i++) 
					{
						echo "<option value='$i'>$i</option>";
					}
					?>
				</select>
				<br>
				<br>
                
                <label for="cvv">CVV:</label>
				<br>
                <input type="text" id="cvv" name="cvv" placeholder="<?php echo $cvvErr; ?>" required>
				<br>
				<br>
                
                <button type="submit" name="confirm" class="confirm-btn">Confirm</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </form>
        </div>
    </div>
    <script>
		document.querySelector(".cancel-btn").addEventListener("click", function() 
		{
			// Redirect to index page
			window.location.href = "shoppingcart.php";
		});
    </script>
</body>
</html>