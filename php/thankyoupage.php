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
					include_once 'components/header.php';
				?>
			</div>
			<div id="defaultSidePane">
					<?php
						include 'components/sidePane.php';
					?>
			</div>
			<div id="body">
			<h1>Thank you, your order has been confirmed</h1>
            <div id="purchaseSummary">
                <p>Your Order</p>
                <?php
                if (isset($_SESSION['cart_items'])) {
                    for ($i = 0; $i < count($_SESSION['cart_items']); $i++) {
                        echo '<div id="orderedItem">';
                        echo '<div id="product">';
                        echo '<div id="productImage">';
                        echo '<img src="../assets/placeholder.png" />';
                        echo '</div>';
                        echo '<div id="productDetails">';
                        echo '<div>' . $_SESSION['cart_items'][$i] . '</div>'; // Display the product name
                        echo '<div id="productPrice">';
                        echo '<p>$' . number_format($_SESSION['cart_prices'][$i], 2) . '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<hr />';
                        echo '</div>';
                    }
                }
                ?>
                <div id="priceSummary">
                    <table>
                        <tr>
                            <td>Subtotal</td>
                            <td>$<?php echo number_format($_SESSION['cart_total'], 2); ?></td>
                        </tr>
                        <tr>
                            <td>Shipping</td>
                            <td>$XX.XX</td> <!-- You can update this with the actual shipping cost if needed -->
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>$XXX.XX</td> <!-- You can update this with the actual total if needed -->
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