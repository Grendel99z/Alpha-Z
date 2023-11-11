<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $name = $_POST['firstName'] . ' ' . $_POST['lastName'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    if($password != $password2){
        $_SESSION['error'] = 'Passwords do not match!';
        header('Location: '.$_SERVER['HTTP_REFERER']);
        exit();
    }
    
    $password = md5($password);

    // Connect to the database
    @ $db = new mysqli('localhost', 'root', '', 'alphaz');

    // Check if the connection was successful
    if ($db->connect_error) {
        $_SESSION['error'] = 'There was an error connecting to the database!';
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }

    // Prepare the SQL statement
    $stmt = "INSERT INTO user (name, address, phone_number, email, role, password) VALUES ('$name', '$address', '$phone_number', '$email', 'user', '$password');";
    // Execute the statement
    $result = $db->query($stmt);

    if (!$result) {
        $_SESSION['error'] = 'There was an error signing up!';
    } else {
        $_SESSION['error'] = 'Sign up successful! Please sign in to continue.';
    }
    
    // Close the statement and the connection
    $db->close();
    if(isset($_SERVER['HTTP_REFERER'])) {
        header('Location: '.$_SERVER['HTTP_REFERER']);
    } else {
        // Redirect to a default page if HTTP_REFERER is not set
        header('Location: /homepage.php');
    }
    exit();

}else{
    $_SESSION['error'] = 'Please fill in all the fields!';
}
?>
