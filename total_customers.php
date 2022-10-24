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
				<span>Customers</span>
				</h2>
		    </div>
<!-- here -->
<div class="check-out">
		<div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-md-offset-0">
	 <div class="spec ">
				<h4 style="font-size:30px;">Customers</h4>
					<div class="ser-t">
						<b></b>
						<b class="line"></b>
					</div>
			</div>

 <table class="table ">
		  <tr>
			<th class="t-head">ID</th>
            <th class="t-head">Name</th>
		<th class="t-head">Email</th>
		<th class="t-head">Contact</th>
		<th class="t-head">Address</th>
        <th class="t-head">img</th>
        <th class="t-head">Options</th>
		  </tr>

		  </tr>
          <tr class="cross1">
          <div class="clearfix"> </div>
          </td>
                  <!--PHP Code -->
    <?php

$fetch     = "select * from user_info";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{
    echo "

    <tr>
    <td class='t-data'>$row[0]</td>
    <td class='t-data'>$row[1]</td>
    <td class='t-data'>$row[2]</td>

    </div>

    </td>
    <td class='t-data'>$row[4]</td>
    <td class='t-data'><div class='quantity'>
        <div class='quantity-select'>
            <h5>$row[5]</h5>
        </div>
    </div>
    	</td>
        <td><img class='userpic' src='images/".$row['img']."' style='height:50px; width:50px;'></td>
            <td class='t-data t-w3l'><a href='Edit_customer.php?id=$row[0]'><i class='fa fa-edit' style='font-size:20px; color:skyblue;'></a></i>
            <a href='delete_customer.php?id=$row[0]'><i class='fas fa-trash-alt' style='color:brown; font-size:20px;'></a></i></td>
            
</tr>

    ";
  }
   ?>
    <!-- End Here -->

							
	</table>
		 </div>
		 </div>
         </div>
		 </div>

</body>
</html>