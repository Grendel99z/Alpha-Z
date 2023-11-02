<?php
// Start session
session_start();


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user_id'])) {
    
    // Get properties from POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phoneNumber'];
    $address = $_POST['address'];
    
    // Connect to database
    @ $db = new mysqli('localhost', 'root', '', 'alphaz');
    if ($db->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = "UPDATE user SET name = '$name', email = '$email', phone_number = '$phone_number', address = '$address' WHERE id = '{$_SESSION['user_id']}'";
    $result = $db->query($stmt);
    // If email and password are valid, set session variables and redirect back to requesting page
    if ($result) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        // If email and password are not valid, redirect to home page
        $_SESSION['error'] = 'the properties given are invalid';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
} else {
    // If email and password are not set, redirect to home page
    $_SESSION['error'] = 'properties cannot be empty';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>
 