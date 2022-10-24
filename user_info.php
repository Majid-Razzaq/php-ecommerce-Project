<?php
include("connection.php");

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    
</head>
<body>
    
   <!-- Include Dashboard -->
     <?php include("user_dashboard.php");  ?>
   <!-- Include Dashboard -->
   

        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>User</span>
				</h2>
		    </div>
            <!-- End Here -->

 <!--gallery-->
 <div class=" profile">

<div class="profile-bottom">
    <h3><i class="fa fa-user"></i>User Information</h3>
    <div class="profile-bottom-top">
    
    <div class="profile-fo" style="margin-top:15px; margin-left:8px;">
    
</div>
    <div class="col-md-8 profile-text">
        <h6 style="text-decoration:underline">User</h6>
        <table style="margin-top:10px;">
        
        <tr><td>Customer Id</td>  
        <td>:</td>  
        <td><?php echo $_SESSION['userid']?></td></tr>
        
        <tr><td>Customer Name</td>  
        <td>:</td>  
        <td><?php echo $_SESSION['user']?></td></tr>
        
        <tr>
        <td>Customer Email</td>
        <td> :</td>
        <td><a href=""><?php echo $_SESSION['gmail'];?></a></td>
        </tr>
        <tr>
        <td>Customer Password</td>
        <td>:</td>
        <td><?php echo $_SESSION['pas']?></td>
        </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="profile-bottom-bottom">

    
</div>
<!--//gallery End Here-->

                   
</body>
</html>