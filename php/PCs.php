<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" type="text/css" href="../css/PCs.css" />
	</head>

	<body>
		<?php 
			session_start();
			
			@ $db = new mysqli('localhost', 'root', '', 'alphaz');

			if ($db->connect_error) {
				$_SESSION['error'] = 'There was an error connecting to the database!';
				header('Location: '.$_SERVER['HTTP_REFERER']);
			}

			$stmt = "SELECT * FROM products WHERE type = 'PC'";
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
			<div id="topofpc">
					<h1>PCs</h1>
					<br />
					Our PCs are designed with future-proofing in mind, allowing for
					easy upgrades and expansion, so you can keep up with the ever-evolving
					technology landscape.
					<br /><br /><br /><br />
				</div>

				<div class="pcs"> 
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
							echo '<p class="product-button"><br><a href="PCDetails.php?pc='.$product['name'].'">Customize</a></p>';
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