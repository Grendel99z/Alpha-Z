<?php

// cart.php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['empty'])) {
    unset($_SESSION['cart']);
    header('location: ' . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_GET['remove'])) {
    $removeIndex = $_GET['remove'];
    if (isset($_SESSION['cart'][$removeIndex])) {
        unset($_SESSION['cart'][$removeIndex]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex the cart
        header('location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
}

// Database connection settings
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'alphaz';

$items = array();
$prices = array();
$images = array();

// Create a database connection

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch product data from the database based on the product IDs in the cart
foreach ($_SESSION['cart'] as $productId) {
    $sql = "SELECT name, price, picture FROM Products WHERE id = '$productId'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $items[] = $row["name"];
        $prices[] = $row["price"];
        $images[] = $row["picture"];
    }
}


// Calculate the total using the prices from the session
$total = array_sum($prices);

// Store the cart data in session variables
$_SESSION['cart_items'] = $items;
$_SESSION['cart_prices'] = $prices;
$_SESSION['cart_total'] = $total;
$_SESSION['cart_images'] = $images;

// Redirect to the thank you page with the POST data
if (isset($_POST['submit'])) {
    header('Location: thankyoupage.php');
    exit();
}


$conn->close();
?>
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
					include_once 'components/header.php';
				?>
			</div>
			<div id="defaultSidePane">
					<?php
						include 'components/sidePane.php';
					?>
			</div>
			<div id="body">
        
        <div id="leftcolumn">
            <h1>Your cart</h1>
            <p>Your shopping cart contains <?php echo count($_SESSION['cart']); ?> items.</p>
            <br />
            Not ready to checkout? Continue shopping <br /><br /><br />

            <table border="1">
                <tbody>
                <?php
                $total = 0;
                for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                    echo '<div id="orderedItem">';
                    echo '<div id="product">';
                    echo '<div id="productImage">';
                    echo '<img src="../assets/products/' . $_SESSION['cart'][$i]['image'] . '.png" style="width: 200px; height: 200px;" />'; // Adjust the width and height
                    echo '</div>';
                    echo '<div id="productDetails">';
                    echo '<div>' . $_SESSION['cart'][$i]['name'] . '</div>'; // Display the product name
                    echo '<div id="productPrice">';
                    echo '<p>$' . number_format($_SESSION['cart'][$i]['price'], 2) . ' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?remove=' . $i . '">Remove</a></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    // Add a horizontal line to separate cart items
                    echo '<hr>';

                    $total = $total + $_SESSION['cart'][$i]['price'];
                }
                
                ?>
                <br>
                <p><a href="catalog.php">Continue Shopping</a> or
                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></p>
                </tbody>
            </table>
            <br><br><br>
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

        <div id="rightcolumn">
                    <div id="priceSummary">
                        <h1>Order Summary</h1>
                        <br /><br />
                        <div class="total">Total: $<?php echo number_format($total, 2); ?></div>
                    </div><br><br><br><br><br>

                    <form action="thankyoupage.php" method="POST">
                        <input type="hidden" name="total" id="checkout-total" value="<?php echo $_SESSION['cart_total']; ?>">
                        <input type="submit" name="submit" value="Proceed to Checkout">
                    </form>
                   
        </div>
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
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