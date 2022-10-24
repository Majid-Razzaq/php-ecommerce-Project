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
    <title>Add Categories</title>

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
<!-- here -->
<div class="check-out">
		<div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
	 <div class="spec ">
				<h4 style="font-size:30px;">Products</h4>
					<div class="ser-t">
						<b></b>
						<b class="line"></b>
					</div>
			</div>
<form  method="post" enctype="multipart/form-data">
 <table class="table ">
		  <tr>
			<th class="t-head">Name</th>
            <th class="t-head">Price</th>
	    	<th class="t-head">Description</th>
		    <th class="t-head">Category</th>
		    <th class="t-head">Brand</th>
		    <th class="t-head">image</th>
            <th class="t-head">Options</th>
		  </tr>

		  </tr>
          <tr class="cross1">

			<div class="clearfix"> </div>
          </td>

    <!--PHP Code -->
    <?php

$fetch     = "select * from products";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{
    echo "
    <td class='t-data'>$row[1]</td>
    <td class='t-data'><div class='quantity'>
    <div class='quantity-select'>
    <h5>$row[2]</h5>
    </div>
    </div>

    <td class='t-data'>$row[3]</td>
    <td class='t-data'><div class='quantity'>
    <div class='quantity-select'>
    <h5>$row[4]</h5>
    </div>
    </div>

    <td class='t-data'>$row[5]</td>
    <td class='t-data'><div class='quantity'>
    <div class='quantity-select'>
    <img src='images/".$row['p_img']."' style='height:50px; width:50px;' >
    <td class='t-data'><a href='Edit_product.php?id=$row[0]'><i class='fa fa-edit' style='font-size:25px; color:skyblue;'></a></i>
    <a href='Delete_Products.php?id=$row[0]'><i class='fas fa-trash-alt' style='color:brown; font-size:20px;'></a></i></td>
   
    </div>
    </div>
</tr>

    </td>

    
    ";
  }
   ?>
    <!-- End Here -->

	</tr>

	</table>
    </form>
		 </div>
		 </div>
         </div>
		 </div>

</body>
</html>