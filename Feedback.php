<?php
     include("connection.php");
	 session_start();
	 if(isset($_SESSION["user"]))
	 {
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
</head>
<body>

<link href="dash_css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="dash_css/style.css" rel='stylesheet' type='text/css' />
<link href="dash_css/font-awesome.css" rel="stylesheet">
<script src="dash_js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="dash_js/jquery.metisMenu.js"></script>
<script src="dash_js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="dash_css/custom.css" rel="stylesheet">
<script src="dash_js/custom.js"></script>
<script src="dash_js/screenfull.js"></script>
<script src="dash_js/bootstrap.min.js"> </script>
	<!--Font Awesome and online Links --->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--style1 css--->
<link rel="stylesheet" href="dash_css/style1.css">
<!--End Here--->
<!-- BOotstrap Link -->


<body>


      
            <!-- Main Code -->
            <h3 style="font-size:30px; padding-top:30px;" class="text-center">Get In Touch With Us</h3>
            <div class="login">
            <div class="spec ">
				<h4 style="font-size:30px;">Feedback</h4>
					<div class="ser-t">
						<b></b>
						<b class="line"></b>
					</div>
			</div>
		<div class="main-agileits col-md-6 col-md-offset-3 " style="margin-top:-105px;">
          <div class="form-w3agile form1">	
                 <h3 style="font-size:18px; padding-top:20px;">Feel free to drop us a line and we'll get back to you in 24 hours min!</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<div class="clearfix"></div>
						</div>
						
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text" value="Contact" name="num" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact';}">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fas fa-comment-alt" aria-hidden="true" style="height:100px;"></i>
							<input  type="text" value="Message"  name="txt" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" >
							<div class="clearfix"></div>
						</div>


						<input type="submit" name="btnsave" value="Send">

                        <!-- PHP Start -->
<?php
		if(isset($_POST['btnsave']))
		 {
			 $name  = $_POST['username'];
			 $mail = $_POST['email'];
			 $contact  = $_POST['num'];
			 $msg  = $_POST['txt'];
			 
			 $query = mysqli_query($con,"insert into feedback (username,email,contact,message)
			 values
			 ('$name','$mail','$contact','$msg')");

			 if($query > 0)
				 {
			
                echo"

                <div style='margin-top:5px;' class='alert alert-success' role='alert'>
                <b>Thank You!</b> for your Feedback..
                </div>
                ";
				 }       
			
                else
                 {
				echo"

                <div style='margin-top:5px;' class='alert alert-danger' role='alert'>
                <b>Error!</b>Insert valid Email Address or Username..
                </div>
                ";
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
<?php 
}
else
{
	header("location:user_login.php");
}
?>