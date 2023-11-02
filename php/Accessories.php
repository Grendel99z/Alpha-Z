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
					<p>xx results found</p>
				</div>

				<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
				<div class="container">
					<div class="filterDiv Mouse">
						<div class="product-card">
							<a href=""
								><img
									src="../assets/destroyer1.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Destroyer 1</h3>
							<p class="product-price">$30.00</p>
						</div>
						<div class="product-card">
							<a href=""
								><img
									src="../assets/destroyer2.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Destroyer 2</h3>
							<p class="product-price">$35.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Keyboard">
						<div class="product-card">
							<a href=""
								><img
									src="../assets/titanium1.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Titanium 1</h3>
							<p class="product-price">$70.00</p>
						</div>
						<div class="product-card">
							<a href=""
								><img
									src="../assets/titanium2.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Titanium 2</h3>
							<p class="product-price">$75.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Headset">
						<div class="product-card">
							<a href=""
								><img
									src="../assets/emerald1.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Emerald 1</h3>
							<p class="product-price">$80.00</p>
						</div>
						<div class="product-card">
							<a href=""
								><img
									src="../assets/emerald2.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Emerald 2</h3>
							<p class="product-price">$85.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Webcam">
						<div class="product-card">
							<a href=""
								><img
									src="../assets/diamond1.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Diamond 1</h3>
							<p class="product-price">$90.00</p>
						</div>
						<div class="product-card">
							<a href=""
								><img
									src="../assets/diamond2.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Diamond 2</h3>
							<p class="product-price">$95.00</p>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="filterDiv Microphone">
						<div class="product-card">
							<a href=""
								><img
									src="../assets/platinum1.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Platinum 1</h3>
							<p class="product-price">$50.00</p>
						</div>
						<div class="product-card">
							<a href=""
								><img
									src="../assets/platinum2.png"
									width="400px"
									height="400px"
									alt="Product Name"
							/></a>
							<h3 class="product-title">Platinum 2</h3>
							<p class="product-price">$55.00</p>
						</div>
					</div>
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>