<?php
  session_start();
  
  unset($_SESSION['logged_in']);
  session_destroy();
// Redirect back to the previous page
header("location: {$_SERVER['HTTP_REFERER']}");
exit;
?>