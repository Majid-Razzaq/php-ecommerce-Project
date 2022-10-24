<?php
    include("connection.php");
	session_start();

     if(isset($_SESSION["name"]))
     {
         header("location:Admin_dash.php");
     }
     else
     {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    	
<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.html"><b>T<br>H<br>E</b>Big Store<span>The Best Supermarket</span></a></h1>
			</div>
			<div class="head-t">
				
			</div>
							
          </div>
  <!---->
 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Login Admin</h3>
		<h4><a href="#">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Welcome, Please Login</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="txtemail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="txtpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" name="btn" value="Login">

		<!--PHP Code Start -->		
		<?php
        if(isset($_POST["btn"]))
        {
            $email = $_POST["txtemail"];
            $password = $_POST["txtpass"];
			$query = mysqli_query($con,"select * from admin_info where email='$email' && password='$password'");
		
			$check = mysqli_num_rows($query);
			$a = mysqli_fetch_array($query);

             if($check>0)
             {
				$_SESSION["name"] = $a[1];
				$_SESSION["email"] = $a[2];
				$_SESSION["pass"] = $a[3];
				$_SESSION["role"] = $a[4];
				$_SESSION["pic"]   = $a[5];

                 header("location:Admin_dash.php");
             }
             else
             {
 	             echo"
				  <div class='alert alert-danger' role='alert'>
				  <b>Error!</b>Login failed please recheck the email or password and try again..
				</div>
				  ";
             }
        }
         ?>
       <!--End Here-->


	   </form>
		</div>
		</div>
		</div>



<!--footer-->
<?php
         include("footer.php");
?>
<!-- End Here-->

</body>
</html>
<?php  } ?>