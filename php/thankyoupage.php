<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" type="text/css" href="../css/thankyou.css" />
	</head>

	<body>
		<div class="wrapper">
			<div id="header">
				<?php
					include_once 'header.php';
				?>
			</div>
			<div id="defaultSidePane">
					<?php
						include 'sidePane.php';
					?>
			</div>
			<div id="body">
			<h1>Thank you your order has been confirmed</h1>
				<div id="purchaseSummary">
					<p>Your Order</p>
					<div id="orderedItem">
						<div id="product">
							<div id="productImage">
								<img src="../assets/placeholder.png" />
							</div>
							<div id="productDetails">
								<div>PRODUCT NAME I</div>
								<div id="productPrice">
									<p>$XXX</p>
									<p>Remove</p>
								</div>
							</div>
						</div>
						<hr />
					</div>
					<div id="priceSummary">
						<table>
							<tr>
								<td>Subtotal</td>
								<td>$XXX.XX</td>
							</tr>
							<tr>
								<td>Shipping</td>
								<td>$XX.XX</td>
							</tr>
							<tr>
								<td>Total</td>
								<td>$XXX.XX</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>