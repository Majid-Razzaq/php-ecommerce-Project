<?php include("connection.php"); ?>
   <!-- Include Dashboard -->
   <?php include("user_dashboard.php");  ?>
   <!-- Include Dashboard -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chnage Password</title>
</head>
<body>

<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Change password</span>
				</h2>
		    </div>

            <div class="grid-form">
 		<div class="grid-form1">
 		<h3 id="forms-example" class="">Change Your Password!</h3>
         <hr>
 		<form method="post">
  <div class="form-group">
     <h4 style="padding-left:20px;">Current Password</h4>
    <input  type="password" name="cr_pass" class="form-control cat"  required="">
  </div>

  <div class="form-group">
     <h4 style="padding-left:20px;">New Password</h4>
    <input  type="password" name="npass" class="form-control cat"  required="">
  </div>

  <div class="form-group">
     <h4 style="padding-left:20px;">Confirm Password</h4>
    <input  type="password" name="c_pass" class="form-control cat"  required="">
  </div>

<button style="border-radius:10%; margin-left:20px;" name="btn" type="submit" class="btn  btn-dark">Save Changes</button>

<!-- PHP Start -->
<?php

if(isset($_POST['btn']))
{
    $username = $_SESSION['user'];
    $query = "select * from user_info where username = '$username' ";
    $run = mysqli_query($con,$query);
    $row = mysqli_fetch_array($run);
    $user_pass =  $row[3];
    $user_id = $row[0];

    $current_Pasword = $_POST['cr_pass'];
    $new_Pasword = $_POST['npass'];
    $confirm_Pasword = $_POST['c_pass'];
     
    if($current_Pasword == $user_pass)
    {
        if($new_Pasword == $confirm_Pasword)
        {
            $update_query = "update user_info set password = '$new_Pasword' where id = '$user_id' ";
            $run_query   = mysqli_query($con,$update_query);

            if($run_query)
            {
             echo"
             <div class='alert alert-success' role='alert'>
             <b>Successfull!</b>Password has bees Changed Successfully...
              </div>
              ";
            } 
            else
            {
             echo"
             <div class='alert alert-danger' role='alert'>
             <b>Error!</b>Password Changing Failed!
           </div>
           ";
            }
        }
        else
        {
         echo"
         <div class='alert alert-danger' role='alert'>
         <b>Error!</b>New Password and Confirm Password must be identical...
       </div>
       ";
        }

    }
    else
    {
     echo"
     <div class='alert alert-danger' role='alert'>
     <b>Error!</b>Password is Invalid..
   </div>
   ";
    }
}
?>
<!-- End of PHP code -->

</div>

</div>
</div>

    
</body>
</html>