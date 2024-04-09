<?php
include('config.php');

// Check if the POST request contains the product ID
if (isset($_GET['id'])) 
{
    $productId = $_GET['id'];

    // Fetch the product details
    $productQuery = "SELECT * FROM products WHERE id = $productId";
    $productResult = $conn->query($productQuery);

    if ($productResult->num_rows > 0) 
	{
        // Get the product details
        $product = $productResult->fetch_assoc();

        // Check if the product already exists in the cart
        if (isset($_SESSION['cart'][$productId])) 
		{
            // If the product already exists, update the quantity
            $_SESSION['cart'][$productId]['quantity'] += 1;
        } 
		else 
		{
            // If the product doesn't exist, insert it into the cart
            $_SESSION['cart'][$productId] = array
			(
                'id' => $productId,
                'img' => $product['img'],
                'name' => $product['name'],
                'price' => $product['price'],
                'quantity' => 1
            );
        }
        // Redirect to shoppingcart.php
        header("Location: shoppingcart.php");
        exit();
    } 
	else 
	{
        echo "Product not found";
    }
}
?>