<?php
    include("connection.php");
	session_start();
	if(isset($_SESSION["user"]))
	{
		header("location:index.php");
	}
	else
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>user Registration</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--End Here--->
	<style>
		.form-floating
		{
			margin-top:20px;
		}
	</style>
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
     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.php">Login</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--register-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register as a Customer!</h3>
					<form action="#" method="post" enctype="multipart/form-data">
				

				  	  <div class="form-floating mb-3">
                      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required="">
                      </div>

					  <div class="form-floating mb-3">
                      <input type="Email" name="email" class="form-control" id="floatingInput" placeholder="Email" required="">
                      </div>

                      <div class="form-floating">
                      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required="">
                      </div>


                      <div class="form-floating">
                      <input type="text" name="cont" class="form-control" id="floatingPassword" placeholder="Contact" required="">
                      </div>
					
					  <div class="form-floating">
                      <input type="text" name="loc" class="form-control" id="floatingPassword" placeholder="Address" required="">
                      </div>

					  <div class="form-floating">
                      <input type="file" name="txtfile" class="form-control" id="floatingPassword" placeholder="Address" required="">
                      </div>

						<input type="submit" name="btn" value="Submit" style="margin-top:20px;">
					</form>
				</div>
				
			</div>	
		</div><!--PHP Code Start-->
		<?php
		if(isset($_POST["btn"]))
		{
			
			$name     = $_POST['username'];
			$email    = $_POST["email"];
			$password = $_POST["password"];
			$number     = $_POST['cont'];
			$address      = $_POST['loc'];
			$filename = $_FILES["txtfile"]["name"];
			$oldLocation = $_FILES["txtfile"]["tmp_name"];
			$newlocation = "images/".$filename;
			move_uploaded_file($oldLocation,$newlocation);


			$query = mysqli_query($con,"insert into user_info (username,email,password,contact,address,img)
			values ('$name','$email','$password','$number','$address','$filename')");
			
			if($query > 0)
			{
				echo"
				<script>window.location.href='user_login.php'</script>
				";
			}
			else
			{
				   echo"
				   <div class='alert alert-danger' role='alert'>
				   <b>Error!</b>Registration failed..
				 </div>			
				 	  ";
			
	
			
				 
		   }
			
		 }
		
		?>
		<!--End Here-->

	
<!--footer-->
<?php  include("footer.php") ?>
<!-- //footer-->
  
 
</body>
</html>
<?php } ?>