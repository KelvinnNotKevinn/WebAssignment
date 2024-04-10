<html>
<!DOCTYPE html>

<head>
	<title>Mainpage</title>
	<link rel="stylesheet" href="mainPage.css">	
	<script src="translate.js"></script>
</head>
	
<body>
	<?php include ('../includes/header.php') ?>
	
	<section id="firstSection">
	<div>
		<p id="companyName">KNOW YOUR BEST BUILD<p>
		<img src="/Images/logo-white.png" id="section1Logo">
		<!-- <a href="#" id="section2Link"> About Us </a> -->
	</div>
	</section>
	
	<section id="secondSection">
	<div>
		<h2 class="sectionTitle">CUSTOMIZE PC</h2>
		<!-- Slideshow container -->
		<div class="customizePCContainer">

			<!-- Full-width images with number and caption text -->
			<div class="showing customizePC fade">
				<div class="customizePCImage">
					<img src="/Images/white.jpg" style="width:100%">
				</div>
				<div class="customizePCDesc">
					<h3>DAYLIGHT</h3>
					<h4>High-performance, sleek white build that combines power and style for any computing need</h4>
					<br>
					<a href="#" class="linkToProduct">
						<h3>BUILD NOW!!!</h3>
					</a>
				</div>
			</div>
			
			<div class="customizePC fade">
				<div class="customizePCImage">
					<img src="/Images/pink.jpg" style="width:100%">
				</div>
				<div class="customizePCDesc">
					<h3>ROSELIA</h3>
					<h4>Stylish pink build that doesn't compromise on performance, perfect for those who want a standout look without sacrificing power</h4>
					<br>
					<a href="#" class="linkToProduct">
						<h3>BUILD NOW!!!</h3>
					</a>
				</div>
			</div>
			
			<div class="customizePC fade">
				<div class="customizePCImage">
					<img src="/Images/black.jpg" style="width:100%">
				</div>
				<div class="customizePCDesc">
					<h3>NIGHTWING</h3>
					<h4>Formidable black build, marrying sleek design with high-performance components, ready to conquer any task or gaming challenge with style and power</h4>
					<br>
					<a href="#" class="linkToProduct">
						<h3>BUILD NOW!!!</h3>
					</a>
				</div>
			</div>
			 
			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusPC(-1)">&#10094;</a>
			<a class="next" onclick="plusPC(1)">&#10095;</a>
		</div>
		<div class="moreProducts">
			<a href="#"><h2>View More ></h2></a>
			<br>
		</div>
	</div>
	
	</section>
	
	<section id="thirdSection">
	<div id="hotSellingItems">
		<h2 class="longSectionTitle">HOT SELLING</h2>
		
		<div class="hotSellingItemsFlex">
			<div class="productImageFlex">
				<img src="/Images/g203.PNG" class="productImage">
			</div>
			<div class="productDescFlex">
				<h3>G203 LIGHTSYNC</h3>
				<h4>Make the most of play time with G203—a gaming mouse in a variety of vibrant colors</h4>	
				<br>
				<a href="/Product#G203 LIGHTSYNC" class="linkToProduct" onclick="window.scrollTo(0,200)">
					<h3>BUY NOW</h3>
				</a>
			</div>
			<div class="productDescFlex">
				<h3>G213 PRODIGY</h3>
				<h4>Durable with gaming-grade performance. Tactile Mech-Dome keyswitches are spill-resistant</h4>		
				<br>
				<a href="/Product#G213 PRODIGY" class="linkToProduct">
					<h3>BUY NOW</h3>
				</a>
			</div>
			<div class="productImageFlex">
				<img src="/Images/g213.PNG" class="productImage">
			</div>
			<div class="productImageFlex">
				<img src="/Images/g335.PNG" class="productImage">
			</div>
			<div class="productDescFlex">
				<h3>G335 Gaming Headset</h3>
				<h4>A lightweight, cool wired headset made with a suspension headband design with an adjustable strap</h4>		
				<br>
				<a href="/Product#G335 Gaming Headset" class="linkToProduct">
					<h3>BUY NOW</h3>
				</a>
			</div>
		</div>
		
	</div>
	<div class="moreProducts">
			<a href="#"><h2>View More ></h2></a>
			<br>
	</div>
		
	</section>	
</body>







</html>