<?php
include("connection.php");
session_start();

    if(!isset($_SESSION ["user"]))
    {
        header("location:user_login.php");
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
    <title>Admin Dashboard</title>
    
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
</head>
<body>

<div id="wrapper">
    
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class=" navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1><a class="navbar-brand"><?php echo ucfirst($_SESSION['user'])?><br><h6><?php echo $_SESSION['gmail'];?></h6><img class="picc" src="images/<?php echo $_SESSION['img']?>"width="50px" height="50px"></a></h1> 
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
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret"><?php echo ucfirst($_SESSION['user'])?><i class="caret"></i></span><img class="pic" src="images/<?php echo $_SESSION['img']?>"width="30px" height="30px"></a>
		              <ul class="dropdown-menu " role="menu">
		              <li><a href="Manage_user.php"><i class="fa fa-user"></i>Edit Profile</a></li>
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
                        <a href="user_dash.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
                    <li>
                        <a href="user_info.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">User Info</span></a>
                        
                    </li>                  
                      <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Order Info</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="maps.html" ><i class="fa fa-picture-o nav_icon"></i>View Brands</a></li>
					   </ul>
                    </li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Invoice Info</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="graphs.html" > <i class="fa fa-arrow-right nav_icon"></i>Add New</a></li>
                            <li><a href="maps.html" ><i class="fa fa-picture-o nav_icon"></i>View Products</a></li>
					   </ul>
                    </li>
                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Shopping info</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                            <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                       </ul>
                    </li>
                     <li>
                        <a href="Manage_user.php" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">Manage Profile</span> </a>
                    </li>
                   
                    <li>
                        <a href="password-reset.php" class=" hvr-bounce-to-right"><i class="fa fa-lock nav_icon"></i> <span class="nav-label">Change Password</span> </a>
                    </li>
                   
                    
                    <li>
                        <a href="logout.php" class=" hvr-bounce-to-right"><i class="fa fa-sign-out nav_icon"></i> <span class="nav-label">Logout</span> </a>
                    </li>
                    
                </ul>
            </div>
			</div>
        </nav>
        
        </div>
</body>
</html>
<?php } ?>