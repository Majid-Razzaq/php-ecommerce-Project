<?php
    include("connection.php");
	session_start();
	if(isset($_SESSION["user"]))
	{
		header("location:user_dash.php");
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
    <title></title>
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
		<h3 >Login User</h3>
		<h4><a href="index.php">Home</a><label>/</label>Login</h4>
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
							<input  type="password" value="Password" name="txtpass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" name="btn" value="Login">
					
		
<!--PHP Code Start -->		
		<?php
        if(isset($_POST["btn"]))
        {
            
            $email = $_POST["txtemail"];
            $password = $_POST["txtpass"];
			$query = mysqli_query($con,"select * from user_info where email='$email' && password='$password'");
            
			$check = mysqli_num_rows($query);

			if($check>0)
             {
				$a = mysqli_fetch_array($query);
				$_SESSION["userid"]    = $a[0];
				$_SESSION["user"]      = $a[1];
				$_SESSION["gmail"]     = $a[2];
				$_SESSION["pas"]       = $a[3];
				$_SESSION["contact"]   = $a[4];
				$_SESSION["address"]   = $a[5];
				$_SESSION["img"]       = $a[6];
                header("location:user_dash.php");
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
		 	<div class="forg">
			<span class="forg-left">New member?</span><a href="user_reg.php" class="forg-left"> Register here.</a>
		
			<div class="clearfix"></div>
		 	
	   	</form>
			</div>
			</div>
			</div>
		</div>

<!--End Here -->



<!-- //footer-->
<?php include("footer.php") ?>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>


</body>
</html>
<?php  } ?>