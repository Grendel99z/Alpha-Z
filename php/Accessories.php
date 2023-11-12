<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/Accessories.css" />
	</head>

	<body>
		<?php 
			session_start();
			
			@ $db = new mysqli('localhost', 'root', '', 'alphaz');

			if ($db->connect_error) {
				$_SESSION['error'] = 'There was an error connecting to the database!';
				header('Location: '.$_SERVER['HTTP_REFERER']);
			}

			$stmt = "SELECT * FROM products WHERE type != 'PC' AND type != 'Laptop'";
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
				<div id="topofaccessories">
					<h1>Accessories</h1>
					<br />
					Introducing the Ultimate Gaming Accessories Collection!
					Elevate your gaming experience to new heights with our
					handpicked selection of top-tier accessories to enhance your
					gameplay
					and provide you with a competitive edge.
					<br /><br /><br /><br />
				</div>

				<div id="accessoriesbar">
					<p>Filter By:</p>

					<!-- Control buttons -->
					<div id="myBtnContainer">
						<button id="allButton" class="btn active" onclick="filterSelection('all')">
							Show all
						</button>
						<button id="MouseButton" class="btn" onclick="filterSelection('Mouse')">
							Mouse
						</button>
						<button id="KeyboardButton" class="btn" onclick="filterSelection('Keyboard')">
							Keyboard
						</button>
						<button id="HeadsetButton" class="btn" onclick="filterSelection('Headset')">
							Headsets
						</button>
						<button id="WebcamButton" class="btn" onclick="filterSelection('Webcam')">
							Webcams
						</button>
						<button id="MicrophoneButton" class="btn" onclick="filterSelection('Microphone')">
							Microphones
						</button>
					</div>
					<p id="resultCount">Results found</p>
				</div>

				<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
				<div class="accessories" >
					<?php

						foreach ($products as $product) {
							echo '<div class="product-card '.$product['type'].'">';
							echo '<a href="Product_customization.php?product='.$product['name'].'">';
							echo '<div class="product-image-container">';
							echo '<img class="product-image"';
							echo 'src="../assets/products/'.$product['picture'].'.png" />';
							echo '</div>';
							echo '<h3 class="product-title">'.$product['name'].'</h3>';
							echo '<p class="product-price">$'.$product['price'].'</p>';
							echo '</a>';
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
	<script src="../js/filteraccessories.js"></script>
</html>


