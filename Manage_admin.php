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
    <title>Admin Profile</title>
    
<!-- Font Awesome -->
<link href="dash_css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--style1 css--->
<link rel="stylesheet" href="dash_css/style1.css">
<!--End Here--->
</head>
<body>


        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
            <!-- End Here -->

 <!--gallery-->
 <div class=" profile">

<div class="profile-bottom">
    <h3><i class="fa fa-user"></i>Profile</h3>
    <div class="profile-bottom-top">
    <div class="col-md-4 profile-bottom-img">
    <img src="images/<?php echo $_SESSION['pic']?>" height="130px;" width="130px;" style="margin-left:20px;margin-top:-10px;">
    
    <div class="profile-fo" style="margin-top:15px; margin-left:8px;">
<!-- PHP Start -->
    <?php
    $fetch     = "select * from admin_info ";
    $run_fetch = mysqli_query($con,$fetch);

    while($row = mysqli_fetch_array($run_fetch))
    {
        echo "
        <a href='Edit_admin.php?id=$row[0]'><i class='fa fa-user'></i>Edit Profile</a>
        </div>
        ";
    }
        
    ?>
<!-- End Here --> 
    	
</div>
    <div class="col-md-8 profile-text">
        <h6 style="text-decoration:underline;"><?php echo $_SESSION['role']?></h6>
        <table>
        <tr><td>Name</td>  
        <td>:</td>  
        <td><?php echo $_SESSION['name']?></td></tr>
        
        <tr>
        <td>Email</td>
        <td> :</td>
        <td><a href=""><?php echo $_SESSION['email'];?></a></td>
        </tr>
        <tr>
        <td>Role</td>
        <td> :</td>
        <td><?php echo $_SESSION['role']?></td>
        </tr>
        <tr>
        <td>Password</td>
        <td>:</td>
        <td><?php echo $_SESSION['pass']?></td>
        </tr>
        </table>
    </div>
    <div class="clearfix"></div>
    </div>
    <div class="profile-bottom-bottom">

    
</div>
</div>
<!--//gallery End Here-->

                   
</body>
</html>