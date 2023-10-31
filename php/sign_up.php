<?php

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
    $stmt = "INSERT INTO user (name, address, phone_number, email, password) VALUES ('$name', '$address', '$phone_number', '$email', '$password')";
    // Execute the statement
    $result = $db->query($stmt);

    if ($result) {
        // Log the user in and set the session
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['logged_in'] = true;

        // Redirect to the home page
        // Redirect back to the previous page
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        } else {
            // Redirect to a default page if HTTP_REFERER is not set
            header('Location: /homepage.php');
        }
        exit;
    } else {
        // Handle the error
        $SESSION['error'] = 'There was an error signing up!';
        echo $stmt->error;
    }

    // Close the statement and the connection
    $db->close();
}else{
    $SESSION['error'] = 'Please fill in all the fields!';
}
?>
