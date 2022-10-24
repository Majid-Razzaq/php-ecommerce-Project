<?php
include("connection.php");
include("User_dashboard.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user's Orders</title>

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
				<a href="user_dash.php">Dashboard</a>
				<i class="fa fa-angle-right"></i>
				<span>Shopping Details</span>
				</h2>
		    </div>
<!-- here --> 

<div class="container">
	<div class="row">
		
        
        <div class="col-md-9 col-sm-8 ">
        <h2 class="text-center" style="padding-top:20px;">Shopping Info</h2>
       
        <div class="table-responsive">         
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   <th>S.NO</th>
                   <th>User Id</th>
                   <th>Username</th>
                   <th>Item</th>
                   <th>Price</th>
                   <th>Quantity</th>
                    <th>Order Date</th>
                    <th>Total</th>
                   </thead>
    <tbody>
    
       <tr>
        <!--PHP Code -->
           <?php
            $username = $_SESSION['user'];
            $query    = "select * from user_info where username = '$username' ";
            $run      = mysqli_query($con,$query);
            $user     = mysqli_fetch_array($run);

            //For Invoice
            $username    = $_SESSION['user'];
            $query       = "select * from invoice where username = '$username' ";
            $run         = mysqli_query($con,$query);
            $invoice     = mysqli_fetch_array($run);

            //For 

           ?>
           <?php
                    $sr = 0;

                    $username = $_SESSION['user'];
                    $query = "select * from order_info where username = '$username' ";
					$run   = mysqli_query($con,$query);
					
                   while($row   = mysqli_fetch_array($run))
                   {
                    $sr++;
                     echo "

                      <tr>

                      <td>$sr</td>
                      <td>$user[0]</td>
                      <td>$row[2]</td>
                      <td>$row[3]</td>
                      <td>$row[6]</td>
                      <td>$row[5]</td>
                      <td>$row[7]</td>
                      <td>$row[8]</td>

                      </tr>
                       ";
   
                    }
                    $username = $_SESSION['user'];
                        $query = "select SUM(total_amount) from order_info where username = '$username' ";
                        $run   = mysqli_query($con,$query); 
                      
                        while ($row = mysqli_fetch_array($run))
                        {
                            
                           echo 
                           "
                           <td  align='center' colspan='7'><strong> Your Total Amount is:</strong></td>
                           <td><strong>Rs.".$row['SUM(total_amount)']."</strong></td>
  
                           ";
                        }
                ?>
    <!-- End Here -->


    </tbody>
        
</table>
        <!-- Print Button -->
        <div class="text-center" style="float:right; margin-right:10px; margin-top:10px;">
                <button onclick="window.print();" class="btn btn-danger" id="print-btn">Print</button> 
                </div>
        <!-- Print Button-->
         
</body>
</html>