<?php
include("connection.php");
include("Inc_admin_dash.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

 <!--style1 css--->
<link rel="stylesheet" href="dash_css/style1.css">
<!-- Font Awesome-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--End Here--->

</head>
<body>

    
       <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>


            <div class="content-top">
            <div class="grid-form1 col-md-10 col-md-offset-1 " >
			
			<div class="col-md-12  advantages-left ">

				<div class="advn-one">
						
             <!-- About Text -->
            <div class="spec">
				<h3 style="padding-top:50px;">Feedbacks</h3>
						<b style="width:150px;"></b>
						<span><i></i></span>
						<b class="line" style="width:150px;"></b>
					</div>
			</div>
      <!-- End Here-->

                
                                
             <!--PHP Code -->
              <?php
 
               $fetch     = "select * from feedback";
               $run_fetch = mysqli_query($con,$fetch);

               while($row = mysqli_fetch_array($run_fetch))
               {
                echo "
                <div class='ad-mian' style='margin-right:100px;'>
                <div class='ad-left'>
                
                </div>
                <div class='ad-left' style='margin-top:-35px;'>
                    <p style='color:black; background-color:white; font-size:35px;'>.</p>
                </div>
             	<div class='ad-right'>
				<h4><a href='#'>$row[1]</a><a href='#' style='font-size:12px; color:brown; padding-left:10px;'>$row[5]</a></h4><p style='font-size:13px;'>$row[2]</p>
				<p>$row[4]</p>
				 </div>
				<div class='clearfix'></div>
				</div>
                <hr>

                ";
                  }
                  ?>

                                

							

	</div>
	<!-- // Terms of use -->

			
    </div>
    </div>
			
	
                   
</body>
</html>