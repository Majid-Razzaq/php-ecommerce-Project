<?php
    include("connection.php");
    include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/scroll.css">
<!-- Font Awesome-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

<!-- FAQs Start from here -->



    <!--banner-->
    <div class="banner-top">
	<div class="container">
		<h3 >FAQs</h3>
		<h4><a href="index.php">Home</a><label>/</label>Faqs</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- faqs -->
	<div class="faq-w3 main-grid-border">
		<div class="container">
			
			<div class="spec ">
			<h3>Faqs</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class="panel-group" >
				
                <!-- First Panel -->
                 <!--PHP Code -->
    <?php

$fetch     = "select * from faqs";
$run_fetch = mysqli_query($con,$fetch);

while($row = mysqli_fetch_array($run_fetch))
{
    echo "
    <div class='panel panel-default'>
    <div class='panel-heading'>
         <h4 class='panel-title'  >
             <span>$row[0].</span>$row[1]
         </h4>
    </div>
        <div class='panel-body'>
            <p>$row[2]</p>
        </div>

</div>
   ";
}
   ?>
                <!-- PHP End Here -->
                <!-- Panel End Here-->





                			
				</div>
		</div>	
	</div>





<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>If anybody want to save his or her most precious time, he or she should choose the online shopping without thinking any other option</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="kitchen.html">Kitchen</a></li>
				<li><a href="care.html">Personal Care</a></li>
				<li><a href="hold.html">Household</a></li>						 
				<li><a href="codes.html">Short Codes</a></li> 
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.html">Shipping</a></li>
				<li><a href="terms.html">Terms & Conditions</a></li>
				<li><a href="faqs.html">Faqs</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="offer.html">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				<li><a href="wishlist.html">Wishlist</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 style="padding-left:10px;"><a href="index.html"><b>O<br>N<br>L<br>I<br>N<br>E</b>Shooping<span>Online Shopping Cart</span></a></h2>
								<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Progressive Center, suite # 202-203, 30-A Shahrah-e-Faisal, Karachi, 75400</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+3222 682 821 , +3132 905 037</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:abdulmajid22770@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>abdulmajid22770@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		</div>
</div>
<!-- //footer-->
<button  onclick="" id="myBtn" ><a href="mailto:abdulmajid22770@gmail.com"><span style="color:white;" class="fas fa-envelope"></span></a></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

</script>
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>



</body>
</html>