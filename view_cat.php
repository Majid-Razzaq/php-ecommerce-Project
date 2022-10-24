<?php
include("connection.php");
include("Inc_admin_dash.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Categories</title>
    
<!--Font Awesome and online Links --->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--style1 css--->
<link rel="stylesheet" href="dash_css/style1.css">
<!--End Here--->

<body>


        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Category</span>
				</h2>
		    </div>
        <!-- here --> 

<div class="container">
	<div class="row">
		
        
        <div class="col-md-8 col-sm-8 col-md-offset-1">
        <h2 class="text-center" style="padding-top:20px;">Product Category</h2>
       
        <div class="table-responsive">         
              <table method="post" id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>S.No</th>
                    <th>Category Name</th>
                    <th>Entry Date</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
    <!--PHP Code -->
   <?php

$fetch     = "select * from category";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{
    echo "

    <tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
   
   <td><a href='edit_cat.php?id=$row[0]'><i style='font-size:25px; color:skyblue;' class='fa fa-edit'></a></i></td>
    <td><a href='category_delete.php?id=$row[0]'><i style='color:brown; font-size:20px;' class='fas fa-trash-alt'></a></i></td>
    </tr>
    ";
  }
   ?>
    <!-- End Here -->

    </tbody>
        
</table>
         
</body>
</html>
