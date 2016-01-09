<?php
   session_start();    //Available session for this page
   session_destroy();  // Destroying the current session
   header('Location: index.php');  // After that, redirecting to home page 
?>