<?php
include('config.php');
//retrieve products for shopping product lists
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start creating the HTML content
    $htmlContent = "";
    while($row = $result->fetch_assoc()) 
	{
        // Append each product's HTML representation
        $htmlContent .= '<div class="item">';
        $htmlContent .= '<div class="product-image-wrapper" onclick="openPreview(\'' . $row["id"] .'\',\'' . $row["img"] . '\', \'' . $row["name"] . '\', \'' . number_format($row["price"]) . '\', \'' . $row["desc"] . '\', \'' . $row["spec"] . '\')">';
        $htmlContent .= '<img src="' . $row["img"] . '" class="product-image">';
        $htmlContent .= '</div>';
        $htmlContent .= '<div class="title">' . $row["name"] . '</div>';
        $htmlContent .= '<div class="desc">' . $row["desc"] . '</div>';
        $htmlContent .= '<div class="price">RM ' . number_format($row["price"]) . '</div>';
        $htmlContent .= '<a href="addToCart.php?id='.$row["id"].'">Add to Cart</a>';
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