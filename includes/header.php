<head>
	<link rel = "stylesheet" href = "header.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<header class = "header" id = "header">
	<nav class = "navigation left">
		<div class="linkImageContainer"><a href = "/WebAssignment/"><img src = "/Images/logo-white.png" alt="Home" class="icon"></a></div>
		<div class="linkContainer"><a href = "/WebAssignment/PC/" class="link">Build PC</a></div>
		<div class="linkContainer"><a href = "/WebAssignment/Product/" class="link">Products</a></div>
		<div class="linkContainer"><a href = "/WebAssignment/Contact/" class="link">Contact Us</a></div>
	</nav>
	
	<nav class = "navigation right">
	
		<div class = "linkContainer">
			<button onclick="dropDown()" class="dropbtn"><i class='bx bxs-user'></i></button>
			
			<div class = "dropDown-content" id = "dropDownAccount">
				<?php if (isset($_SESSION['userName'])) : ?>
					<span>Welcome, <?php echo $_SESSION['userName']; ?></span>
					<a href = "/account/logout.php">Log Out</a>
				<?php else : ?>
					<h3>Please go login first.</h3>
					<a href = "/account/index.php">Login</a>
				<?php endif; ?>
			</div>
			
		</div>
		
		<div class = "linkContainer">
			<a href = "/WebAssignment/cart/"><i class='bx bxs-cart'></i></a>
		</div>
	</nav>
	
	<script src = "../includes/dropDown.js"></script>
</header>