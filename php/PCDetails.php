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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $canAddToCart && isset($_POST['add_to_cart']) && $quantity > 0) {
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
                    <img src="../assets/products/<?php echo $picture ?>.png" />
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
                        <div id="RAMAdditions">
                        <hr />
                        <h3>RAM</h3>
                        <p>
                            RAM is your PC's short term memory. The more RAM you have, the
                            more programs you can handle at once and the faster they'll
                            run. Higher speed RAM provides a smoother experience.
                        </p>
                        <br />
                        <input
                            type="radio"
                            id="RAM_01"
                            name="RAMSelection"
                            value="RAM_01"
                            checked
                        />
                        <label for="RAM_01">
                            <p>xxGB BrandName DDR5 xxxMHz (8x2)</p>
                        </label>
                        <input
                            type="radio"
                            id="RAM_02"
                            name="RAMSelection"
                            value="RAM_02"
                        />
                        <label for="RAM_02">
                            <p>xxGB BrandName DDR5 xxxMHz (8x2)</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <input
                            type="radio"
                            id="RAM_03"
                            name="RAMSelection"
                            value="RAM_03"
                        />
                        <label for="RAM_03">
                            <p>xxGB BrandName DDR5 xxxMHz (8x2)</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <br />
                        <br />
                    </div>
                    <div id="OSAdditions">
                        <hr />
                        <h3>Operating System</h3>
                        <p>
                            Select whether you wanted your PC to be pre-loaded with an
                            operating system pre-installed.
                        </p>
                        <br />
                        <input
                            type="radio"
                            id="OS_01"
                            name="OSSelections"
                            value="OS_01"
                            checked
                        />
                        <label for="OS_01">
                            <p>No Operating System</p>
                        </label>
                        <input
                            type="radio"
                            id="OS_02"
                            name="OSSelections"
                            value="OS_02"
                        />
                        <label for="OS_02">
                            <p>Windows 11</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <br />
                        <br />
                    </div>
                    <div id="Storage">
                        <hr />
                        <h3>Storage</h3>
                        <p>
                            Select what type of storage and its size you wanted to be
                            installed to the PC
                        </p>
                        <br />
                        <input
                            type="radio"
                            id="Storage_01"
                            name="StorageSelection"
                            value="Storage_01"
                            checked
                        />
                        <label for="Storage_01">
                            <p>500GB SSD</p>
                        </label>
                        <input
                            type="radio"
                            id="Storage_02"
                            name="StorageSelection"
                            value="Storage_02"
                        />
                        <label for="Storage_02">
                            <p>1TB SSD</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <input
                            type="radio"
                            id="Storage_03"
                            name="StorageSelection"
                            value="Storage_03"
                        />
                        <label for="Storage_03">
                            <p>1TB HDD</p>
                        </label>
                        <input
                            type="radio"
                            id="Storage_04"
                            name="StorageSelection"
                            value="Storage_04"
                        />
                        <label for="Storage_04">
                            <p>2TB HDD</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <br />
                        <br />
                    </div>
                    <div id="GPUAdditions">
                        <hr />
                        <h3>Graphic Card</h3>
                        <p>
                            The graphics card (GPU) is the muscle of your PC. For better
                            visual performance, higher frame rates (FPS), and higher
                            resolution displays, you'll want to go for a higher-end GPU.
                        </p>
                        <br />
                        <input
                            type="radio"
                            id="GPU_01"
                            name="GPUSelections"
                            value="GPU_01"
                            checked
                        />
                        <label for="GPU_01">
                            <p>Brand A xxx Core - 4GB</p>
                        </label>
                        <input
                            type="radio"
                            id="GPU_02"
                            name="GPUSelections"
                            value="GPU_02"
                        />
                        <label for="GPU_02">
                            <p>Brand B xxx core - 8GB</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <input
                            type="radio"
                            id="GPU_03"
                            name="GPUSelections"
                            value="GPU_03"
                        />
                        <label for="GPU_03">
                            <p>Brand C xxx core - 8GB</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <br />
                        <br />
                    </div>
                    <div id="CLAdditions">
                        <hr />
                        <h3>Case Lighting</h3>
                        <p>
                            Light up your new PC with our premium RGB options. Skirting
                            the inside of the PC, case lighting will illuminate the inside
                            of your chassis, shedding some light on all your incredible
                            new hardware.
                        </p>
                        <br />
                        <input
                            type="radio"
                            id="CL_01"
                            name="CLSelections"
                            value="CL_01"
                            checked
                        />
                        <label for="CL_01">
                            <p>Case Lighting (None)</p>
                        </label>
                        <input
                            type="radio"
                            id="CL_02"
                            name="CLSelections"
                            value="CL_02"
                        />
                        <label for="CL_02">
                            <p>Case Lighting (RGB)</p>
                            <p class="price">+$XXX</p>
                        </label>
                        <br />
                        <br />
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
                        <button type="submit" id="addToCartButton" style="width: 200px; height: 50px;">Add to Cart</button>
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
