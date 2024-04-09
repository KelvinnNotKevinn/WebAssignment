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
		<form action="addToCart.php" method="post">
			<input type="hidden" name="id" value="${id}">
			<button type="submit">Add to Cart</button>
		</form>
	`;
	document.querySelector('.product-preview').style.display = 'block';
	document.querySelector('.container').classList.add('blur-background');
}

function closePreview() {
	document.querySelector('.product-preview').style.display = 'none';
	document.querySelector('.container').classList.remove('blur-background');
}