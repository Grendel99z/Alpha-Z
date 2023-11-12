<?php
session_start(); // Start the session

// Retrieve the cart items from the session
$cart_items = $_SESSION['cart_items'];
$cart_prices = $_SESSION['cart_prices'];
$cart_total = $_SESSION['cart_total'];
$cart_images = $_SESSION['cart_images'];

if (isset($_POST['clear_cart'])) {
    // Clear the cart
    $_SESSION['cart'] = array();
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

// Loop through the cart items to insert records into the "records" table
for ($i = 0; $i < count($_SESSION['cart']); $i++) {
    $product_id = $_SESSION['cart'][$i]['id'];
    $name = $_SESSION['cart'][$i]['name'];
    $type = $_SESSION['cart'][$i]['type'];
    $quantity_purchased = $_SESSION['cart'][$i]['quantity'];
    $price = $_SESSION['cart'][$i]['price'] * $quantity_purchased;

    // Insert a record into the "records" table
    $insert_query = "INSERT INTO records (name, price, type, quantity, date) VALUES ('$name', $price, '$type', $quantity_purchased, NOW())";

    if ($conn->query($insert_query) !== TRUE) {
        echo "Error inserting record for product with ID $product_id: " . $conn->error;
    }
}


?>

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
                $total = 0;
                for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                    echo '<div id="cartnumber">' . ($i + 1) . '</div>'; // Display the cart item number
                    echo '<div id="orderedItem">';
                    echo '<div id="product">';
                    echo '<div id="productImage">';
                    echo '<img src="../assets/products/' . $_SESSION['cart'][$i]['image'] . '.png" style="width: 200px; height: 200px;" />'; // Adjust the width and height
                    echo '</div>';
                    echo '<div id="productDetails">';
                    echo '<div><p>' . $_SESSION['cart'][$i]['name'] . '</p>'; // Display the product name
                    echo '<p>quantity: ' . $_SESSION['cart'][$i]['quantity'] . '</p></div>'; // Display the product name
                    echo '<div id="productPrice">';
                    echo '<p>$' . number_format($_SESSION['cart'][$i]['price']* $_SESSION['cart'][$i]['quantity'], 2) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    // Add a horizontal line to separate cart items
                    echo '<hr>';

                    $total = $total + $_SESSION['cart'][$i]['price']* $_SESSION['cart'][$i]['quantity'];
   
                } 
                // Loop through the cart items to update product quantities in the database
                for ($i = 0; $i < count($_SESSION['cart']); $i++) {
                    $product_id = $_SESSION['cart'][$i]['id'];
                    $quantity_purchased = 1; // You may need to adjust this based on the actual quantity purchased

                    // Update the product quantity in the database
                    $update_query = "UPDATE Products SET quantity = quantity - $quantity_purchased WHERE id = $product_id";
                    if ($conn->query($update_query) !== TRUE) {
                        echo "Error updating quantity for product with ID $product_id: " . $conn->error;
                    }
                }
                ?>

                <div id="priceSummary">
                    <table>
                        <tr><br><br>
                            <td>Total</td>
                            <td><?php echo $total; ?>.00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
      <!-- Add a form to return to the homepage and clear the cart -->
                <div id="returntohomepage">
                    <form method="post" action="homepage.php">
                    <button type="submit" name="clear_cart" id="returnToHomepageButton" onclick="<?php $_SESSION['cart'] = array(); ?>">Click here to Return to Homepage</button>
                    </form>
                </div>

    <div id="footer"></div>
    </div>
</body>
<script src="../js/sidePane.js"></script>
<script src="../js/footer.js"></script>
</html>
<?php
// Close the database connection
$conn->close();
?>