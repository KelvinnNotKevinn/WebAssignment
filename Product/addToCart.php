<?php
include('../database/connection.php');
include ('../includes/header.php');


// Check if the POST request contains the product ID
if($_SERVER["REQUEST_METHOD"]==="GET")
{
	if (isset($_GET['id'])) 
	{
		$productId = $_GET['id'];

		// Fetch the product details
		$productQuery = "SELECT * FROM products WHERE id = '$productId'";
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
			header("Location:index.php");
		} 
		else 
		{
			echo "Product not found";
		}
	}
}
else if ($_SERVER["REQUEST_METHOD"]==="POST")
{
	$caseId = $_POST["caseId"];
	$motherBoardId = $_POST["motherBoard"];
	$processorId = $_POST["processor"];
	$ramId = $_POST["ram"];
	$gpuId = $_POST["gpu"];
	$storageId = $_POST["storage"];
	
	$pcCaseSql = "SELECT * FROM pccase WHERE id = '$caseId'";
	$motherBoardSql = "SELECT * FROM components WHERE id = '$motherBoardId'";
	$processorSql = "SELECT * FROM components WHERE id = '$processorId'";
	$ramSql = "SELECT * FROM components WHERE id = '$ramId'";
	$gpuSql = "SELECT * FROM components WHERE id = '$gpuId'";
	$storageSql = "SELECT * FROM components WHERE id = '$storageId'";
	
	$pcCase = mysqli_fetch_assoc(mysqli_query($conn,$pcCaseSql));
	$motherBoard = mysqli_fetch_assoc(mysqli_query($conn,$motherBoardSql));
	$processor = mysqli_fetch_assoc(mysqli_query($conn,$processorSql));
	$ram = mysqli_fetch_assoc(mysqli_query($conn,$ramSql));
	$gpu = mysqli_fetch_assoc(mysqli_query($conn,$gpuSql));
	$storage = mysqli_fetch_assoc(mysqli_query($conn,$storageSql));
	
	$pcCaseName = $pcCase["name"];
	$pcCaseImg = $pcCase["img"];
	
	$motherBoardName = $motherBoard["name"];
	$motherBoardPrice = $motherBoard["price"];
	
	$processorName = $processor["name"];
	$processorPrice = $processor["price"];
	
	$ramName = $ram["name"];
	$ramPrice = $ram["price"];

	$gpuName = $gpu["name"];
	$gpuPrice = $gpu["price"];
	
	$storageName = $storage["name"];
	$storagePrice = $storage["price"];
	
	$totalPrice = $motherBoardPrice + $processorPrice + $ramPrice + $gpuPrice + $storagePrice;
	
	$components = array("motherBoardId"=>$motherBoardId,
						"motherBoard"=>$motherBoardName,
						"processorId"=>$processorId,
						"processor"=>$processorName,
						"ramId"=>$ramId,
						"ram"=>$ramName,
						"gpuId"=>$gpuId,
						"gpu"=>$gpuName,
						"storageId"=>$storageId,
						"storage"=>$storageName);
						
	// Check if the product already exists in the cart
			if (isset($_SESSION['cart'][$productId])&&($_SESSION['cart'][$productId][$components]===$components)) 
			{
				// If the product already exists, update the quantity
				$_SESSION['cart'][$caseId]['quantity'] += 1;
			} 
			else 
			{
				// If the product doesn't exist, insert it into the cart
				$_SESSION['cart'][$caseId] = array
				(
					'id' => $caseId,
					'img' => $pcCaseImg,
					'name' => $pcCaseName,
					'price' => $totalPrice,
					'components' => $components,
					'quantity' => 1
				);
			}
			header("Location:index.php");
}
?>