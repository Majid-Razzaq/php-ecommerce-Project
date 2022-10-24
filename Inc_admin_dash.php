<?php session_start();

    if(!isset($_SESSION ["name"]))
    {
        header("location:Admin_Login.php");
    }
    else
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
	<!----->
<!--style1 css--->
<link rel="stylesheet" href="dash_css/style1.css">
<!--End Here--->
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
</head>
<body>



<div id="wrapper" >
    
        <nav  class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header" >
                <button type="button" class=" navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1><a class="navbar-brand"><?php echo ucfirst( $_SESSION['role'])?><br><h6><?php echo ucfirst($_SESSION['email']);?></h6><img class="picc" src="images/<?php echo $_SESSION['pic']?>"width="50px" height="50px"></a></h1> 
            
            </div>

             
          <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class="navbar-left-right">
            <input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
           <button><i class="fa fa-search"></i></button> 
           </form>
           
           </div>
           	
           <div class="drop-men">
            <ul style="padding-top:20px" class="nav_1">
            <li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo $_SESSION['name']?><i class="caret"></i></span><img class="pic" src="images/<?php echo $_SESSION['pic']?>"width="30px" height="30px"></a>
		              <ul class="dropdown-menu " role="menu">
                      <li><a href="Manage_admin.php"><i class="fa fa-user"></i>Edit Profile</a></li>
		              <li><a href="Logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
		                </ul>
		            </li>

            </ul>

        </div>

			<div class="clearfix">
           

        </div>
	  
		    <div class="navbar-default sidebar dash" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="Admin_dash.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Category</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_cat.php" > <i class="fa fa-arrow-right nav_icon"></i>Add New</a></li>
                            <li><a href="View_cat.php" ><i class="fa fa-picture-o nav_icon"></i>View Category</a></li>
					   </ul>
                    </li>                  
                      <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Brands</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_brand.php" > <i class="fa fa-arrow-right nav_icon"></i>Add New</a></li>
                            <li><a href="view_brand.php" ><i class="fa fa-picture-o nav_icon"></i>View Brands</a></li>
					   </ul>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Products</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_product.php" > <i class="fa fa-arrow-right nav_icon"></i>Add New</a></li>
                            
					   </ul>
                    </li>

                     <li>
                        <a href="Stock_D.php" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Stock Details</span></a>
                    </li>

                     <li>
                        <a href="total_customers.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Total Customers</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Order Details</span></a>
                    </li>

                    
                    <li>
                        <a href="Manage_admin.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Manage Profile</span> </a>
                    </li>

                    <li>
                    <a href="AddFaq.php" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i> <span class="nav-label">FAQs</span></a>
                    </li>

                    <li>
                        <a href="View_Feedback.php" class=" hvr-bounce-to-right"><i class=" fas fa-comments-alt nav_icon"></i> <span class="nav-label">View Feedbacks</span> </a>
                    </li>

                </ul>
            </div>
			</div>
        </nav>
        </div>



 


    
</body>
</html>
<?php
    }
?>