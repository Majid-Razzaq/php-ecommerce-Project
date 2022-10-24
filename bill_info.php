<?php
    include("connection.php");
	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bill Info</title>
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
		<h3>Bill Info</h3>
		<h4><a href="cart.php">Cart</a><label>/</label>Bill</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--register-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Customer Information</h3>
					<form action="#" method="post" enctype="multipart/form-data">
				

				  	  <div class="form-floating mb-3">
                      <input type="text" name="user" class="form-control" id="floatingInput" placeholder="Username" required="">
                      </div>

					  <div class="form-floating mb-3">
                      <input type="Email" name="email" class="form-control" id="floatingInput" placeholder="Email" required="">
                      </div>
                      <div class="form-floating">
                      <input type="text" name="cont" class="form-control" id="floatingPassword" placeholder="Contact" required="">
                      </div>

                      <div class="form-floating mb-3">
                      <input type="text" name="p_add" class="form-control" id="floatingInput" placeholder="Person Address" required="">
                      </div>

                      <div class="form-floating mb-3">
                      <input type="text" name="s_add" class="form-control" id="floatingInput" placeholder="Shipping Address" required="">
                      </div>
                      
					
					  <div class="form-floating">
                      <input type="text" name="debit" class="form-control" id="floatingPassword" placeholder="Debit Credit" required="">
                      </div>

						<input type="submit" name="btn" value="Submit" style="margin-top:20px;">
				
					</form>

						<!--PHP Code Start-->
		<?php
		
		if(isset($_POST['btn']))
		{
			if(isset($_SESSION['user']))
			{
                    $username = $_SESSION['user'];
                    $query = "select * from user_info where username = '$username' ";
					$run   = mysqli_query($con,$query);
					$row   = mysqli_fetch_array($run);
					$customer = $row[1];
					$gmail = $row[2];

					$name       = $_POST['user'];
					$email      = $_POST["email"];
					$number     = $_POST['cont'];
					$p_address  = $_POST['p_add'];
					$s_address  = $_POST['s_add'];
					$card       = $_POST['debit'];

					if($name == $customer)
					{
						if($email == $gmail)
					   {
						$query = mysqli_query($con,"insert into invoice (username,email,number,p_add,s_add,debit_card)
						values ('$name','$email','$number','$p_address','$s_address','$card')");
						
						if($query > 0)
						{
							echo"
							<script>window.location.href='Thankyou.php'</script>
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
					else
					{
						echo"
						<div class='alert alert-danger' role='alert'>
						<b>Error!</b>Invalid Email ID!
						</div>			
						";
					}

					}
					else
					{
					
					echo"
			        <div class='alert alert-danger' role='alert'>
			        <b>Error!</b>Invalid Username!
		            </div>			
				    ";
					}

			}
			else
			{
                 header("location:user_login.php");
			}
		}
		else
		{

		}
		?>
		<!-- End OF PHP Code -->
	


				</div>
				
			</div>	
		</div>
		
		
		
		
		
		
		
		
	   <!--	// if(isset($_POST['btn']))
		// {
		// 	$username  = $_SESSION['user'];
        //     $query = "select * from user_info where username = '$username'";
        //     $run   = mysqli_query($con,$query);
        //     $row   = mysqli_fetch_array($run);
        //     $userr  =  $row[1];

		// 	$name       = $_POST['user'];
		// 	$email      = $_POST["email"];
		// 	$number     = $_POST['cont'];
		// 	$p_address  = $_POST['p_add'];
		// 	$s_address  = $_POST['s_add'];
		// 	$card       = $_POST['debit'];

		// 	if($name == $userr)
		// 	{
				
		// 	$query = mysqli_query($con,"insert into invoice (username,email,number,p_add,s_add,debit_card)
		// 	values ('$name','$email','$number','$p_address','$s_address','$card')");
			
		// 	if($query > 0)
		// 	{
		// 		echo"
		// 		<script>window.location.href='#'</script>
		// 		";
		// 	}
		// 	else
		// 	{
		// 		   echo"
		// 		   <div class='alert alert-danger' role='alert'>
		// 		   <b>Error!</b>Registration failed..
		// 		 </div>			
		// 		 	  ";
				 
		//    }
		// }
		// else
		// {
		// 	echo"
		// 	<div class='alert alert-danger' role='alert'>
		// 	<b>Error!</b>Invalid Username!
		//   </div>			
		// 		";
		// }
			
		//  }
		
		// ?> -->
		<!--End Here-->

	
<!--footer-->
<?php  include("footer.php") ?>
<!-- //footer-->
  
 
</body>
</html>