<?php
   
   session_start();
   $pid = $_GET['id'];
   unset($_SESSION['cart'][$pid]);
   header("location:cart.php");
?>