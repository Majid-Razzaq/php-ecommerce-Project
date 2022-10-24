<?php 
    session_start();
	
	if(isset($_SESSION["user"]))
    {					
	
?>
<a href="#"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 style="padding-left:10px;"><a href="index.php"><b>O<br>N<br>L<br>I<br>N<br> E</b>Shooping<span >The Shooping Cart</span></a></h1>
			</div>
			<div class="head-t">	
			<ul class="card">
					
				<li><a href="Admin_Login.php" ><i class="fa fa-user" aria-hidden="true"></i>Admin</a></li>
					<li><a href="user_login.php" ><i class="fa fa-user" aria-hidden="true"></i>User</a></li>
					<li><a href="user_reg.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="Faqs.php" ><i class="fa fa-question-circle" aria-hidden="true"></i>FAQs</a></li>
					<li><a href="shipping.html" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
				
				</ul>	
			</div>	
			
				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							<li><a href="about.php" class="hyper"> <span>About</span></a></li>
							
						<!-- Category List Start -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Categories<b class="caret"></b></span></a>
								<ul class="dropdown-menu " style="width:220px;">
									<div class="row">
										<div class="col-sm-8">
											<ul class="multi-column-dropdown">
			                                
												 <!--PHP Code -->
												 <?php
											  
											      $fetch     = "select * from category";
										     	  $run_fetch = mysqli_query($con,$fetch);
											  
											      while($row = mysqli_fetch_array($run_fetch))
										     	  {
												  echo "
												  <li style='padding-left:20px;'><a href='#'><i class='fa fa-angle-right' aria-hidden='true'></i>$row[1]</a></li>
												  ";
												}
												 ?>
												  <!-- End Here -->
											  
											</ul>
										
										</div>
										
									</div>	
								</ul>
							</li>
						<!-- Category List End Here -->
							
						<!-- Brand Category Start -->
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Brands<b class="caret"></b></span></a>
								<ul class="dropdown-menu " style="width:220px;">
									<div class="row">
										<div class="col-sm-8">
											<ul class="multi-column-dropdown">
			                                
												 <!--PHP Code -->
												 <?php
											  
											      $fetch     = "select * from brand";
										     	  $run_fetch = mysqli_query($con,$fetch);
											  
											      while($row = mysqli_fetch_array($run_fetch))
										     	  {
												  echo "
												  <li style='padding-left:20px;'><a href='#'><i class='fa fa-angle-right' aria-hidden='true'></i>$row[1]</a></li>
												  ";
												}
												 ?>
												  <!-- End Here -->
											  
											</ul>
										
										</div>
										
									</div>	
								</ul>
							</li>
							<!-- Brand Category End here -->
							
							<li><a href="contact.php" class="hyper"><span>Contact</span></a></li>
							<li><a href="Feedback.php" class="hyper"><span>Feedbacks</span></a></li>
							
							<li style="margin-left:100px " role="presentation" class="dropdown">
    
							 <li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span><?php echo $_SESSION['gmail'];?><b class="caret"></b></span></a>
								<ul class="dropdown-menu " style="width:150px;">
									<div class="row">
										<div class="col-sm-8">
											<ul class="multi-column-dropdown">	
											<li style='padding-left:5px;'><a href='user_dash.php'><i class='fa fa-desktop' style="color:green;"></i>Dashboard</a></li>
											<li style='padding-left:10px;'><a href='Manage_user.php'><i class='fa fa-user' style="color:green; font-size:17px;"></i>Profile</a></li>
											<li style='padding-left:10px;'><a href='logout.php'><i class='fa fa-sign-out' style="color:brown; font-size:17px;"></i>Logout</a></li>
											</ul>
										
										</div>
										
									</div>	
								</ul>
							</li>

							
							<li><img style="margin-top:-35px; border-radius:50%;" src="images/<?php echo $_SESSION['img']?>"width="25px" height="25px"></li>

                        </div>                                              
						</ul>
					</div>
					</nav>

					<div class="">
				    <a href="cart.php"><span style="margin-top:10px;" class="fa fa-shopping-cart my-cart-icon"></span><span class="badge badge-notify my-cart-badge"><?php if(isset($_SESSION['cart'])){ $count = count($_SESSION['cart']); echo $count;} else {echo 0;} ?></span></a>
					</div>
					<div class="clearfix"></div>
					
				</div>

				</div>			
</div>
<?php } 
else
{
    header("location:user_login.php");
}?>