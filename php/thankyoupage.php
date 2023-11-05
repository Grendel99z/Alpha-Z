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
                    echo '<div>' . $_SESSION['cart'][$i]['name'] . '</div>'; // Display the product name
                    echo '<div id="productPrice">';
                    echo '<p>$' . number_format($_SESSION['cart'][$i]['price'], 2) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                    // Add a horizontal line to separate cart items
                    echo '<hr>';

                    $total = $total + $_SESSION['cart'][$i]['price'];
                } ?>

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
                    <form action=homepage.php method="post">
                        <button type="submit" name="clear_cart" id="returnToHomepageButton">Click here to return to homepage</button>
                    </form>
                </div>

    <div id="footer"></div>
    </div>
</body>
<script src="../js/sidePane.js"></script>
<script src="../js/footer.js"></script>
</html>
