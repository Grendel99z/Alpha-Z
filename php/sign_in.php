<?php
// Start session
session_start();

// Check if email and password are set
if(isset($_POST['email']) && isset($_POST['password'])) {
    
    // Get email and password from POST request
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    
    // Connect to database
    @ $conn = new mysqli('localhost', 'root', '', 'alphaz');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare and execute query to check if email and password match a user in the database
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // If email and password are valid, set session variables and redirect back to requesting page
    if ($result->num_rows == 1) {
        $_SESSION['user_id'] = $result->fetch_assoc()['id'];
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        // If email and password are not valid, redirect to home page
        $_SESSION['error'] = 'Invalid email or password';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
} else {
    // If email and password are not set, redirect to home page
    $_SESSION['error'] = 'Please enter your email and password';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>
 