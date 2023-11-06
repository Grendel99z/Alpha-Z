<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    
    $to      = $email;
    $subject = 'Welcome to Alpha Z Mailing list';
    $message = 'Welcome to our mailing list! Hope that we get to serve you soon!';
    $headers = 'From: alphaz@localhost' . "\r\n" .
        'Reply-To: alphaz@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    $isSent = mail($to, $subject, $message, $headers,'-falphaz@localhost');
    if($isSent){
        $_SESSION['error'] = 'Email sent!';
    }else{
        $_SESSION['error'] = 'Email not sent!';
    }

    header('Location: '.$_SERVER['HTTP_REFERER']);
}


?> 