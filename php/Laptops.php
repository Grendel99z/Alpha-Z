<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" type="text/css" href="../css/Laptops.css" />
	</head>

	<body>
	<?php 
			session_start();
			
			@ $db = new mysqli('localhost', 'root', '', 'alphaz');

			if ($db->connect_error) {
				$_SESSION['error'] = 'There was an error connecting to the database!';
				header('Location: '.$_SERVER['HTTP_REFERER']);
			}

			$stmt = "SELECT * FROM products WHERE type = 'Laptop'";
			$result = $db->query($stmt);

			if ($result->num_rows > 0) {
				$products = array();
				while ($row = $result->fetch_assoc()) {
					array_push($products, $row);
				}
			} else {
				$_SESSION['error'] = 'There was an error retrieving the products!';
				header('Location: '.$_SERVER['HTTP_REFERER']);
			}

		?>
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
			<div id="topoflaptop">
					<h1>Laptops</h1>
					<br />
					Discover the power and versatility of our Alpha Z Laptops, your
					gateway to a seemless computing experience Whether you're a
					professional, a student, or a tech enthusiast, this laptop is designed to meet your needs and
					exceed your expectations.
					<br /><br /><br /><br />
				</div>

			<div class="laptops">
			<?php
						foreach ($products as $product) {
							echo '<div class="product-card">';
							echo '<div class="product-image-container">';
							echo '<img class="product-image"';
							echo 'src="../assets/products/'.$product['picture'].'.png" />';
							echo '</div>';
							echo '<h3 class="product-title">'.$product['name'].'</h3>';
							echo '<p class="product-description">'.(strlen($product['details']) > 75 ? substr($product['details'],0,70).'...' : $product['details']).'</p>';
							echo '<p class="product-price">$'.$product['price'].'</p>';
							echo '<p class="product-button"><br><a href="product_customization.php?product='.$product['name'].'">CUSTOMIZE</a></p>';
							echo '</div>';
						}
					?>
</div>


				
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>

				<!-- <div>
					<h2>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VALUE EDITION (Pre-Built)
					</h2>
				</div>

				<div id="laptopvalue">
					<div class="product-list-container">
						<div class="product-card">
							<img
								src="../assets/products/Laptop/spectre.png"
								width="450px"
								height="375px"
								alt="Product Name"
							/>
							<h3 class="product-title">spectre</h3>
							<p class="product-description">spectre is suitable for multi-tasking, content creation,<br> and more.</p>
							<p class="product-price">$1200.00</p>
							<p class="product-button"><br><a href="Product_customization.php?product=spectre">VIEW PRODUCT</a></p>
						</div>&nbsp;
						<div class="product-card">
							<img
								src="../assets/products/Laptop/envy.png"
								width="450px"
								height="375px"
								alt="Product Name"
							/>
							<h3 class="product-title">envy</h3>
							<p class="product-description">envy is a high-performance laptop designed for gamers and power users, it handles tasks well.</p>
							<p class="product-price">$1300.00</p>
							<p class="product-button"><br><a href="Product_customization.php?product=envy">VIEW PRODUCT</a></p>
						</div>
					</div>

					<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

					<div class="product-list-container">
						<div class="product-card">
							<img
								src="../assets/products/Laptop/pavilion.png"
								width="450px"
								height="315px"
								alt="Product Name"
							/>
							<h3 class="product-title">pavilion</h3>
							<p class="product-description">pavilion is a mid range laptop for handling vigorous office applications,<br>and even gaming.</p>
							<p class="product-price">$1400.00</p>
							<p class="product-button"><br><a href="Product_customization.php?product=pavilion">VIEW PRODUCT</a></p>
						</div>&nbsp;
						<div class="product-card">
							<img
								src="../assets/products/Laptop/elitebook.png"
								width="450px"
								height="315px"
								alt="Product Name"
							/>
							<h3 class="product-title">elitebook</h3>
							<p class="product-description">elitebook is an upgraded version of our popular Spectre laptop, with even more power and performance</p>
							<p class="product-price">$1500.00</p>
							<p class="product-button"><br><a href="Product_customization.php?product=elitebook">VIEW PRODUCT</a></p>
						</div>
					</div>
				</div>

				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

				<div>
					<h2>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PREMIUM EDITION
						(Pre-Built)
					</h2>
				</div>

				<div id="laptoppremium">
					<div class="product-list-container">
						<div class="product-card">
							<img
								src="../assets/products/Laptop/stream.png"
								width="450px"
								height="355px"
								alt="Product Name"
							/>
							<h3 class="product-title">stream</h3>
							<p class="product-description">stream is a high-end laptop that all gamers wish for,<br>it can handle all operations smoothly, especially gaming.</p>
							<p class="product-price">$2500.00</p>
							<p class="product-button"><br><a href="Product_customization.php?product=stream">VIEW PRODUCT</a></p>
						</div>&nbsp;
						<div class="product-card">
							<img
								src="../assets/products/Laptop/boltbook.png"
								width="450px"
								height="355px"
								alt="Product Name"
							/>
							<h3 class="product-title">boltbook</h3>
							<p class="product-description">boltbook is a high-end laptop that all gamers wish for,<br>it can handle all operations exceptionally well, especially gaming.</p>
							<p class="product-price">$3000.00</p>
							<p class="product-button"><br><a href="Product_customization.php?product=boltbook">VIEW PRODUCT</a></p>
						</div>
					</div>
				</div> -->