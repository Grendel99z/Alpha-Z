<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
							echo '<p class="product-button"><br><a href="product_customization.php?product='.$product['name'].'">View Product</a></p>';
							echo '</div>';
						}
					?>
</div>


							</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>
