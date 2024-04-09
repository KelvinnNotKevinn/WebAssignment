<?php
include('config.php');

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Check if action is to remove item
    if ($_POST['action'] == 'remove') 
	{
        $id = $_POST['id'];
        // Find the item in the cart and remove it
        foreach ($_SESSION['cart'] as $index => $item) 
		{
            if (isset($item['id']) && $item['id'] == $id) 
			{ // Check if 'id' key is set
                unset($_SESSION['cart'][$index]);
                break; // Exit the loop after removing the item
            }
        }
        // Redirect back to shopping cart
        header("Location: shoppingcart.php");
        exit();
    } 
	
	elseif ($_POST['action'] == 'update')
	{ // Check if action is to update quantity
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
		
        // Update the quantity of the item in the cart
        foreach ($_SESSION['cart'] as $index => $item) 
		{
            if (isset($item['id']) && $item['id'] == $id) 
			{ // Check if 'id' key is set
                $_SESSION['cart'][$index]['quantity'] = $quantity;
                break; // Exit the loop after updating the quantity
            }
        }
		
		 // Redirect back to shopping cart
        header("Location: shoppingcart.php");
        exit();
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="stylecart.css"> 
</head>
<body>
	<div class="container">
    <h1>Shopping Cart</h1>
    <ul class="listProduct">
        <?php
        //initialize total price and total quantity
        $totalPrice = 0;
        $totalQuantity = 0;

        // Check if the cart is not empty
        if (!empty($_SESSION['cart'])) 
		{
            foreach ($_SESSION['cart'] as $item) 
			{
                echo "<div class='item'>";
                if (isset($item["img"])) 
				{
                    echo "<img src='/Images/" . $item["img"] . "'>";
                }
				
                echo "<div class='details'>";
                if (isset($item["name"]))
				{
                    echo "<div class='title'>" . $item["name"] . "</div>";
                }
				
                if (isset($item["price"])) 
				{
                    echo "<div class='price'>Item Price: RM " . $item["price"] . "</div>";
                    $totalPrice += $item["price"] * $item["quantity"];
                }
				
                if (isset($item["quantity"])) 
				{
                    echo "<div class='quantity'>Quantity:  ";
                    echo "<form method='post' action='shoppingcart.php'>";
                    echo "<input type='hidden' name='id' value='" . $item['id'] . "'>";
                    echo "<input type='hidden' name='action' value='update'>";
                    echo "<input type='number' name='quantity' value='" . $item["quantity"] . "' min='1' onkeydown='return false' onchange='this.form.submit()'>";
                    echo "</form>";
                    echo "</div>";
                    $totalQuantity += $item["quantity"];
                }
				
                echo "</div>";
                if (isset($item["id"])) 
				{
                    echo "<form method='post' action='shoppingcart.php'>";
                    echo "<input type='hidden' name='id' value='" . $item['id'] . "'>";
                    echo "<input type='hidden' name='action' value='remove'>";
                    echo "<button type='submit' class='removeButton'>X</button>";
                    echo "</form>";
                }
                echo "</div>";
            }
        } 
		else 
		{
            echo "Cart is empty";
        }
        ?>
    </ul>
	
		<div class="checkOut">
			<div class="total">Total: <span id="checkoutTotal">RM <?php echo $totalPrice; ?></span></div>
			
			<div class="quantity">Total Quantity: <?php echo $totalQuantity; ?></div>
			
			<form method="post" action="checkout.php">
				<!--add form elements here-->
				<button type="submit" class="checkoutBtn">Check Out</button>
			</form>
			
			<button class="closeShopping">Close</button>
		</div>
	
	</div>
    <script>
        const closeShoppingBtn = document.querySelector('.closeShopping');

        // Close shopping button event listener
        closeShoppingBtn.addEventListener('click', () => 
		{
            // Redirect to index page
            window.location.href = "index.php";
        });
    </script>
</body>
</html>