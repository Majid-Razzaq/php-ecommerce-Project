<?php
    include("connection.php");
	include("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Shopping cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


 <!--banner-->
 <div class="banner-top">
	<div class="container">
		<h3 >Contact</h3>
		<h4><a href="index.php">Home</a><label>/</label>Contact</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contact</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				<img src="images/contact.png" class="img-responsive" style="">
				<iframe src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Aptech SFC&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0"></iframe>
			
                </div>
			<div class="col-md-7 contact-left">
				<h4>Let us know how we can help</h4>
				<p> We're only a quick dial away. Give us a call and we'll do our best to answer any question that you may have.<br>We're here to ensure that you have the best shopping experience possible. Please contact us if we can help you in any way - simply call or fill out the following contact form and we'll get back with you as soon as possible.</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i> APTECH SFC,Karachi.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:abdulmajid22770@gmail.com">abdulmajid22770@gmail.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+932 2268 2821</li>
				</ul>
				<div id="container">

						<div class="resp-tabs-container hor_1">
							<div>
								<form action="#" method="post" style="margin-top:50px;">
									<input type="text" value="Username" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" required="">
									<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							       <input  type="text" value="Message..."  name="msg" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" style=" padding-bottom:120px; height:180px; width:450px;">
									<input name="btn" type="submit" value="Submit" >
								</form>
								<!-- PHP CODE Start -->
								<?php
                                 if(isset($_POST['btn']))
								  {
									$username = $_SESSION['user'];
									$query = "select * from user_info where username = '$username' ";
									$run = mysqli_query($con,$query);
									$row = mysqli_fetch_array($run);
									$username =  $row[1];
									$mail     =  $row[2];

									$name  = $_POST['Name'];
									$email = $_POST['Email'];
									$message = $_POST['msg'];
                                      
									if($name == $username)
									{
                                       if($email == $mail)
									   {
										   $query = "insert into contact (username,email,message)
										   values('$name','$email','$message')";
										   $run = mysqli_query($con,$query);

										   if($run)
										   {
											echo"
											<div class='alert alert-success' role='alert'>
											<b>Successfull!</b>Your Message has been sent ..
											</div>
											";
										   }
										   else
										   {
											echo"
											<div class='alert alert-danger' role='alert'>
											<b>Error!</b>Message sent Failed! ..
											</div>
											";
										   }
									   }
									   else
									   {
										echo"
										<div class='alert alert-danger' role='alert'>
										<b>Error!</b>Email is Invalid ..
										</div>
										";   
									   }
									}
									else
									{
									 echo"
									 <div class='alert alert-danger' role='alert'>
									 <b>Error!</b>Username is Invalid ..
								     </div>
								     ";
									}

								
								 
								  }
								?>
								<!-- End Here -->
                                 
								</div>
							<div>
							
                        </div>
						</div>
					</div>
				</div>
				
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<!-- Footer Include -->
      <?php
	     include("footer.php"); 
	  ?>
<!-- End Here -->   


  
</body>
</html>
