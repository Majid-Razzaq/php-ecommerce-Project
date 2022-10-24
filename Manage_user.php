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
    <title>User Profile</title>
    
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
				<a href="user_dash.php">Dashboard</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->

 <!--gallery-->
 <div class=" profile">

<div class="profile-bottom">
    <h3><i class="fa fa-user"></i>Profile</h3>
    <div class="profile-bottom-top">
    <div class="col-md-4 profile-bottom-img">
    <img src="images/<?php echo $_SESSION['img']?>" height="130px;" width="130px;" style="margin-left:20px;margin-top:-10px;">
    
    <div class="profile-fo" style="margin-top:15px; margin-left:8px;">

    <!-- PHP Start -->
    <?php
    if($_SESSION['user'] == "Majid")
    {
        $fetch     = "select * from user_info where id = 1001";
        $row = mysqli_query($con,$fetch);
        while($data = mysqli_fetch_assoc($row))
        {
            echo "
            <a href='Edit_user.php?id=$data[id]'><i class='fa fa-user'></i>Edit Profile</a>
            </div>
            
            ";
        }
    }
    else if($_SESSION['user'] == "umair")
    {
        $fetch     = "select * from user_info where id = 2";
        $row = mysqli_query($con,$fetch);
        while($data = mysqli_fetch_assoc($row))
        {
            echo "
            <a href='Edit_user.php?id=$data[id]'><i class='fa fa-user'></i>Edit Profile</a>
            </div>
            
            ";
        }

    }
    else if($_SESSION['user'] == "Wajid")
    {
        $fetch     = "select * from user_info where id = 41";
        $row = mysqli_query($con,$fetch);
        while($data = mysqli_fetch_assoc($row))
        {
            echo "
            <a href='Edit_user.php?id=$data[id]'><i class='fa fa-user'></i>Edit Profile</a>
            </div>
            
            ";
        }

    }
    else if($_SESSION['user'] == "Sarfaraz")
    {
        $fetch     = "select * from user_info where id = 42";
        $row = mysqli_query($con,$fetch);
        while($data = mysqli_fetch_assoc($row))
        {
            echo "
            <a href='Edit_user.php?id=$data[id]'><i class='fa fa-user'></i>Edit Profile</a>
            </div>
            
            ";
        }

    }


    ?>
<!-- End Here --> 
    	
    
</div>
    <div class="col-md-8 profile-text">
        <h6 style="text-decoration:underline;">User Profile</h6>
        <table>
        <tr><td>Name</td>  
        <td>:</td>  
        <td><?php echo $_SESSION['user'];?></td></tr>
        
        <tr>
        <td>Email</td>
        <td> :</td>
        <td><a href=""><?php echo $_SESSION['gmail'];?></a></td>
        </tr>
        <td>Password</td>
        <td>:</td>
        <td><?php echo $_SESSION['pas']?></td>
        </tr>

        <tr>

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