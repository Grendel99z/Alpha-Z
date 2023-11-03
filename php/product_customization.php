<?php
session_start(); // Start the session

$product_name = $_GET['product'];
if (!isset($product_name)) {
    if ($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/alphaZ/Alpha-z/php/product_customization.php' || $_SERVER['HTTP_REFERER'] == '') {
        header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
        exit();
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} ?>


<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" type="text/css" href="../css/product_customization.css" />
	</head>
	<?php
		$product_name = $_GET['product'];
		if (!isset($product_name)){
			if($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/alphaZ/Alpha-z/php/product_customization.php' || $_SERVER['HTTP_REFERER'] == ''){
				header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
				exit();
			}
			header('Location: '.$_SERVER['HTTP_REFERER']);
		}
	?>
	<body>
		<?php
			@ $db = new mysqli('localhost', 'root', '', 'alphaz');
					
			if ($db->connect_error) {
				$_SESSION['error'] = 'There was an error connecting to the database!';
				header('Location: '.$_SERVER['HTTP_REFERER']);
			}

			$stmt = "SELECT * FROM Products WHERE name = '$product_name'";
			$result = $db->query($stmt);
			if($result){
				$product = $result->fetch_assoc();
				$name = $product['name'];
				$price = $product['price'];
				$details = $product['details'];
				$picture = $product['picture'];
				$quantity = $product['quantity'];
			} else {
				$_SESSION['error'] = 'There was an error getting your information!';
				header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
			}

			if (isset($_POST['add_to_cart'])) {
				// Check if the 'Add to Cart' button was clicked
				if (!isset($_SESSION['cart'])) {
					$_SESSION['cart'] = array(); // Initialize the cart session variable if it doesn't exist
				}
				// After fetching product details from the database, add the image filename to the session
				$_SESSION['cart'][] = array(
					'id' => $product['id'],
					'name' => $product['name'],
					'price' => $product['price'],
					'image' => $product['picture'], // Add the image filename
				);

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
				<div id="productImage">
					<img
						id="selectedImage"
						src="../assets/products/<?php echo $picture ?>.png"
					/>
					<div class="photo-album">
						<ul>
							<li>
								<img
									class="imagesOptions"
									src="../assets/products/<?php echo $picture ?>.png"
								/>
							</li>
							<li>
								<img
									class="imagesOptions"
									src="../assets/products/<?php echo $picture ?>2.png"
								/>
							</li>
							<li>
								<img
									class="imagesOptions"
									src="../assets/products/<?php echo $picture ?>3.png"
								/>
							</li>
						</ul>
					</div>
				</div>
				<div id="productDetails">
					<h2><?php echo $name; ?></h2>
					<p>
						<?php echo $details; ?>
					</p>
					<br />

				<?php 
					// if($type !='Laptop'){
					// echo '<p>Selection</p>';
					// echo '<div id="product_customization_selection">
					// 		<input
					// 			type="radio"
					// 			id="product_customization_01"
					// 			name="product_customization"
					// 			value="product_customization_01"
					// 			checked
					// 		/>
					// 		<label for="product_customization_01">
					// 			<p>choice 1</p>
					// 		</label>
					// 		<input
					// 			type="radio"
					// 			id="product_customization_02"
					// 			name="product_customization"
					// 			value="product_customization_02"
					// 		/>
					// 		<label for="product_customization_02">
					// 			<p>choice 2</p>
					// 		</label>
					// 		<input
					// 			type="radio"
					// 			id="product_customization_03"
					// 			name="product_customization"
					// 			value="product_customization_03"
					// 		/>
					// 		<label for="product_customization_03">
					// 			<p>choice 3</p>
					// 		</label>
					// 	</div>';
					// }
				?>
				</div>
			</div>
			<div id="footer"></div>
			<div id="customize_summary">
				<div id="productTitle">
					<h2><?php echo $name; ?></h2>
					<p>quantity: <?php echo $quantity?></p>
				</div>
				<p id="productTotal">$ <?php echo $price; ?></p>
				<div id="addToCart">
				<form method="post" action="">
					<input type="hidden" name="add_to_cart" value="1">
					<button type="submit" id="addToCartButton">
						Add to Cart
					</button>
				</form>
				</div>
			</div>
		</div>
	</body>
	<script src="../js/product_customization.js"></script>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>