<?php
  
  session_start();


  $id = $_GET['id'];
  $name = $_GET['p_name'];
  $price = $_GET['p_price'];
  $qty = $_GET['qty'];
  $p_img = $_GET['p_img'];

  $_SESSION['cart'][$id] = array("id"=>$id,"qty" =>$qty,"p_name"=>$name,"p_price"=>$price,"p_img"=>$p_img);
  echo " <script>window.location.assign('cart.php');</script> ";
  header("Location:cart.php");

  // $products = array($name,$price,$quantity);
  // $_SESSION[$cart] = $products;
  // header('location:index.php');
  

//   $pid = $_GET['pid'];
//   $qty = $_GET['qty'];
//   $_SESSION['cart'] [$pid] = array("id"=>$pid,"qty"=>$qty);
//   echo " <script>window.location.assign('add_cart.php');</script> ";
//   header("Location:add_Cart.php");

?>