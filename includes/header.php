<link rel="stylesheet" href="/WebAssignment/includes/header.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<?php session_start();?>

<header class = "header" id = "header">
	<nav class = "navigation left">
		<div class="linkImageContainer"><a href = "/WebAssignment/mainPage/mainPage.php"><img src = "/WebAssignment/Images/logo-white.png" alt="Home" class="icon"></a></div>
		<div class="linkContainer"><a href = "/WebAssignment/buildPC/chooseCase.php" class="link">Build PC</a></div>
		<div class="linkContainer"><a href = "/WebAssignment/Product" class="link">Products</a></div>
		<div class="linkContainer"><a href = "/WebAssignment/Contact" class="link">Contact Us</a></div>
	</nav>
	
	<nav class = "navigation right">
	
		<div class = "linkContainer">
			<button onclick="dropDown()" class="dropbtn"><i class='bx bxs-user'></i></button>
			
			<div class = "dropDown-content" id = "dropDownAccount">
				<?php if (isset($_SESSION['userName'])) : ?>
					<span>Welcome, <?php echo $_SESSION['userName']; ?></span>
					<p><a href = "/WebAssignment/account/logout.php">Log Out</a><p>
				<?php else : ?>
					<h3>Please go login first.</h3>
					<p><a href = "/WebAssignment/account/index.php">Login</a><p>
				<?php endif; ?>
			</div>
			
		</div>
		
		<script src = "/WebAssignment/includes/dropDown.js"></script>
		
		<div class = "linkContainer">
			<a href="/WebAssignment/Product/shoppingcart.php"><i class='bx bxs-cart'></i></a>
			<span id="cartQuantity">
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
	</nav>
</header>