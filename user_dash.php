<?php
include("connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

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
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
        <h3 class="text-center">Welcome to Dashboard, Dear User <?php echo ucfirst($_SESSION['user'])?>!</h3>
</body>
</html>