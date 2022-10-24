<?php
  
  session_start();
  include("connection.php");

  //
//   $_SESSION['cart'][$id] = array("id"=>$id,"qty" =>$qty,"p_name"=>$name,"p_price"=>$price,"p_img"=>$p_img);
//   echo " <script>window.location.assign('cart.php');</script> ";
//   header("Location:cart.php");

  // $products = array($name,$price,$quantity);
  // $_SESSION[$cart] = $products;
  // header('location:index.php');


  $id = $_GET['id'];
  $p_name  = $_GET['p_name'];
  $p_price = $_GET['p_price'];
  $qty     = $_GET['qty'];

  



  // $query = "insert into order_info (p_id,p_name,p_price,p_qty)
  // values
  // ('$id','$p_name','$p_price','$qty');
  // ";
  // $result = mysqli_query($con,$query);
  // if($result > 0)
  // {
  //   header("Location:cart.php");
  // }
  // else
  // {
  //     echo "<script>alert('data not Save!')</script>";
  // }



//   $_SESSION['cart'][$id] = array("id"=>$id,"qty" =>$qty,"p_name"=>$name,"p_price"=>$price,"p_img"=>$p_img);
//   echo " <script>window.location.assign('cart.php');</script> ";
//   header("Location:cart.php");

  // $products = array($name,$price,$quantity);
  // $_SESSION[$cart] = $products;
  // header('location:index.php');
  

//   $pid = $_GET['pid'];
//   $qty = $_GET['qty'];
//   $_SESSION['cart'] [$pid] = array("id"=>$pid,"qty"=>$qty);
//   echo " <script>window.location.assign('add_cart.php');</script> ";
//   header("Location:add_Cart.php");

?>