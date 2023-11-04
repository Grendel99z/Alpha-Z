<?php
session_start();

$pc = $_GET['pc'];

if (!isset($pc)) {
    // Handle the case where the 'pc' parameter is not provided.
    header('Location: http://localhost:8888/alphaZ/Alpha-z/php/homepage.php');
    exit();
}

@ $db = new mysqli('localhost', 'root', '', 'alphaz');

if ($db->connect_error) {
    $_SESSION['error'] = 'There was an error connecting to the database!';
    header('Location: '.$_SERVER['HTTP_REFERER']);
}

$stmt = "SELECT * FROM Products WHERE type = 'PC' AND name = '$pc'";
$result = $db->query($stmt);

if ($result) {
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

$canAddToCart = isset($_SESSION["user_id"]);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $canAddToCart && isset($_POST['add_to_cart'])) {
    // Add the product information to the session cart
    $_SESSION['cart'][] = array(
        'name' => $product['name'],
        'price' => $product['price'],
        'image' => $product['picture'], // Add the image filename
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alpha Z template</title>
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../css/pc_customization.css" />
</head>
<body>

    <div class="wrapper">
        <div id="header">
            <?php include_once 'components/header.php'; ?>
        </div>
        <div id="defaultSidePane">
            <?php include 'components/sidePane.php'; ?>
        </div>
        <div id="body">
            <div id="productContent">
                <div>
                    <img src="../assets/products/<?php echo $picture ?>" />
                </div>
                <div>
                    <div id="productDetails">
                        <h2><?php echo $name; ?></h2>
                        <p>
                            <?php echo $details; ?>
                        </p>
                        <br />
                        <p>by Alpha Z</p>
                        <br />
                        <br />
                    </div>
                    <div id="productAdditions">
                        <!-- ... (Your product customization options) ... -->
                    </div>
                </div>
            </div>
        </div>
        <div id="footer"></div>
        <div id="customize_summary">
            <div id="productTitle">
                <h2><?php echo $name; ?></h2>
                <p>Quantity: <?php echo $quantity; ?></p>
            </div>
            <p id="productTotal">$<?php echo $price; ?></p>
            <div id="addToCart">
                <?php if ($canAddToCart) { ?>
                    <form method="post" action="">
                        <input type="hidden" name="add_to_cart" value="1">
                        <button type="submit" id="addToCartButton" style="width: 200px;">Add to Cart</button>
                    </form>
                <?php } else { ?>
                    <button id="openSidePanelButton" onclick="openNav()" style="height: 40px;">Please login to add this product to your cart</button>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<script src="../js/sidePane.js"></script>
<script src="../js/footer.js"></script>
</html>
