<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" type="text/css" href="../css/PCs.css" />
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
			<div id="topofpc">
					<h1>PCs</h1>
					<br />
					Our PCs are designed with future-proofing in mind, allowing for
					easy<br />
					upgrades and expansion, so you can keep up with the ever-evolving<br />
					technology landscape.
					<br /><br /><br /><br />
				</div>

				<div>
					<h2>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VALUE EDITION
					</h2>
				</div>

				<div id="pcvalue">
					<div class="product-list-container">
						<div class="product-card">
							<img
								src="../assets/products/PC/zenith.png"
								width="400px"
								height="400px"
								alt="Product Name"
							/>
							<h3 class="product-title">zenith</h3>
							<p class="product-description">zenith is designed for maximum efficiency, it is suitable for<br> multitasking and gaming.</p>
							<p class="product-price">$880.00</p>
							<p class="product-button"><br><a href="PCDetails.php?pc=zenith">CUSTOMIZE</a></p>
						</div>&nbsp;
						<div class="product-card">
							<img
								src="../assets/products/PC/horizon.png"
								width="400px"
								height="400px"
								alt="Product Name"
							/>
							<h3 class="product-title">horizon</h3>
							<p class="product-description">horizon is designed for gamers and power users, watching<br>movies, and even gaming.</p>
							<p class="product-price">$950.00</p>
							<p class="product-button"><br><a href="PCDetails.php?pc=horizon">CUSTOMIZE</a></p>
						</div>
					</div>

					<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

					<div class="product-list-container">
						<div class="product-card">
							<img
								src="../assets/products/PC/nova.png"
								width="435px"
								height="400px"
								alt="Product Name"
							/>
							<h3 class="product-title">nova</h3>
							<p class="product-description">nova is a mid range PC that's perfect for work or play<br> and even streams video well.</p>
							<p class="product-price">$800.00</p>
							<p class="product-button"><br><a href="PCDetails.php?pc=nova">CUSTOMIZE</a></p>
						</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="product-card">
							<img
								src="../assets/products/PC/zenith-pro.png"
								width="400px"
								height="400px"
								alt="Product Name"
							/>
							<h3 class="product-title">zenith-pro</h3>
							<p class="product-description">zenith-pro is a upgraded version of Zenith PC,<br>this PC can handle any tasks.</p>
							<p class="product-price">$1200.00</p>
							<p class="product-button"><br><a href="PCDetails.php?pc=zenith pro">CUSTOMIZE</a></p>
						</div>
					</div>

					<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				</div>

				<div>
					<h2>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PREMIUM EDITION
					</h2>
				</div>

				<div id="pcpremium">
					<div class="product-list-container">
						<div class="product-card">
							<img
								src="../assets/products/PC/alpha.png"
								width="400px"
								height="400px"
								alt="Product Name"
							/>
							<h3 class="product-title">alpha</h3>
							<p class="product-description">alpha is a high-end PC that all gamers wish for,<br>it can handle all operations smoothly, especially gaming.</p>
							<p class="product-price">$700.00</p>
							<p class="product-button"><br><a href="PCDetails.php?pc=alpha">CUSTOMIZE</a></p>
						</div>&nbsp;
						<div class="product-card">
							<img
								src="../assets/products/PC/beta.png"
								width="400px"
								height="400px"
								alt="Product Name"
							/>
							<h3 class="product-title">beta</h3>
							<p class="product-description">beta is a high-end PC that all gamers wish for,<br>it can handle all operations exceptionally well, especially gaming.</p>
							<p class="product-price">$600.00</p>
							<p class="product-button"><br><a href="PCDetails.php?pc=beta">CUSTOMIZE</a></p>
						</div>
					</div>

					<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>