<header class = "header" id = "header">
	<nav class = "navigation left" id = "navigation left">
		<a href = "/WebAssignment/"><img src = "/image/logo-white.png" alt="Home"></a>
		<a href = "/WebAssignment/PC/">Build PC</a>
		<a href = "/WebAssignment/Product/">Products</a>
		<a href = "/WebAssignment/Contact/">Contact Us</a>
		
	</nav>
	<nav class = "navigation right" id = "navigation right">
		<div class = "dropDown">
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
		<a href = "/WebAssignment/cart/"><i class='bx bxs-cart'></i></a>
	</nav>
</header>