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
    <title>Add Products</title>
    
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
				<span>Dashboard</span>
				</h2>
		    </div>

    <div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Add New Products</h3>
         <hr>
 	
<form action="" method="post" enctype="multipart/form-data">

     <div class="form-group">
     <h4 style="padding-left:20px;">Product Name</h4>
    <input  type="text" name="product" class="form-control cat" required="">
 
   </div>

   <div class="form-group">
     <h4 style="padding-left:20px;">Product Price</h4>
    <input  type="number" name="price" class="form-control cat" required="">
   </div>

   <div class="form-group">
     <h4 style="padding-left:20px;">Product Details</h4>
     <div class="form-group">
    <textarea class="form-control cat" name="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   </div>

   <div class="form-group">
     <h4 style="padding-left:20px;">Product Category</h4>
     <div class="form-group">
    <select class="form-control cat" name="category" id="exampleFormControlSelect1">
      <option value="0">Select Category</option>
       <!--PHP Code -->
    <?php

$fetch     = "select * from category";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{
    echo "
    <option>$row[1]</option>
    ";
  }
?>
    <!-- End Here -->

    </select>
  </div>
  
   </div>

   <div class="form-group">
     <h4 style="padding-left:20px;">Product Brand</h4>
     <div class="form-group">
    <select class="form-control cat" name="brand" id="exampleFormControlSelect1">
      <option value="0">Select Brands</option>
             <!--PHP Code -->
    <?php

      $fetch     = "select * from brand";
      $run_fetch = mysqli_query($con,$fetch);

      while($row = mysqli_fetch_array($run_fetch))
      {
       echo "
        <option>$row[1]</option>
         ";
        }
?>
    <!-- End Here -->

    </select>
  </div>
   </div>

   <div class="form-group">
     <h4 style="padding-left:20px;">Product Image</h4>
    <input  type="file" name="txtfile" class="form-control cat">
   </div>

  <button style="border-radius:10%; margin-left:20px;" name="btn"  type="submit" class="btn  btn-dark">Save</button>

  <!-- PHP Start -->
 <?php
  if(isset($_POST['btn']))
		  {
			  $pd_name = $_POST['product'];
        $pd_price = $_POST['price'];
        $pd_detail = $_POST['detail'];
        $pd_category = $_POST['category'];
        $pd_brand = $_POST['brand'];			
        $filename = $_FILES["txtfile"]["name"];
        $oldLocation = $_FILES["txtfile"]["tmp_name"];
        $newlocation = "images/".$filename;
 
        move_uploaded_file($oldLocation,$newlocation);
 
        $query = mysqli_query($con,"insert into products (p_name,p_price,p_details,p_category,p_brand,p_img)
              values ('$pd_name','$pd_price','$pd_detail','$pd_category','$pd_brand','$filename')");
        
        if($query > 0)
              {     
                echo"
                <div style='margin-top:5px;' class='alert alert-success' role='alert'>
                <b>Successfull!</b> Product $pd_name has been inserted..
                </div>
                ";
              }
              else
              {
                 echo "<script>alert('Failed!')</script>";
              }
 
		  }
        ?>
      <!-- End Here -->


</form>
</div>
           
			
	
                   
</body>
</html>