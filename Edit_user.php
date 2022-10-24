<?php
    include("connection.php");
    $edit_id = $_GET["id"];
    $edit_query = "select * from user_info where id='$edit_id'";

    $run_edit = mysqli_query($con,$edit_query);

    $row = mysqli_fetch_array($run_edit);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

</head>

<body>
    
   <?php include("user_dashboard.php") ?>
  
    <div id="page-wrapper" class="gray-bg dashbard-1">
   <div class="content-main">

      <!--banner-->	
        <div class="banner">
       
            <h2>
            <a href="Manage_user.php">Profile</a>
            <i class="fa fa-angle-right"></i>
            <span>Edit Profile</span>
            </h2>
        </div>

        <div class="login">
		<div class="main-agileits col-md-8 col-md-offset-2" style="margin-top:-105px;">
				<div class="form-w3agile form1">
					<h3 style="font-size:30px; padding-top:10px;">Edit User Profile!</h3>
					<form action="#" method="post" enctype="multipart/form-data">
						
                        <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  value="<?php echo $row[1]  ?>" name="user_name" >
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  value="<?php echo $row[2]  ?>" name="user_email" >
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password"  value="<?php echo $row[3]  ?>" name="pass" >
							<div class="clearfix"></div>
						</div>
				
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  value="<?php echo $row[4]  ?>" name="con">
							<div class="clearfix"></div>
						</div>

                        <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  value="<?php echo $row[5]  ?>" name="loc">
							<div class="clearfix"></div>
						</div>

                        <div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input style="margin-top:10px;" value="<?php echo $row[6]  ?>" type="file" name="txtfile" >
							<div class="clearfix"></div>
						</div>

						<input type="submit" name="btnsave" value="Save Changes">


                        <!-- PHP Start -->
                 <?php
                   if(isset($_POST['btnsave']))
                    {
                      $user_id     = $edit_id;
                      $user_name   = $_POST["user_name"];
                      $user_email  = $_POST["user_email"];
                      $pas         = $_POST["pass"];
                      $num         = $_POST["con"];
                      $add         = $_POST["loc"]; 

                      $filename = $_FILES["txtfile"]["name"];
                      $oldlocation = $_FILES["txtfile"]["tmp_name"];
                      $newlocation = "images/".$filename;
                      move_uploaded_file($oldlocation,$newlocation);

                        $update = "update user_info set username='$user_name', email='$user_email' , password='$pas' , contact='$num', address = '$add' , img='$filename'  
                         where id='$user_id'";
                        $run_insert = mysqli_query($con,$update);

                         if($run_insert>0)
                         {
                            echo"
                            <div style='margin-top:5px;' class='alert alert-success' role='alert'>
                            <b>Successfull!</b>User Detail has been Updated..
                            </div>
                             ";
                         }
                         else
                         {
                        echo "<script>alert('Data Not Save')</script>";
                         }
                         
                        }
    ?>
  <!-- End Here -->
					</form>
				</div>
				
			</div>
		</div>
          <!-- End Here -->

       
</body>
</html>