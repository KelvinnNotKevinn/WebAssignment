<?php
include('addToCart.php');

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
	
	<h1>Gaming Accesories</h1>
	
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
				<img src="/Images/${img}">
				<h2>${name}</h2>
				<br>
				<p class="previewDetailsTitle">Price: </p>
				<p class="previewDetails">RM ${price}</p>
				<br>
				<p class="previewDetailsTitle">Description: </p>
				<p class="previewDetails">${description}</p>
				<br>
				<p class="previewDetailsTitle">Specifications: </p>
				<p class="previewDetails">${spec}</p>
				<br>
				<h3 class="addToCartButton"><a href="addToCart.php?id=${id}">Add to Cart</a></h3>
			`;
			document.querySelector('.product-preview').style.display = 'block';
			document.querySelector('.container').classList.toggle('blur-background');
		}

		function closePreview() 
		{
			document.querySelector('.product-preview').style.display = 'none';
			document.querySelector('.container').classList.toggle('blur-background');
		}
	</script>
</body>
</html>