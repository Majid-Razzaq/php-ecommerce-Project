<?php
   
   include("connection.php");

   $delete_id = $_GET["id"];
   $delete_Query = "delete from products where id ='$delete_id'";
   
   $run_query = mysqli_query($con,$delete_Query);
   header("location:Stock_D.php");
 

?>
