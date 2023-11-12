<?php
error_reporting(0);
// cart.php
session_start();

if(!isset($_SESSION['user_id'])){
   $_SESSION['error'] = 'You must be logged in to view your cart!';
    if(isset($_SERVER['HTTP_REFERER'])) {
        if ($_SERVER['HTTP_REFERER'] == 'http://localhost:8888/alphaZ/Alpha-z/php/cart.php') {
            header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
            exit();
        }
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } else {
        // Redirect to a default page if HTTP_REFERER is not set
        header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
    }
    exit();
}

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

$total = 0;
$totalItems = 0;

// Fetch product data from the database based on the product IDs in the cart
for ($i = 0; $i < count($_SESSION['cart']); $i++) {
    $curQuantity = $_SESSION['cart'][$i]['quantity'];
    $curPrice = $_SESSION['cart'][$i]['price'];
    $totalItems += $curQuantity;
    $total += $curQuantity*$curPrice;
}

// Calculate the total using the prices from the session

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
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
                    <p>Your shopping cart contains <?php echo $totalItems; ?> items.</p>
                    <br />
                    Not ready to checkout? Continue shopping <br /><br /><br />

                        <tbody>
                        <?php
                        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                            echo '<div id="orderedItem">';
                            echo '<div class="product">';
                            echo '<div id="productImage">';
                            echo '<img src="../assets/products/' . $_SESSION['cart'][$i]['image'] . '.png" style="width: 200px; height: 200px;" />'; // Adjust the width and height
                            echo '</div>';
                            echo '<div class="productDetails">';
                            echo '<div class="basicDetails"><p class="productName">' . $_SESSION['cart'][$i]['name'] . '</p>'; // Display the product name
                            echo '<div class="productQuantity">';
                            echo '<p>Quantity: ' . $_SESSION['cart'][$i]['quantity'] . '</p>';
                            echo '</div>';
                            echo '<div class="productPrice">';
                            if ($_SESSION['cart'][$i]['type'] == 'PC') {
                                echo '<p>Base Price: $' . number_format($_SESSION['cart'][$i]['base_price'],2) . '</p>';
                            } else{

                                echo '<p>Price: $' . number_format($_SESSION['cart'][$i]['price'],2) . '</p>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="productTotalPrice">';
                            echo '<p>Total: $' . number_format($_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['quantity'], 2) . '</p><a href="' . $_SERVER['PHP_SELF'] . '?remove=' . $i . '">Remove</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                            // Add a horizontal line to separate cart items
                            echo '<hr>';
                        }
                        
                        ?>
                        <br>
                        <p><a href="homepage.php">Continue Shopping</a> or
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a></p>
                        </tbody>
                        <div id="buyerInformation">
                            <?php
                            if (isset($_SESSION['user_id'])) {
                                //get from db
                                @ $db = new mysqli('localhost', 'root', '', 'alphaz');

                                if ($db->connect_error) {
                                    $_SESSION['error'] = 'There was an error connecting to the database!';
                                    header('Location: '.$_SERVER['HTTP_REFERER']);
                                }

                                $stmt = "SELECT * FROM user WHERE id = ". $_SESSION['user_id'];
                                $result = $db->query($stmt);

                                if ($result) {
                                    $user = $result->fetch_assoc();
                                    $userName = $user['name'];
                                    $userEmail= $user['email'];
                                    $userAddress = $user['address'];
                                    $userPhoneNumber = $user['phone_number'];
                                } else {
                                    $_SESSION['error'] = 'There was an error retrieving the user information!';
                                    header('Location: '.$_SERVER['HTTP_REFERER']);
                                }


                                echo '<h3>Buyer Information</h3>';
                                echo '<p>Name: ' .$userName . '</p>';
                                echo '<p>Email: ' .$userEmail . '</p>';
                                echo '<p>Address: ' .$userAddress . '</p>';
                                echo '<p>Phone Number: ' .$userPhoneNumber . '</p>';
                            }
                            ?>
                    </div>
                        </div>

                <div id="rightcolumn">
                            <div id="priceSummary">
                                <h1>Order Summary</h1>
                                <br /><br />
                                <div class="total">Total: $<?php echo number_format($total, 2); ?></div>
                            </div><br><br><br><br><br>

                            <form action="thankyoupage.php" method="POST">
                                <input type="hidden" name="total" id="checkout-total" value="<?php echo $_SESSION['cart_total']; ?>">
                                <?php
                                if (count($_SESSION['cart']) > 0) {
                                    // Display the "Proceed to Checkout" button only when there are items in the cart
                                    echo '<input type="submit" name="submit" value="Proceed to Checkout">';
                                }
                                ?>
                            </form>
                        
                    </div>
               
            </div>


<div id="footer"></div>
		</div>
	</body>
	<script src="../js/sidePane.js"></script>
	<script src="../js/footer.js"></script>
</html>