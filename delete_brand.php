<?php
   
   include("connection.php");

   $delete_id = $_GET["id"];
   $delete_Query = "delete from brand where brand_id ='$delete_id'";
   
   $run_query = mysqli_query($con,$delete_Query);
   header("location:view_brand.php");
 

?>
