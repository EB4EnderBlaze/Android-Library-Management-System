<?php

  // Inialize session
  session_start();

// Delete certain session
  unset($_SESSION['customer_id']);
  // Delete all session variables
   session_destroy();

 // Jump to login page
 header('Location: homepage.html');

  ?>