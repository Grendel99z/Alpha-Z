<?php
// Start session
session_start();

$product_id = $_GET['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Connect to database
    @ $db = new mysqli('localhost', 'root', '', 'alphaz');
    if ($db->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = "UPDATE Products SET price = $price, quantity = $quantity WHERE id = $product_id";
    $result = $db->query($stmt);

    if ($result) {
        $_SESSION['success'] = 'Product updated successfully';
    } else {
        // If email and password are not valid, redirect to home page
        $_SESSION['error'] = 'the properties given are invalid';
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
    
} else {
    $_SESSION['error'] = 'properties cannot be empty';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
 