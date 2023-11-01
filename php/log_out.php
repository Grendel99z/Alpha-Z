<?php
  session_start();
  
  unset($_SESSION['user_id']);
  session_destroy();
// Redirect back to the previous page
header("location: {$_SERVER['HTTP_REFERER']}");
exit;
?>