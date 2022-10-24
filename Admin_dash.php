<?php
include("connection.php");
include("Inc_admin_dash.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
</head>
<body>

<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>


            <div class="content-top">
			
			
			<div class="col-md-4 ">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Category</h5>
                    <!-- Php Start-->
                    <?php
                      $query = "SELECT category_id FROM category ORDER BY category_id";
                      $query_run = mysqli_query($con,$query);
                      $row = mysqli_num_rows($query_run);
                      echo '<label>'.$row.'</label>';


                    ?>
                    <!-- End Here -->
				</div>
				<div class="col-md-6 top-content1">	   
                <span style="font-size:50px;color:brown; margin-top:10px" class="far fa-boxes"></span>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Products</h5>
                    <!-- Php Start-->
                    <?php
                      $query = "SELECT id FROM products ORDER BY id";
                      $query_run = mysqli_query($con,$query);
                      $row = mysqli_num_rows($query_run);
                      echo '<label>'.$row.'</label>';


                    ?>
                    <!-- End Here -->
				</div>
				<div class="col-md-6 top-content1">	   
					<span style="font-size:50px;color:brown; margin-top:10px" class="fab fa-product-hunt"></span>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Users</h5>
                    <!-- PHP Start -->
                    <?php
                      $query = "SELECT id FROM user_info ORDER BY id";
                      $query_run = mysqli_query($con,$query);
                      $user = mysqli_num_rows($query_run);
                      echo '<label>'.$user.'</label>';


                    ?>
                    <!-- End Here -->
				</div>
				<div class="col-md-6 top-content1">	   
                 <span style="font-size:50px;color:brown; margin-top:10px" class="far fa-users"></span>
				</div>
				 <div class="clearfix"> </div>
                 
				</div>
                 
			</div>
            
			<div class="col-md-8 content-top-2">
			
              <div class="content-top-1">
				<div class="col-md-6  top-content">
					<h5>Total Brands</h5>
                    <!-- PHP Start -->
                    <?php
                      $query = "SELECT brand_id FROM brand ORDER BY brand_id";
                      $query_run = mysqli_query($con,$query);
                      $brand = mysqli_num_rows($query_run);
                      echo '<label>'.$brand.'</label>';


                    ?>
                    <!-- End Here -->
               </div>
				<div class="col-md-6 top-content1">	   
                 <span style="font-size:50px; color:brown; margin-top:10px" class="fad fa-box-full"></span>
				</div>
				 <div class="clearfix"> </div>

             </div>
             <div class="col-md-8 content-top-2">
			
            <div class="content-top-1">
              <div class="col-md-6  top-content">
                  <h5>Total Orders</h5>
                  <label>13</label>
              </div>
              <div class="col-md-6 top-content1">	   
               <span style="font-size:50px;color:brown;margin-left:20px" class="fas fa-shopping-bag"></span>
              </div>
               <div class="clearfix"> </div>

           </div>
           
			
	
                   
</body>
</html>