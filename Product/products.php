<?php
include('../database/connection.php');
//retrieve products for shopping product lists
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start creating the HTML content
    $htmlContent = "";
    while($row = $result->fetch_assoc()) 
	{
        // Append each product's HTML representation
		$htmlContent .= '<div class="product-image-wrapper" onclick="openPreview(\'' . $row["id"] .'\',\'' . $row["img"] . '\', \'' . $row["name"] . '\', \'' . number_format($row["price"]) . '\', \'' . $row["desc"] . '\', \'' . $row["spec"] . '\')">';
		$htmlContent .='<span class="anchor" id="'.$row["name"].'"></span>';
        $htmlContent .= '<img src="/Images/' . $row["img"] . '" class="product-image">';
        $htmlContent .= '</div>';
		
		$htmlContent .= '<div class="itemDesc">';
        $htmlContent .= '<h2 class="title">' . $row["name"] . '</h2> <br>';
        $htmlContent .= '<h3 class="desc">' . $row["desc"] . '</h3> <br>';
        $htmlContent .= '<h3 class="price">RM ' . number_format($row["price"]) . '</h3><br>';
        $htmlContent .= '<h3 class="addToCartButton"><a href="addToCart.php?id='.$row["id"].'">Add to Cart</a></h3> <br>';
		$htmlContent .= '</div>';
    }

    // After looping through all products, echo out the HTML content
    echo $htmlContent;
} 
else 
{
    // If no results found
    echo "0 results";

    // Close the database connection
    $conn->close();
}
?>