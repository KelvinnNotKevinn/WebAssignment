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
		<img src="/WebAssignment/Images/logo-white.png" id="section1Logo">
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
					<img src="/WebAssignment/Images/white.jpg">
				</div>
				
				<div class="customizePCDesc">
					<h3>DAYLIGHT</h3>
					<h4>High-performance, sleek white build that combines power and style for any computing need</h4>
					<br>
					<h3 class="linkToProduct">
						<a href="/WebAssignment/Buildpc/customizePC?caseId=P001" >BUILD NOW!!!</a>
					</h3>
				</div>
			</div>
			
			<div class="customizePC fade">
				<div class="customizePCImage">
					<img src="/WebAssignment/Images/pink.jpg">
				</div>
				
				<div class="customizePCDesc">
					<h3>ROSELIA</h3>
					<h4>Stylish pink build that doesn't compromise on performance, perfect for those who want a standout look without sacrificing power</h4>
					<br>
					<h3 class="linkToProduct">
						<a href="/WebAssignment/Buildpc/customizePC?caseId=P002" >BUILD NOW!!!</a>
					</h3>
				</div>
			</div>
			
			<div class="customizePC fade">
				<div class="customizePCImage">
					<img src="/WebAssignment/Images/black.jpg">
				</div>
				
				<div class="customizePCDesc">
					<h3>NIGHTWING</h3>
					<h4>Formidable black build, marrying sleek design with high-performance components, ready to conquer any task or gaming challenge with style and power</h4>
					<br>
					<h3 class="linkToProduct">
						<a href="/WebAssignment/Buildpc/customizePC?caseId=P003" >BUILD NOW!!!</a>
					</h3>
				</div>
			</div>
			 
			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusPC(-1)">&#10094;</a>
			<a class="next" onclick="plusPC(1)">&#10095;</a>
		</div>
		<div class="moreProducts">
			<a href="/WebAssignment/Buildpc/chooseCase.php"><h2>View More ></h2></a>
			<br>
		</div>
	</div>
	
	</section>
	
	<section id="thirdSection">
	<div id="hotSellingItems">
		<h2 class="longSectionTitle">HOT SELLING</h2>
		
		<div class="hotSellingItemsFlex">
			<div class="productImageFlex">
				<img src="/WebAssignment/Images/g203.PNG" class="productImage">
			</div>
			<div class="productDescFlex">
				<h3>G203 LIGHTSYNC</h3>
				<br>
				<h4>Make the most of play time with G203—a gaming mouse in a variety of vibrant colors</h4>	
				<br>
				<br>
				<h3 class="linkToProduct">
					<a href="/WebAssignment/Product#G203 LIGHTSYNC">BUY NOW</a>
				</h3>
			</div>
			<div class="productDescFlex">
				<h3>G213 PRODIGY</h3>
				<br>
				<h4>Durable with gaming-grade performance. Tactile Mech-Dome keyswitches are spill-resistant</h4>		
				<br>
				<br>
				<h3 class="linkToProduct">
					<a href="/WebAssignment/Product#G213 PRODIGY">BUY NOW</a>
				</h3>
			</div>
			<div class="productImageFlex">
				<img src="/WebAssignment/Images/g213.PNG" class="productImage">
			</div>
			<div class="productImageFlex">
				<img src="/WebAssignment/Images/g335.PNG" class="productImage">
			</div>
			<div class="productDescFlex">
				<h3>G335 Gaming Headset</h3>
				<br>
				<h4>A lightweight, cool wired headset made with a suspension headband design with an adjustable strap</h4>		
				<br>
				<br>
				<h3 class="linkToProduct">
					<a href="/WebAssignment/Product#G335 Gaming Headset">BUY NOW</a>
				</h3>
			</div>
		</div>
		
	</div>
	<div class="moreProducts">
			<a href="/Product"><h2>View More ></h2></a>
			<br>
	</div>
		
	</section>	
	
	<section id="forthSection">
	<div id="About Us">
		<h2 class="longSectionTitle">ABOUT US</h2>
		<div class= "aboutUs">
			<img src="/WebAssignment/Images/logo-white.png">
			<h4>Welcome to KKYB – your premier destination for PC components! We are a team of dedicated tech enthusiasts committed to providing high-quality products and excellent service to our customers. Our mission is to make PC building accessible and enjoyable for everyone.With years of experience in the industry, KKYB has established itself as a trusted source for top-notch CPUs, GPUs, motherboards, RAM, storage, and more. Our curated selection and expert guidance ensure that you can build your dream PC with confidence.</h4>
			<h4>Whether you're a hardcore gamer, a professional creator, or a casual user, KKYB has everything you need to bring your PC build to life. Join us on our mission to unlock the full potential of PC technology with KKYB.</h4>	
		</div>
	</section>	
</body>

</html>