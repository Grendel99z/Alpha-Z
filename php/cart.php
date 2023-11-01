<!DOCTYPE html>
<html>
	<head>
		<title>Alpha Z template</title>
		<link rel="stylesheet" type="text/css" href="../style.css" />
		<link rel="stylesheet" type="text/css" href="../css/cart.css" />
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
			<div id="leftcolumn">
					<h1>Your cart</h1>
					<br />
					Not ready to checkout? Continue shopping <br /><br /><br />
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
										<p>$XXX &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Remove</p>
									</div>
								</div>
							</div>
							<hr />
						</div>
					<br /><br /><br /><br /><br /><br /><br />

					Order information<br />
					<hr />
					<br />
					Return Policy
					<hr />
					<br />

					Shipping Options
					<hr />
					<br />
				</div>
				</div>

				<div id="rightcolumn">
				  <div id="priceSummary">
					<h1>Order Summary</h1>
					<br /><br />
					<div class = "subtotal" >Subtotal: <br /></div>
					<hr />
					<div class ="total" >Total: <br /><br /></div>
				</div>

				<div></div>
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			</div>

			<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>