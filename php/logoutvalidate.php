<?php
session_start();
session_destroy();
unset($_SESSION['u_id']);
unset($_SESSION['u_fname']);
unset($_SESSION['u_lname']);
unset($_SESSION['u_email']);
unset($_SESSION['u_pass']);
unset($_SESSION['u_name']);

if(isset($_POST['logout'])){
  header("Location: homepage.php?Logout=successful");
}
else{
  header("Location: homepage.php?Logout=unsuccessful");
}

?>
