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
		<h3>Thank you</h3>
		<h4><a href="index.php">Home<label></label></h4>
		<div class="clearfix"> </div>
	</div>
</div>



<div class="container">
	<div class="advantages">
			<div class="col-md-12 advantages-left ">
				<h3>Thank You For Using Our Service,Dear <?php echo $_SESSION['user'] ?> </h3>
				<div class="advn-one " align="left">
							<div class="ad-right">
								<h4><a href="#">Your Order Successfully Submitted, Order Will Be Delivered Soon.</a></h4>
							</div>

                            <form action="index.php">
                            <button style="margin-top:20px; margin-left:390px;"  class="btn btn-danger my-cart-btn my-cart-b" >Let's More Shopping</button>
                            </form>

							<div class="clearfix"></div>
						</div>
					
					</div>
			</div>
		</div>
		</div>

        <div style="margin-top:150px;"> </div>



        	
<!--footer-->
<?php  include("footer.php") ?>
<!-- //footer-->
  
 
</body>
</html>