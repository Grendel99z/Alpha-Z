<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/homepage.css" />
	</head>

	<body>
		<div class="wrapper">
			<div id="header">
				<?php
					include_once 'components/header.php';
				?>
			</div>
			<div id="defaultSidePane">
					<?php
						include 'components/sidePane.php';
					?>
			</div>
			<div id="body">
				<div id="banner">
				<!-- image of nice nice pcs laptops and accessories-->
				<img src="../assets/banner.jpg" />
				</div>

				<div id="underbanner">
					<div class="navigationCard">
						<img src="../assets/products/PC/zenith.png" width="370px" height="400px" />
						<div id="pc"><a href="../php/PCs.php">PCs</a></div>
					</div>
					<div class="navigationCard">
						<img src="../assets/products/Laptop/pavilion.png" width="370px" height="400px" />
						<div id="laptop"><a href="../php/Laptops.php">LAPTOPS</a></div>
					</div>
					<div class="navigationCard">
						<img src="../assets/accessories1.jpg" width="370px" height="400px" />					
						<div id="accessories"><a href="../php/Accessories.php">ACCESSORIES</a></div>
					</div>
				</div>
				<div class="rectangle">

					<div id="textarea">
						<div id="textareatitle">ELEVATE</div><br><br>
						Elevate your gaming experience to new heights with our
						high-performance PCs
						designed for avid players of League of Legends, Apex Legends and many more. <br><br>
						
						At Alpha Z,
						we understand the importance of fast frame rates and action-packed
						gameplay.<br /><br />
						Our cutting-edge gaming rigs deliver seamless performance, ensuring
						that you<br /><br />
						can fully immerse yourself in the heart-pounding worlds of these
						popular titles.<br /><br /><br>
						Say goodbye to lag and hello to victory with our top-tier gaming
						PCs, paired along
						with our top-notch accessories.<br />
						<br /><br /><br />
					</div>

					<img src="../assets/leagueandapex.jpg" width="600px" height="500px" />
				</div>

				<div class="rectangle">
					<img src="../assets/products/PC/horizon.png" width="650px" height="525px" />

					<div id="textarea2">
						<br /><br />
                        <div id="textareatitle2">INFUSION</div><br><br>
						"At Alpha-Z, we specialize in infusing a personalized essence into
						your PC,<br /><br />
						offering custom panel design, custom-loop water cooling PCs, GPU
						backplates, laser cutting, and more.<br /><br />
						Our dedicated Alpha-Z team comprises inventive engineers and graphic
						designers<br /><br />
						who harness state-of-the-art industrial machinery to transform
						once-impossible ideas into reality.<br /><br />
						If you have a vision, theme, artwork, or concept in mind, allow us
						to collaborate with you in bringing it to life."
					</div> </div>
                    
					<div id="hr">
						<hr width="50%" />
					</div>
                    
					<div id="bottom">
						<div id="textareatitle3">WE AIM TO DELIVER</div><br><br>
						<div id="lasttextarea">  Our PCs and Laptops are engineered for maximum performance, setting a new standard in the industry<br>
						We take pride in being the top-reviewed custom PC brand, a testament to our unwavering commitment to<br>
						quality and innovation. Not forgetting our after-sales service to ensure that our customers receive the<br>
						support they need throughout their journey with our products.<br><br></div>
					</div>
					
					<!-- Slideshow container -->
					<div class="slideshow-container">

						<!-- Full-width images with number and caption text -->
						<div class="mySlides fade">
						<div class="numbertext">1 / 3</div>

						<a href="Product_customization.php?product=G Pro"><img src="../assets/products/accessories/mouse/GPro.png" style="width:33%"></a>
						<a href="Product_customization.php?product=envy"><img src="../assets/products/Laptop/envy.png" style="width:33%"></a>
						<a href="Product_customization.php?product=G Pro X"><img src="../assets/products/accessories/keyboard/GProX.png" style="width:33%" height ="325px"></a>

						<div class="hotsalesname">
						<h3 class="product-title">GPro</h3>
						<h3 class="product-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;envy</h3>
						<h3 class="product-title">&nbsp;&nbsp;&nbsp;G Pro X</h3></div>
								
												
						</div>
					
						<div class="mySlides fade">
						<div class="numbertext">2 / 3</div>
						<a href="Product_customization.php?product=G213"><img src="../assets/products/accessories/keyboard/G213.png" style="width:33%" height="280px"></a>
						<a href="Product_customization.php?product=Kraken"><img src="../assets/products/accessories/headset/Kraken.png" style="width:33%" height="280px"></a>
						<a href="Product_customization.php?product=DeathAdder"><img src="../assets/products/accessories/mouse/DeathAdder2.png" style="width:33%"></a>

						<div class="hotsalesname">
							<h3 class="product-title">G213</h3>
							<h3 class="product-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kraken</h3>
							<h3 class="product-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DeathAdder</h3></div>
									
						</div>
					
						<div class="mySlides fade">
						<div class="numbertext">3 / 3</div>
						<a href="Product_customization.php?product=stream"><img src="../assets/products/Laptop/stream.png" style="width:33%" height="280px"></a>
						<a href="Product_customization.php?product=elitebook"><img src="../assets/products/Laptop/elitebook.png" style="width:33%" height="250px"></a>
						<a href="Product_customization.php?product=Yeti"><img src="../assets/products/accessories/mic/Yeti.png" style="width:33%"></a>

						<div class="hotsalesname">
							<h3 class="product-title">stream</h3>
							<h3 class="product-title">elitebook</h3>
							<h3 class="product-title">Yeti</h3></div>
									
						
						</div>
					
						<!-- Next and previous buttons -->
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<br>
					
					<!-- The dots/circles -->
					<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
					</div>
				</div>
				<div id="makespace1"></div>
				
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
	<script defer src="../js/sliderhomepage.js"></script>
</html>