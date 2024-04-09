<?php
include('addToCart.php');
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel = "stylesheet" href="style.css">
	<title>Product Listing</title>
</head>

<body>
	<div class="container">
	<header>
		<h1>Gaming Accesories</h1>
		<div class="shopping">
			<a href="shoppingcart.php"> <i class="fas fa-shopping-bag" ></i> </a>
			<span class="quantity" id="cartQuantity">
                <?php
					if (isset($_SESSION['cart'])) 
					{
						$totalQuantity = array_sum(array_column($_SESSION['cart'], 'quantity'));
						echo $totalQuantity;
					} 
					else 
					{
						echo "0";
					}
                ?>
            </span>
		</div>
	</header>
	
	<div class="list">
		<?php include ('productdB.php');?>
		<?php include ('products.php');?>
	</div>
		
	</div>
	
	<div class="product-preview" style="display: none;">
		<button onclick="closePreview()">Close</button>
		<div class="preview-content"></div>
	</div>
	
	<script>
		function openPreview(id, img, name, price, description, spec) 
		{
			var previewContent = document.querySelector('.preview-content');
			previewContent.innerHTML = 
			`
				<img src="${img}">
				<h2>${name}</h2>
				<p>Price: RM ${price}</p>
				<p>Description: ${description}</p>
				<p>Specifications: ${spec}</p>				
				
				<a href="addToCart.php?id=${id}">Add to Cart</a>
			`;
			document.querySelector('.product-preview').style.display = 'block';
			document.querySelector('.container').classList.add('blur-background');
		}

		function closePreview() 
		{
			document.querySelector('.product-preview').style.display = 'none';
			document.querySelector('.container').classList.remove('blur-background');
		}
	</script>
</body>
</html>