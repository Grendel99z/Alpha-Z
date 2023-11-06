<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" type="text/css" href="../css/Accessories.css" />
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
			<div id="topofaccessories">
					<h1>Accessories</h1>
					<br />
					Introducing the Ultimate Gaming Accessories Collection!<br />
					Elevate your gaming experience to new heights with our<br />
					handpicked selection of top-tier accessories to enhance your
					gameplay<br />
					and provide you with a competitive edge.
					<br /><br /><br /><br />
				</div>

				<div id="accessoriesbar">
					<p>Filter By:</p>

					<!-- Control buttons -->
					<div id="myBtnContainer">
						<button class="btn active" onclick="filterSelection('all')">
							Show all
						</button>
						<button class="btn" onclick="filterSelection('Mouse')">
							Mouse
						</button>
						<button class="btn" onclick="filterSelection('Keyboard')">
							Keyboard
						</button>
						<button class="btn" onclick="filterSelection('Headset')">
							Headsets
						</button>
						<button class="btn" onclick="filterSelection('Webcam')">
							Webcams
						</button>
						<button class="btn" onclick="filterSelection('Microphone')">
							Microphones
						</button>
					</div>
					<p id="resultCount">Results found</p>
				</div>

				<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
				
				<div class="container">
					<div class="filterDiv Mouse">
						<div class="product-card">
							<a href="Product_customization.php?product=DeathAdder"
								><img
									src="../assets/products/accessories/mouse/DeathAdder2.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">&nbsp;DeathAdder</h3>
							<p class="product-price">$50.00</p>
						</div>
						<div class="product-card">
							<a href="Product_customization.php?product=G Pro"
								><img
									src="../assets/products/accessories/mouse/GPro.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">G Pro</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$70.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Keyboard">
						<div class="product-card">
							<a href="Product_customization.php?product=G213"
								><img
									src="../assets/products/accessories/keyboard/G213.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">G213</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$60.00</p>
						</div>
						<div class="product-card">
							<a href="Product_customization.php?product=G Pro X"
								><img
									src="../assets/products/accessories/keyboard/GProX2.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">G Pro X</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$130.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Headset">
						<div class="product-card">
							<a href="Product_customization.php?product=Cloud II"
								><img
									src="../assets/products/accessories/headset/CloudII.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">CloudII</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$100.00</p>
						</div>
						<div class="product-card">
							<a href="Product_customization.php?product=Kraken"
								><img
									src="../assets/products/accessories/headset/Kraken.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Kraken</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$80.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Webcam">
						<div class="product-card">
							<a href="Product_customization.php?product=Brio"
								><img
									src="../assets/products/accessories/webCam/Brio1.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Brio</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$200.00</p>
						</div>
						<div class="product-card">
							<a href="Product_customization.php?product=C920"
								><img
									src="../assets/products/accessories/webCam/C9201.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">C920</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$80.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Microphone">
						<div class="product-card">
							<a href="Product_customization.php?product=Snowball"
								><img
									src="../assets/products/accessories/mic/Snowball4.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Snowball</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$70.00</p>
						</div>
						<div class="product-card">
							<a href="Product_customization.php?product=Yeti"
								><img
									src="../assets/products/accessories/mic/Yeti.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Yeti</h3>
							<p class="product-price">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$130.00</p>
						</div>
					</div>
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
	<script src="../js/filteraccessories.js"></script>
</html>